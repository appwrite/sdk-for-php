```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$domains = new Domains($client);

$result = $domains->updateRecordSRV(
    domainId: '<DOMAIN_ID>',
    recordId: '<RECORD_ID>',
    name: '',
    value: '<VALUE>',
    ttl: 1,
    priority: 0,
    weight: 0,
    port: 0,
    comment: '<COMMENT>' // optional
);
```
