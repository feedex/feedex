<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface FuturesMarketAnalyticsModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketFundingRate(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketFundingRateHistory(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketBasisHistory(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketLiquidationHistory(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketPositionLevel(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketPremiumHistory(array $query): array;
}
