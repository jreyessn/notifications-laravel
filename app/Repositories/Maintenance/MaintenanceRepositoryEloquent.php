<?php

namespace App\Repositories\Maintenance;

use App\Repositories\AppRepository;
use App\Models\Maintenance;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\Maintenance\MaintenanceValidator;
use App\Repositories\Maintenance\MaintenanceRepository;

/**
 * Class MaintenanceRepositoryEloquent.
 *
 * @package namespace App\Repositories\Maintenance;
 */
class MaintenanceRepositoryEloquent extends AppRepository implements MaintenanceRepository
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
        return Maintenance::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
