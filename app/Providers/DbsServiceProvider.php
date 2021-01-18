<?php
/**
 * @author wsfuyibing
 * @date   2019-04-17
 */
namespace App\Providers;

use Uniondrug\Framework\Container;
use Uniondrug\Framework\Providers\DatabaseProvider as FrameworkDatabase;

/**
 * 多库DB注入
 * 继承自框架级的注入方式, 避免在Phar+Swoole包环境下出现
 * 的MySQL Gone Away的问题
 * @package App\Providers
 */
class DbsServiceProvider extends FrameworkDatabase
{
    /**
     * @param \Phalcon\DiInterface $di
     * @throws \ErrorException
     */
    public function register(\Phalcon\DiInterface $di)
    {
        /**
         * @var Container $di
         */
        foreach ([
            'dbs.db1.connection' => 'db1'
        ] as $path => $name) {
            $this->setShared($di, $di->getConfig()->path($path), $name);
        }
    }
}
