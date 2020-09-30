<?php

namespace App\Repositories\AssociatedAccount;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\AssociatedAccount;
use App\Validators\AssociatedAccount\AssociatedAccountValidator;
use App\Repositories\AssociatedAccount\AssociatedAccountRepository;

/**
 * Class AssociatedAccountRepositoryEloquent.
 *
 * @package namespace App\Repositories\AssociatedAccount;
 */
class AssociatedAccountRepositoryEloquent extends AppRepository implements AssociatedAccountRepository
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
        return AssociatedAccount::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
