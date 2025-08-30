<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    //
    
    protected $fillable = [
        'name',
        'description',
        'carousel_image',
    ];

    public function getFirstPhotoUrlAttribute()
    {
        $firstPhoto = $this->photos()->first();
        return $firstPhoto ? $firstPhoto->photo_url : null;
    }
}
