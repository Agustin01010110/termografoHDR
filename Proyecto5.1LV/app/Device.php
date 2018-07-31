<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

    public $timestamps = false;
    // obtener los dispositivos que estan encendidos
    // pero no tienen datos asociados
    public function scopeWorking($query)
    {
        return $query->where('working',1)->where('active',1);
    }

    // obtener los dispositivos que estan funcionando
    // y estan dados de alta a nivel administrativo
    public function scopeNotWorking($query)
    {
        return $query->where('working',0)->where('active',1);
    }

}
