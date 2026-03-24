```php
<?php

use Appwrite\Client;
use Appwrite\Services\VectorsDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$vectorsDB = new VectorsDB($client);

$result = $vectorsDB->getDocument(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    documentId: '<DOCUMENT_ID>',
    queries: [], // optional
    transactionId: '<TRANSACTION_ID>' // optional
);```
