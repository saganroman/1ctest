<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    public function contactor()
    {
        return $this->hasMany('App\Contactor');
    }
    public function city()
    {
        return $this->hasMany('App\City');
    }
}
