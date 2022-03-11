<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfJournalist
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isJournalist()){
            return $next($request);
        }
        return redirect('home')->with('error','You have not admin access');
    }
}
