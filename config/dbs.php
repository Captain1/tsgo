<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-08-26
 * Time: 17:09
 */
return [
    'default' => [
        "db1" => [
            'adapter' => 'mysql',
            'debug' => true,
            'useSlave' => false,
            'interval' => 30,
            #'listener'=>true
        ]
    ],
    "development" => [
        "db1" => [
            'adapter' => 'mysql',
            'debug' => false,
            'useSlave' => false,
            'interval' => 60,
            'connection' => [
                'dbname' => 'cn_uniondrug_module_merchant',
                'charset' => 'utf8'
            ],
            "listener" => true
        ]
    ],
    "testing" => [
        "db1" => [
            'connection' => [
                'host' => '582959f06c18d.sh.cdb.myqcloud.com',
                'port' => 3712,
                'dbname' => 'cn_uniondrug_module_merchant',
                'username' => 'develop',
                'password' => 'develop123',
                'charset' => 'utf8',
            ],
        ]
    ],
    "release" => [
        "db1" => [
            'connection' => [
                'host' => '582959f06c18d.sh.cdb.myqcloud.com',
                'port' => 3712,
                'dbname' => 'cn_uniondrug_module_merchant',
                'username' => 'develop',
                'password' => 'develop123',
                'charset' => 'utf8',
            ],
        ]
    ],
    "production" => [
        "db1" => [
            'debug' => false,
            'connection' => [
                'host' => 'rm-bp1nq6ibu5s4noqbo310.mysql.rds.aliyuncs.com',
                'port' => 3306,
                'username' => 'uniondrug',
                'password' => 'juyin@2017',
                'dbname' => 'cn_uniondrug_module_merchant',
                'charset' => 'utf8',
            ],
        ]
    ]
];