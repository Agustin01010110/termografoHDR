<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;

class VehiclesController extends Controller
{
    //

    public function fetch()
    {
      $vehicles = \App\Vehicle::all();

      return view('Vehicles.index')->with(['vehicles'=>$vehicles]);
    }

    public function form()
    {
      $vehicles = \App\Vehicle::all();

      return view('Vehicles.add')->with([
        'vehicles'=>$vehicles,
      ]);
    }

    public function store(Request $request)
    {
      $nVehicle = new \App\Vehicle;
      $nVehicle->name = $request->name;
      $nVehicle->domain = $request->domain;
      $nVehicle->equipment = $request->equipment;
      if($nVehicle->save())
        return view('Vehicles.add')->with('vehiculo guardado');
      else
        return view('Vehicles.add')->with('vehiculo NO guardado');
    }

    public function change()
    {
      $vehicles = \App\Vehicle::all();

      return view('Vehicles.edit')->with(['vehicles'=>$vehicles]);
    }


    public function edit(Request $request)
    {
      $vehicles = \App\Vehicle::all();
      $vehicle = \App\Vehicle::where('id', $request->vehicle_id)->first();
      $vehicle->name = $request->name;
      $vehicle->domain = $request->domain;
      $vehicle->equipment = $request->equipment;//se genera otro elemento con otro id?
      if($vehicle->save())
        return view('Vehicles.edit')->with(['vehicles'=>$vehicles])->with('editado');
      else
        return view('Vehicles.edit')->with(['vehicles'=>$vehicles])->with('NO editado');
    }

    public function erase()
    {
      $vehicles = \App\Vehicle::all();

      return view('Vehicles.delete')->with(['vehicles'=>$vehicles]);
    }

    public function delete(Request $request)
    {

      $vehicle = \App\Vehicle::where('id', $request->vehicle_id)->first();
      if($vehicle->delete())
      {
        $vehicles = \App\Vehicle::all();
        return view('Vehicles.delete')->with(['vehicles'=>$vehicles])->with('borrado');

      }
      else
      {
        $vehicles = \App\Vehicle::all();
        return view('Vehicles.delete')->with(['vehicles'=>$vehicles])->with('NO borrado');
      }
    }


}
