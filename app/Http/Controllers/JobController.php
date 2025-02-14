<?php

namespace App\Http\Controllers;
use App\Mail\JobPostedMail;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->latest()->simplePaginate(3)
        ]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);


        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        // Send email
        \Mail::to(auth()->user())->send(new JobPostedMail($job));

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // Validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:3'],
        ]);

        // Update
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/'.$job->id);
    }

    public function destroy(Job $job)
    {
        // Delete
        $job->delete();

        return redirect('/jobs');
    }
}
