<?php

namespace App\Repositories\RetentionCountry;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\RetentionCountry;
use App\Validators\RetentionCountry\RetentionCountryValidator;
use App\Repositories\RetentionCountry\RetentionCountryRepository;

/**
 * Class RetentionCountryRepositoryEloquent.
 *
 * @package namespace App\Repositories\RetentionCountry;
 */
class RetentionCountryRepositoryEloquent extends AppRepository implements RetentionCountryRepository
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
        return RetentionCountry::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
