<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserArticles extends Model
{
    use HasFactory;

    protected $table = 'user_articles';

    protected $fillable = [
        'id_user',
        'id_article',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
