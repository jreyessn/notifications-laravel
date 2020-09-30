<?php

namespace App\Repositories\Bank;

use App\Models\BankCountry;
use App\Repositories\AppRepository;
use App\Validators\Bank\BankCountryValidator;
use App\Repositories\Bank\BankCountryRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class BankCountryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Bank;
 */
class BankCountryRepositoryEloquent extends AppRepository implements BankCountryRepository
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
        return BankCountry::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
