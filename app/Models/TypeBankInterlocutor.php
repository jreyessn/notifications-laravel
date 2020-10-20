<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBankInterlocutor extends Model
{
    protected $fillable = [
        'description',
        'default'
    ];
}
