```php
<?php

use Appwrite\Client;
use Appwrite\Services\Advisor;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$advisor = new Advisor($client);

$result = $advisor->listInsights(
    reportId: '<REPORT_ID>',
    queries: [], // optional
    total: false // optional
);```
