<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'jabatan',
    ];

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }

    public function getFirstPhotoUrlAttribute()
    {
        $firstPhoto = $this->photos()->first();
        return $firstPhoto ? $firstPhoto->photo_url : null;
    }
}
