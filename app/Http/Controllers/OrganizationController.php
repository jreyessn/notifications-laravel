<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Organization\OrganizationRepositoryEloquent;

class OrganizationController extends Controller
{
    private $repository;

    function __construct(
        OrganizationRepositoryEloquent $repository
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
