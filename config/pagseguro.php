<?php

return [
    'environment' => env('PAGSEGURO_ENVIRONMENT', 'sandbox'), // Pode ser 'sandbox' ou 'production'
    'email' => env('PAGSEGURO_EMAIL'),
    'token' => env('PAGSEGURO_TOKEN'),
    'appId' => env('PAGSEGURO_APP_ID'),
    'appKey' => env('PAGSEGURO_APP_KEY'),
];
