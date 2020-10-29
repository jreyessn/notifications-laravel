<?php

namespace App\Repositories\Provider;

use App\Models\Provider\ProviderSap;
use App\Models\Provider\ProviderSapAuthorization;
use App\Models\Provider\ProviderSapAuthorizationLog;
use App\Models\User;
use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Spatie\Permission\Models\Role;

/**
 * Class ProviderSapRepositoryEloquent.
 *
 * @package namespace App\Repositories\Provider;
 */
class ProviderSapAuthoRepositoryEloquent extends AppRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProviderSapAuthorization::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getProviderSapWithAuthorizationMap($id){
        $providerSap = ProviderSap::find($id);
        $roleAuthorizators = $this->getRoleAuthorizators();
        $authorizationsList = array();

        foreach ($roleAuthorizators as $role) {

            $temp = $providerSap->authorizations->filter(function($item) use ($role){
                return ($item->user->roles->find($role->id));
            });

            foreach ($temp as $value) {
                $authorize[] = $value;
            }

            array_push($authorizationsList, compact('role', 'authorize'));
        }


        $providerSap->authorizes = $authorizationsList;

        return $providerSap;
    }

    private function getRoleAuthorizators(){
        return Role::whereIn('id', [1,3,4,5,6,7])->get();
    }
    
}
    