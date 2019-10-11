<?php

return [
    'auth' => [
        'front' => [
            'is_enabled' => env('IS_FRONT_AUTH_ENABLED'),
            'model' => StudioSidekicks\Auth\Front\Entities\FrontUser::class,
        ],
        'back' => [
            'is_enabled' => env('IS_BACK_AUTH_ENABLED'),
            'model' => StudioSidekicks\Auth\Back\Entities\BackUser::class,
        ]
    ]
];
