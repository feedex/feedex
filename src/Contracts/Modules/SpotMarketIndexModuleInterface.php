<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface SpotMarketIndexModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketIndex(array $query = []): array;
}
