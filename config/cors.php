<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    /*
    |--------------------------------------------------------------------------
    | SECURITY: Restrict Allowed Origins
    |--------------------------------------------------------------------------
    | 
    | NEVER use '*' for authenticated API endpoints.
    | Only allow your own domain and trusted subdomains.
    |
    */
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    /*
    |--------------------------------------------------------------------------
    | IMPORTANT: Specify exact allowed origins
    |--------------------------------------------------------------------------
    |
    | For production, replace with your actual domain:
    | 'allowed_origins' => ['https://yourdomain.com'],
    |
    */
    'allowed_origins' => [
        env('APP_URL', 'http://localhost'),
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'X-CSRF-TOKEN'],

    'exposed_headers' => [],

    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | SECURITY: Credentials
    |--------------------------------------------------------------------------
    |
    | Set to true only if you need cookies/auth in cross-origin requests.
    | When true, allowed_origins cannot be '*'.
    |
    */
    'supports_credentials' => true,

];
