<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProviderReference extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'provider_id',
        'business_name',
        'contact',
        'phone',
        'email',
    ];
}
