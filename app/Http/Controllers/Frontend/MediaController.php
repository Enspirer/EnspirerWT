<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

class MediaController extends Controller
{
    public function news() {

        $category = Category::where('name','News')->first();

        if($category != null){
            $all_posts = Post::where('category',$category->id)->where('status','Enabled')->orderBy('order','desc')->get();
            $posts = Post::where('category',$category->id)->where('status','Enabled')->take(3)->latest()->get();
        }
        else{
            $all_posts = null;
            $posts = null;
        }

        return view('frontend.latest_news',[
            'all_posts' => $all_posts,
            'posts' => $posts
        ]);
    }

    public function promotions() {

        $category = Category::where('name','Promotions')->first();

        if($category != null){
            $all_posts = Post::where('category',$category->id)->where('status','Enabled')->orderBy('order','desc')->get();
            $posts = Post::where('category',$category->id)->where('status','Enabled')->take(3)->latest()->get();
        }
        else{
            $all_posts = null;
            $posts = null;
        }

        return view('frontend.promotions',[
            'all_posts' => $all_posts,
            'posts' => $posts
        ]);
    }

    public function blogs() {

        $category = Category::where('name','Blogs')->first();

        if($category != null){
            $all_posts = Post::where('category',$category->id)->where('status','Enabled')->orderBy('order','desc')->get();
            $posts = Post::where('category',$category->id)->where('status','Enabled')->take(3)->latest()->get();
        }
        else{
            $all_posts = null;
            $posts = null;
        }

        return view('frontend.blog',[
            'all_posts' => $all_posts,
            'posts' => $posts
        ]);
    }

    public function singleNews($id) {

        $post_details = Post::where('id',$id)->first();

        return view('frontend.single_news',[
            'post_details' => $post_details
        ]);
    }

    public function tallentor_demo() {
        return view('frontend.tallentor_demo');
    }
}
