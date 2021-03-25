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

    'github' => [
        'client_id' => '9999f46f41c00cc893c5',
        'client_secret' => 'b3e655ea451950d4571089aef48f2eeb64cae128',
        'redirect' => 'http://localhost:8000/auth/callback',
    ],


    'google' => [
        'client_id' => '1095148263324-7pmfae490tikq1oce7o5tsn11t5rj6s1.apps.googleusercontent.com',
        'client_secret' => 'w1N2iYNemeuwz3sLBgt4HfQB',
        'redirect' => 'http://localhost:8000/auth/callback/google',
    ],


];
