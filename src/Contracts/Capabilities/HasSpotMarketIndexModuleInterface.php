<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotMarketIndexModuleInterface;

interface HasSpotMarketIndexModuleInterface
{
    public function spotMarket(): SpotMarketIndexModuleInterface;
}
