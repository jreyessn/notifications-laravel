<?php

namespace App\Repositories\OfficialsEmployee;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\OfficialsEmployee;
use App\Validators\OfficialsEmployee\OfficialsEmployeeValidator;
use App\Repositories\OfficialsEmployee\OfficialsEmployeeRepository;

/**
 * Class OfficialsEmployeeRepositoryEloquent.
 *
 * @package namespace App\Repositories\OfficialsEmployee;
 */
class OfficialsEmployeeRepositoryEloquent extends AppRepository implements OfficialsEmployeeRepository
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
        return OfficialsEmployee::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
