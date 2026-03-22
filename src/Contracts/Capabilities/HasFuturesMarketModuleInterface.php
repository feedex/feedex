<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesMarketModuleInterface;

interface HasFuturesMarketModuleInterface
{
    public function futuresMarket(): FuturesMarketModuleInterface;
}
