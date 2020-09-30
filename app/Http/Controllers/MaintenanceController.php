<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Maintenance\MaintenanceRepositoryEloquent;

class MaintenanceController extends Controller
{
    private $repository;

    function __construct(
        MaintenanceRepositoryEloquent $repository
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
