<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotMarketCoreModuleInterface;

interface HasSpotMarketCoreModuleInterface
{
    public function spotMarket(): SpotMarketCoreModuleInterface;
}
