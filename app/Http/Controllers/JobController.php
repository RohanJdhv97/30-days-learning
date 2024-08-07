<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store(Request $request)
    {
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
    }

    public function show(Job $job)
    {
        return view('jobs.show', ["job" => $job]);
    }
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required',
            'salary' => 'required',
        ]);
        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);

        return redirect('/job/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
