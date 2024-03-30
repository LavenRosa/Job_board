<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\TestingController;

class TestingController extends Controller
{
    //home page to display the data
    public function list(){
        $list = Testing::get();
        return view ('testing1.list', compact('list'));
    }

    //create page
    public function createPage(){
        return view ('testing1.create');
    }

    //create post
    public function create(Request $request){
        $arr =[
            'item_name'=>$request->item_name,
            'price'=>$request->price,
            'category'=>$request->category,
            'detail'=>$request->detail,
            'image'=>$request->image,
        ];
        if($request->hasFile('image')){
            $filename = uniqid().'_'.$request->image->getClientOriginalName();
            $arr['image'] = $filename;
            $request->image->storeAs('public',$filename);
        }
        Testing::create($arr);
        return redirect()->route('testing1.list')->with(["success"=>"Create Posted Successfully"]);
    }
    //edit
    public function edit($id){
        $data = Testing::where('id',$id)->first();
        return view('testing1.edit', compact('data'));
    }
    //update
    public function update($id, Request $request){
        $arr = [
            'item_name'=>$request->item_name,
            'price'=>$request->price,
            'category'=>$request->category,
            'detail'=>$request->detail,


        ];
        if($request->hasFile('image')){
            $old = Testing::select('image')->where('id',$request->postid)->first()->toArray();
            $old = $old['image'];
            Storage::delete('public/',$old);

            $filename = uniqid().'_'.$request->image->getClientOriginalName();
            $arr['image'] = $filename;
            $request->image->storeAs('public',$filename);
        }
        Testing::where('id',$id)->update($arr);
        return redirect()->route('testing1.list')->with(["success"=>"Updated Successfully"]);
    }
    //delete
    public function delete($id){
        Testing::where('id',$id)->delete();
        return redirect()->route('testing1.list')->with(["success"=>"Deleted Successfully"]);
    }
}
