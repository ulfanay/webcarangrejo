<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = ['name', 'slug'];
    
    public function posts()
    {
        return $this->hasMany(Posts::class, 'category_id');
    }
}
