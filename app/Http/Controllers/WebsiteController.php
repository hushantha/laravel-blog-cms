<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class WebsiteController extends Controller
{

    // public $categories = Category::orderBy('id', 'desc')->take(15)->where('is_published', 1)->get();
    // public $recentPosts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();

    public function index() {
        $posts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();
        $recentPosts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();
        $categories = Category::orderBy('id', 'desc')->take(15)->where('is_published', 1)->get();
        return view('pages.index')->with(['posts'=>$posts, 'categories'=>$categories, 'recentPosts'=>$recentPosts]);
    }

    public function blog() {
        $categories = Category::orderBy('id', 'desc')->take(15)->where('is_published', 1)->get();
        $posts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->paginate(10);
        $recentPosts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();
        return view('pages.blog')->with(['posts'=>$posts, 'categories'=>$categories, 'recentPosts'=>$recentPosts]);
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', 1)->first();
        $recentPosts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();
        $categories = Category::orderBy('id', 'desc')->take(15)->where('is_published', 1)->get();

        return view('pages.single-post')->with(['post'=>$post, 'categories'=>$categories, 'recentPosts'=>$recentPosts]);
    }

    public function category($slug) {

        $category = Category::where('slug', $slug)->where('is_published', 1)->first();
        if($category) {
            $posts = $category->posts()->orderBy('posts.id', 'DESC')->where('is_published', 1)->paginate(10);
        }
        $recentPosts = Post::orderBy('id', 'desc')->take(5)->where('is_published', 1)->get();
        $categories = Category::orderBy('id', 'desc')->take(15)->where('is_published', 1)->get();

        return view('pages.category')->with(['category'=>$category, 'posts'=>$posts, 'recentPosts'=>$recentPosts, 'categories'=>$categories]);
    }
}