<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProviderAccountBank extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "provider_id",
        "account_holder",
        "account_number",
        "account_clabe",
        "swift_code",
        "routing_aba_number",
        "bank_name",
        "bank_address",
        "bank_country_id",
        "bank_id"
    ];

    public function provider(){
        return $this->belongsTo('App\Models\Provider\ProviderAccountBank');
    }
}
