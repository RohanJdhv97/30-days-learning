<?php

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
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs', ['jobs' => $jobs]);
});
Route::get('/job/{id}', function ($id) {

    $jobData = Job::find($id);
    return view('job', ["job" => $jobData]);
});
