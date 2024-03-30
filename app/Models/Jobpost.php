<?php

namespace App\Models;

use App\Models\Jobpost;
use App\Models\JobFunction;
use App\Models\JobLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobpost extends Model
{
    use HasFactory;
    protected $fillable =[
        'job_position',
        'jobfunction_id',
        'joblocation_id',
        'company_name',
        'company_location',
        'company_logo',
        'description',
        'reponsibilities',
        'requirements',
        'salary',
        'job_type',
        'job_created_date'
    ];

    public function function()
    {
        return $this->belongsTo(JobFunction::class, 'jobfunction_id');
    }

    public function location()
    {
        return $this->belongsTo(JobLocation::class, 'joblocation_id');
    }
    public static function search($search)
    {
        $searchs = explode(' ', $search);
        $query = self::query();
        foreach ($searchs as $term) {
            $query->where(function ($q) use ($term) {
                $q->where('job_position', 'LIKE', '%' . $term . '%')
                    ->orWhere('company_name', 'LIKE', '%' . $term . '%');
            });
        }

        return $query->get();
    }


}
