<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //eliminar campos created_at y modified_at
    public $timestamps = false;

    //relacion con los camiones
    public function vehicle()
    {
      return $this->hasOne('App\Vehicle','id','vehicle_id');//clase, primaria, clave foranea
    }

    //relacion con los dispositivos
    public function device()
    {
      return $this->hasOne('App\Device','id','device_id');
    }

    //obtener los viajes que se estan realizando
    public function scopeWorking($query)
    {
        return $query->where('end_date',null)->where('start_loc','!=',null);
    }

    //obtener los viajes que se estan realizando
    public function scopeEmptyData($query)
    {
        return $query
        ->where('end_date',null)
        ->where('start_loc',null)
        ->where('end_loc',null)
        ->where('vehicle_id',null);
    }

    //crear un mutador (campo virtual) para obtener el nombre
    //del viaje
    public function getServiceNameAttribute()
    {
        return $this->attributes['start_loc'] . ' - ' . $this->attributes['end_loc'];
    }

    public function scopeActiveForDevice($query, $device_name)
    {
        return $query->where('device.name',$device_name);
    }
}
