```php
<?php

use Appwrite\Client;
use Appwrite\Services\VectorsDB;
use Appwrite\Permission;
use Appwrite\Role;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$vectorsDB = new VectorsDB($client);

$result = $vectorsDB->updateCollection(
    databaseId: '<DATABASE_ID>',
    collectionId: '<COLLECTION_ID>',
    name: '<NAME>',
    dimension: 1, // optional
    permissions: [Permission::read(Role::any())], // optional
    documentSecurity: false, // optional
    enabled: false // optional
);```
