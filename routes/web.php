<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs',function(){
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => Employer::first()->id,
    ]);

    return redirect('/jobs');
});

Route::get('/job/{id}', function ($id) {

    $jobData = Job::find($id);
    return view('jobs.show', ["job" => $jobData]);
});
