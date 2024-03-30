<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //admin login
    public function showadminlogin(){
        return view('auth.login');
    }
    public function adminlogin(Request $request){
        $credentails = $request->validate([
            'email' => 'required|unique:email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentails)){
            $request -> session()->regenerate();
            return redirect()->intended('');  //need to fill the admin panel file
        }
        return back()->withErrors([
            'email' => 'The provided credentials do no match our records'
        ])->onlyInput('email');
    }
    public function adminlogout(){
        Auth::logout();
        return redirect()->route(''); //need to define route path
    }
}
