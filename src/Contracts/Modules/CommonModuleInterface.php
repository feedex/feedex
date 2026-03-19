<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface CommonModuleInterface
{
    /** @return array<string, mixed> */
    public function ping(): array;

    /** @return array<string, mixed> */
    public function time(): array;

    /** @return array<string, mixed> */
    public function maintainInfo(): array;
}
