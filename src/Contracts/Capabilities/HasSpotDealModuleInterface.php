<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\SpotDealModuleInterface;

interface HasSpotDealModuleInterface
{
    public function spotDeal(): SpotDealModuleInterface;
}
