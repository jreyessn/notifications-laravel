<?php

namespace App\Repositories\Provider;

use App\Models\Provider\ProviderSap;
use App\Models\Provider\ProviderSapCompaniesParticipate;
use App\Models\Provider\ProviderSapOrganization;
use App\Models\Provider\ProviderSapSociety;
use App\Models\Provider\ProviderSapToleranceGroup;
use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class ProviderSapRepositoryEloquent.
 *
 * @package namespace App\Repositories\Provider;
 */
class ProviderSapRepositoryEloquent extends AppRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProviderSap::class;
    }

    public function save($data){
        $providerSap = new ProviderSap();
        $providerSap->fill($data);
        $providerSap->save();

        $this->saveTolerances($providerSap, $data['tolerances']);
        $this->saveOrganizations($providerSap, $data['organizations']);
        $this->saveCompaniesParticipates($providerSap, $data['companies_participates']);
        $this->saveSocieties($providerSap, $data['societies']);

        return $providerSap;
    }

    public function saveTolerances($providerSap, array $tolerances){

        $saved = array_map(function($item) use ($providerSap){
            return [ 
                'tolerance_group_id' => $item,
                'provider_sap_id' => $providerSap->id
            ];
        }, $tolerances);

        ProviderSapToleranceGroup::insert($saved);
    }
    
    public function saveOrganizations($providerSap, array $organizations){

        $saved = array_map(function($item) use ($providerSap){
            return [ 
                'organization_id' => $item,
                'provider_sap_id' => $providerSap->id
            ];
        }, $organizations);

        ProviderSapOrganization::insert($saved);
    }
    
    public function saveCompaniesParticipates($providerSap, array $companies){

        $saved = array_map(function($item) use ($providerSap){
            return [ 
                'society_id' => $item,
                'provider_sap_id' => $providerSap->id
            ];
        }, $companies);

        ProviderSapCompaniesParticipate::insert($saved);
    }
    
    public function saveSocieties($providerSap, array $societies){

        $saved = array_map(function($item) use ($providerSap){
            return [ 
                'society_id' => $item,
                'provider_sap_id' => $providerSap->id
            ];
        }, $societies);

        ProviderSapSociety::insert($saved);
    }
    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
