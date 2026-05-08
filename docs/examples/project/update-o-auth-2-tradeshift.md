```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->updateOAuth2Tradeshift(
    oauth2ClientId: '<OAUTH2_CLIENT_ID>', // optional
    oauth2ClientSecret: '<OAUTH2_CLIENT_SECRET>', // optional
    enabled: false // optional
);```
