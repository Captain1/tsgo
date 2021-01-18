<?php
/**
 * @author kuanxing <346300265@qq.com>
 * @date   2019-03-06
 */

namespace App\Servers\Tasks\Abstracts;

use App\Services\Abstracts\ServiceTrait;
use Uniondrug\Phar\Server\Tasks\XTask;

abstract class Task extends XTask
{
    use ServiceTrait;
    use \Uniondrug\Framework\Services\ServiceTrait;
}
