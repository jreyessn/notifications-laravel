<?php

namespace App\Repositories\Countries;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Country;

/**
 * Class CountryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Countries;
 */
class CountryRepositoryEloquent extends BaseRepository
{

    protected $fieldSearchable = [
        'name' => 'like',
        'iso3' => 'like',
        'iso2' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Country::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
