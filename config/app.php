<?php
/**
 * 应用配置文件，通用配置你可以在这里处理
 * debug: 调试模式，打开后，系统任何错误会被Phalcon的调试器展示。关闭的话，异常时返回一个错误信息给客户端。
 * appName: 应用名称。
 * providers: 应用需要的服务注入。
 */

use App\Providers\AppServiceProvider;
use App\Providers\DbsServiceProvider;
use Uniondrug\HttpClient\HttpClientServiceProvider;
use Uniondrug\Redis\RedisServiceProvider;
use Uniondrug\Service\ServiceServiceProvider;
use Uniondrug\ServiceSdk\Provider as SdkServiceProvider;
use Uniondrug\Validation\ValidationServiceProvider;

return [
    'default' => [
        'debug' => false,// 调试开关
        'appName' => 'tsgo',// 应用名称
        'appVersion' => '1.0.0',
        'useAnnotationRouter' => true,// 是否启用注解路由
        // 服务注册入口
        'providers' => [
            /**
             * 框架服务
             */
            ServiceServiceProvider::class,
            HttpClientServiceProvider::class,
            ValidationServiceProvider::class,
            SdkServiceProvider::class,
            RedisServiceProvider::class,
            /**
             * 应用内服务注册
             */
            AppServiceProvider::class,
            DbsServiceProvider::class,
        ]
    ]
];
