# feedex/feedex

Core package for Feedex.

## What it provides

- Exchange contracts/interfaces
- Module capability contracts
- Exchange factory contract
- `Feedex` registry/manager for enabling adapters

## Usage

```php
use Feedex\Feedex;
use Feedex\Coinex\v2\CoinexFactory;

$feedex = (new Feedex())
    ->register(new CoinexFactory());

$coinex = $feedex->exchange('coinex', [
    'access_id' => 'xxx',
    'secret_key' => 'yyy',
]);
```

Adapters like `feedex/coinex` implement the contracts from this package.
