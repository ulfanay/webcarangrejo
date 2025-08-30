<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['content', 'luaswilayah', 'jumlahpenduduk', 'dusun'];
    protected $table = 'profiles';
}
