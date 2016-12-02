# Laravel 5 Lightspeed Seoshop API Wrapper

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![StyleCI](https://styleci.io/repos/58305903/shield?branch=master)](https://styleci.io/repos/75090664)

This package makes working with the Lightspeed eCom API a breeze. Once installed you can perform all API calls like so:

```php
use ShopApi;

// shop info
$shopInfo = ShopApi::shop()->get();

// retrieve all products
$products = ShopApi::products()->get(); // Note: by default the API spits out 50 items with a max of 250

// with params
$products = ShopApi::products()->get(null, array('page' => 1, 'limit' => 100));

// product info with id
$productInfo = ShopApi::products()->get(1);

// to change the API language
ShopApi::setApiLanguage('de');
```

Consult the [Lightspeed eCom API docs](http://developers.lightspeedhq.com/ecom/introduction/introduction/) for all of the API options.

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
     * Lightspeed Default API Language
     */
    'locale' => '',

];
```

Read the [Lightspeed eCom API docs](http://developers.lightspeedhq.com/ecom/introduction/introduction/) to learn on how to set the correct values and api keys.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
