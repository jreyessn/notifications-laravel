<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Repositories\Provider\ProviderSapAuthoRepositoryEloquent;
use App\Repositories\Provider\ProviderSapRepositoryEloquent;
use Illuminate\Http\Request;

class ProviderSapAuthorizationController extends Controller
{

    protected $sapRepository;
    protected $sapAuthoRepository;
    
    function __construct(ProviderSapRepositoryEloquent $sapRepository, ProviderSapAuthoRepositoryEloquent $sapAuthoRepository)
    {
        $this->sapRepository = $sapRepository;    
        $this->sapAuthoRepository = $sapAuthoRepository;    
    }

    public function store(Request $request){
     
        if(!$request->user()->hasPermissionTo('approve to sap'))
            return response()->json(['message' => 'No cuenta con el permiso necesario para aprobar documentos'], 400);

        try {

            $data = $request->all();
            $data['user_id'] = $request->user()->id;

            $this->sapAuthoRepository->create($data);

            return response()->json(['message' => 'Se ha autorizado este registro'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ocurrió un error al autorizar. Contactar con soporte.'], 500);
        }
    }

    public function show($id){
        $providerSap = $this->sapAuthoRepository->getProviderSapWithAuthorizationMap($id);

        return $providerSap;
    }

}
