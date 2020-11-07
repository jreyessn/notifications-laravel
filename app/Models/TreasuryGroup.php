<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreasuryGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'group_id',
        'orden',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function group(){
        return $this->belongsTo('App\Models\Group');
    }
}
