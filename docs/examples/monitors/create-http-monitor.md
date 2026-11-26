```php
<?php

use Appwrite\Client;
use Appwrite\Services\Monitors;
use Appwrite\Enums\MonitorMethod;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Query;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$monitors = new Monitors($client);

$result = $monitors->createHttpMonitor(
    monitorId: '<MONITOR_ID>',
    name: '<NAME>',
    url: 'https://api.example.com/health',
    method: MonitorMethod::GET(), // optional
    headers: [
        'Authorization' => 'Bearer <TOKEN>'
    ], // optional
    body: '<BODY>', // optional
    rules: [
        Query::or([
            Query::notBetween('statusCode', 200, 299),
            Query::greaterThan('latency', 2000)
        ])
    ], // optional
    interval: 60, // optional
    timeout: 10, // optional
    cooldown: 300, // optional
    enabled: true, // optional
    notify: [
        'owner'
    ], // optional
    severity: MonitorSeverity::INFO(), // optional
    escalationId: '<ESCALATION_ID>' // optional
);
```
