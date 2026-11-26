```php
<?php

use Appwrite\Client;
use Appwrite\Services\Monitors;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Query;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$monitors = new Monitors($client);

$result = $monitors->createUsageMonitor(
    monitorId: '<MONITOR_ID>',
    name: '<NAME>',
    rules: [
        Query::greaterThan('network.outbound', 5000000000)
    ],
    window: 3600, // optional
    cooldown: 1800, // optional
    enabled: true, // optional
    notify: [
        'owner'
    ], // optional
    severity: MonitorSeverity::INFO(), // optional
    escalationId: '<ESCALATION_ID>' // optional
);
```
