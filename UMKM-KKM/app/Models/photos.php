<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class photos extends Model
{
    //
    protected $fillable = [ 
        'photo_path',
        'caption'
    ];
    
    public function getPhotoUrlAttribute()
    {
        return $this->photo_path ? Storage::url($this->photo_path) : null;
    }
}
