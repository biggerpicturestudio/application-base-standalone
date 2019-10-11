<?php

return [
    'auth' => [
        'front' => [
            'is_enabled' => env('IS_FRONT_AUTH_ENABLED'),
            'model' => '',
        ],
        'back' => [
            'is_enabled' => env('IS_BACK_AUTH_ENABLED'),
            'model' => '',
        ]
    ]
];
