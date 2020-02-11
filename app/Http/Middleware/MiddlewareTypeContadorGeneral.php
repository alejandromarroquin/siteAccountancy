<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareTypeContadorGeneral
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->typeuserContadorGeneral()) {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
