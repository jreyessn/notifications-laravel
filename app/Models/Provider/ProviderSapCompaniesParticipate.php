<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;

class ProviderSapCompaniesParticipate extends Model
{

    protected $fillable = [
        'provider_sap_id',
        'society_id',
    ];
    
}
