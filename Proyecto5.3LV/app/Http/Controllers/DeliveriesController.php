<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;
use \App\Device;
use \App\Record;

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

        try
        {

          $ndel->start_loc  =  $request->start_loc;
        	$ndel->end_loc    =  $request->end_loc;
        	$ndel->start_date =  $request->start_date;
        	$ndel->end_date   =  $request->end_date;
        	$ndel->vehicle_id =  $request->vehicle_id;
        	$ndel->device_id  =  $request->device_id;

          $ndel->save();

            echo 'SUCCESS';
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
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


    public function fillDeliveryData($device_id)//ya se inicializo un viaje
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

            $delivery->start_loc          = $request->start_loc;
            $delivery->end_loc            = $request->end_loc;
            $delivery->vehicle_id         = $request->vehicle_id;
            $delivery->mode               = $request->mode;
            $delivery->sample_time        = $request->sample_time;
            $delivery->updt_time          = $request->updt_time;

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
    public function history()
    {
      $devices = \App\Device::all();
      $vehicles = \App\Vehicle::all();
      $deliveries = \App\Delivery::done()->get();
      return view('History.index')->with(['devices'    => $devices,
                                          'vehicles'   => $vehicles,
                                          'deliveries' => $deliveries]);
    }
    public function location()
    {
      $devices = \App\Device::all();
      $vehicles = \App\Vehicle::all();
      $activeDeliveries = \App\Delivery::working()->get();
      return view('Location.index')->with(['devices'    => $devices,
                                          'vehicles'   => $vehicles,
                                          'activeDeliveries' => $activeDeliveries]);
    }

    public function fetchBetweenDates(Request $request)
    {
      $devices = \App\Device::all();
      $vehicles = \App\Vehicle::all();



        if(request()->input('vehicle') == NULL)
        {
          $deliveries = \App\Delivery::done()->whereBetween('start_date',[$request->from, $request->to])
                                             ->where('vehicle_id',$request->vehicle)
                                             ->get();

        }
        else
        {
          $deliveries = \App\Delivery::done()->whereBetween('start_date',[$request->from, $request->to])
                                             ->where('device_id',$request->device)
                                             ->get();
        }

        print_r($deliveries);


      return view('History.index')->with(['deliveries' => $deliveries,
                                               'devices' => $devices,
                                              'vehicles' => $vehicles]);


    }




    public function search($id)
    {
        $records = \App\Record::where('delivery_id', $id)->get();
        $service = \App\Delivery::where('id', $id)->first();
        $hty = 1;

        return view('MonitoringCenter.Elements.show_dash')->with(['records'        => $records,
                                                                  'service'        => $service,
                                                                  'sampleInterval' => $service->sample_time,
                                                                  'hty'            => $hty
                                                                  ]);
    }

//tomo el ultimo viaje creado y retorno la configuracion de modo y toma de muestras
    public function config()
    {
      $last_delivery_config = \App\Delivery::all()->last();
      $config = ['mode'     =>$last_delivery_config->mode,
                 'samples'  =>$last_delivery_config->sample_time,
                 'update'   =>$last_delivery_config->updt_time
               ];

      return("configuracion")->with($config);
    }



















}
