```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;
use Appwrite\Enums\DomainRegistrationType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$domains = new Domains($client);

$result = $domains->getPrice(
    domain: 'example.com',
    periodYears: null, // optional
    registrationType: DomainRegistrationType::NEW() // optional
);
```
