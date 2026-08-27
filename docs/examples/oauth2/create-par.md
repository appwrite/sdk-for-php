```php
<?php

use Appwrite\Client;
use Appwrite\Services\Oauth2;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setSession('') // The user session to authenticate with
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$oauth2 = new Oauth2($client);

$result = $oauth2->createPAR(
    clientId: '<CLIENT_ID>',
    redirectUri: 'https://example.com',
    responseType: 'code',
    scope: '<SCOPE>', // optional
    state: '<STATE>', // optional
    nonce: '<NONCE>', // optional
    codeChallenge: '<CODE_CHALLENGE>', // optional
    codeChallengeMethod: 's256', // optional
    prompt: '<PROMPT>', // optional
    maxAge: 0, // optional
    authorizationDetails: '<AUTHORIZATION_DETAILS>', // optional
    resource: '', // optional
    audience: '<AUDIENCE>' // optional
);
```
