<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoles = [2, 4];

        if (auth()->check() && !in_array(auth()->user()->role_id, $allowedRoles)) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
