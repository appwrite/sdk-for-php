```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\AppwriteMigrationResource;
use Appwrite\Enums\OnDuplicate;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$migrations = new Migrations($client);

$result = $migrations->createAppwriteMigration(
    resources: [AppwriteMigrationResource::USER()],
    endpoint: 'https://example.com',
    projectId: '<PROJECT_ID>',
    apiKey: '<API_KEY>',
    onDuplicate: OnDuplicate::FAIL() // optional
);
```
