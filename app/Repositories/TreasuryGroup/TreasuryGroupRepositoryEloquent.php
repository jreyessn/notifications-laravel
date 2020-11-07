<?php

namespace App\Repositories\ToleranceGroup;

use App\Repositories\AppRepository;
use App\Models\TreasuryGroup;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class TreasuryGroupRepositoryEloquent.
 *
 * @package namespace App\Repositories\TreasuryGroupRepositoryEloquent;
 */
class TreasuryGroupRepositoryEloquent extends AppRepository
{
    protected $fieldSearchable = [
        'description' => 'like',
        'code' => 'like',
        'group.description' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TreasuryGroup::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
