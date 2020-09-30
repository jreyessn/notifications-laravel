<?php

namespace App\Repositories\FormsTemporary;

use App\Repositories\AppRepository;
use App\Models\FormsTemporary;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\FormsTemporary\FormsTemporaryValidator;
use App\Repositories\FormsTemporary\FormsTemporaryRepository;

/**
 * Class FormsTemporaryRepositoryEloquent.
 *
 * @package namespace App\Repositories\FormsTemporary;
 */
class FormsTemporaryRepositoryEloquent extends AppRepository implements FormsTemporaryRepository
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
        return FormsTemporary::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
