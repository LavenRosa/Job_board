<?php

namespace App\Models;

use App\Models\Jobpost;
use App\Models\JobLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobLocation extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];
    public function jobs()
    {
        return $this->hasMany(Jobpost::class);
    }
}
