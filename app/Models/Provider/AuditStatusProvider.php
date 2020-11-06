<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;

class AuditStatusProvider extends Model
{
    protected $fillable = [
        'model_id',
        'model_type',
        'action',
        'status_before',
        'status_after',
        'note',
        'user_id',
    ];
}
