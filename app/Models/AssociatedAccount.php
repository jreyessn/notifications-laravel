<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssociatedAccount extends Model
{
    protected $fillable = ['code', 'description', 'default'];

}
