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
//tomar delivery_id y contar los records con count() antes de guardar el record, luego
//en try{} hacer $record->id_data = $cantidad+1; (id_dato solo lo tengo yo en la db, al charbo
//le alcanza con que le responda SUCCESS si el dato se guardo)
      public function store(Request $request)
      {
        $cantidad = \App\Record::where('delivery_id', $request->id_delivery)->count();
          $record = new \App\Record;
          try {
             $record->time          = $element->time;
             $record->temp          = $element->temp;
             $record->id_data       = $cantidad+1;
             $record->id_delivery   = $element->id_delivery;
             $record->save();
             echo "SUCCESS";

          } catch (\Exception $e) {
            return $request->id_data;
            echo $e->getMessage();
          }
      }



}
