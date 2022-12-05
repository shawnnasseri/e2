<?php

return [
    'app' => [
        'url' => $app->env('APP_URL', 'http://localhost'),
        'name' => $app->env('APP_NAME', 'Contact Management System'),
        'timezone' => 'America/New_York',
        'email' => 'my@email.com'
    ],
    'database' => [
        'name' => 'myapp',
        'username' => 'root',
        'password' => '',
    ]
];
