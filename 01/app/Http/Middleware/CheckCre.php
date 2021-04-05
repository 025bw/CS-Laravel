<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Http\Request;

class CheckCre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $username = $request->session()->get('username');
        $users = DB::table('users')
                ->where('username', '=', $username)
                ->get();
                if(count($users)>0)
                {
                    return $next($request);
                }
                else
                $request->session()->flush();
                return redirect('/login');
    }
}
