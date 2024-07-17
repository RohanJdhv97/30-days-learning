<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Jobs
{
    public static function all(): array
    {
        return [
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
    }

    public static function find($id): array
    {
        $jobs = Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        return $jobs;
    }
}