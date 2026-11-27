```php
<?php

use Appwrite\Client;
use Appwrite\Services\Analytics;
use Appwrite\Enums\AnalyticsPropertyType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$analytics = new Analytics($client);

$result = $analytics->createProperty(
    propertyId: '<PROPERTY_ID>',
    name: '<NAME>',
    domain: '<DOMAIN>', // optional
    enabled: false, // optional
    allowedOrigins: [], // optional
    identifyUsers: false, // optional
    type: AnalyticsPropertyType::WEB() // optional
);
```
