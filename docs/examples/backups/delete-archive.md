```php
<?php

use Appwrite\Client;
use Appwrite\Services\Backups;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$backups = new Backups($client);

$result = $backups->deleteArchive(
    archiveId: '<ARCHIVE_ID>'
);```
