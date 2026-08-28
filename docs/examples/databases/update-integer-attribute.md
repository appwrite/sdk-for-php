```php
<?php

use Appwrite\Client;
use Appwrite\Services\Databases;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$databases = new Databases($client);

$result = $databases->updateIntegerAttribute(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    key: '<KEY>',
    required: false,
    default: 10,
    min: 0, // optional
    max: 100, // optional
    newKey: '<NEW_KEY>' // optional
);
```
