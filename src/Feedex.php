<?php

declare(strict_types=1);

namespace Feedex;

use Feedex\Contracts\ExchangeFactoryInterface;
use Feedex\Contracts\ExchangeInterface;
use Feedex\Exceptions\UnknownExchangeException;

final class Feedex
{
    /** @var array<string, ExchangeFactoryInterface> */
    private array $factories = [];

    public function register(ExchangeFactoryInterface $factory): self
    {
        $this->factories[$factory->exchangeId()] = $factory;

        return $this;
    }

    public function has(string $exchangeId): bool
    {
        return isset($this->factories[$exchangeId]);
    }

    /** @return list<string> */
    public function exchanges(): array
    {
        return array_keys($this->factories);
    }

    /**
     * @param array<string, mixed> $config
     */
    public function exchange(string $exchangeId, array $config = []): ExchangeInterface
    {
        if (!isset($this->factories[$exchangeId])) {
            throw new UnknownExchangeException(sprintf('Exchange "%s" is not registered.', $exchangeId));
        }

        return $this->factories[$exchangeId]->create($config);
    }
}
