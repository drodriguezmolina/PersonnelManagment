<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfParticipant
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isParticipant()){
            return $next($request);
        }
        return redirect('home')->with('error','You have not admin access');
    }
}
