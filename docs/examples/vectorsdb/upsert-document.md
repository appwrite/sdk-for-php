```php
<?php

use Appwrite\Client;
use Appwrite\Services\VectorsDB;
use Appwrite\Permission;
use Appwrite\Role;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$vectorsDB = new VectorsDB($client);

$result = $vectorsDB->upsertDocument(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    documentId: '<DOCUMENT_ID>',
    data: [], // optional
    permissions: [Permission::read(Role::any())], // optional
    transactionId: '<TRANSACTION_ID>' // optional
);```
