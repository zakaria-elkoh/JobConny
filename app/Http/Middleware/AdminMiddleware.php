<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
       $user=Auth::user();
        if (Auth::check() && $user->roles->where('title','Admin')->isNotEmpty()) {  
            return $next($request); 
        }else{
            return abort('401');
        }
    }
}
