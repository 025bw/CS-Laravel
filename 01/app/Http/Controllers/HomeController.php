<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        /* $title = '1 2 3 5';
        return view('home', [
            'title'=>$title
        ]);*/
        
        /*dd($request->input('name'));*/
        /*return response('xzc',200)->cookie('name','value',120);*/
        /*return redirect()->away('https://www.google.com');*/
        $name = $request->session()->get('age');
        dd($name);
        /*return redirect('/welcome')->with('status','Create Success?');*/
        # code...
    }

    public function setname(Request $request)
    {
        
        
        $request->session()->put('name', 'zxc');
        return redirect('/test');
        
    }

    public function setage(Request $request)
    {
        $request->session()->put('age', '1');
        $age = $request->session()->get('age');
        /*return redirect('/welcome')->with('status','Create Success?');*/
        # code...
    }

    public function getname(Request $request)
    {
        $name = $request->session()->get('age');
        dd($name);
    }

    public function getage(Request $request)
    {
        $age = $request->session()->get('age');
        dd($age);
    }

    public function delete(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $request->session()->flush();
        $username=$request->input('username0123');
        $request->session()->put('username', $username);
        $password=$request->input('password0123');
        $request->session()->put('password', $password);
    }

    
}
