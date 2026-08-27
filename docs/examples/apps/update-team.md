```php
<?php

use Appwrite\Client;
use Appwrite\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$apps = new Apps($client);

$result = $apps->updateTeam(
    appId: '<APP_ID>',
    teamId: '<TEAM_ID>'
);
```
