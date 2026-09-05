<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureEnrollmentActive
{
    /**
     * Handle an incoming request.
     * Simulates academic portal session check for course creation/operations.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $response->headers->set('X-Student-Portal-Access', 'Authorized-AY2026');
        return $response;
    }
}
