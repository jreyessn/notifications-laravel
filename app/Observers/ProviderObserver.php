<?php

namespace App\Observers;

use App\Models\Provider\AuditStatusProvider;
use App\Models\Provider\Provider;

class ProviderObserver
{
    /**
     * Handle the provider document "updated" event.
     *
     * @param  \App\Models\Provider  $provider
     * @return void
     */
    public function updated(Provider $provider)
    {        
        
        // si se contrata/rechaza

        if($provider->contracted != $provider->getOriginal('contracted') && !is_null($provider->contracted_by_user_id))
            AuditStatusProvider::create([
                'model_id' => $provider->id,
                'model_type' => Provider::class,
                'action' => 'Contratación',
                'status_before' => $provider->getOriginal('contracted'),
                'status_after' => $provider->contracted,
                'note' => $provider->note,
                'user_id' => $provider->contracted_by_user_id
            ]);

        // si se inactiva o desactiva

        if($provider->inactivated_at != $provider->getOriginal('inactivated_at'))
            AuditStatusProvider::create([
                'model_id' => $provider->id,
                'model_type' => Provider::class,
                'action' => 'Reactivación/Inactivación',
                'status_before' => is_null($provider->getOriginal('inactivated_at'))? 0 : 1,
                'status_after' => is_null($provider->inactivated_at)? 0 : 1,
                'note' => $provider->reason_inactivated,
                'user_id' => request()->user()->id
            ]);
    }
}
