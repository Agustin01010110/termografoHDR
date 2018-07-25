<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    //
      public function index()
      {
        // $record = App\Record::orderBy('time')->get();
        // return view('dash')->with([ 'records' => $record  ]);
        return view('dash');
      }

      

}
