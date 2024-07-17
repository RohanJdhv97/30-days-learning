<?php

use App\Models\Jobs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs'=> Jobs::all()]);
});
Route::get('/job/{id}', function ($id) {

    $jobData = Jobs::find($id);
    return view('job', ["job" => $jobData]);
});
