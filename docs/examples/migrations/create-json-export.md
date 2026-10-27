```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$migrations = new Migrations($client);

$result = $migrations->createJSONExport(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    filename: '<FILENAME>',
    columns: [], // optional
    queries: [], // optional
    notify: false // optional
);
```
