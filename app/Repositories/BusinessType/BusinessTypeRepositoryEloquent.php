<?php

namespace App\Repositories\BusinessType;

use App\Models\BusinessType;
use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\BusinessType\BusinessTypeValidator;
use App\Repositories\BusinessType\BusinessTypeRepository;

/**
 * Class BusinessTypeRepositoryEloquent.
 *
 * @package namespace App\Repositories\BusinessType;
 */
class BusinessTypeRepositoryEloquent extends AppRepository implements BusinessTypeRepository
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
        return BusinessType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
