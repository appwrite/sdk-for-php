```php
<?php

use Appwrite\Client;
use Appwrite\Services\DocumentsDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$documentsDB = new DocumentsDB($client);

$result = $documentsDB->deleteDocument(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    documentId: '<DOCUMENT_ID>',
    transactionId: '<TRANSACTION_ID>' // optional
);```
