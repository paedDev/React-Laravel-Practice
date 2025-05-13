<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

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
        $posts = Posts::latest()->simplePaginate(12);
        return view('posts.index', ['posts' => $posts]);
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
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $post = Posts::create($attributes);

        return redirect('/posts');
        // validate
        // return
        // auth
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //   PUT|PATCH       posts/{post} ........ posts.update › JobListingController@update  
    //   DELETE          posts/{post} ...... posts.destroy › JobListingController@destroy  
    //   GET|HEAD        posts/{post}/edit ....... posts.edit › JobListingController@edit 
    public function edit($id)
    {

        $post = Posts::find($id);
        return view('posts.edit', ['post' => $post]);
        /**
         * Update the specified resource in storage.
         */
    }
    public function update(Request $request,  $id)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $posts = Posts::find($id);
        $posts->update($attributes);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Posts::findOrFail($id)->delete();
        return redirect("/posts");
    }
}
