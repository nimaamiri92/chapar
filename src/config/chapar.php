<?php

use Arc92\Chapar\Providers\Ghasedak;
use Arc92\Chapar\Providers\Kavenegar;
use Arc92\Chapar\Providers\MeliPayamak;

return [
    'kavenegar' => [
        'active' => false,
        'namespace' => Kavenegar::class,
        'credentials' => [
            'key' => ''
        ]
    ],
    'ghasedak' => [
        'active' => false,
        'namespace' => Ghasedak::class,
        'credentials' => [
            'key' => ''
        ]
    ],
    'MeliPayak' => [
        'active' => true,
        'namespace' => MeliPayamak::class,
        'credentials' => [
            'username' => '',
            'password' => ''
        ]
    ]
];
