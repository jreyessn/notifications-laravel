<?php

namespace App\Http\Controllers;

use App\Repositories\ToleranceGroup\TreasuryGroupRepositoryEloquent;
use Illuminate\Http\Request;

class TreasuryController extends Controller
{
    private $repository;

    function __construct(
        TreasuryGroupRepositoryEloquent $repository
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
