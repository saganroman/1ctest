<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $table = 'cities';
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
