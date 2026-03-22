<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface FuturesPositionModuleInterface
{
    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function closePosition(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function adjustPositionMargin(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function adjustPositionLeverage(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function setPositionStopLoss(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function setPositionTakeProfit(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function modifyPositionStopLoss(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function modifyPositionTakeProfit(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function cancelPositionStopLoss(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function cancelPositionTakeProfit(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPendingPosition(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listFinishedPosition(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPositionMarginHistory(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPositionFundingHistory(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPositionAdlHistory(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPositionSettleHistory(array $query = []): array;
}
