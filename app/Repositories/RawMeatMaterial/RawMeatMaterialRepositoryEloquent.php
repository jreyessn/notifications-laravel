<?php

namespace App\Repositories\RawMeatMaterial;

use App\Repositories\AppRepository;
use App\Models\RawMeatMaterial;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\RawMeatMaterial\RawMeatMaterialValidator;
use App\Repositories\RawMeatMaterial\RawMeatMaterialRepository;

/**
 * Class RawMeatMaterialRepositoryEloquent.
 *
 * @package namespace App\Repositories\RawMeatMaterial;
 */
class RawMeatMaterialRepositoryEloquent extends AppRepository implements RawMeatMaterialRepository
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
        return RawMeatMaterial::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
