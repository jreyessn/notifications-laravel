<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderSapToleranceGroup extends Model
{
    protected $fillable = [
        'provider_sap_id',
        'tolerance_group_id',
    ];

    protected $with = ['tolerance'];

    public function tolerance(){
        return $this->belongsTo('App\Models\ToleranceGroup');
    }
}
