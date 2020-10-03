<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProviderRequestEdit;
use Illuminate\Support\Facades\Mail;

use App\Notifications\RequestEditInformation;
use App\Notifications\ApprovedEditInformation;
use App\Repositories\Users\UserRepositoryEloquent;
use App\Http\Requests\Provider\ProviderStoreRequest;
use App\Repositories\Provider\ProviderRepositoryEloquent;

class ProviderController extends Controller
{

    private $providerRepository;

    public function __construct(
        ProviderRepositoryEloquent $providerRepository,
        UserRepositoryEloquent $userRepository
    ){
        $this->providerRepository = $providerRepository;
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->providerRepository->customPaginate();
    }

    // El proveedor envia post para solicitar editar su info. Se notifica por correo a todos los usuarios
    // de compras

    public function requestEditInformation(Request $request){

        $request->validate(['url' => 'required|string']);

        $user = $this->userRepository->with('provider')->find(1);

        $providerRequest = ProviderRequestEdit::create([
            'provider_id' => $user->provider->id
        ]);
        
        $toUsers = $this->userRepository->getUsersPermissionPurchases();

        foreach($toUsers as $toUser){  
            $toUser->notify(new RequestEditInformation($providerRequest, $request->url));      
        }

        return response()->json(['message' => 'Solicitud enviada correctamente'], 200);
    }

    // Solo el rol necesario puede aceptar la edicion del proveedor

    public function approvedEditInformation(Request $request){
        $user = $request->user();
        
        $providerRequest = ProviderRequestEdit::find($request->id);

        // validations

        if($providerRequest == null)
            return response()->json(['message' => 'ID de solicitud no encontrada'], 404);
            
        if($providerRequest->approved == 1)
            return response()->json(['message' => 'Solicitud ya se encuentra aprobada'], 200);
        
        if($providerRequest->approved == 2)
            return response()->json(['message' => 'Solicitud se encuentra rechazada'], 200);

        if(!$user->hasPermissionTo('providers_state.aprove_edit_information'))
            return response()->json(['message' => 'Usuario no cuenta con el permiso necesario para aprobar solicitudes'], 200);

        // actualizar y notificar al usuario

        $providerRequest->update(['user_id' => $user->id, 'approved' => 1]);
        $providerRequest->provider->update(['can_edit' => 1]);
        $providerRequest->provider->user->notify(new ApprovedEditInformation);

        return response()->json(['message' => 'Se ha aprobado la solicitud'], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderStoreRequest $request)
    {

        try {
            DB::beginTransaction();

            $data = $request->all();

            $store = $this->providerRepository->save($data);   
            
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
