<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Provider\ProviderSapStoreRequest;
use App\Repositories\Provider\ProviderSapRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderSapController extends Controller
{

    protected $sapRepository;
    
    function __construct(ProviderSapRepositoryEloquent $sapRepository)
    {
        $this->sapRepository = $sapRepository;    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderSapStoreRequest $request)
    {

        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['created_by_user_id'] = $request->user()->id;

            $store = $this->sapRepository->save($data);   
            
            DB::commit();

            return response()->json([
                "message" => "Registro éxitoso",
                "data" => $store
            ], 201);
        } 
        catch (\Exception $th) {
            DB::rollback();

            return response()->json(['message' => $th->getMessage()], 500);
        }
    }


}
