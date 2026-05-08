```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->updateOAuth2Apple(
    serviceId: '<SERVICE_ID>', // optional
    keyId: '<KEY_ID>', // optional
    teamId: '<TEAM_ID>', // optional
    p8File: '<P8_FILE>', // optional
    enabled: false // optional
);```
