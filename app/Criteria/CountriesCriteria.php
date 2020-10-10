<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CountriesCriteria.
 *
 * @package namespace App\Criteria;
 */
class CountriesCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $country_id = request()->get(config('repository.criteria.params.country_id', 'country_id'), null);
        $state_id = request()->get(config('repository.criteria.params.state_id', 'state_id'), null);
        
        if(!is_null($country_id))
            $model = $model->where('country_id', $country_id);

            
        if(!is_null($state_id))
            $model = $model->where('state_id', $state_id);

        return $model;
    }
}
