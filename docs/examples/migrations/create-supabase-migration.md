```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\SupabaseMigrationResource;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$migrations = new Migrations($client);

$result = $migrations->createSupabaseMigration(
    resources: [SupabaseMigrationResource::USER()],
    endpoint: 'https://example.com',
    apiKey: '<API_KEY>',
    databaseHost: '<DATABASE_HOST>',
    username: '<USERNAME>',
    password: 'password',
    port: 5432 // optional
);
```
