<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::latest()->simplePaginate(12);
        return view('language.index', [
            'languages' => $languages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // validate first
        // authorization
        // return
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required']
        ]);
        $language = Language::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect('/languages');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $language = Language::find($id);
        return view('language.show', ['language' => $language]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $language = Language::find($id);
        return view('language.edit', ['language' => $language]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required'],
        ]);
        $language = Language::find($id);
        $language->update([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect('/languages/' . $language->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id)->delete();
        return redirect('/languages');
    }
}
