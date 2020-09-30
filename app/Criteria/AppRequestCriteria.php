<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class CommonRequestCriteria.
 *
 * @package namespace App\Criteria;
 */
class AppRequestCriteria implements CriteriaInterface
{
    
    protected $request;

    /**
     * @var \Illuminate\Http\Request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */

     /* 
     * La paginación se hace en otro criterio 
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $has = $this->request->get('has', null);

        if(!is_null($has))
            $model->has($has);
        
        return $model;

    }
}
