<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class PhaseProviderCriteria.
 *
 * @package namespace App\Criteria;
 */

 /* 
 * Los proveedores tienen 3 fases en registro.
 * 
 * 1 - En aprobración de documentos. La logica aplicada es que estos proveedores no tienen registro en la tabla de provider_sap
 * Por lo que se interpreta que aún está en fase aprobación por compras. 
 * 
 * 2- Por autorizar a SAP. Cuando un proveedor se le aprueban los documentos, se procede su registro para SAP y una vez listo, se encuentra
 * en esta fase numero 2. De aquí solo falta esperar que los roles designados para autorizar, den la aprobación o no
 * 
 * 3- Contratado/Rechazado. El filtro 3 es contrato y 5 rechazado. Es cuando alguien ya contrata o rechaza a un proveedor.
 * 
 * 4 - El filtro de inactivo es cuando un proveedor contratado de inactiva simplemente
 */
class PhaseProviderCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $filterPhase = request()->get(config('repository.criteria.params.filterPhase', 'filterPhase'), null);
        $documents_approved = request()->get(config('repository.criteria.params.documents_approved', 'documents_approved'), null);

        switch($filterPhase){
            case 1: 
                $model = $model->has('provider_sap',  '<', 1);
            break;

            case 2:
                $model = $model->has('provider_sap');
            break;

            case 3:
                $model = $model->where('contracted', 1);
            break;
            
            case 5:
                $model = $model->where('contracted', 2);
            break;
        }

        if($documents_approved != 1)
            return $model;

        $model = $model->whereHas('documents', function($query){
            $query->where('approved', 1);
        });

        return $model;

    }
}
