<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    public $timestamps = false;

    public function vehicle()
    {
      return $this->hasOne('App\Vehicle','id','vehicle_id');//clase, primaria, clave foranea
    }

    public function device()
    {
      return $this->hasOne('App\Device','id','device_id');
    }
}
