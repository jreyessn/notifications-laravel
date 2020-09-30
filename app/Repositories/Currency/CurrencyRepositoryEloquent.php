<?php

namespace App\Repositories\Currency;

use App\Models\Currency;
use App\Repositories\AppRepository;
use App\Validators\Currency\CurrencyValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Currency\CurrencyRepository;

/**
 * Class CurrencyRepositoryEloquent.
 *
 * @package namespace App\Repositories\Currency;
 */
class CurrencyRepositoryEloquent extends AppRepository implements CurrencyRepository
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
        return Currency::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
