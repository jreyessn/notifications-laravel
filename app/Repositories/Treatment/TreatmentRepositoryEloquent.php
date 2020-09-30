<?php

namespace App\Repositories\Treatment;

use App\Models\Treatment;
use App\Repositories\AppRepository;
use App\Validators\Treatment\TreatmentValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Treatment\TreatmentRepository;

/**
 * Class TreatmentRepositoryEloquent.
 *
 * @package namespace App\Repositories\Treatment;
 */
class TreatmentRepositoryEloquent extends AppRepository implements TreatmentRepository
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
        return Treatment::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
