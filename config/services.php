<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '706227463717702',
        'client_secret' => 'fe95b070da7382c63ce05805c7549a72',
        'redirect' => 'https://127.0.0.1:8000/auth/facebook/callback',
    ],
    'github' => [
        'client_id' => 'faca20fa751dcdf7bd7b',
        'client_secret' => 'cc6d5b37bf59cbd4d8fab54bff21c8caed0734a4',
        'redirect' => 'https://127.0.0.1:8000/auth/github/callback',
    ],
];
