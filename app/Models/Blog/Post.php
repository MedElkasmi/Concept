<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Category;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories() {

        return $this->belongsToMany('App\Models\Blog\Category');
    }
}
