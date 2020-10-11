<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Container\Container as Application;
use App\Criteria\AppRequestCriteria;

/**
 * Class AppRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
abstract class AppRepository extends BaseRepository
{

    private $request;

    /**
     * @var \Illuminate\Http\Request
     */
    function __construct(Application $app, Request $request)
    {
        parent::__construct($app);

        $this->request = $request;
    }

    /* 
    * El request perPage no se añade al criterio ya
    */
    public function customPaginate()
    {
        $perPage = (int) $this->request->get('perPage', config('repository.pagination.limit', 10));

        return $this->paginate($perPage);
    }

    public function boot(){
        $this->pushCriteria(app(AppRequestCriteria::class));
    }
    
}
