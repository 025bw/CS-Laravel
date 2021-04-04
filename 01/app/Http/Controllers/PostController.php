<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function login(Request $request)
    {
        //$request->session()->flush();
        $username=$request->input('username0123');
        $request->session()->put('username', $username);
        $password=$request->input('password0123');
        $request->session()->put('password', $password);
    }
}
