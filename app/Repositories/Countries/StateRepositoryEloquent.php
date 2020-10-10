<?php

namespace App\Repositories\Countries;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\State;
use App\Validators\Countries\StateValidator;

/**
 * Class StateRepositoryEloquent.
 *
 * @package namespace App\Repositories\Countries;
 */
class StateRepositoryEloquent extends BaseRepository
{
    protected $fieldSearchable = [
        'name' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return State::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
