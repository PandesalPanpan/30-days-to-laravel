<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {

    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(3)
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3', 'numeric'],
    ]);


    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
});

// Edit
Route::patch('/jobs/{id}', function ($id) {
    // Validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3', 'numeric'],
    ]);

    // Auth

    // Update
    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/'.$id);
});

// Delete
Route::delete('/jobs/{id}', function ($id) {
    // Auth

    // Delete
    $job = Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});

