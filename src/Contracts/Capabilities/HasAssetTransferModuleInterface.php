<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetTransferModuleInterface;

interface HasAssetTransferModuleInterface
{
    public function assetTransfer(): AssetTransferModuleInterface;
}
