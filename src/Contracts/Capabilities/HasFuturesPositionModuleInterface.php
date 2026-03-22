<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\FuturesPositionModuleInterface;

interface HasFuturesPositionModuleInterface
{
    public function futuresPosition(): FuturesPositionModuleInterface;
}
