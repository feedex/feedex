<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesOrderAdvancedModuleInterface;

interface HasFuturesOrderAdvancedModuleInterface
{
    public function futuresOrder(): FuturesOrderAdvancedModuleInterface;
}
