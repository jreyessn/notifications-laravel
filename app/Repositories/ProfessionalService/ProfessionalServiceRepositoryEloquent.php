<?php

namespace App\Repositories\ProfessionalService;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\ProfessionalService;
use App\Validators\ProfessionalService\ProfessionalServiceValidator;
use App\Repositories\ProfessionalService\ProfessionalServiceRepository;

/**
 * Class ProfessionalServiceRepositoryEloquent.
 *
 * @package namespace App\Repositories\ProfessionalService;
 */
class ProfessionalServiceRepositoryEloquent extends AppRepository implements ProfessionalServiceRepository
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
        return ProfessionalService::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
