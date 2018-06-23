# Laravel Revolut 

Laravel wrapper for the revolut-php package developed by sverraest - https://github.com/sverraest/revolut-php

## Installation
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this package:

```console
$ composer require vdbelt/laravel-revolut
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