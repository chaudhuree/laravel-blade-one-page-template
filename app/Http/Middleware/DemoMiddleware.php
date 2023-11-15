<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Perform action
            $request->headers->replace(['email' => 'changed@gmail.com']);
            return $next($request);
        
    }
}
