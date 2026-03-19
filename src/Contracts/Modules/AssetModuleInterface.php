<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AssetModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSpotBalance(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getFuturesBalance(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getMarginBalance(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getFinancialBalance(array $query = []): array;
}
