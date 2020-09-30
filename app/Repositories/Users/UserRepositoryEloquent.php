<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\AppRepository;
use App\Validators\Users\UserValidator;
use App\Repositories\Users\UserRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories\Users;
 */
class UserRepositoryEloquent extends AppRepository implements UserRepository
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
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
