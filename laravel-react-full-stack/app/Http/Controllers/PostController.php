<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // GET|HEAD        posts ................. posts.index › JobListingController@index  
    //   POST            posts ................. posts.store › JobListingController@store  
    //   GET|HEAD        posts/create ........ posts.create › JobListingController@create  
    //  
    //   PUT|PATCH       posts/{post} ........ posts.update › JobListingController@update  
    //   DELETE          posts/{post} ...... posts.destroy › JobListingController@destroy  

    public function index()
    {
        $posts = Post::latest()->paginate();
        // dd($posts->items());
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
        //validate
        //authorize
        //return
        request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required']
        ]);
        $post = Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     * GET|HEAD        posts/{post} ............ posts.show › JobListingController@show  
     * */
    public function show(string $id)
    {
        $posts = Post::find($id);
        return view('posts.show', ['post' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //   GET|HEAD        posts/{post}/edit ....... posts.edit › JobListingController@edit 
    public function edit(string $id)
    {
        $posts = Post::find($id);
        return view('posts.edit', ['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($id);
        $post->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect('/posts');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findORfail($id)->delete();
        return redirect("/posts");
    }
}
