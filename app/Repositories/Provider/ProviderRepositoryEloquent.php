<?php

namespace App\Repositories\Provider;

use App\Models\Provider\Provider;
use App\Repositories\AppRepository;
use App\Validators\Provider\ProviderValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Provider\ProviderRepository;

/**
 * Class ProviderRepositoryEloquent.
 *
 * @package namespace App\Repositories\Provider;
 */
class ProviderRepositoryEloquent extends AppRepository implements ProviderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Provider::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
