<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function show(){
        return view ('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credentials)){
$request->session()->regenerate();
return redirect('show');
        }
        dd("fail");
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
}
