<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVideos extends Model
{
    use HasFactory;

    protected $table = 'user_videos';

    protected $fillable = [
        'id_user',
        'id_video',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->belongsTo(Video::class);
    }
}
