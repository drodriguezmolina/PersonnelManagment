<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfJudge
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isJudge()){
            return $next($request);
        }
        return redirect('home')->with('error','You have not admin access');
    }
}
