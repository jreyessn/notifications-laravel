<?php

namespace App\Repositories\PaymentMethod;

use App\Repositories\AppRepository;
use App\Models\PaymentMethod;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\PaymentMethod\PaymentMethodValidator;
use App\Repositories\PaymentMethod\PaymentMethodRepository;

/**
 * Class PaymentMethodRepositoryEloquent.
 *
 * @package namespace App\Repositories\PaymentMethod;
 */
class PaymentMethodRepositoryEloquent extends AppRepository implements PaymentMethodRepository
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
        return PaymentMethod::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
