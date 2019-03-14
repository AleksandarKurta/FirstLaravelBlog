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
        $laravel = Category::where('name','Laravel 5.8')->first();
        $vue = Category::where('name','Vue JS')->first();
        return view('welcome', compact('categories', 'settings', 'firstPost', 'laravel', 'vue'));
    }

    public function singlePost(){
        $settings = Setting::first();
        $categories = Category::take(5)->get();
        return view('single', compact('settings', 'categories'));
    }
}
