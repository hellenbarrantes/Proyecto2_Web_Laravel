<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
      'facebook' => [
        'client_id' => '646056505555602',
        'client_secret' => 'cdaceaaf9c40409138f434a6f7f234be',
        'redirect' =>  'http://localhost:8000/callback/facebook',
    ],
    
    'twitter' => [
    'client_id' => 'qTBuCWl0bExeq3rs7UObuIFk1', // configure with your app id
    'client_secret' => 'xZzqgspwCa1paxVSND1gO0PxnjFr3mSluIIOgPFu83ldIZhMtA', // your app secret
    'redirect' => 'http://localhost:8080/callback/twitter', // leave blank for now
    ],
    
    'google' => [
    'client_id' => '393094122079-mb6olmk0lh1iivpu301n9e0jp1lgr0cc.apps.googleusercontent.com', // configure with your app id
    'client_secret' => 'L7oyTQk8OO6DDPsPIyy2-TAu', // your app secret
    'redirect' => 'http://localhost:8000/callback/google', // leave blank for now
    ],
    


];
