<?php

namespace App\Repositories\FixedAsset;

use App\Repositories\AppRepository;
use App\Models\FixedAsset;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\FixedAsset\FixedAssetValidator;
use App\Repositories\FixedAsset\FixedAssetRepository;

/**
 * Class FixedAssetRepositoryEloquent.
 *
 * @package namespace App\Repositories\FixedAsset;
 */
class FixedAssetRepositoryEloquent extends AppRepository implements FixedAssetRepository
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
        return FixedAsset::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
