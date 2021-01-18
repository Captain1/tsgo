<?php
return [
    'default' => [
        'class' => \App\Servers\Http::class
    ],
    'development' => [
        'host' => '0.0.0.0:8189'
    ],
    'testing' => [
        'host' => '0.0.0.0:8189'
    ],
    'release' => [
        'host' => 'eth0:8189'
    ],
    'production' => [
        'host' => 'eth0:8189'
    ]
];
