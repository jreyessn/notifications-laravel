<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class ProviderSapStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {        
        return [
            "provider_id" => "required|exists:providers,id",
            "societies" => "required|array",
            "organizations" => "required|array",
            "accounts_group_id" => "required|exists:accounts_groups,id",
            "treatment_id" => "required|exists:treatments,id",
            "natural_person" => "required|boolean",
            // "type_bank_interlocutor_id" => "required|exists:type_bank_interlocutors,id",
           
            "treasury_group_id" => "required|exists:treasury_groups,id",
            "associated_account_id" => "required|exists:associated_accounts,id",
            "payment_condition_id" => "required|exists:payment_conditions,id",
            "verif_fra_dob" => "required|boolean",
            "payment_method_id" => "required|exists:payment_methods,id",
            "currency_id" => "required|exists:currencies,id",
            "tolerances" => "required|array",
            "verif_invoice_base_em" => "required|boolean",
            "verif_invoice_relac_service" => "required|boolean",
            "order_automatic_permitted" => "required|boolean",
            "companies_participates" => "required|array",
            "applicant" => "required|string",
            "purchase" => "required|string",
         ];
    }
}
