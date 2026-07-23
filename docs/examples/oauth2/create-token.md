```php
<?php

use Appwrite\Client;
use Appwrite\Services\Oauth2;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setSession('') // The user session to authenticate with
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$oauth2 = new Oauth2($client);

$result = $oauth2->createToken(
    grantType: '<GRANT_TYPE>',
    code: '<CODE>', // optional
    refreshToken: '<REFRESH_TOKEN>', // optional
    deviceCode: '<DEVICE_CODE>', // optional
    clientId: '<CLIENT_ID>', // optional
    clientSecret: '<CLIENT_SECRET>', // optional
    codeVerifier: '<CODE_VERIFIER>', // optional
    redirectUri: 'https://example.com', // optional
    resource: '', // optional
    audience: '<AUDIENCE>' // optional
);```
