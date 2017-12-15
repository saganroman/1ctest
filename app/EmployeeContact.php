<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeContact extends Model
{
    public $timestamps = false;
    protected $table = 'employeesContact';
    function contactType()
    {
        // return $this->hasMany('App\Contact', 'id');
        return $this->belongsTo('App\Contact', 'type_id');
    }
}
