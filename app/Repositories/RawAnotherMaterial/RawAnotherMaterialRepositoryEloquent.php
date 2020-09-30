<?php

namespace App\Repositories\RawAnotherMaterial;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\RawAnotherMaterial;
use App\Validators\RawAnotherMaterial\RawAnotherMaterialValidator;
use App\Repositories\RawAnotherMaterial\RawAnotherMaterialRepository;

/**
 * Class RawAntoherMaterialRepositoryEloquent.
 *
 * @package namespace App\Repositories\RawAnotherMaterial;
 */
class RawAnotherMaterialRepositoryEloquent extends AppRepository implements RawAnotherMaterialRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RawAnotherMaterial::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
