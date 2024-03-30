<?php

namespace App\Models;

use App\Models\Seeker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seeker extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

}
