<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotOrderAdvancedModuleInterface;

interface HasSpotOrderAdvancedModuleInterface
{
    public function spotOrder(): SpotOrderAdvancedModuleInterface;
}
