<?php

namespace App\Repositories\RetentionType;

use App\Repositories\AppRepository;
use App\Models\RetentionType;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\RetentionType\RetentionTypeValidator;
use App\Repositories\RetentionType\RetentionTypeRepository;

/**
 * Class RetentionTypeRepositoryEloquent.
 *
 * @package namespace App\Repositories\RetentionType;
 */
class RetentionTypeRepositoryEloquent extends AppRepository implements RetentionTypeRepository
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
        return RetentionType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
