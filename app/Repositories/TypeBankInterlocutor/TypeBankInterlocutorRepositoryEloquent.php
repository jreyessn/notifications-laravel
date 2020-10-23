<?php

namespace App\Repositories\Treatment;

use App\Models\TypeBankInterlocutor;
use App\Repositories\AppRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class TypeBankInterlocutorRepositoryEloquent.
 *
 * @package namespace App\Repositories\TypeBankInterlocutorRepositoryEloquent;
 */
class TypeBankInterlocutorRepositoryEloquent extends AppRepository
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
        return TypeBankInterlocutor::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
