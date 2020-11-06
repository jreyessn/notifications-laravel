<?php

namespace App\Observers;

use App\Models\Provider\AuditStatusProvider;
use App\Models\Provider\ProviderSapAuthorization;

class ProviderSapAuthorizeLogObserver
{
    /**
     * Handle the provider document "created" event.
     *
     * @param  \App\Models\ProviderSapAuthorization  $ProviderSapAuthorization
     * @return void
     */
    public function created(ProviderSapAuthorization $ProviderSapAuthorization)
    {
            
    }

    /**
     * Handle the provider document "updated" event.
     *
     * @param  \App\Models\ProviderSapAuthorization  $ProviderSapAuthorization
     * @return void
     */
    public function updated(ProviderSapAuthorization $ProviderSapAuthorization)
    {        
        if($ProviderSapAuthorization->approved != $ProviderSapAuthorization->getOriginal('approved'))
            AuditStatusProvider::create([
                'model_id' => $ProviderSapAuthorization->id,
                'model_type' => ProviderSapAuthorization::class,
                'action' => 'Autorización SAP',
                'status_before' => $ProviderSapAuthorization->getOriginal('approved'),
                'status_after' => $ProviderSapAuthorization->approved,
                'note' => $ProviderSapAuthorization->note,
                'user_id' => request()->user()->id
            ]);
    }

    /**
     * Handle the provider document "deleted" event.
     *
     * @param  \App\Models\ProviderSapAuthorization  $ProviderSapAuthorization
     * @return void
     */
    public function deleted(ProviderSapAuthorization $ProviderSapAuthorization)
    {
        //
    }

    /**
     * Handle the provider document "restored" event.
     *
     * @param  \App\Models\ProviderSapAuthorization  $ProviderSapAuthorization
     * @return void
     */
    public function restored(ProviderSapAuthorization $ProviderSapAuthorization)
    {
        //
    }

    /**
     * Handle the provider document "force deleted" event.
     *
     * @param  \App\Models\ProviderSapAuthorization  $ProviderSapAuthorization
     * @return void
     */
    public function forceDeleted(ProviderSapAuthorization $ProviderSapAuthorization)
    {
        //
    }
}
