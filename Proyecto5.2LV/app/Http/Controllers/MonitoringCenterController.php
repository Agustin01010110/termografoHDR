<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;
use \App\Device;
use \App\Delivery;
use \App\Record;

class MonitoringCenterController extends Controller
{
    // VIAJES
    // public function getActiveDeliveries()
    // {
    //     $activeDeliveries = \App\Delivery::active()->get();
    //
    //     return view('Deliveries.list_working')->with([
    // 		'activeDeliveries'=>$activeDeliveries
    // 	]);
    // }

    //DISPOSITIVOS
    // public function listNotWorking()
    // {
    //     $devices = \App\Device::notWorking()->get();
    //
    //     return view('Devices.list_not_working')->with(['devices'=>$devices]);
    // }
    //
    // public function listWorking()
    // {
    //     $devices = \App\Device::working()->get();
    //
    //     return view('Devices.list__working')->with(['devices'=>$devices]);
    // }

    // VEHICULOS
    // public function getActiveVehicles()
    // {
    //     $activeDeliveries = \App\Delivery::working()->get();
    //
    //     return view('Vehicles.list_working')->with([
    //         'activeDeliveries'=>$activeDeliveries
    //     ]);
    // }

    public function index( $delivery_id = null)
    {
        $activeDeliveries = \App\Delivery::working()->get();
        $devicesNotWorking = \App\Device::notWorking()->get();
        $devices = \App\Device::working()->get();


        $data = [
            'activeDeliveries'=>$activeDeliveries,
            'devicesNotWorking'=>$devicesNotWorking,
            'activeDevices'=>$devices
        ];

        if($delivery_id)
        {

            $records = \App\Record::where('delivery_id',$delivery_id)->get();
            $data['records'] = $records;
            $del = \App\Delivery::working()->where('id',$delivery_id)->first();
            $data['current_delivery'] = $del;
        }

        return view('MonitoringCenter.index')->with($data);
    }

    public function device( $device_id = null )
    {
        if( $device_id )
        {
            $deliveryForDevice = \App\Delivery::working()->where('device_id',$device_id)->first();
            return redirect()->route('monitoring-center-for',['delivery_id'=>$deliveryForDevice->id]);

        }
    }

}
