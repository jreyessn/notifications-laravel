<?php

namespace App\Repositories\Service;

use App\Models\Service;
use App\Repositories\AppRepository;
use App\Validators\Service\ServiceValidator;
use App\Repositories\Service\ServiceRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class ServiceRepositoryEloquent.
 *
 * @package namespace App\Repositories\Service;
 */
class ServiceRepositoryEloquent extends AppRepository implements ServiceRepository
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
        return Service::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
