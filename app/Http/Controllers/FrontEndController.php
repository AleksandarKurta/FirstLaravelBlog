<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        $firstPost = Post::orderBy('created_at', 'desc')->first();
        $laravel = Category::where('name','Laravel 5.8')->first();
        $vue = Category::where('name','Vue JS')->first();
        return view('welcome', compact('categories', 'settings', 'firstPost', 'laravel', 'vue'));
    }

    public function singlePost($slug){
        $post = Post::where('slug', $slug)->first();
        $settings = Setting::first();
        $categories = Category::take(5)->get();
        $nextId = Post::where('id', '>', $post->id)->min('id');
        $prevId = Post::where('id', '<', $post->id)->max('id');
        $nextPost = Post::find($nextId);
        $prevPost = Post::find($prevId);
        $tags = Tag::all();
        return view('single', compact('settings', 'categories', 'post', 'nextPost', 'prevPost', 'tags'));
    }

    public function category($id){
        $settings = Setting::first();
        $categories = Category::take(5)->get();
        $category = Category::find($id);
        return view('category', compact('settings', 'categories', 'category'));
    }

    public function tag($id){
        $settings = Setting::first();
        $categories = Category::take(5)->get();
        $tag = Tag::find($id);
        return view('tag', compact('settings', 'categories', 'tag'));
    }

    public function search(){
        $posts = \App\Post::where('title', 'like', '%' . request('query') . '%')->orWhere('content', 'like', '%' . request('query') . '%')->get();
        $settings = \App\Setting::first();
        $categories = \App\Category::take(5)->get();
        $title = 'Search result for: ' . request('query');
        return view('results', compact('posts', 'settings', 'categories', 'title'));
    }
}
