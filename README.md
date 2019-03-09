# Appwrite SDK for PHP

Official Appwrite SDK. For full API documentation and tutorials go to [https://appwrite.io/docs](https://appwrite.io/docs)

**API Version: v0.0.0dev**

## Installation

To install via [Composer](http://getcomposer.org/):

```bash
composer require appwrite/appwrite
```

## Getting Started

To get started with using the SDK you need to setup a client with your API credentials.

```php
use Appwrite\Client;
use Appwrite\Api;

$client = new Client();
$api    = new Api($client)

```

## License

Please see the [MIT license]() file for more information.