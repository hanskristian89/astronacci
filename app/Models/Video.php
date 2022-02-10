<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'link',
    ];

    public function userVideos()
    {
        return $this->hasMany(UserVideos::class);
    }
}
