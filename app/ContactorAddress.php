<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactorAddress extends Model
{
    public $timestamps = false;
    protected $table = 'contactorAddress';

    function contactor()
    {
        return $this->belongsTo('App\Contactor');
    }

    function city()
    {
        return $this->belongsTo('App\City');
    }

    function country()
    {
        return $this->belongsTo('App\Country');
    }
    function addressType()
    {
        // return $this->hasMany('App\Contact', 'id');
        return $this->belongsTo('App\Address', 'type_id');
    }
}
