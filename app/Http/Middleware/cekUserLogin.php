<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class cekUserLogin
{
    public function handle(Request $request, Closure $next, $rules){
        $user = Auth::user();

        if(!Auth::check()){
            return redirect('login');
        }
        if($user->level == $rules)
            return $next($request);
        return redirect('login')->with('error', 'you have no privildge');
    }
}
