<?php

namespace App\Repositories\TaxesDutiesAccesory;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\TaxesDutiesAccesory;
use App\Validators\TaxesDutiesAccesory\TaxesDutiesAccesoryValidator;
use App\Repositories\TaxesDutiesAccesory\TaxesDutiesAccesoryRepository;

/**
 * Class TaxesDutiesAccesoryRepositoryEloquent.
 *
 * @package namespace App\Repositories\TaxesDutiesAccesory;
 */
class TaxesDutiesAccesoryRepositoryEloquent extends AppRepository implements TaxesDutiesAccesoryRepository
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
        return TaxesDutiesAccesory::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
