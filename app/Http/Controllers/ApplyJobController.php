<?php

namespace App\Http\Controllers;


use App\Models\Jobpost;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use App\Http\Controllers\ApplyJobController;

class ApplyJobController extends Controller
{
    //
    public function list(){
        $applyjobs = ApplyJob::orderBy('created_at', 'desc')->get();
        return view('backend.appyjob.applyjoblist', compact('applyjobs'));
    }
    public function jobdetailpage($jobId){
        $job = Jobpost::findOrFail($jobId);
        $user = session('Auther');
        return view('frontend.jobdetail', compact('job', 'user'));
    }
    public function store(Request $request){
        // $validate = Validator($request->all(), [
        //     'job_id' => 'required',
        //     'profile_id' => 'required',
        //     'cv_form' => 'required',
        //     'status' => 'nullable',
        //     'submitted_date' => 'nullable'
        // ]);

       // dd($validate);
        // if($validate->fails()){
        //     return back()->withErrors($validate);
        // }

        if ($request->file('cv_form')) {
            $file = $request->file('cv_form');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);
        }

        $applyjob = ApplyJob::create([
            'job_id' => $request->job_id,
            'profile_id' => $request->user_id,
            'cv_form' => $filePath,
            'status' => 1,
            'submitted_date' => '2024/03/09',
        ]);
        //dd($applyjob);
        if($applyjob){
            return redirect()->route('Index')->with('success', 'Successfully Applied!');
        } else {
            return view('errors.500Page');
        }
    }
}
