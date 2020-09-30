<?php

namespace App\Repositories\ToleranceGroup;

use App\Repositories\AppRepository;
use App\Models\ToleranceGroup;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\ToleranceGroup\ToleranceGroupValidator;
use App\Repositories\ToleranceGroup\ToleranceGroupRepository;

/**
 * Class ToleranceGroupRepositoryEloquent.
 *
 * @package namespace App\Repositories\ToleranceGroup;
 */
class ToleranceGroupRepositoryEloquent extends AppRepository implements ToleranceGroupRepository
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
        return ToleranceGroup::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
