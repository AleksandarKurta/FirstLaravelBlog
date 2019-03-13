<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use App\Post;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        $firstPost = Post::orderBy('created_at', 'desc')->first();
        $secondPost = Post::orderBy('created_at', 'desc')->skip(1)->take(1)->first();
        $thirdPost = Post::orderBy('created_at', 'desc')->skip(2)->take(1)->first();
        $laravel = Category::where('name','Laravel 5.8')->first();
        $vue = Category::where('name','Vue JS')->first();
        return view('welcome', compact('categories', 'settings', 'firstPost', 'secondPost', 'thirdPost', 'laravel', 'vue'));
    }
}
