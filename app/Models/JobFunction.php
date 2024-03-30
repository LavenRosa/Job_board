<?php

namespace App\Models;

use App\Models\Jobpost;
use App\Models\JobFunction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobFunction extends Model
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
