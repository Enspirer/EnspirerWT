<?php
return [
    'client_id' => env('CLIENT_ID', 'AcdEVgaxQHR58Mziq5mFQsM-n-6W2UZEVunrXynYhwMQ0U-tLtYecRlyHDAL4_eWZ7QpibI-Tf49k3U-'),
    'secret' => env('CLIENT_SECRET', 'ENyv-YXu-S8sBF3Kj4FZNRYXwGzFHReqH0ZJKIiooGSoOfjOIkvuejW9Wnew0A3sXbQTDeKcXbQGKP_P'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];


