<?php

declare(strict_types=1);

namespace Feedex\Contracts;

interface ExchangeFactoryInterface
{
    public function exchangeId(): string;

    /**
     * @param array<string, mixed> $config
     */
    public function create(array $config): ExchangeInterface;
}
