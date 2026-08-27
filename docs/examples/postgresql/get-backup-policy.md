```php
<?php

use Appwrite\Client;
use Appwrite\Services\Postgresql;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$postgresql = new Postgresql($client);

$result = $postgresql->getBackupPolicy(
    databaseId: '<DATABASE_ID>',
    policyId: '<POLICY_ID>'
);
```
