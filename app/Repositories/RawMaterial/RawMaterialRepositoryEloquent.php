<?php

namespace App\Repositories\RawMaterial;

use App\Repositories\AppRepository;
use App\Models\RawMaterial;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\RawMaterial\RawMaterialValidator;
use App\Repositories\RawMaterial\RawMaterialRepository;

/**
 * Class RawMaterialRepositoryEloquent.
 *
 * @package namespace App\Repositories\RawMaterial;
 */
class RawMaterialRepositoryEloquent extends AppRepository implements RawMaterialRepository
{
    protected $fieldSearchable = [
        'description' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RawMaterial::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
