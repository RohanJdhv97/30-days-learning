<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            [
                'id' => '1',
                'title' => 'Web Developer',
                'pay' => '5,00,000'
            ],
            [
                'id' => '2',
                'title' => 'Graphic Designer',
                'pay' => '10,00,000'
            ]
        ]
    ]);
});
Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'Web Developer',
            'pay' => '5,00,000'
        ],
        [
            'id' => '2',
            'title' => 'Graphic Designer',
            'pay' => '10,00,000'
        ]
    ];
    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    return view('jobs',$job);
});
