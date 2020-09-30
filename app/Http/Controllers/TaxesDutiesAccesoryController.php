<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaxesDutiesAccesory\TaxesDutiesAccesoryRepositoryEloquent;

class TaxesDutiesAccesoryController extends Controller
{
    private $repository;

    function __construct(
        TaxesDutiesAccesoryRepositoryEloquent $repository
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
