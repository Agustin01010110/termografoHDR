<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;

class VehiclesController extends Controller
{
    //
    public function store()
    {
      

    }

    public function fetch()
    {
    	$vehicles = \App\Vehicle::all();

    	return view('Vehicles.index')->with(['vehicles'=>$vehicles]);
    }
}
