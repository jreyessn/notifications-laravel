<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "applicant_name",
        "business_name",
        "rfc",
        "business_type_id",
        "business_type_activity", 
        "fiscal_address",
        "street_address",
        "street_number",
        "colony",
        "country_id", 
        "state_id",
        "citiy_id",
        "zip_code",
        "phone",
        "main_shareholder", 
        "sales_representative", 
        "sales_phone",
        "email_quotation", 
        "email_purchase_orders", 
        "website",
        "retention",
        "retention_country_id", 
        "contracted",
        "note",
        "user_id"
    ];

    public function account_bank(){
        return $this->hasOne('App\Models\Provider\ProviderAccountBank');
    }

    public function retention_types(){
        return $this->belongsToMany('App\Models\RetentionType', 'provider_retention_types');
    }

    public function retention_indicators(){
        return $this->belongsToMany('App\Models\RetentionIndicator', 'provider_retention_indicators');
    }
}
