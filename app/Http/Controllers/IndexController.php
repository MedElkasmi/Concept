<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section\Description;
use App\Models\Section\About;
use App\Models\Section\Menu;
use App\Models\Section\Service;
use App\Models\Blog\Post;
use App\Models\Blog\Comment;
use App\Models\User;
use App\Models\Blog\Category;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $Desc = Description::find(1);
        $about = About::find(1);
        $service = Service::all();

        return view('frontend.index', [
            'desc' => $Desc,
            'about' => $about,
            'service' => $service,
        ]);

    }

    public function blog() {

        // $posts = post::all();
        // $categories = $posts->categories;

        $posts = post::with('categories')->get();

        return view('frontend.blog.blogs', [

            'posts' => $posts,
        ]);

    }

    public function SingleBlog($id) {

        $post = Post::findOrFail($id);
        $comments = $post->comments()->count();

        return view('frontend.blog.blog_single',[
            'post' => $post,
            'comments' => $comments
        ]);

    }



}
