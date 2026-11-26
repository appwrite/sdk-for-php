```php
<?php

use Appwrite\Client;
use Appwrite\Services\Monitors;
use Appwrite\Enums\MonitorTlsMode;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Query;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$monitors = new Monitors($client);

$result = $monitors->updateSmtpMonitor(
    monitorId: '<MONITOR_ID>',
    name: '<NAME>', // optional
    host: 'smtp.example.com', // optional
    port: 587, // optional
    tlsMode: MonitorTlsMode::NONE(), // optional
    rules: [
        Query::or([
            Query::lessThan('certificateDays', 14),
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
