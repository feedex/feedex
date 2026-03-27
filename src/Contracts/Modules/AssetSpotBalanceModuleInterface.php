<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AssetSpotBalanceModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSpotBalance(array $query = []): array;
}
