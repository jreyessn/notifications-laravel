<?php

namespace App\Repositories\AccountsGroup;

use App\Repositories\AppRepository;
use App\Models\AccountsGroup;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\AccountsGroup\AccountsGroupValidator;
use App\Repositories\AccountsGroup\AccountsGroupRepository;

/**
 * Class AccountsGroupRepositoryEloquent.
 *
 * @package namespace App\Repositories\AccountsGroup;
 */
class AccountsGroupRepositoryEloquent extends AppRepository implements AccountsGroupRepository
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
        return AccountsGroup::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
