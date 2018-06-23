# Laravel Revolut [![Build Status](https://travis-ci.org/vdbelt/laravel-revolut.svg?branch=master)](https://travis-ci.org/vdbelt/laravel-revolut)

Laravel wrapper for the [revolut-php](https://github.com/sverraest/revolut-php) package developed by Simon Verraest

## Installation
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this package:

```console
$ composer require vdbelt/laravel-revolut
```

Laravel 5.5+ will use the auto-discovery function.

In Laravel 5.4 (or if you are not using auto-discovery) register the service provider by adding it to the `providers` key in `config/app.php`. Also register the facade by adding it to the `aliases` key in `config/app.php`.

```php
'providers' => [
    ...
    Vdbelt\LaravelRevolut\LaravelRevolutServiceProvider::class,
],

'aliases' => [
    ...
    'Revolut' => Vdbelt\LaravelRevolut\Facades\Revolut::class,
]
```

## Configuration
Add the following section to your config/services.php configuration file:

```php
...
'revolut' => [
    'key' => 'XXXXXXXXX',
    'sandbox' => true
]
...
```

## Usage

Here you can see a few examples of just how simple this package is to use.

### Accounts API

```php
$accounts = Revolut::accounts()->all();
$account = Revolut::accounts()->get('foo');
$accountDetails = Revolut::accounts()->getDetails('foo');
```

### Payments API
```php
$payment = [
  'request_id' => 'e0cbf84637264ee082a848b',
  'account_id' => 'bdab1c20-8d8c-430d-b967-87ac01af060c',
  'receiver' => [
    'counterparty_id': '5138z40d1-05bb-49c0-b130-75e8cf2f7693',
    'account_id': 'db7c73d3-b0df-4e0e-8a9a-f42aa99f52ab'
  ],
  'amount' => 123.11,
  'currency' => 'EUR',
  'reference' => 'Invoice payment #123'
];

$payment = Revolut::payments()->create($payment);
```

For more examples, check out the usage intructions for [revolut-php](https://github.com/sverraest/revolut-php#usage-details)