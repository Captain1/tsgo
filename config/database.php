<?php
/**
 * 数据库配置。每个项目要求最多只连接一个数据库。
 * adapter: 适配器，当前只使用mysql
 * debug: 调试模式开关，打开时，会在日志目录记录数据库详细日志；
 * useSlave: 是否读写分离。打开时，需要同时设置 slaveConnection 的内容。
 * connection: 连接参数。
 */
return [
    'default' => [
        'adapter' => 'mysql',
        'debug' => false,
        'useSlave' => false,
        'interval' => 0,
        //'listener'=>true,
        'connection' => [
            'dbname' => 'cn_uds_fin_com',
            'charset' => 'utf8'
        ]
    ],
    'development' => [
        'connection' => [
            'host' => 'udtest.uniondrug.com',
            'port' => 6033,
            'username' => 'develop',
            'password' => 'develop123',
            'dbname' => 'cn_uds_fin_com',
            'charset' => 'utf8',
        ]
    ],
    'testing' => [
        'connection' => [
            'host' => 'udtest.uniondrug.com',
            'port' => 6033,
            'username' => 'develop',
            'password' => 'develop123',
            'dbname' => 'cn_uds_fin_com',
            'charset' => 'utf8',
        ]
    ],
    'release' => [
        'connection' => [
            'host' => 'localhost',
            'port' => 3306,
            'username' => 'root',
            'password' => '',
            'dbname'   => 'cn_uds_fin_com',
            'charset'  => 'utf8'
        ]
    ],
    'production' => [
        'connection' => [
            'host' => 'localhost',
            'port' => 3306,
            'username' => 'root',
            'password' => '',
            'dbname'   => 'cn_uds_fin_com',
            'charset'  => 'utf8'
        ]
    ]
];
