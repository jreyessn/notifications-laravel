<?php

namespace App\Observers;

use App\Models\Provider\ProviderSapAuthorization;
use App\Models\Provider\ProviderSapAuthorizationLog;

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
        if($ProviderSapAuthorization->approved != $ProviderSapAuthorization->getOriginal('approved') && !is_null($ProviderSapAuthorization->user_id))
            ProviderSapAuthorizationLog::create([
                'provider_sap_authorization_id' => $ProviderSapAuthorization->id,
                'status_before' => $ProviderSapAuthorization->getOriginal('approved'),
                'status_after' => $ProviderSapAuthorization->approved,
                'note' => $ProviderSapAuthorization->note,
                'approver_by_user_id' => $ProviderSapAuthorization->user_id
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
