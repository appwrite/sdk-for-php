```php
<?php

use Appwrite\Client;
use Appwrite\Services\Presences;
use Appwrite\Permission;
use Appwrite\Role;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$presences = new Presences($client);

$result = $presences->update(
    presenceId: '<PRESENCE_ID>',
    userId: '<USER_ID>',
    status: '<STATUS>', // optional
    expiresAt: '2020-10-15T06:38:00.000+00:00', // optional
    metadata: [], // optional
    permissions: [Permission::read(Role::any())], // optional
    purge: false // optional
);```
