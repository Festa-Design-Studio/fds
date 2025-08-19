<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only add security headers in production
        if (app()->environment('production')) {
            // Prevent clickjacking attacks
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
            
            // Prevent MIME type sniffing
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            
            // Enable XSS protection in older browsers
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            
            // Control referrer information
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
            
            // Content Security Policy - adjust as needed for your application
            $csp = "default-src 'self'; " .
                   "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://unpkg.com; " .
                   "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; " .
                   "font-src 'self' https://fonts.gstatic.com data:; " .
                   "img-src 'self' data: https: blob:; " .
                   "connect-src 'self'; " .
                   "frame-src 'self' https://www.youtube.com https://player.vimeo.com; " .
                   "media-src 'self' https:; " .
                   "object-src 'none'; " .
                   "base-uri 'self';";
            
            $response->headers->set('Content-Security-Policy', $csp);
            
            // Enforce HTTPS (only if using HTTPS)
            if ($request->secure()) {
                // HTTP Strict Transport Security (HSTS)
                $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            }
            
            // Remove server identification headers
            $response->headers->remove('X-Powered-By');
            $response->headers->remove('Server');
            
            // Permissions Policy (formerly Feature Policy)
            $response->headers->set('Permissions-Policy', 
                'camera=(), microphone=(), geolocation=(), interest-cohort=()');
        }

        return $response;
    }
}