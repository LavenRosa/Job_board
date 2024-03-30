<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use App\Models\JobFunction;
use App\Models\JobLocation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $jobs = Jobpost::latest('created_at')->take(8)->get();
        $functions = JobFunction::all();
        $locations = JobLocation::all();
        return view('frontend.index', compact('jobs', 'functions', 'locations'));
    }
    // public function nav(){
    //     //$jobs = Jobpost::latest('created_at')->take(8)->get();
    //     $function = JobFunction::all();
    //     $location = JobLocation::all();
    //     return view('frontend.components.nav', compact('function', 'location'));
    // }
    // public function jobdetail(){
    //     $jobs = Job
    // }
}
