<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;

class ProviderSapOrganization extends Model
{

    protected $fillable = [
        'provider_sap_id',
        'organization_id',
    ];
    
}
