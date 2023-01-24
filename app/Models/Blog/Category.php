<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Post;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function posts(){

        return $this->belongsToMany(Post::class);
    }
}
