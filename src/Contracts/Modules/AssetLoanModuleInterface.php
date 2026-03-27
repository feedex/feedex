<?php

declare(strict_types=1);

namespace Feedex\Contracts\Modules;

interface AssetLoanModuleInterface
{
    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function marginBorrow(array $payload): array;

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function marginRepay(array $payload): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarginBorrowHistory(array $query = []): array;

    /**
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    public function listMarginInterestLimit(array $query = []): array;
}
