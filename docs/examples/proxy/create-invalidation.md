```php
<?php

use Appwrite\Client;
use Appwrite\Services\Proxy;
use Appwrite\Enums\InvalidationType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$proxy = new Proxy($client);

$result = $proxy->createInvalidation(
    domain: '',
    type: InvalidationType::TAG(),
    reference: '<REFERENCE>' // optional
);```
