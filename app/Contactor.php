<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactor extends Model
{
    public $timestamps = false;

    function address()
    {
        return $this->hasMany('App\ContactorAddress', 'contactor_id');

    }

    function contact()
    {
        return $this->hasMany('App\ContactorContact', 'contactor_id', 'id');
        // return $this->belongsTo('App\ContactorContact','contactor_id','id');

    }

    function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
        // return $this->belongsTo('App\ContactorContact','contactor_id','id');

    }
}
