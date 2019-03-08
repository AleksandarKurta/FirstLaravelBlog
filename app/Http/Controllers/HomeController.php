<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function statistics(){
        $posts = Post::all()->count();
        $trashed = Post::onlyTrashed()->get()->count();
        $users = User::all()->count();
        $categories = Category::all()->count();
        return view('admin.statistics', compact('posts', 'trashed', 'users', 'categories'));
    }
}
