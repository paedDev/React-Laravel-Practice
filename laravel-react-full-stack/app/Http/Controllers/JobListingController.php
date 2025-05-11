<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->latest()->simplePaginate(10);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    // render only the create form
    public function create()
    {
        return view('jobs.create');
    }
    public function show($id)
    {
        $job = JobListing::find($id);
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        // validation
        // authorization
        // persists
        // return
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = JobListing::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
        return redirect('/jobs');
    }
    public function edit($id)
    {
        $job = JobListing::find($id);
        return view('jobs.edit', ['job' => $job]);
    }
    public function update($id)
    {
        //validate
        // authorization
        // update
        //return
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        $job = JobListing::find($id);
        $job->update([
            'title' => request("title"),
            'salary' => request('salary')
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function destroy($id)
    {
        $job = JobListing::findOrFail($id)->delete();
        return redirect('/jobs');
    }
}
