```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$domains = new Domains($client);

$result = $domains->updateRecordAAAA(
    domainId: '<DOMAIN_ID>',
    recordId: '<RECORD_ID>',
    name: '',
    value: '',
    ttl: 1,
    comment: '<COMMENT>' // optional
);
```
