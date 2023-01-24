<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories() {

        return $this->belongsToMany(Category::class);
    }

    public function tags() {

        return $this->belongsToMany(Tag::class);
    }
}
