<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

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
        $tags = Tag::all();

        if($categories->count() == 0 || $tags->count() == 0){
            Session::flash('info', 'You must have some categories and tags created before you create post.');
            return back();
        }

        return view('admin.posts.create', compact('categories', 'tags'));
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
            'content' => 'required',
            'tags' => 'required',
        ]);

        $featured = $attributes['featured'];
        $featuredNewName = time() . $featured->getClientOriginalName();
        $featured->move('uploads/posts', $featuredNewName);
        $attributes['featured'] = 'uploads/posts/' .  $featuredNewName;
        
        $attributes['slug'] = str_slug($attributes['title']);
        $attributes['user_id'] = Auth::id();

        $post = Post::create($attributes);
        
        $post->tags()->attach($attributes['tags']);

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
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
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
            'content' => 'required',
            'tags' => 'required'
        ]);

        if(request()->hasFile('featured')){
            $featured = request()->featured;
            $featuredNewName = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featuredNewName);
            $attributes['featured'] = 'uploads/posts/' . $featuredNewName;
        }

        $attributes['slug'] = str_slug($attributes['title']);
        $attributes['user_id'] = Auth::id();

        $post->update($attributes);

        $post->tags()->sync($attributes['tags']);

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

        $post->tags()->detach();

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
