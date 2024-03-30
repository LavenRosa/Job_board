<?php

namespace App\Http\Controllers;

use App\Models\JobFunction;
use Illuminate\Http\Request;
use App\Http\Controllers\JobFunctionController;

class JobFunctionController extends Controller
{
    //
    public function list(){
        $jobfunctions = JobFunction::orderBy('created_at','asc')->get();
        return view('backend.jobfunction.list', compact('jobfunctions'));
    }
    public function createpage(){
        return view('backend.jobfunction.create');
    }
    public function store(Request $request){
        $validate = Validator($request->all(), [
            'name' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $jobfunction = JobFunction::create([
            'name' => $request ->name,
        ]);
        if($jobfunction){
            return redirect()->route('JFList')->with('success', 'Successfully Created');
        } else{
            return view('errors.500Page');
        }
    }
    public function edit($id) {
        $data = JobFunction::where('id', $id)->first();
        return view('backend.jobfunction.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $validate = Validator($request->all(), [
            'name' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }

        $data = [
            'name' => $request->name,
        ];
        JobFunction::where('id', $id)->update($data);
        return redirect()->route('JFList');
    }
    public function delete($id){
        JobFunction::where('id', $id)->delete();
        return redirect()->route('JFList');
    }
}
