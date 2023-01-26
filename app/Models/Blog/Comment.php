<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post(){

        return $this->belongsTo(Post::class);
    }
}
