<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use App\Models\JobFunction;
use App\Models\JobLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\JobpostController;

class JobpostController extends Controller
{
    //

    public function list(){
        $jobs = Jobpost::orderBy('created_at', 'asc')->get();
        return view('backend.job.list', compact('jobs'));
    }
    public function createpage(){
        $jobfunctions = JobFunction::get();
        $joblocations = JobLocation::get();
        return view('backend.job.create', compact('jobfunctions', 'joblocations'));
    }

    public function store(Request $request){
        $validate = Validator($request->all(), [
            'job_position' => 'required',
            'jobfunction_id' => 'required',
            'joblocation_id' => 'required',
            'company_name' => 'required',
            'company_location' => 'required',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'description' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
            'salary' => 'required',
            'job_type' => 'required',
            'job_created_date' => 'required',
        ]);

        // if($validate->fails()){
        //     return back()->withErrors($validate);
        // } else{

        // }


        //image upload
        if(file_exists($request->company_logo)){
            $img = 'company-logo'.uniqid().'_'.$request->company_logo->getClientOriginalExtension();
            $request->company_logo->move('assets/images/',$img);
            $img_path = 'assets/images/'.$img;
        }else {
            $img = 'assets/images/default-cover.jpg';
        }


        $job = Jobpost::create([
            'job_position' => $request->job_position,
            'jobfunction_id' => $request->jobfunction,
            'joblocation_id' => $request->joblocation,
            'company_name' => $request->company_name,
            'company_location' => $request->company_location,
            'company_logo' => $img_path,
            'description' => $request->description,
            'reponsibilities' => $request->responsibilities,
            'requirements' => $request->requirements,
            'salary' => $request->salary,
            'job_type' => $request->job_type,
            'job_created_date' => $request->job_created_date,
        ]);
       // dd($job);
        if($job){
            return redirect()->route('JobList')->with('success', 'Successfully Created');
        }else {
            return view('errors.500Page');
        }
    }
    //edit and update
    public function edit($id){
        $data = Jobpost::where('id', $id)->first();
        $jobfunctions = JobFunction::get();
        $joblocations = JobLocation::get();
        return view('backend.job.edit', compact('data', 'jobfunctions', 'joblocations'));
    }
    public function update(Request $request, $id){
        $validate = Validator($request->all(), [
            'job_position' => 'required',
             //'jobfunction_id' => 'required',
           // 'joblocation_id' => 'required',
            'company_name' => 'required',
            'company_location' => 'required',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'description' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
            'salary' => 'required',
            'job_type' => 'required',
            'job_location' => 'required',
            'job_created_date' => 'required',
            'jobfunction' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $job = Jobpost::find($id);
        //image upload
        if($request->hasFile('company_logo')){
            $request->validate([
                'company_logo' => 'required|image|mimes:jpeg,jpg,png,gif,svg,webp',
            ]);
            if(file_exists($job->company_logo)){
                unlink($job->company_logo);
            }
            $img = 'company-logo-'.uniqid().'.'.$request->company_logo->getClientOriginalExtension();
            $request->company_logo->move('assets/images/',$img);
            $img_path = 'assets/images/'.$img;
        }else {
            $img_path = $job->company_logo;
        }

        $job->update([
            'job_position' => $request ->job_position,
            'jobfunction_id' => $request->job_function,
            'joblocation_id' => $request->job_location,
            'company_name' => $request -> company_name,
            'company_location' => $request -> company_location,
            'company_logo' => $img_path,
            'description' => $request -> description,
            'reponsibilities' => $request -> responsibilities,
            'requirements' => $request -> requirements,
            'salary' => $request ->salary,
            'job_type' => $request ->job_type,
            'job_created_date' => $request -> job_created_date,
        ]);
        return redirect()->route('JobList')->with('success', 'Successfully Updated');
    }
    public function delete($id){
        Jobpost::where('id', $id)->delete();
        return redirect()->route('JobList')->with('success', 'Successfully Deleted');
    }
}
