<?php

declare(strict_types=1);

namespace Feedex\Tests;

use Feedex\Contracts\ExchangeFactoryInterface;
use Feedex\Contracts\ExchangeInterface;
use Feedex\Exceptions\UnknownExchangeException;
use Feedex\Feedex;
use PHPUnit\Framework\TestCase;

final class FeedexTest extends TestCase
{
    public function testRegisterHasAndListExchanges(): void
    {
        $feedex = new Feedex();
        $factory = new DummyFactory();

        self::assertFalse($feedex->has('dummy'));

        $feedex->register($factory);

        self::assertTrue($feedex->has('dummy'));
        self::assertSame(['dummy'], $feedex->exchanges());
    }

    public function testExchangeReturnsFactoryResult(): void
    {
        $feedex = (new Feedex())->register(new DummyFactory());

        $exchange = $feedex->exchange('dummy', ['api_key' => 'abc']);

        self::assertInstanceOf(DummyExchange::class, $exchange);
        self::assertSame('dummy', $exchange->id());
    }

    public function testUnknownExchangeThrowsException(): void
    {
        $feedex = new Feedex();

        $this->expectException(UnknownExchangeException::class);

        $feedex->exchange('missing');
    }
}

final class DummyFactory implements ExchangeFactoryInterface
{
    public function exchangeId(): string
    {
        return 'dummy';
    }

    public function create(array $config): ExchangeInterface
    {
        return new DummyExchange();
    }
}

final class DummyExchange implements ExchangeInterface
{
    public function id(): string
    {
        return 'dummy';
    }
}
