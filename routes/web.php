<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

// Create job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index',['jobs'=>$jobs]
    );
});

// Insert job 
Route::post('/jobs', function () {

    request()->validate([
        'title'=> ['required','min:3'],
        'salary'=> ['required','min:4']
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1
    ]);
    return redirect('/jobs');
});

// Show Specific Job ID 
Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job'=> $job]);
});

// Update Job
Route::patch('/job/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:4']
    ]);

    $job = Job::findOrFail($id);
    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary')
    ]);

    return redirect('/job/'.$job->id);
});

//Destroy Job
Route::delete('/job/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

// Edit Job page
Route::get('/job/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job'=> $job]);
});