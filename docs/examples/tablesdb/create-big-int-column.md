```php
<?php

use Appwrite\Client;
use Appwrite\Services\TablesDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$tablesDB = new TablesDB($client);

$result = $tablesDB->createBigIntColumn(
    databaseId: '<DATABASE_ID>',
    tableId: '<TABLE_ID>',
    key: '<KEY>',
    required: false,
    min: 0, // optional
    max: 1000000, // optional
    default: 0, // optional
    array: false // optional
);
```
