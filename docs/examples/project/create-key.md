```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;
use Appwrite\Enums\Scopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->createKey(
    keyId: '<KEY_ID>',
    name: '<NAME>',
    scopes: [Scopes::PROJECTREAD()],
    expire: '2020-10-15T06:38:00.000+00:00' // optional
);```
