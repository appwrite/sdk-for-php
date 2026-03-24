```php
<?php

use Appwrite\Client;
use Appwrite\Services\DocumentsDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$documentsDB = new DocumentsDB($client);

$result = $documentsDB->deleteCollection(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>'
);```
