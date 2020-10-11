<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Document\DocumentRepositoryEloquent;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    private $repository;

    function __construct(
        DocumentRepositoryEloquent $repository
    ){
        $this->repository = $repository;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->repository->customPaginate();
    }

    public function show(Request $request, $id, $download = null){
        $document = $this->repository->find($id);

        if(!$download)
            return $document;
        return Storage::disk('local')->download('examples_documents/'.$document->example, $document->example);

    }

}
