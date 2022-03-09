<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;


class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status','Enabled')->orderBy('order','desc')->get();
        // dd($posts);

        return view('frontend.blog',[
            'posts' => $posts
        ]);
    }

    public function solo_post($id)
    {
        $post = Post::where('id',$id)->first();
        $category = Category::where('id',$post->category)->first();
        // dd($post);

        return view('frontend.solo_post',[
            'post' => $post,
            'category' => $category
        ]);
    }
}
