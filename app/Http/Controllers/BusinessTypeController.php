<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;

use App\Repositories\BusinessType\BusinessTypeRepositoryEloquent;

class BusinessTypeController extends Controller
{
    private $fileRepository;

    public function __construct(
        BusinessTypeRepositoryEloquent $repository
    ){
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return $this->repository->customPaginate();
    }


}
