<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        //validate
        //authorize
        //return
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required']
        ]);
        $post = Auth::user()->posts()->create($attributes);



        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     * GET|HEAD        posts/{post} ............ posts.show › JobListingController@show  
     * */
    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //   GET|HEAD        posts/{post}/edit ....... posts.edit › JobListingController@edit 
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {

        $validateData = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect('/posts');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/posts");
    }
}
