<?php

namespace App\Http\Middleware;

use Closure;

class SetToken
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
        if (!empty($request->token)){
            $request->headers->set('token',$request->token);
        }
        return $next($request);
    }
}
