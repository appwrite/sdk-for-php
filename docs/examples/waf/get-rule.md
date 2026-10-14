```php
<?php

use Appwrite\Client;
use Appwrite\Services\Waf;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$waf = new Waf($client);

$result = $waf->getRule(
    ruleId: '<RULE_ID>'
);
```
