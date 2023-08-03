<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function notice()
    {
        return view('auth.verify-email');
    }
    public  function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return  redirect()->route('dashboard.index')->with('msg','User registered successfully');
    }

    public function resend(Request $request)
     {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('msg', 'Verification link sent!');
     }
}
