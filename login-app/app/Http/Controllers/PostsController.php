<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //     GET|HEAD        posts ................. posts.index › JobListingController@index  
    //   POST            posts ................. posts.store › JobListingController@store  
    //   GET|HEAD        posts/create ........ posts.create › JobListingController@create  
    //   GET|HEAD        posts/{post} ............ posts.show › JobListingController@show  

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::with('employer')->latest()->simplePaginate(12);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $attributes['employer_id'] = '1';
        $post = Posts::create($attributes);

        return redirect('/posts');
        // validate
        // return
        // auth
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //   PUT|PATCH       posts/{post} ........ posts.update › JobListingController@update  
    //   DELETE          posts/{post} ...... posts.destroy › JobListingController@destroy  
    //   GET|HEAD        posts/{post}/edit ....... posts.edit › JobListingController@edit 
    public function edit(Posts $post)
    {
        return view('posts.edit', compact('post'));
        /**
         * Update the specified resource in storage.
         */
    }
    public function update(Posts $post)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post->update($attributes);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect("/posts");
    }
}
