```php
<?php

use Appwrite\Client;
use Appwrite\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession('') // The user session to authenticate with
    ->setImpersonateUserId(''); // Impersonate a user by ID on an already user-authenticated request. Requires the current request to be authenticated as a user with impersonator capability; X-Appwrite-Key alone is not sufficient. Impersonator users are intentionally granted users.read so they can discover a target before impersonation begins. Internal audit logs still attribute actions to the original impersonator and record the impersonated target only in internal audit payload data.

$storage = new Storage($client);

$result = $storage->getFileView(
    bucketId: '<BUCKET_ID>',
    fileId: '<FILE_ID>',
    token: '<TOKEN>' // optional
);```
