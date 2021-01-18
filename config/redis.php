<?php
/**
 * Redis配置文件。
 * options: Redis服务的配置参数，参考如下：
 * <code>
 *        'options'  => [
 *            'prefix'=> '_PREFIX_', // key值前缀，项目之间隔离区分
 *            'host' => 'localhost',
 *            'port' => 6379,
 *            'auth' => 'foobared',
 *            'persistent' => false, // 持久化连接，默认不持久化
 *            'index' => 0,
 *        ],
 * </code>
 */
return [
    'default' => [
        'options' => [
            'persistent' => false,
            'index' => 0,
            'prefix' => '',
            'host' => 'redis.dovecot.cn',
            'port' => 63791,
            'auth' => '',
        ],
        'lock' => [
            'retryDelay' => 1000,
            'retryCount' => 10,
        ]
    ],
    'development' => [
        'options' => [
            'host' => 'redis.dovecot.cn',
            'port' => 63791,
            'auth' => ''
        ]
    ],
    'testing' => [
        'options' => [
            'prefix' => '',
            'host' => '192.168.3.193',
            'port' => '6379',
            'auth' => "uniondrug@123"
        ]
    ],
    'release' => [
        'options' => [
            'prefix' => '',
            'host' => '192.168.3.193',
            'port' => '6379',
            'auth' => "uniondrug@123"
        ]
    ],
    'production' => [
        'options' => [
            'prefix' => 'p:',
            'host' => 'r-bp1bce11bbd535a4.redis.rds.aliyuncs.com',
            'port' => '6379',
            'auth' => "Juyin2017"
        ],
    ]
];