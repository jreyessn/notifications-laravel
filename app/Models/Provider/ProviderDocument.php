<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProviderDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'document_id',
        'provider_id',
        'name',
        'date',
        'approved',
        'note',
    ];

    public function document(){
        return $this->hasOne('App\Models\Document');
    }

    public function provider(){
        return $this->belongsTo('App\Models\Provider\Provider');
    }


}
