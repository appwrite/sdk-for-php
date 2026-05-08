```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->updateOAuth2Oidc(
    clientId: '<CLIENT_ID>', // optional
    clientSecret: '<CLIENT_SECRET>', // optional
    wellKnownURL: 'https://example.com', // optional
    authorizationURL: 'https://example.com', // optional
    tokenURL: 'https://example.com', // optional
    userInfoURL: 'https://example.com', // optional
    enabled: false // optional
);```
