<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface FuturesDealModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listUserDeals(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listUserOrderDeals(array $query): array;
}
