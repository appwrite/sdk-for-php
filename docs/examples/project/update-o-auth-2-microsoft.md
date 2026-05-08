```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->updateOAuth2Microsoft(
    applicationId: '<APPLICATION_ID>', // optional
    applicationSecret: '<APPLICATION_SECRET>', // optional
    tenant: '<TENANT>', // optional
    enabled: false // optional
);```
