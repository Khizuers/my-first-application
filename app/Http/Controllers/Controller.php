<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    // Show all jobs
    public function index()
    {
        // Eager load employer and tags to avoid extra queries
        $jobs = Job::with(['employer', 'tags'])->get();
        return view('jobs', compact('jobs'));
    }

    // Show a single job
    public function show(Job $job)
    {
        // Eager load relationships
        $job->load(['employer', 'tags']);
        return view('job', compact('job'));
    }
}
