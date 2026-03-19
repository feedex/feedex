<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface SpotOrderModuleInterface
{
    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function putOrder(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function cancelOrder(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function cancelAllOrder(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getOrderStatus(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listPendingOrder(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listFinishedOrder(array $query = []): array;
}
