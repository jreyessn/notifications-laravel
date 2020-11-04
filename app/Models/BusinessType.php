<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $fillable = ['description'];

    function providers(){
        return $this->hasMany('App\Models\Provider\Provider');
    }
}
