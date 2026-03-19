<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AssetModuleInterface;

interface HasAssetModuleInterface
{
    public function asset(): AssetModuleInterface;
}
