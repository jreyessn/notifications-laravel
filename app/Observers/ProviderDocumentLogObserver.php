<?php

namespace App\Observers;

use App\Models\Provider\ProviderDocument;
use App\Models\Provider\ProviderDocumentLog;

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
        //
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
            ProviderDocumentLog::create([
                'provider_document_id' => $providerDocument->id,
                'status_before' => $providerDocument->getOriginal('approved'),
                'status_after' => $providerDocument->approved,
                'note' => $providerDocument->note,
                'user_approver_id' => $providerDocument->user_approver_id
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
