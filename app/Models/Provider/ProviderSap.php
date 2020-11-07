<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderSap extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'provider_sap';

    protected $fillable = [
        'provider_id',
        "accounts_group_id",
        "treatment_id",
        "curp", 
        "natural_person",
        "alba", 
        "cfdi", 
        "type_bank_interlocutor_id",
        "reference_bank", 
        "number_account_alternative", 
        "treasury_group_id",

        "associated_account_id",
        "clave_clasific", 
        "previous_account_number",
        "payment_condition_id",
        "verif_fra_dob",
        "payment_method_id",
        "block_payment",
        "currency_id",
        "incoterms",
        "description_incoterms", 
        "group_schema_prov",
        "verif_invoice_base_em",
        "verif_invoice_relac_service",
        "order_automatic_permitted",
        "conc_bonus_specie",
        "group_purchase",
        "term_delivery_prev",
        "subject",
        "applicant",
        "purchase",
        "approved",
        "note",
        "created_by_user_id"
    ];

    protected $casts = [
        'natural_person' => 'boolean',
        'verif_fra_dob' => 'boolean',
        'verif_invoice_base_em' => 'boolean',
        'verif_invoice_relac_service' => 'boolean',
        'order_automatic_permitted' => 'boolean',
        'block_payment' => 'boolean',
    ];

    protected $with = [
        'authorizations'
    ];

    public function authorizations(){
        return $this->hasMany('App\Models\Provider\ProviderSapAuthorization');
    }
    
    public function tolerance_groups(){
        return $this->belongsToMany('App\Models\ToleranceGroup', 'provider_sap_tolerance_groups');
    }

    public function provider(){
        return $this->belongsTo('App\Models\Provider\Provider');
    }

    public function societies(){
        return $this->belongsToMany('App\Models\Society', 'provider_sap_societies');
    }
    
    public function companies_participates(){
        return $this->belongsToMany('App\Models\Society', 'provider_sap_companies_participates', 'provider_sap_id', 'society_id');
    }

    public function organizations(){
        return $this->belongsToMany('App\Models\Organization', 'provider_sap_organizations');
    }

    public function accounts_group(){
        return $this->belongsTo('App\Models\AccountsGroup');
    }
    
    public function treatment(){
        return $this->belongsTo('App\Models\Treatment');
    }

    public function type_bank_interlocutor(){
        return $this->belongsTo('App\Models\TypeBankInterlocutor');
    }

    public function associated_account(){
        return $this->belongsTo('App\Models\AssociatedAccount');
    }

    public function payment_condition(){
        return $this->belongsTo('App\Models\PaymentCondition');
    }
    
    public function payment_method(){
        return $this->belongsTo('App\Models\PaymentMethod');
    }

    public function currency(){
        return $this->belongsTo('App\Models\Currency');
    }

    public function treasury_group(){
        return $this->belongsTo('App\Models\TreasuryGroup');
    }




}
