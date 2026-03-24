```php
<?php

use Appwrite\Client;
use Appwrite\Services\DocumentsDB;
use Appwrite\Enums\DocumentsDBIndexType;
use Appwrite\Enums\OrderBy;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$documentsDB = new DocumentsDB($client);

$result = $documentsDB->createIndex(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    key: '',
    type: DocumentsDBIndexType::KEY(),
    attributes: [],
    orders: [OrderBy::ASC()], // optional
    lengths: [] // optional
);```
