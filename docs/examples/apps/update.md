```php
<?php

use Appwrite\Client;
use Appwrite\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$apps = new Apps($client);

$result = $apps->update(
    appId: '<APP_ID>',
    name: '<NAME>',
    description: '<DESCRIPTION>', // optional
    clientUri: 'https://example.com', // optional
    logoUri: 'https://example.com', // optional
    privacyPolicyUrl: 'https://example.com', // optional
    termsUrl: 'https://example.com', // optional
    contacts: [], // optional
    tagline: '<TAGLINE>', // optional
    tags: [], // optional
    images: [], // optional
    supportUrl: 'https://example.com', // optional
    dataDeletionUrl: 'https://example.com', // optional
    enabled: false, // optional
    redirectUris: [], // optional
    postLogoutRedirectUris: [], // optional
    type: 'public', // optional
    deviceFlow: false, // optional
    installationScopes: [], // optional
    installationRedirectUrl: 'https://example.com' // optional
);```
