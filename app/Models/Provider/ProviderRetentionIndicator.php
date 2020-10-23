<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;

class ProviderRetentionIndicator extends Model
{
 
    protected $fillable = [
        'provider_id',
        'retention_indicator_id',
    ];

}
