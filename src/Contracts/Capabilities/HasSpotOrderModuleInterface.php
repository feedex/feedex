<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotOrderModuleInterface;

interface HasSpotOrderModuleInterface
{
    public function spotOrder(): SpotOrderModuleInterface;
}
