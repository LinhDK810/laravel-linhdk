<?php

namespace App\Http\Middleware;

use Closure;
use Mockery\Exception;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            if (!$request->hasHeader("token")) {
                return response()->json([
                    "error"=>"401"
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                "error"=>"500"
            ]);
        }
        return $next($request);
    }
}
