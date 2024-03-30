<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'skills',
        'languages',
        'project',
        'experience',
        'image',
        'email',
    ];
    public function seeker(){ // user in user view
        return $this->belongsTo('App\Models\Seeker');
    }
}
