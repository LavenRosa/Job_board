<?php

namespace App\Http\Controllers;

use App\Models\Seeker;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SeekerController extends Controller
{
    //register
    public function showuserregister(){
        return view('frontend.seekerregister');
    }
    public function userregister(Request $request){
        $validate = Validator($request->all(), [
            'name'=>'required|string',
            'email'=>'required|email|unique:email',
            'password'=>'required|min:4|confirmed'
        ],
        [
            'name.required' => 'Please filled this field',
            'email.required' => 'Please filled this field',
            'password.required' => 'Please filled this field',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $register = Seeker::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request['password']),
        ]);
         $user_email = Seeker::where('email', $request->email)->first();
        //dd($user_email->email);
        // $validate = Validator($request->all(), [
        //     'phone' => 'nullable',
        //     'skills' => 'nullable',
        //     'languages' => 'nullable',
        //     'project' => 'nullable',
        //     'experience' => 'nullable',
        //     'image' => 'nullable',
        //     'email' => 'required|unique:users'
        // ]);
        $r = Profile::create([
            'phone'=>"n",
            'skills'=>"n",
            'languages'=>"n",
            'project'=>"n",
            'experience'=>"n",
            'image'=>"n",
            'email'=>$user_email->email
        ]);

        if($register && $r){
            return redirect()->route('ShowUserLogin')->with('success','Successfully Registered');
        }else{
            return view('errors.500Page');
        }

    }

    //login
    public function showuserlogin(){
        return view('frontend.seekerlogin');
    }
   public function userlogin(Request $request){
    $user = Seeker::where('email', $request->email)->first();
    $validate = Validator($request->all(),[
        'email' => 'required',
    ],[
        'email.required' => 'Please filled this field',
    ]);
    //dd($user);
    if(!empty($user)){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('Auther', $user);
            return redirect()->route('ProfileShow', compact('user'));
        }else{
            return back()->withErrors('Password does not match');
        }

    }else{
        return back()->withErrors('User Not found');
    }
    }
    public function userlogout(Request $request){
        $request->session()->flush('AuthUser');
        return redirect()->route('Index');
    }
}
