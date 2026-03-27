<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesOrderCoreModuleInterface;

interface HasFuturesOrderCoreModuleInterface
{
    public function futuresOrder(): FuturesOrderCoreModuleInterface;
}
