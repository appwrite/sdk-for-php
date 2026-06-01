```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organization;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$organization = new Organization($client);

$result = $organization->updateProject(
    projectId: '<PROJECT_ID>',
    name: '<NAME>'
);```
