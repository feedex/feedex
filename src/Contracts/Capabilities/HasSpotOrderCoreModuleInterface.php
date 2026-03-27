<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotOrderCoreModuleInterface;

interface HasSpotOrderCoreModuleInterface
{
    public function spotOrder(): SpotOrderCoreModuleInterface;
}
