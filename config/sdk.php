<?php
/**
 * SDK配置
 */
return [
    'default' => [
        'consulApiAddress' => 'http://udsdk.{{domain}}/v1/catalog/service',
        'consulApiTimeout' => 3,
        'consulHosts' => [],
        'nsEnabled' => true,
        'nsApiAddress' => 'http://ns.module.{{domain}}/node/get'
    ],
    'development' => [
        'domain' => 'turboradio.cn',
    ],
    'testing' => [
        'domain' => 'turboradio.cn'
    ],
    'release' => [
        'domain' => 'uniondrug.net'
    ],
    'production' => [
        'domain' => 'uniondrug.cn'
    ]
];
