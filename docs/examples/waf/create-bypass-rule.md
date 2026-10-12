```php
<?php

use Appwrite\Client;
use Appwrite\Services\Waf;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$waf = new Waf($client);

$result = $waf->createBypassRule(
    ruleId: '<RULE_ID>',
    resourceType: 'api',
    name: '<NAME>',
    resourceId: '<RESOURCE_ID>', // optional
    description: '<DESCRIPTION>', // optional
    priority: -100000, // optional
    enabled: false, // optional
    conditions: [] // optional
);
```
