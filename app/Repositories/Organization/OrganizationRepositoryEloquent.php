<?php

namespace App\Repositories\Organization;

use App\Repositories\AppRepository;
use App\Models\Organization;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\Organization\OrganizationValidator;
use App\Repositories\Organization\OrganizationRepository;

/**
 * Class OrganizationRepositoryEloquent.
 *
 * @package namespace App\Repositories\Organization;
 */
class OrganizationRepositoryEloquent extends AppRepository implements OrganizationRepository
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
        return Organization::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
