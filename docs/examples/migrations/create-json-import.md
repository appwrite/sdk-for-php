```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\OnDuplicate;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$migrations = new Migrations($client);

$result = $migrations->createJSONImport(
    bucketId: '<BUCKET_ID>',
    fileId: '<FILE_ID>',
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    internalFile: false, // optional
    onDuplicate: OnDuplicate::FAIL() // optional
);
```
