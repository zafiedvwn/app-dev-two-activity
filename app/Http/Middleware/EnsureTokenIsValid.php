<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->input('token') !== '751A282AF143945FBAF34E0D3E44E852F84B4460') {
            return response()->json([
                'message' => 'Invalid Token',
            ]);
        }
        return $next($request);
    }
}
