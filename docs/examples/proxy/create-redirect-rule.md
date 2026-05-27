```php
<?php

use Appwrite\Client;
use Appwrite\Services\Proxy;
use Appwrite\Enums\RedirectStatusCode;
use Appwrite\Enums\ProxyResourceType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$proxy = new Proxy($client);

$result = $proxy->createRedirectRule(
    domain: '',
    url: 'https://example.com',
    statusCode: RedirectStatusCode::MOVEDPERMANENTLY(),
    resourceId: '<RESOURCE_ID>',
    resourceType: ProxyResourceType::SITE()
);```
