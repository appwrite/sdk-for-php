```php
<?php

use Appwrite\Client;
use Appwrite\Services\Oauth2;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setSession('') // The user session to authenticate with
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$oauth2 = new Oauth2($client);

$result = $oauth2->createDeviceAuthorization(
    clientId: '<CLIENT_ID>', // optional
    scope: '<SCOPE>', // optional
    authorizationDetails: '<AUTHORIZATION_DETAILS>', // optional
    resource: '', // optional
    audience: '<AUDIENCE>' // optional
);
```
