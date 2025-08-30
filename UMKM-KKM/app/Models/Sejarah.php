<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage;


class Sejarah extends Model
{
    //
    protected $fillable = ['content', 'image'];
    protected $table = 'sejarahs';

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
