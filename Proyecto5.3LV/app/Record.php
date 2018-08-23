<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    public function delivery()
    {
      return $this->hasOne('App\Delivery','id');
    }
}
