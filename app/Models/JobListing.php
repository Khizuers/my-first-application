<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    // If you want Laravel to allow mass-assignment, add fillable fields:
    protected $fillable = ['employer_id', 'title', 'salary'];

    // A JobListing belongs to one Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
