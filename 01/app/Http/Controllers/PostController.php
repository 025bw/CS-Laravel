<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Account;



class PostController extends Controller
{
    //
    public function login(Request $request)
    {
        $username = $request->input('username0123');
        $password = $request->input('password0123');
        $users = DB::table('accounts')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->get();
        if (count($users) > 0) {
            $request->session()->put('username', $username);
            return redirect('/home');
        } else
            $request->session()->flush();
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home');
    }

    public function listuser()
    {
        $users = DB::table('accounts')->get();

        return view('listuser', ['users' => $users]);
    }


    public function listcurrentuser(Request $request)
    {
        print_r($request->session()->get('username'));
        print_r($request->session()->get('password'));
        $username = $request->session()->get('username');
        $password = $request->session()->get('password');
        $users = DB::table('accounts')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->first();
        return view('listcurrentuser', ['users' => $users]);
    }

    public function adduser(Request $request)
    {
        $username = $request->input('username0124');
        $password = $request->input('password0124');
        $admin = $request->input('admin0124') ? $request->input('admin0124') : 0;
        $account = new Account();
        $account -> username = $username;
        $account -> password = $password;
        $account -> admin = $admin;
        $account -> save();
        // DB::insert('insert into accounts (username, password, admin) values (?, ?, ?)', [$username, $password, $admin]);
        return redirect('list');
    }


        public function update(Request $request)
    {
        $username = $request->input('username0124');
        $password = $request->input('password0124');
        $admin = $request->input('admin0124') ? $request->input('admin0124') : 0;
        $account = new Account();
        $account -> username = $username;
        $account -> password = $password;
        $account -> admin = $admin;
        $account -> save();
        // DB::insert('insert into accounts (username, password, admin) values (?, ?, ?)', [$username, $password, $admin]);
        return redirect('list');
    }

    public function get_name($id) {
        dd($id );
        $name = Account::query()->where('id', $id)->first();
    }
}
