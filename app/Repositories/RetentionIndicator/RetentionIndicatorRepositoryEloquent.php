<?php

namespace App\Repositories\RetentionIndicator;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\RetentionIndicator;
use App\Validators\RetentionIndicator\RetentionIndicatorValidator;
use App\Repositories\RetentionIndicator\RetentionIndicatorRepository;

/**
 * Class RetentionIndicatorRepositoryEloquent.
 *
 * @package namespace App\Repositories\RetentionIndicator;
 */
class RetentionIndicatorRepositoryEloquent extends AppRepository implements RetentionIndicatorRepository
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
        return RetentionIndicator::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
