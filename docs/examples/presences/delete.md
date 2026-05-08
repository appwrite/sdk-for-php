```php
<?php

use Appwrite\Client;
use Appwrite\Services\Presences;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$presences = new Presences($client);

$result = $presences->delete(
    presenceId: '<PRESENCE_ID>'
);```
