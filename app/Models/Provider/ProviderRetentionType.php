<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;

class ProviderRetentionType extends Model
{

    protected $fillable = [
        'provider_id',
        'retention_type_id',
    ];
    
}
