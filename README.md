# Appwrite PHP SDK

![License](https://img.shields.io/badge/license-BSD--3--Clause-blue.svg?style=flat-square)
![Version](https://img.shields.io/badge/api%20version-2.5.0-blue.svg?style=flat-square&v=1)
[![X Account](https://img.shields.io/badge/follow-%40appwrite-000000?logo=x&style=flat-square)](https://x.com/appwrite)
[![Discord](https://img.shields.io/discord/564160730845151244?label=discord&style=flat-square)](https://appwrite.io/discord)

**This SDK targets Appwrite server version 2.5.x as shipped on Appwrite Cloud.** Self-hosted releases can lag behind Cloud — if you run an older self-hosted build, use a matching older SDK from [previous releases](https://github.com/appwrite/sdk-for-php/releases) when APIs differ.

Appwrite is an open-source backend as a service server that abstracts and simplifies complex and repetitive development tasks behind a very simple to use REST API. Appwrite aims to help you develop your apps faster and in a more secure way. Use the PHP SDK to integrate your app with the Appwrite server to easily start interacting with all of Appwrite backend APIs and tools. For full API documentation and tutorials go to [https://appwrite.io/docs](https://appwrite.io/docs)

![Appwrite](https://github.com/appwrite/appwrite/raw/main/public/images/github.png)

## Installation

To install via [Composer](https://getcomposer.org/):

```bash
composer require appwrite/appwrite
```

Requires PHP 8.5 or later.

### Custom HTTP transport

For applications that configure their own HTTP transport, pass any PSR-18 client to the constructor. Hosts that run SDK calls concurrently, such as Swoole coroutines, should pass a pooled client so no cURL handle is shared between coroutines:

```php
use Appwrite\Client;
use Utopia\Client\Adapter\SwooleCoroutine\Client as SwooleAdapter;
use Utopia\Client\Client as HttpClient;
use Utopia\Client\Pool as PooledClient;
use Utopia\Pools\Adapter\Swoole as SwoolePool;
use Utopia\Pools\Pool;

$client = new Client(new PooledClient(new Pool(
    new SwoolePool(),
    'appwrite',
    128,
    fn (): HttpClient => new HttpClient(new SwooleAdapter())
        ->withConnectionReuse()
        ->withTimeout(5)
        ->withConnectTimeout(2),
    timeout: 3.0,
)));
$client->setEndpoint('https://cloud.appwrite.io/v1');
```

Configure timeouts, TLS, redirects, and connection reuse on the injected transport. The SDK's `setTimeout()`, `setConnectTimeout()`, and `setSelfSigned()` methods only configure the default cURL transport. Endpoint, authentication, headers, request encoding, and response handling remain the SDK's responsibility. A transport used with `responseType: 'location'` must have redirect following disabled.

## Getting Started

### Init your SDK
Initialize the SDK with your Appwrite endpoint, project ID, and an API key. Find the endpoint and project ID in your project's **Settings** page, and create an API key with the scopes your code needs under **Overview > Integrations > API keys**. API keys grant server-level access, so keep them out of client-side code.

```php
use Appwrite\Client;

$client = new Client()
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1')
    ->setProject('<PROJECT_ID>')
    ->setKey('<API_KEY>');
```

If you self-host Appwrite, use your own endpoint, such as `https://appwrite.example.com/v1`. During local development with a self-signed certificate, call `->setSelfSigned()` to skip certificate verification. Never use it in production.

### Make your first request
Once the client is configured, create a service object and call any of its methods. Each method is documented in the [API references](https://appwrite.io/docs/references).

```php
use Appwrite\ID;
use Appwrite\Services\Users;

$users = new Users($client);

$user = $users->create(
    userId: ID::unique(),
    email: 'email@example.com',
    password: 'password',
    name: "Walter O'Brien",
);

echo $user->name;
```

### Full example
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Appwrite\Client;
use Appwrite\ID;
use Appwrite\Services\Users;

$client = new Client()
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1')
    ->setProject('<PROJECT_ID>')
    ->setKey('<API_KEY>');

$users = new Users($client);

$user = $users->create(
    userId: ID::unique(),
    email: 'email@example.com',
    password: 'password',
    name: "Walter O'Brien",
);

echo $user->name;
```

### Error handling
The SDK throws `Appwrite\AppwriteException` when a request fails. Use `getMessage()`, `getCode()`, `getType()`, and `getResponse()` to inspect the error.

```php
use Appwrite\AppwriteException;

try {
    $user = $users->create(
        userId: ID::unique(),
        email: 'email@example.com',
        password: 'password',
        name: "Walter O'Brien",
    );
} catch (AppwriteException $error) {
    echo $error->getMessage();
}
```

### Learn more
You can use the following resources to learn more and get help:
- 🚀 [PHP Quick Start](https://appwrite.io/docs/quick-starts/php)
- 📜 [Appwrite Docs](https://appwrite.io/docs)
- 💬 [Discord Community](https://appwrite.io/discord)
- 🚂 [Appwrite PHP Playground](https://github.com/appwrite/playground-for-php)

## Contribution

This library is auto-generated by Appwrite custom [SDK Generator](https://github.com/appwrite/sdk-generator). To learn more about how you can help us improve this SDK, please check the [contribution guide](https://github.com/appwrite/sdk-generator/blob/main/CONTRIBUTING.md) before sending a pull-request.

## License

Please see the [BSD-3-Clause license](https://raw.githubusercontent.com/appwrite/appwrite/master/LICENSE) file for more information.
