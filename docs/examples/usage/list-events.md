```php
<?php

use Appwrite\Client;
use Appwrite\Services\Usage;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$usage = new Usage($client);

$result = $usage->listEvents(
    metric: '<METRIC>',
    resource: '<RESOURCE>', // optional
    resourceId: '<RESOURCE_ID>', // optional
    interval: '1m', // optional
    dimensions: [], // optional
    startAt: '2020-10-15T06:38:00.000+00:00', // optional
    endAt: '2020-10-15T06:38:00.000+00:00', // optional
    orderBy: 'time', // optional
    orderDir: 'asc', // optional
    limit: 1, // optional
    offset: 0 // optional
);```
