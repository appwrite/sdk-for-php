```php
<?php

use Appwrite\Client;
use Appwrite\Services\Monitors;
use Appwrite\Enums\MonitorRecord;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Query;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$monitors = new Monitors($client);

$result = $monitors->createDnsMonitor(
    monitorId: '<MONITOR_ID>',
    name: '<NAME>',
    domain: 'example.com',
    record: MonitorRecord::A(), // optional
    resolver: '1.1.1.1', // optional
    rules: [
        Query::or([
            Query::equal('answers', 0),
            Query::greaterThan('latency', 1000)
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
