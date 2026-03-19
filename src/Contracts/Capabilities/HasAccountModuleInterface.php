<?php

declare(strict_types=1);

namespace Feedex\Contracts\Capabilities;

use Feedex\Contracts\Modules\AccountModuleInterface;

interface HasAccountModuleInterface
{
    public function account(): AccountModuleInterface;
}
