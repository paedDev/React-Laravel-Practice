<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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
    public function show(JobListing $job)
    {

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
        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );
        return redirect('/jobs');
    }
    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }
    public function update(JobListing $job)
    {
        //validate
        // authorization
        // update
        //return

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        $job->update([
            'title' => request("title"),
            'salary' => request('salary')
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(JobListing $job)
    {

        $job->delete();
        return redirect('/jobs');
    }
}
