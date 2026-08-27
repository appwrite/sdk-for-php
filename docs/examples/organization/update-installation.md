```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organization;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$organization = new Organization($client);

$result = $organization->updateInstallation(
    installationId: '<INSTALLATION_ID>',
    authorizationDetails: '<AUTHORIZATION_DETAILS>' // optional
);
```
