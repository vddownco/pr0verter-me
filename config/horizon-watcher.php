<?php

return [
    'paths' => [
        app_path(),
        config_path(),
        database_path(),
        resource_path('views'),
        base_path('.env'),
        base_path('composer.lock'),
    ],

    'command' => 'vendor/laravel/sail/bin/sail artisan horizon',
];
