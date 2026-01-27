<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Security Headers Middleware
 * 
 * Implements comprehensive security headers to protect against:
 * - Clickjacking (X-Frame-Options)
 * - XSS attacks (X-XSS-Protection, CSP)
 * - MIME-type sniffing (X-Content-Type-Options)
 * - Information leakage (Referrer-Policy)
 */
class SecurityHeadersMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // ==========================================
        // 1. CLICKJACKING PROTECTION
        // ==========================================
        // Prevents the page from being embedded in iframes
        $response->headers->set('X-Frame-Options', 'DENY');

        // ==========================================
        // 2. MIME TYPE SNIFFING PROTECTION
        // ==========================================
        // Prevents browsers from MIME-sniffing a response away from the declared content-type
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // ==========================================
        // 3. XSS PROTECTION (Legacy browsers)
        // ==========================================
        // Enables XSS filter in older browsers
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // ==========================================
        // 4. REFERRER POLICY
        // ==========================================
        // Controls how much referrer information should be included with requests
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // ==========================================
        // 5. PERMISSIONS POLICY (Feature Policy)
        // ==========================================
        // Restricts access to browser features
        $response->headers->set(
            'Permissions-Policy',
            "camera=(), microphone=(), geolocation=(self), payment=()"
        );

        // ==========================================
        // 6. CONTENT SECURITY POLICY (CSP)
        // ==========================================
        // Comprehensive CSP to prevent XSS and data injection attacks
        $csp = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://elfsightcdn.com https://static.elfsight.com https://widget.tagembed.com https://cloud.tagbox.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://maps.googleapis.com",
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://widget.tagembed.com https://cloud.taggbox.com https://maps.googleapis.com",
            "img-src 'self' data: blob: https: http: https://maps.googleapis.com https://maps.gstatic.com",
            "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://cloud.taggbox.com",
            "connect-src 'self' https://elfsightcdn.com https://*.elfsight.com https://*.tagembed.com https://api.taggbox.com https://*.taggbox.com https://cloud.tagbox.com https://*.tagbox.com https://maps.googleapis.com",
            "frame-src 'self' https://www.youtube.com https://www.instagram.com https://www.tiktok.com https://*.elfsight.com https://*.tagembed.com https://www.google.com https://maps.google.com https://maps.googleapis.com",
            "media-src 'self' https: http: blob: data:",
            "frame-ancestors 'none'",
            "base-uri 'self'",
            "form-action 'self'",
            "object-src 'none'",
        ];
        $response->headers->set('Content-Security-Policy', implode('; ', $csp));

        // ==========================================
        // 7. STRICT TRANSPORT SECURITY (HSTS)
        // ==========================================
        // Forces HTTPS connections - enabled for production
        if (!in_array($request->getHost(), ['localhost', '127.0.0.1'])) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        // ==========================================
        // 8. REMOVE SERVER INFO
        // ==========================================
        // Remove headers that leak server information
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');

        return $response;
    }
}
