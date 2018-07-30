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


    public function form()
    {
    	$vehicles = \App\Vehicle::all();
    	$devices = \App\Device::all();

    	return view('Deliveries.add')->with([
    		'vehicles'=>$vehicles,
    		'devices'=>$devices,
    	]);
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
