<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderSap extends Model
{
    use HasFactory;

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
        "fixed_asset_id",
        "lease_id",
        "fuel_id",
        "freight_transport_id",
        "officials_employee_id",
        "taxes_duties_accesory_id",
        "intercompany_id",
        "maintenance_id",
        "raw_material_id",
        "raw_meat_material_id",
        "raw_another_material_id",
        "service_id",
        "professional_service_id",
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
    ];

    public function authorizations(){
        return $this->hasMany('App\Models\Provider\ProviderSapAuthorization');
    }
    
    public function tolerance_groups(){
        return $this->hasMany('App\Models\Provider\ProviderSapToleranceGroup');
    }

}
