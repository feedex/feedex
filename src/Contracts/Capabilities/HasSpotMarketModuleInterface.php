<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotMarketModuleInterface;

interface HasSpotMarketModuleInterface
{
    public function spotMarket(): SpotMarketModuleInterface;
}
