<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    //

    public function fetch()
    {
      $devices = \App\Device::all();
      return view('Devices.index')->with(['devices' => $devices]);
    }

    public function form()
    {
      return view('Devices.add');
    }

    public function store(Request $request)
    {
      $ndev = new \App\Device;
      $ndev->name = $request->devicename;

      if($request->active)
      {
        $ndev->active = 1;
      }
      else
      {
        $ndev->active = 0;
      }


      if($ndev->save())
        return  view('Devices.add')->with('disp.guardado');
      else
        return view('Devices.add')->with('disp. NO guardado');
    }

    public function change()
    {
      $devices = \App\Device::all();

      return view('Devices.edit')->with([
        'devices'=>$devices,
      ]);
    }

    public function edit(Request $request)
    {
      $devices = \App\Device::all();
      $eddevice = \App\Device::where('id', $request->device_id)->first();
      if($request->active)
      {
          $eddevice->active = 1;
      }
      else {
            $eddevice->active = 0;
      }
    /// como le cambio el parametro sin generar un nuevo dispositivo?
      if($eddevice->save())
      {
        return view('Devices.edit')->with(['devices'=>$devices])->with('editado');
      }
      else
      {
        return view('Devices.edit')->with(['devices'=>$devices])->with('NO editado');
      }
    }

    public function erase()
    {
      $devices = \App\Device::all();

      return view('Devices.delete')->with([
        'devices'=>$devices,
      ]);
    }
    public function delete(Request $request)
    {
      $devices = \App\Device::all();
      $deldevice = \App\Device::where('id', $request->device_id);
      if($deldevice->delete())
      {
        return view('Devices.delete')->with(['devices'=>$devices])->with('borrado');
      }
      else
      {
        return view('Devices.delete')->with(['devices'=>$devices])->with('NO borrado');
      }
    }

}
