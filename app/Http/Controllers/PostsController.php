<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count() == 0){
            Session::flash('info', 'You must have some categories created before you create post.');
            return back();
        }
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'featured' => 'required|image',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        $featured = $attributes['featured'];
        $featuredNewName = time() . $featured->getClientOriginalName();
        $featured->move('uploads/posts', $featuredNewName);
        $attributes['featured'] = 'uploads/posts/' .  $featuredNewName;
        
        $attributes['slug'] = str_slug($attributes['title']);
        
        Post::create($attributes);

        Session::flash('success', 'Post created successfully.');

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        if(request()->hasFile('featured')){
            $featured = request()->featured;
            $featuredNewName = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featuredNewName);
            $attributes['featured'] = 'uploads/posts/' . $featuredNewName;
        }

        $attributes['slug'] = str_slug($attributes['title']);

        $post->update($attributes);

        Session::flash('success', 'Post updated successfully.');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        Session::flash('success', 'Post has been moved to trash.');

        return back();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed', compact('posts'));
    }

    public function kill($id){
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post has been deleted permanently.');

        return back();
    }

    public function restore($id){
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success', 'Post has been restored successfully.');

        return redirect()->route('post.index');
    }
}
