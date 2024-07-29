<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionsController;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/sessions', [SessionsController::class, 'show']);
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/jobs/create', 'jobs.create');

// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs', 'index');
//     Route::post('/jobs', 'store');
//     Route::get('/job/{job}', 'show');
//     Route::patch('/job/{job}', 'update');
//     Route::delete('/job/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class, [
    'except' => ['create', 'edit']
]);

Route::get('/job/{job}/edit', function (Job $job){return view('jobs.edit', ['job' => $job]);});