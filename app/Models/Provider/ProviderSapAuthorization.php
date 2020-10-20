<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderSapAuthorization extends Model
{
    protected $fillable = [
        'provider_sap_id',
        'approved',
        'note',
        'user_id',
    ];
}
