<?php

use Arc92\Chapar\Providers\Ghasedak;
use Arc92\Chapar\Providers\Kavenegar;
use Arc92\Chapar\Providers\MeliPayamak;

return [
    'kavenegar' => [
        'active' => false,
        'namespace' => Kavenegar::class,
        'credentials' => [
            'key' => '505062376E3375477871376B646F462F7A4E575455413D3D'
        ]
    ],
    'ghasedak' => [
        'active' => false,
        'namespace' => Ghasedak::class,
        'credentials' => [
            'key' => 'bc79a7e229c7ebbe3fe1161c2190e3c73b26d9c37f4670a08534e3248524dbc7'
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
