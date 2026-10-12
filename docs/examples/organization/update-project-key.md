```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organization;
use Appwrite\Enums\ProjectKeyScopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$organization = new Organization($client);

$result = $organization->updateProjectKey(
    projectId: '<PROJECT_ID>',
    keyId: '<KEY_ID>',
    name: '<NAME>',
    scopes: [ProjectKeyScopes::USERSREAD()],
    expire: '2020-10-15T06:38:00.000+00:00' // optional
);
```
