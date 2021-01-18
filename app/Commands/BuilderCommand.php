<?php
/**
 * @date   2021-01-05 11:02
 * @author wangdongyu <frank_wdy@live.cn>
 */
namespace App\Commands;

use Uniondrug\Builder\Commands\Builder;

/**
 * 生成脚手架
 * php console builder --table tableName
 * @package App\Commands
 */
class BuilderCommand extends Builder
{
    protected $authorConfig = [
        'name' => 'wangdongyu',
        'email' => 'frank_wdy@live.cn'
    ];
}