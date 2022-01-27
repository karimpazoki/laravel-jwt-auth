<?php

return [
    'jwt' => [
        /*
        |--------------------------------------------------------------------------
        | JWT Authentication Secret
        |--------------------------------------------------------------------------
        |
        | It will be used to sign your tokens.This will be used for Symmetric 
        | algorithms (HMAC)
        |
        */
        'secret' => env('JWT_KEY', sha1(env('APP_KEY'))),

        /*
        |--------------------------------------------------------------------------
        | JWT Authentication Keys
        |--------------------------------------------------------------------------
        |
        | It will be used to sign your tokens with a public/private key pair using 
        | using RSA or ECDSA 
        |
        */
        'key' => [
            'public_key' => '',
            'private_key' => '',
            'passphrase' => '',
        ],

        /*
        |--------------------------------------------------------------------------
        | JWT Algorithm
        |--------------------------------------------------------------------------
        |
        | Supported algorithms must be specified for your application.
        |
        */

        'algorithm' => env('JWT_ALGORITHM', 'HS512'),

        /*
        |--------------------------------------------------------------------------
        | JWT Time to Live (Expiration Time)
        |--------------------------------------------------------------------------
        |
        | 
        |
        */
        'expiration' => [
            'access_token' => 24 * 60,
            'refresh_token' => 24 * 30
        ],
        /*
        |--------------------------------------------------------------------------
        | JWT Issuer
        |--------------------------------------------------------------------------
        |
        | 
        |
        */
        'issuer' => env('APP_URL', 'kaafochino.pro'),

        /*
        |--------------------------------------------------------------------------
        | JWT Required Claims
        |--------------------------------------------------------------------------
        |
        | 
        |
        */
        'required_claims' => [
            'iss',
            'iat',
            'exp',
            'sub',
            'jti',
        ],
    ]
];
