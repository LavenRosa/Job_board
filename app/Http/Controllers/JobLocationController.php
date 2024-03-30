<?php

namespace App\Http\Controllers;

use App\Models\JobLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\JobLocationController;

class JobLocationController extends Controller
{
    //
      public function list(){
        $joblocations = JobLocation::orderBy('created_at','asc')->get();
        return view('backend.joblocation.list', compact('joblocations'));
    }
    public function createpage(){
        return view('backend.joblocation.create');
    }
    public function store(Request $request){
        $validate = Validator($request->all(), [
            'name' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $joblocation = JobLocation::create([
            'name' => $request->name,
        ]);
        if($joblocation){
            return redirect()->route('JLList')->with('success', 'Successfully Created');
        }else {
            return view('errors.500Page');
        }
    }
    public function edit($id){
        $data = JobLocation::where('id', $id)->first();
        return view('backend.joblocation.edit', compact('data'));
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
        JobLocation::where('id', $id)->update($data);
        return redirect()->route('JLList')->with('success','Successfully Updated');
    }
    public function delete($id){
        JobLocation::where('id', $id)->delete();
        return redirect()->route('JLList')->with('success','Successfully Deleted');
    }
}
