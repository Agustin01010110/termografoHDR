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

      public function store(Request $request)
      {

          $record = new \App\Record;
          try {
             $record->time          = $element->time;
             $record->temp          = $element->temp;
             $record->id_data       = $element->id_data;
             $record->id_delivery   = $element->id_delivery;
             $record->save();
             echo "SUCCESS";

          } catch (\Exception $e) {
            return $request->id_data;
            echo $e->getMessage();
          }
      }



}
