<?php

namespace App\Repositories\Society;

use App\Models\Society;
use App\Repositories\AppRepository;
use App\Validators\Society\SocietyValidator;
use App\Repositories\Society\SocietyRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class SocietyRepositoryEloquent.
 *
 * @package namespace App\Repositories\Society;
 */
class SocietyRepositoryEloquent extends AppRepository implements SocietyRepository
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
        return Society::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
