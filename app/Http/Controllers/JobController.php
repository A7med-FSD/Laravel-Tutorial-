<?php

namespace App\Http\Controllers;

use App\Mail\JobMail;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }
    public function create() {
        return view('jobs.create');
    }
    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }
    public function store() {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:4']
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        $mail = new JobMail($job);
        Mail::to($job->employer->user)->queue($mail->delay(10)); //by default $job->employer->user->email 

        return redirect('/jobs');
    }
    public function update(Job $job) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:4']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }
    public function destory(Job $job) {
        $job->delete();
        return redirect('/jobs');
    }
    public function edit(Job $job) {

        return view('jobs.edit', ['job' => $job]);
    }
}
