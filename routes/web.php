<?php 

use Illuminate\Support\Facades\Route; 
use App\Models\Job; 

// Homepage
Route::get('/', function () { 
    return view('home'); 
}); 

// Jobs list
Route::get('/jobs', function () { 
    return view('jobs', [ 
        'jobs' => Job::all() 
    ]); 
}); 

// Single job page
Route::get('/jobs/{id}', function ($id) { 
    return view('job', [ 
        'job' => Job::find($id) 
    ]); 
});
