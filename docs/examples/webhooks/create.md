```php
<?php

use Appwrite\Client;
use Appwrite\Services\Webhooks;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$webhooks = new Webhooks($client);

$result = $webhooks->create(
    webhookId: '<WEBHOOK_ID>',
    url: '',
    name: '<NAME>',
    events: [],
    enabled: false, // optional
    tls: false, // optional
    authUsername: '<AUTH_USERNAME>', // optional
    authPassword: '<AUTH_PASSWORD>', // optional
    secret: '<SECRET>' // optional
);```
