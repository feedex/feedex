<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\CommonModuleInterface;

interface HasCommonModuleInterface
{
    public function common(): CommonModuleInterface;
}
