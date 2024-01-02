<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use App\Models\User;

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

    
     protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function authenticate(Request $request): RedirectResponse
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
  
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();

            $picture_url = User::find($request->user()->id);
            
            if(isset($picture_url->config->picture_url)){

                $picture_url = $picture_url->config->picture_url;
            
            }else{

               $picture_url =  '../storage/'.asset('images/user.png');
            }
            
            Session::put('picture_profile','../storage/'.$picture_url);
             return redirect()->intended('dashboard');
         }
  
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');
     }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout(Request $request)
    {

        Session::forget('picture_profile');

        Auth::logout();

        return redirect('/');
    }

    
}
