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
    		return "recibido!";
    	else
    		return "no recibido";
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


    public function fillDeliveryData($device_id)
    {

        $delivery = \App\Delivery::emptyData()->where('device_id',$device_id)->first();
        $vehicles = \App\Vehicle::all();

        return view('Deliveries.fill_data')->with([
            'delivery'=> $delivery,
            'vehicles'=> $vehicles
        ]);
    }

    public function setDeliveryData(Request $request)
    {
        $delivery = \App\Delivery::where('id',$request->id)->first();
        $device   = \App\Device::where('id',$delivery->device_id)->first();

        try
        {

            $delivery->start_loc       = $request->start_loc;
            $delivery->end_loc         = $request->end_loc;
            $delivery->vehicle_id      = $request->vehicle_id;
            $device->working           = 1;

            $delivery->save();
            $device->save();

            return redirect('monitoring')->with('message', 'SUCCESS');
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
    }
}
