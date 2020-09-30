<?php

namespace App\Repositories\Fuel;

use App\Models\Fuel;
use App\Repositories\AppRepository;
use App\Validators\Fuel\FuelValidator;
use App\Repositories\Fuel\FuelRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class FuelRepositoryEloquent.
 *
 * @package namespace App\Repositories\Fuel;
 */
class FuelRepositoryEloquent extends AppRepository implements FuelRepository
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
        return Fuel::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
