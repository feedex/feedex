<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AccountModuleInterface
{
    /** @return array<string, mixed> */
    public function getAccountInfo(): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getTradeFeeRate(array $query = []): array;
}
