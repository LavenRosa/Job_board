<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;
    protected $fillable =[
        'job_id',
        'profile_id',
        'cv_form',
        'status',
        'submitted_date'
    ];
}
