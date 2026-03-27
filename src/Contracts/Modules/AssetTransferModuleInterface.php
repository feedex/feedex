<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AssetTransferModuleInterface
{
    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function transfer(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listTransferHistory(array $query = []): array;
}
