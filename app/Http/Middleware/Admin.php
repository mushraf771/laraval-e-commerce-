<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return Redirect::route('login');
        } else {
           if (!auth()->user()->user_type) {
            abort(403);
           } 
        }
        
    //     if(!auth()->check() || !auth()->user()->user_type )
    // {
     // abort(403);
    //     return Redirect::route('login')->withInput()->with('danger', 'Please Login first to access Dashboard');
    // }else{
    //     return Redirect::route('admin')->with('success', 'Welcome Back Dear Admin');
    // }
        return $next($request);
    }
}
