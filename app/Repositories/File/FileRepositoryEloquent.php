<?php

namespace App\Repositories\File;

use App\Models\File;
use App\Criteria\FileCriteria;
use App\Repositories\AppRepository;
use App\Repositories\File\FileRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class FileRepositoryEloquent.
 *
 * @package namespace App\Repositories\File;
 */
class FileRepositoryEloquent extends AppRepository implements FileRepository
{

    protected $fieldSearchable = [
        'title' => 'like',
        'name' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return File::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->pushCriteria('App\Criteria\FileCriteria');
    }
    
}
