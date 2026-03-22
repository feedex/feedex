<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesOrderModuleInterface;

interface HasFuturesOrderModuleInterface
{
    public function futuresOrder(): FuturesOrderModuleInterface;
}
