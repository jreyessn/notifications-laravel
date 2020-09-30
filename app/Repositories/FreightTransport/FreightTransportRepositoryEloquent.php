<?php

namespace App\Repositories\FreightTransport;

use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\FreightTransport;
use App\Validators\FreightTransport\FreightTransportValidator;
use App\Repositories\FreightTransport\FreightTransportRepository;

/**
 * Class FreightTransportRepositoryEloquent.
 *
 * @package namespace App\Repositories\FreightTransport;
 */
class FreightTransportRepositoryEloquent extends AppRepository implements FreightTransportRepository
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
        return FreightTransport::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
