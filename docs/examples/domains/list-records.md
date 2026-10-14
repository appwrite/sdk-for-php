```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$domains = new Domains($client);

$result = $domains->listRecords(
    domainId: '<DOMAIN_ID>',
    queries: [] // optional
);
```
