<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;
use \App\Device;

class DeliveriesController extends Controller
{

    public function fetch()
    {
    	$deliveries = \App\Delivery::all();

    	return view('Deliveries.index')->with(['deliveries'=>$deliveries]);
    }

    public function form()
    {
      $vehicles = \App\Vehicle::all();
      $devices = \App\Device::all();

      return view('Deliveries.add')->with([
        'vehicles'=>$vehicles,
        'devices'=>$devices,
      ]);
    }

    public function store(Request $request)
    {
    	$ndel = new \App\Delivery;
    	$ndel->start_loc =  $request->start_loc;
    	$ndel->end_loc =  $request->end_loc;
    	$ndel->start_date =  $request->start_date;
    	$ndel->end_date =  $request->end_date;
    	$ndel->vehicle_id =  $request->vehicle_id;
    	$ndel->device_id =  $request->device_id;

      if($ndel->save())
    		return view('Deliveries.add')->with("recibido!");
    	else
    		return view('Deliveries.add')->with("no recibido");
    }

    public function change()
    {
      $deliveries =  \App\Delivery::all();
      return view('Deliveries.edit')->with(['deliveries' => $deliveries]);
    }

    public function edit(Request $request)
    {
      $delivery =  \App\Delivery::where('id',$request->delivery_id)->get();
      $delivery->end_date = $request->end_date;
      if($delivery->save())
        return view('Deliveries.edit')->with('viaje editado');
      else
        return view('Deliveries.edit')->with('viaje NO editado');
    }

    public function erase()
    {
      $deliveries =  \App\Delivery::all();
      return view('Deliveries.delete')->with(['deliveries' => $deliveries]);
    }

    public function delete(Request $request)
    {
      $delivery =  \App\Delivery::where('id',$request->delivery_id)->get();
      if($delivery->delete())
        return view('Deliveries.delete')->with('viaje eliminado');
      else
        return view('Deliveries.delete')->with('viaje NO eliminado');
    }
    
    public function filter()
    {
      $devices = \App\Device::all();
      return view('filter.filter')->with(['devices'=> $devices]);
    }
    public function filterBy(Request $request)
    {
      $devices = \App\Device::all();
      $filter = \App\Delivery::whereBetween('start_date',[$request->from,$request->to])
                                ->where('device_id','=',$request->device_id)
                                ->get();
      return view('filter.filter')->with(['filters' => $filter])->with(['devices'=> $devices]);
    }








}
