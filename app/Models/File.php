<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['type', 'title', 'name'];

    protected $appends = ['path'];

    public function getPathAttribute(){
        return $this->type.'/'.$this->name;
    }

}
