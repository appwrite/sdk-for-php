```php
<?php

use Appwrite\Client;
use Appwrite\Services\Mysql;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$mysql = new Mysql($client);

$result = $mysql->updateBackupStorage(
    databaseId: '<DATABASE_ID>',
    provider: 's3',
    bucket: '<BUCKET>',
    accessKey: '<ACCESS_KEY>',
    secretKey: '<SECRET_KEY>',
    region: '<REGION>', // optional
    prefix: '<PREFIX>', // optional
    endpoint: '<ENDPOINT>' // optional
);
```
