# feedex/feedex

Feedex core package.

`feedex/feedex` is an exchange-agnostic foundation for building a unified crypto exchange SDK ecosystem.
It does **not** implement any exchange API directly. Instead, it provides contracts and a registry so adapter packages (like `feedex/coinex`) can plug in cleanly.

## Why this package exists

- Keep core independent from exchange-specific details
- Let users install only the adapters they need
- Enforce a consistent, typed contract across adapters
- Make adding new exchanges predictable and maintainable

## Installation

```bash
composer require feedex/feedex
```

You will usually install at least one adapter as well:

```bash
composer require feedex/feedex feedex/coinex
```

## Core concepts

### 1) `ExchangeInterface`
Represents a concrete exchange client instance (e.g. CoinEx, KuCoin).

### 2) `ExchangeFactoryInterface`
Responsible for creating exchange instances from config.

### 3) Module contracts
Standard capabilities for exchange modules, e.g.:

- `CommonModuleInterface`
- `AccountModuleInterface`
- `AssetModuleInterface`
- `SpotMarketModuleInterface`
- `SpotOrderModuleInterface`
- `SpotDealModuleInterface`
- `FuturesMarketModuleInterface`
- `FuturesOrderModuleInterface`
- `FuturesDealModuleInterface`

### 4) Capability contracts
Exchange clients declare supported modules via capability interfaces, e.g.:

- `HasCommonModuleInterface`
- `HasAccountModuleInterface`
- `HasAssetModuleInterface`
- `HasSpotMarketModuleInterface`
- `HasSpotOrderModuleInterface`
- `HasSpotDealModuleInterface`
- `HasFuturesMarketModuleInterface`
- `HasFuturesOrderModuleInterface`
- `HasFuturesDealModuleInterface`

### 5) `Feedex` registry/manager
Central place to register adapter factories and resolve exchanges by id.

## Quick usage

```php
use Feedex\Feedex;
use Feedex\Coinex\v2\CoinexFactory;

$feedex = (new Feedex())
    ->register(new CoinexFactory());

$coinex = $feedex->exchange('coinex', [
    'access_id' => getenv('COINEX_ACCESS_ID'),
    'secret_key' => getenv('COINEX_SECRET_KEY'),
]);

$markets = $coinex->spotMarket()->listMarkets();
```

## Error handling

If you request an exchange that is not registered, `Feedex` throws:

- `Feedex\Exceptions\UnknownExchangeException`

## Creating a new adapter

An adapter package should:

1. Depend on `feedex/feedex`
2. Implement `ExchangeInterface` in its exchange client
3. Implement module/capability contracts as supported
4. Provide an `ExchangeFactoryInterface` implementation
5. Be registered in `Feedex` via `->register(...)`

## Package scope

This repository is intentionally minimal and stable.

Exchange-specific HTTP clients, auth signing rules, endpoint methods, and DTO mapping belong in adapter repositories (e.g. `feedex/coinex`).
