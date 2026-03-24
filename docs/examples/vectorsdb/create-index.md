```php
<?php

use Appwrite\Client;
use Appwrite\Services\VectorsDB;
use Appwrite\Enums\VectorsDBIndexType;
use Appwrite\Enums\OrderBy;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$vectorsDB = new VectorsDB($client);

$result = $vectorsDB->createIndex(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    key: '',
    type: VectorsDBIndexType::HNSWEUCLIDEAN(),
    attributes: [],
    orders: [OrderBy::ASC()], // optional
    lengths: [] // optional
);```
