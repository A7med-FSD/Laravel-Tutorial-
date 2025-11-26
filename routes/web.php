<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index',['jobs'=>$jobs]
    );
});
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

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job'=> $job]);
});