<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['title', 'slug', 'afficher','type', 'lien', 'description', 'content', 'category_id', 'author'];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
