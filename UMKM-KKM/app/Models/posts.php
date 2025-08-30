<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Posts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'category_id',
        'status',
        'published_at'
    ];  

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $appends = ['thumbnail_url'];

    // Removed getThumbnailAttribute to avoid overriding the attribute

    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? Storage::url($this->thumbnail) : null;
    }
}
