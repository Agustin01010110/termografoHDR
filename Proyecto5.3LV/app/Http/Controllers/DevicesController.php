<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    //
    public function fetch()
    {
      $devices = \App\Device::all();
      return view('History.index')->with(['devices' => $devices]);
    }

    public function setDevice(Request $request)
    {
        $exist = \App\Device::where('name',$request->name)->count();

        $delivery = new \App\Delivery;

        // si el dispositivo esta en DB
        if($exist)
        {
            $device = \App\Device::where('name',$request->name)->first();
            $device->active = 1;

            try{

                $delivery->device_id = $device->id;
                $delivery->start_date = $request->start_date;


                $device->save();
                $delivery->save();

                echo "viaje,$delivery->id";
            }
            catch(\Exception $e){
                echo 'ERROR: ';
                echo $e->getMessage();
            }
        }// si el dispositivo es nuevo
        else {


            try{
                $ndevice = new \App\Device;

                $ndevice->name = $request->name;
                $ndevice->active = 1;
                $ndevice->working = 0;
                $ndevice->save();

                $delivery->device_id = $ndevice->id;
                $delivery->start_date = $request->start_date;

                $delivery->save();


                echo "viaje,$delivery->id";
            }
            catch(\Exception $e){
                echo 'ERROR: ';
                echo $e->getMessage();
            }

        }

    }

    public function setDeviceOff(Request $request)
    {
        $device = \App\Device::where('name',$request->name)->first();
        $delivery = \App\Delivery::where('device_id',$device->id)->first();

        try{
            $device->active = 0;
            $device->working = 0;

            $delivery->end_date = $request->end_date;

            $device->save();
            $delivery->save();

            echo 'SUCCESS';
        }
        catch(\Exception $e){
            echo 'ERROR: ';
            echo $e->getMessage();
        }

    }



}
