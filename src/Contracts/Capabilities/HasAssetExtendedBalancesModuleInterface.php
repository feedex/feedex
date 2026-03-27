<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetExtendedBalancesModuleInterface;

interface HasAssetExtendedBalancesModuleInterface
{
    public function asset(): AssetExtendedBalancesModuleInterface;
}
