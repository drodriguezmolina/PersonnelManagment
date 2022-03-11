<?php


namespace App\Http\Middleware;


use Closure;

class RedirectIfAdministrator
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isAdmin()){
            return $next($request);
        }
        return redirect('home')->with('error','You have not admin access');
    }
}
