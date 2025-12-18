<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'graphql', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],   // GET, POST, PUT, DELETE, etc.

    'allowed_origins' => ['http://localhost:5173'], 
    // আপনার Vue dev server URL
    // ডেভেলপমেন্টে সব origin allow করতে: ['*']

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Accept all headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // যদি authentication cookie ব্যবহার করেন
];
