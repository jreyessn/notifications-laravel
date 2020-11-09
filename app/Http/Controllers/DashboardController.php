<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Provider\Provider;

class DashboardController extends Controller
{
    
    function index(){
        
        $data = [];

        $data['business_types'] = BusinessType::select('description')->withCount('providers')->get()->toArray();

        $data['providers_all'] = Provider::count();

        $data['providers_pendings'] = Provider::has('provider_sap', '<', 1)->count();
                
        $data['providers_sap_register'] = Provider::whereHas('authorizations', function($query){
            $query->where('provider_sap_authorizations.approved', '!=', 1);
        })->count();
        
        $data['providers_contracteds'] = Provider::where('contracted', 1)->count();
        $data['providers_no_contracteds'] = Provider::where('contracted', 2)->count();
        $data['providers_inactivated'] = Provider::whereNotNull('inactivated_at')->count();

        return $data;
    }

}
