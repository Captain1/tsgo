<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-01-17
 * Time: 11:16
 */
namespace App\Commands;

use App\Logics\InsureTask\AgainTrailLogic;
use App\Logics\Policy\ClaimMaxRatioLogic;
use App\Logics\Task\InsureTask\InsureTaskAmountLogic;
use App\Logics\Task\InsureTask\InsureTaskInterestAmountLogic;
use App\Logics\Task\InsureTask\InsureTaskLogic;
use App\Logics\Task\Policy\PolicyClaimAmountWarnDrugLogic;
use App\Logics\Task\Policy\PolicyOnlineClaimAmountWarnLogic;
use App\Models\Merchant;
use App\Models\Policy;
use App\Services\Abstracts\ServiceTrait;
use App\Structs\Requests\Policy\PagingExtendRequestStruct;
use App\Structs\Results\InsureTaskAmount\PanelListResult;
use DateTime;
use Phalcon\Mvc\Model\Query\Builder;
use Uniondrug\Console\Command;
use Uniondrug\Money\Money;

/**
 * @method withQueryList(Builder $builder)
 */
class TestCommand extends Command
{
    use ServiceTrait;
    private $lock;

    /**
     * @inheritdoc
     */
    public function configure()
    {
        parent::configure();
        $this->setName('test');
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function handle()
    {
        $a=0;
        var_dump(isset($a));
        exit;
        $merchant = "";
        $this->organize($organize);
    }
    public function organize(Merchant $organize){
        print_r($organize->toArray());
    }
}