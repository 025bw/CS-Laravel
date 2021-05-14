<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialController extends Controller
{
    //
    public function SignUp(Request $request)
    {

        $user = Credential::where('email', '=', $request->input('email'))->first();
        if ($user === null) {
            $credential = new Credential();
            $credential->email = $request->input('email');
            $credential->password = Hash::make($request->input('password'));
            $credential->save();
        }


    }

    public function show()
    {
        $credential = Auth::guard('admin')->user();
        dd($credential);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('show');

    }

    public function check()
    {
        if (Auth::guard('admin')->check())
            dd("true");
        else
            dd('false');


    }

    public function login()
    {
        if (Auth::guard('admin')->check())

            return redirect('show');
        else
            return view('auth/login');


    }

}
