<?php

namespace App\Repositories\Provider;

use App\Models\Provider\ProviderSap;
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

        $this->saveTolerances($providerSap, $data['tolerance_group_id']);

        return $providerSap;
    }

    public function saveTolerances($providerSap, array $tolerances){

        $savedTolerances = array_map(function($tolerance) use ($providerSap){
            return [ 
                'tolerance_group_id' => $tolerance,
                'provider_sap_id' => $providerSap->id
            ];
        }, $tolerances);

        ProviderSapToleranceGroup::insert($savedTolerances);
    }
    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
