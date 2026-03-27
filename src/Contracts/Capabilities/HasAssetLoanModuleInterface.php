<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetLoanModuleInterface;

interface HasAssetLoanModuleInterface
{
    public function assetLoan(): AssetLoanModuleInterface;
}
