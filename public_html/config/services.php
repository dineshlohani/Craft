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

    'google' => [
        'client_id' => '130474152766-501nlp41h4g0binq0d4jcob4s4m289p1.apps.googleusercontent.com',
        'client_secret' => 'EgBj2Et-UNLYaF1uhgpTclLa',
            'redirect' => 'http://localhost/ecommerce/callback/google',
    ],

    'facebook' => [
        'client_id' => '1118351608612559',
        'client_secret' => '2e2072fa1d8507e5d071a4c8ad950df3',
        'redirect' => 'http://localhost/ecommerce/callback/facebook',
    ],
];
