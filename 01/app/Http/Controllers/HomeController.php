<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $REQUEST){
       /* $title = '1 2 3 5';
        return view('home', [
            'title'=>$title
        ]);*/

        /*dd($REQUEST->input('name'));*/
        /*return response('xzc',200)->cookie('name','value',120);*/
        return redirect()->away('https://www.google.com');
    }

    public function create()
    {
return redirect('/welcome')->with('status','Create Success?');
        # code...
    }


  
}
