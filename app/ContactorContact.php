<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactorContact extends Model
{
    public $timestamps = false;
    protected $table = 'contactorContact';

    function contactor()
    {
        return $this->belongsTo('App\Contactor');
        //  return $this->hasMany('App\Contactor');
    }

    function contactType()
    {
        // return $this->hasMany('App\Contact', 'id');
        return $this->belongsTo('App\Contact', 'type_id');
    }

    function country()
    {
        // return $this->hasMany('App\Contact', 'id');
        return $this->belongsTo('App\Country');
    }
}
