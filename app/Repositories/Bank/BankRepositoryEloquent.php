<?php

namespace App\Repositories\Bank;

use App\Models\Bank;
use App\Repositories\AppRepository;
use App\Validators\Bank\BankValidator;
use App\Repositories\Bank\BankRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class BankRepositoryEloquent.
 *
 * @package namespace App\Repositories\Bank;
 */
class BankRepositoryEloquent extends AppRepository implements BankRepository
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
        return Bank::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
