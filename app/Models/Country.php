<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'iso3',
        'iso2',
        'phonecode',
        'capital',
        'currency',
        'native',
        'emoji',
    ];

    protected $appends = ['name_emoji'];

    public function getNameEmojiAttribute(){
        return $this->emoji.' '.$this->name;
    }
}
