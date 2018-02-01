<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $rq){
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password], $rq->remember)
            || Auth::attempt(['name' => $rq->email, 'password' => $rq->password], $rq->remember)) {
            
            return redirect()->route('homepage');
        }
        return redirect()->route('login')->with('errMsg', 'Wrong email/password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }
}
