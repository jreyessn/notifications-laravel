<?php

namespace App\Models\Provider;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Observers\ProviderSapAuthorizeLogObserver;

class ProviderSapAuthorization extends Model
{
    protected $fillable = [
        'provider_sap_id',
        'approved',
        'note',
        'user_id',
    ];

    protected $appends = [
        'created_at_format',
        'approved_text'
    ];

    private $status = ['En espera', 'Aprobado', 'Rechazado'];

    public function getApprovedTextAttribute(){
        return $this->status[$this->approved];
    }

    public function getCreatedAtFormatAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y H:i');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected static function boot(){
        parent::boot();

        ProviderDocument::observe(ProviderSapAuthorizeLogObserver::class);
    }
}
