<?php

namespace App\Repositories\Intercompany;

use App\Repositories\AppRepository;
use App\Models\Intercompany;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\Intercompany\IntercompanyValidator;
use App\Repositories\Intercompany\IntercompanyRepository;

/**
 * Class IntercompanyRepositoryEloquent.
 *
 * @package namespace App\Repositories\Intercompany;
 */
class IntercompanyRepositoryEloquent extends AppRepository implements IntercompanyRepository
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
        return Intercompany::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
