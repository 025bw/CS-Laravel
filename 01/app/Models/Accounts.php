<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    public function index()
    {
        $users = Accounts::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
}
