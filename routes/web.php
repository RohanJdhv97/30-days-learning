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

Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required',
        'salary' => 'required',
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => Employer::first()->id,
    ]);

    return redirect('/jobs');
});

Route::get('/job/{id}/edit', function ($id){
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::get('/job/{id}', function ($id) {

    $jobData = Job::find($id);
    return view('jobs.show', ["job" => $jobData]);
});
Route::patch('/job/{id}', function ($id) {
    request()->validate([
        'title' => 'required',
        'salary' => 'required',
    ]);
    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/job/' . $job->id);
});
Route::delete('/job/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

