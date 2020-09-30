<?php

namespace App\Repositories\Document;

use App\Models\Document;
use App\Repositories\AppRepository;
use App\Validators\Document\DocumentValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Document\DocumentRepository;

/**
 * Class DocumentRepositoryEloquent.
 *
 * @package namespace App\Repositories\Document;
 */
class DocumentRepositoryEloquent extends AppRepository implements DocumentRepository
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
        return Document::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
