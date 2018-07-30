<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class RecordsController extends Controller
{


    public function index()
    {
      $record = App\Record::orderBy('time')->get();
      return view('dash')->with([ 'records' => $record  ]);
    }

    public function store(Request $request)
    {

        $record = new App\Record;
        $record->time =  $request->time;
        $record->temp =  $request->temp;
        $record->dev_name = $request->dev_name;
        $record->id_dato = $request->id_dato;
        $record->delivery_id =  "2";

        if($record->save())
          return "recibido!";
        else
          return "no recibido";

    }

    public function fetch(Request $request)
    {
      $records = App\Record::whereBetween('time', [$request->from,$request->to] )->get();

      return view('history')->with(['records'=>$records]);
    }

	public function updateChart(Request $request)
	{

    $lastId = App\Record::all()->last()->id;
    if($request->ajax())
    {

			if( $request->lastId < $lastId )
			{

        $records = App\Record::whereBetween('id',[$request->lastId, $lastId])->get();
				$data = ['newRows'=>true,'newRecords'=>$records,'lastId'=>$lastId];

			}else
			{
				$data = ['newRows'=>false,'newRecords'=>[],'lastId'=>$lastId];

			}

			echo json_encode($data);
		}


	}

  //la placa avisa que se esta quedando sin señal y el server le responde con el ultimo valor
  //guardado.
  public function not_signal(Request $request)
  {
      $lastRecord = App\Record::all()->last();
      return response("ultimo")->with($lastRecord);
  }
  //cuando la placa recobra la señal envia un array con los datos que guardo durante
  //el tiempo sin señal. El servidor guarda los datos de a uno e informa si no pudo
  //guardar alguno en particular
  public function signal_recovered(Request $request)
  {
    $values[] = $request;
    $key = 0;
    foreach ($values as $key => $value)
    {
      if($value->save())
        return "dato". $key . "guardado";
      else
        return response("dato no guardado")->with($key);//le da el indice del elemento del arreglo enviado
    }
  }


}
