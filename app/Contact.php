<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    protected $table = 'contactsType';
    function contactorCoontact()
    {
       // return $this->belongsTo('App\ContactorContact', 'type_id');
        return $this->hasMany('App\ContactorContact');

    }
}
