# Appwrite PHP SDK

![License](https://img.shields.io/github/license/appwrite/sdk-for-php.svg?style=flat-square&v=1)
![Version](https://img.shields.io/badge/api%20version-1.4.0-blue.svg?style=flat-square&v=1)
[![Build Status](https://img.shields.io/travis/com/appwrite/sdk-generator?style=flat-square)](https://travis-ci.com/appwrite/sdk-generator)
[![Twitter Account](https://img.shields.io/twitter/follow/appwrite?color=00acee&label=twitter&style=flat-square)](https://twitter.com/appwrite)
[![Discord](https://img.shields.io/discord/564160730845151244?label=discord&style=flat-square)](https://appwrite.io/discord)

**This SDK is compatible with Appwrite server version 1.4.x. For older versions, please check [previous releases](https://github.com/appwrite/sdk-for-php/releases).**

Appwrite is an open-source backend as a service server that abstract and simplify complex and repetitive development tasks behind a very simple to use REST API. Appwrite aims to help you develop your apps faster and in a more secure way. Use the PHP SDK to integrate your app with the Appwrite server to easily start interacting with all of Appwrite backend APIs and tools. For full API documentation and tutorials go to [https://appwrite.io/docs](https://appwrite.io/docs)

![Appwrite](https://appwrite.io/images/github.png)

## Installation

To install via [Composer](http://getcomposer.org/):

```bash
composer require appwrite/appwrite
```


## Getting Started

### Init your SDK
Initialize your SDK with your Appwrite server API endpoint and project ID which can be found in your project settings page and your new API secret Key from project's API keys section.

```php
$client = new Client();

$client
    ->setEndpoint('https://[HOSTNAME_OR_IP]/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setKey('919c2d18fb5d4...a2ae413da83346ad2') // Your secret API key
    ->setSelfSigned() // Use only on dev mode with a self-signed SSL cert
;
```

### Make Your First Request
Once your SDK object is set, create any of the Appwrite service objects and choose any request to send. Full documentation for any service method you would like to use can be found in your SDK documentation or in the [API References](https://appwrite.io/docs) section.

```php
$users = new Users($client);

$user = $users->create(ID::unique(), 'email@example.com', 'password');
```

### Full Example
```php
use Appwrite\Client;
use Appwrite\ID;
use Appwrite\Services\Users;

$client = new Client();

$client
    ->setEndpoint('https://[HOSTNAME_OR_IP]/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setKey('919c2d18fb5d4...a2ae413da83346ad2') // Your secret API key
    ->setSelfSigned() // Use only on dev mode with a self-signed SSL cert
;

$users = new Users($client);

$user = $users->create(ID::unique(), 'email@example.com', 'password');
```

### Error Handling
The Appwrite PHP SDK raises `AppwriteException` object with `message`, `code` and `response` properties. You can handle any errors by catching `AppwriteException` and present the `message` to the user or handle it yourself based on the provided error information. Below is an example.

```php
$users = new Users($client);
try {
    $user = $users->create(ID::unique(), 'email@example.com', 'password');
} catch(AppwriteException $error) {
    echo $error->message;
}

```

### Learn more
You can use the following resources to learn more and get help
- 🚀 [Getting Started Tutorial](https://appwrite.io/docs/getting-started-for-server)
- 📜 [Appwrite Docs](https://appwrite.io/docs)
- 💬 [Discord Community](https://appwrite.io/discord)
- 🚂 [Appwrite PHP Playground](https://github.com/appwrite/playground-for-php)


## Contribution

This library is auto-generated by Appwrite custom [SDK Generator](https://github.com/appwrite/sdk-generator). To learn more about how you can help us improve this SDK, please check the [contribution guide](https://github.com/appwrite/sdk-generator/blob/master/CONTRIBUTING.md) before sending a pull-request.

## License

Please see the [BSD-3-Clause license](https://raw.githubusercontent.com/appwrite/appwrite/master/LICENSE) file for more information.