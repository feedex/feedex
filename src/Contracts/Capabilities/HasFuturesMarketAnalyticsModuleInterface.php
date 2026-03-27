<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesMarketAnalyticsModuleInterface;

interface HasFuturesMarketAnalyticsModuleInterface
{
    public function futuresMarket(): FuturesMarketAnalyticsModuleInterface;
}
