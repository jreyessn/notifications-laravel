<?php

namespace App\Repositories\Countries;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\City;
use App\Validators\Countries\CityValidator;

/**
 * Class CityRepositoryEloquent.
 *
 * @package namespace App\Repositories\Countries;
 */
class CityRepositoryEloquent extends BaseRepository
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
        return City::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
