<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-01-24
 */
namespace App\Services\Abstracts;

use App\Servers\Http;
use App\Services\BankAccount\BankAccountLogService;
use App\Services\BankAccount\BankAccountService;
use App\Services\BankHouse\BankHouseService;
use App\Services\Bank\BankService;
use App\Services\Company\CompanyService;
use App\Services\DictGroupService;
use App\Services\DictService;
use App\Services\DictLogService;
use App\Services\DictGroupLogService;
use App\Services\RedisService;
use App\Services\JavaUserService;
use App\Services\SystemWorkerRoleService;
use App\Services\Partner\Setting\PartnerSettingsService;
use App\Services\Partner\PartnerService;
use App\Services\Partner\Extend\PartnerExtendService;
use App\Services\Partner\Director\PartnerDirectorService;
use App\Services\Partner\Fund\PartnerFundService;
use App\Services\Partner\Renewal\PartnerRenewalService;
use App\Services\Partner\BillInfo\PartnerBillInfoService;
use App\Services\Insurer\BillInfo\InsurerBillInfoService;
use App\Services\Insurer\Director\InsurerDirectorService;
use App\Services\Insurer\InsurerExtendService;
use App\Services\Insurer\InsurerService;
use App\Services\Worker\WorkerManService;
use App\Services\Worker\WorkerService;
use App\Services\Relationship\BusinessRelationshipService;
use Uniondrug\Framework\Container;

/**
 * @package App\Services\Abstracts
 */
trait ServiceTrait
{
    /**
     * 读取Swoole实例
     * @return Http
     * @throws \Exception
     */
    public function getSwoole()
    {
        /**
         * @var Container $di
         */
        $di = $this->di;
        $swoole = $di->getShared('server');
        if ($swoole instanceof Http) {
            return $swoole;
        }
        throw new \Exception("only work with swoole mode");
    }
}
