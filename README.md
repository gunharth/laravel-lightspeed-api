# Laravel Lightspeed Seoshop API Wrapper

## WIP - in progress and finished soon ... check back! or contribute ;-)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![StyleCI](https://styleci.io/repos/58305903/shield?branch=master)](https://styleci.io/repos/75090664)

This package makes working with the Lightspeed SeoShop API a breeze. Once installed you can perform all API calls like so:

```php
use ShopApi;

// shop info
$shopInfo = ShopApi::shop()->get();

//retrieve all products
$products = ShopApi::products()->get(null, array('limit' => 200));

// with params
$products = ShopApi::products()->get(null, array('page' => 1, limit' => 100));

// product info with id
$productInfo = ShopApi::products()->get(1);
```

## Installation

Install the package via composer:

```bash
composer require gunharth/laravel-lightspeed-api
```

Next up the service provider must be registered:

```php
'providers' => [
    ...
    Gunharth\Lightspeed\LightspeedServiceProvider::class,
];
```

Register the `Gunharth\Lightspeed\LightspeedFacade` Facade:

```php
'aliases' => [
	...
    'ShopApi' => Gunharth\Lightspeed\LightspeedFacade::class,
    ...
]
```

Publish the configuration with this command:

```bash
php artisan vendor:publish --provider="Gunharth\Lightspeed\LightspeedServiceProvider"
```

This will publish file called `lightspeed-api.php` in your config-directory with this contents:
```
<?php

return [

    /*
     * Lightspeed cluser_id
     */
    'cluster_id' => '',

     /*
     * Lightspeed API key
     */
    'api_key' => '',

    /*
     * Lightspeed API secret
     */
    'api_secret' => '',

    /*
     * Lightspeed Locale
     */
    'locale' => '',

];
```

Read the [Lightspeed API docs](http://developers.lightspeedhq.com/retail/introduction/introduction/) to learn on how to set the correct values and api keys.

## Usage

### Sample 1

### Sample 2

## Testing

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.