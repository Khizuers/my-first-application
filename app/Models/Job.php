<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel to use our job_listings table instead of jobs
    protected $table = 'job_listings';

    // Part 1: Define the relationship to Employer
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // Part 3: Define the many-to-many relationship with tags
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class,  // Related model
            'job_listing_tag',        // Pivot table name
            'job_listing_id',         // Foreign key on pivot for this model
            'tag_id'                  // Foreign key on pivot for the related model
        );
    }
}
