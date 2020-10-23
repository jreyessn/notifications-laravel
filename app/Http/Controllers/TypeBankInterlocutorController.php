<?php

namespace App\Http\Controllers;

use App\Repositories\Treatment\TypeBankInterlocutorRepositoryEloquent;

class TypeBankInterlocutorController extends Controller
{
    private $repository;

    function __construct(
        TypeBankInterlocutorRepositoryEloquent $repository
    ){
        $this->repository = $repository;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return $this->repository->customPaginate();
    }
}
