<?php

namespace App\Repositories\PaymentCondition;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\PaymentCondition;
use App\Validators\PaymentCondition\PaymentConditionValidator;
use App\Repositories\PaymentCondition\PaymentConditionRepository;

/**
 * Class PaymentConditionRepositoryEloquent.
 *
 * @package namespace App\Repositories\PaymentCondition;
 */
class PaymentConditionRepositoryEloquent extends AppRepository implements PaymentConditionRepository
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
        return PaymentCondition::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
