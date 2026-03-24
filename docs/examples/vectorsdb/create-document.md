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

$result = $vectorsDB->createDocument(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    documentId: '<DOCUMENT_ID>',
    data: [
        'embeddings' => [
            '0' => 0.12,
            '1' => -0.55,
            '2' => 0.88,
            '3' => 1.02
        ],
        'metadata' => [
            'key' => 'value'
        ]
    ],
    permissions: [Permission::read(Role::any())] // optional
);```
