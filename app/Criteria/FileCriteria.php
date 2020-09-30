<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FileCriteria.
 *
 * @package namespace App\Criteria;
 */
class FileCriteria implements CriteriaInterface
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
        $type = request()->get(config('repository.criteria.params.type', 'type'), null);

        if(!is_null($type))
            $model->where('type', $type);

        return $model;
    }
}
