<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-19
 */
namespace App\Errors;

/**
 * 错误码定义
 * 1. 对外暴露int型错误码
 * 2. 静态属性$plus用于在$code前递加固定值, 以应用间区分
 * @package App\Errors
 */

use Uniondrug\Framework\Errors\Code as FrameworkErrorCode;

/**
 * 错误码定义
 * @package App\Errors
 */
class Code extends FrameworkErrorCode
{
    const FAILURE_REQUEST = 1;
    const FAILURE_SEARCH = 2;
    const FAILURE_CREATE = 3;
    const FAILURE_UPDATE = 4;
    const FAILURE_DELETE = 5;
    const FAILURE_CHANGE = 6;
    const FAILURE_DETAIL = 7;
    const FAILURE_SYNC = 8;
    const PARAM_INVALID = 9;
    const SDK_READ_ERR = 10;
    protected static $codeMessages = [
        self::SDK_READ_ERR => "SDK 读取失败",
        self::FAILURE_REQUEST => '入参错误',
        self::FAILURE_SEARCH => '查找失败',
        self::FAILURE_CREATE => '创建失败',
        self::FAILURE_UPDATE => '更新失败',
        self::FAILURE_DELETE => '删除失败',
        self::FAILURE_CHANGE => '修改失败',
        self::FAILURE_DETAIL => '查找详情失败',
        self::FAILURE_SYNC => '同步失败',
    ];
    protected static $codePlus = 141000;
}
