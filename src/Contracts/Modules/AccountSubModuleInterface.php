<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AccountSubModuleInterface
{
    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function createSub(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listSub(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSubInfo(array $query): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function frozenSub(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function cancelFrozenSub(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function createSubApi(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listSubApi(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSubApi(array $query): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function editSubApi(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function deleteSubApi(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSubBalance(array $query): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function getSubSpotBalance(array $query): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function subTransfer(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listSubTransferHistory(array $query = []): array;
}
