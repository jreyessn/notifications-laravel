<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Society\SocietyRepositoryEloquent;

class SocietyController extends Controller
{
    private $repository;

    function __construct(
        SocietyRepositoryEloquent $repository
    ){
        $this->repository = $repository;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $this->repository->customPaginate();
    }
}
