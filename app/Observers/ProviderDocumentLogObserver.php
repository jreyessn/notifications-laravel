<?php

namespace App\Observers;

use App\Models\Provider\AuditStatusProvider;
use App\Models\Provider\ProviderDocument;

class ProviderDocumentLogObserver
{
    /**
     * Handle the provider document "created" event.
     *
     * @param  \App\Models\ProviderDocument  $providerDocument
     * @return void
     */
    public function created(ProviderDocument $providerDocument)
    {
        
    }
    
    /**
     * Handle the provider document "updated" event.
     *
     * @param  \App\Models\ProviderDocument  $providerDocument
     * @return void
     */
    public function updated(ProviderDocument $providerDocument)
    {
    
        if($providerDocument->approved != $providerDocument->getOriginal('approved'))
            AuditStatusProvider::create([
                'model_id' => $providerDocument->id,
                'model_type' => ProviderDocument::class,
                'action' => 'Aprobación',
                'status_before' => $providerDocument->getOriginal('approved'),
                'status_after' => $providerDocument->approved,
                'note' => $providerDocument->approved == 0? 'Documento resubido' : $providerDocument->note,
                'user_id' => request()->user()->id
            ]);
    }

    /**
     * Handle the provider document "deleted" event.
     *
     * @param  \App\Models\ProviderDocument  $providerDocument
     * @return void
     */
    public function deleted(ProviderDocument $providerDocument)
    {
        //
    }

    /**
     * Handle the provider document "restored" event.
     *
     * @param  \App\Models\ProviderDocument  $providerDocument
     * @return void
     */
    public function restored(ProviderDocument $providerDocument)
    {
        //
    }

    /**
     * Handle the provider document "force deleted" event.
     *
     * @param  \App\Models\ProviderDocument  $providerDocument
     * @return void
     */
    public function forceDeleted(ProviderDocument $providerDocument)
    {
        //
    }
}
