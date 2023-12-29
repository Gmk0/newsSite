<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'content', 'user_id'];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Relation avec le modèle Reply
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
