<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetDepositWithdrawalModuleInterface;

interface HasAssetDepositWithdrawalModuleInterface
{
    public function assetDepositWithdrawal(): AssetDepositWithdrawalModuleInterface;
}
