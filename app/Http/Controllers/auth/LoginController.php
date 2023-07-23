<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
           'email'=>'required',
           'password'=>'required'
           ]);

           try {

            if(Auth::attempt($request->only(['email','password']))){
                $request->session()->regenerate();
                return  redirect()->route('dashboard.index')->with('msg','User loged in  successfully');
            }
            else
             {
                return redirect()->back()->with('msg','User not logen in');
             }

           } catch (\Throwable $th) {
            //  dd($th);
          return redirect()->back()->with('msg','User not loged in ');
              }

    }
    public function logout(Request $request)
    {
        try {
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regenerateToken();

           return  redirect()->route('home');

        } catch (\Throwable $th) {
            return redirect()->back()->with('msg','Logout failed');
        }

    }
}
