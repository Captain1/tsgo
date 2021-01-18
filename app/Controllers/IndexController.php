<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-06-17
 */
namespace App\Controllers;

use App\Controllers\Abstracts\Base;

/**
 * @package App\Controllers
 * @RoutePrefix("/")
 */
class IndexController extends Base
{
    /**
     * @ignore
     * @Route("/")
     */
    public function indexAction()
    {
        $data = ["project" => "api-tsgo"];
        return $this->serviceServer->withSuccess($data);
    }
}
