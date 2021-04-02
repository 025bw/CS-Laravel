<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        //return $next($request);
        $age = $request->session()->get('age');
             //dd($age);
        if ($age > 18) {
            dd('zxc');
        } else
            // dd($age);
            return redirect('/welcome');
    }
}
