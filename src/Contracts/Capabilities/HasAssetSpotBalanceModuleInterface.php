<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetSpotBalanceModuleInterface;

interface HasAssetSpotBalanceModuleInterface
{
    public function asset(): AssetSpotBalanceModuleInterface;
}
