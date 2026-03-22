<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface FuturesMarketModuleInterface
{
    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarkets(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketTicker(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketDepth(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketDeals(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketKline(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarketIndex(array $query = []): array;

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
