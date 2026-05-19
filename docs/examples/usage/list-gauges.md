```php
<?php

use Appwrite\Client;
use Appwrite\Services\Usage;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$usage = new Usage($client);

$result = $usage->listGauges(
    queries: [], // optional
    total: false // optional
);```
