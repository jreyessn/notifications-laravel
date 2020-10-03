<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderRequestEdit extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'user_id',
        'note',
        'approved'
    ];

    protected $with = ['provider'];

    public function provider(){
        return $this->belongsTo('App\Models\Provider\Provider');
    }
}
