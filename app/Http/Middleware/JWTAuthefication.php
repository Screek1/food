<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthefication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (\Exception $exception) {
            if ($exception instanceof TokenExpiredException) {
                $newToken = JWTAuth::parseToken()->refresh();
                return response()->json(['message' => 'Token has expired', 'new_token' => $newToken], 401);
            } elseif ($exception instanceof TokenInvalidException) {
                return response()->json(['message' => 'Token has invalid'], 401);
            } else {
                return response()->json(['message' => 'Token not found'], 401);
            }
        }
        return $next($request);
    }
}
