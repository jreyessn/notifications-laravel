<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToleranceGroup extends Model
{
    protected $fillable = ['code', 'description', 'default'];
}
