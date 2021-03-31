<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title = '1 2 3 5';
        return view('home', [
            'title'=>$title
        ]);
    }
}
