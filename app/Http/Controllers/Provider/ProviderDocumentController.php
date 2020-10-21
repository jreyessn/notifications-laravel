<?php

namespace App\Http\Controllers\Provider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Provider\ProviderDocument;

class ProviderDocumentController extends Controller
{

    public function changeStatus(Request $request){
        $providerDocument = ProviderDocument::findOrFail($request->provider_document_id);
     
        if(!$request->user()->hasPermissionTo('approve documents'))
            return response()->json(['message' => 'No cuenta con el permiso necesario para aprobar documentos'], 400);

        try {

            $providerDocument->approved = $request->status;
            $providerDocument->note = $request->note;
            $providerDocument->approver_by_user_id = $request->user()->id;
            $providerDocument->save();

            return response()->json(['message' => 'Se ha cambiado el estado del documento con éxito'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ocurrió un error al guardar. Contactar con soporte.'], 500);
        }
        
    }

}
