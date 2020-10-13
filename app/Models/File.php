<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['type', 'title', 'name', 'description'];

    protected $appends = ['path', 'published_at'];

    public function getPathAttribute(){
        return $this->type.'/'.$this->name;
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

}
