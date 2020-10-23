<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RetentionIndicator extends Model
{
    protected $fillable = ['type', 'indicator','description'];
    
    protected $hidden = ['pivot'];

}
