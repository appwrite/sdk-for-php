```php
<?php

use Appwrite\Client;
use Appwrite\Services\Oauth2;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$oauth2 = new Oauth2($client);

$result = $oauth2->introspect(
    token: '<TOKEN>',
    tokenTypeHint: 'access_token', // optional
    clientId: '<CLIENT_ID>', // optional
    clientSecret: '<CLIENT_SECRET>' // optional
);
```
