```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\NHostMigrationResource;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$migrations = new Migrations($client);

$result = $migrations->getNHostReport(
    resources: [NHostMigrationResource::USER()],
    subdomain: '<SUBDOMAIN>',
    region: '<REGION>',
    adminSecret: '<ADMIN_SECRET>',
    database: '<DATABASE>',
    username: '<USERNAME>',
    password: 'password',
    port: 5432 // optional
);
```
