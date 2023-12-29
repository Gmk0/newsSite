<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
    'title',
    'slug',
    'description',
    'content',
    'author',
    'category_id',
    'lien',
    'type',
    'views_count',
    'is_featured',
    'published_at'
     ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
