<?php

namespace App\Repositories\Lease;

use App\Models\Lease;
use App\Repositories\AppRepository;
use App\Validators\Lease\LeaseValidator;
use App\Repositories\Lease\LeaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class LeaseRepositoryEloquent.
 *
 * @package namespace App\Repositories\Lease;
 */
class LeaseRepositoryEloquent extends AppRepository implements LeaseRepository
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
        return Lease::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
