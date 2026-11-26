```php
<?php

use Appwrite\Client;
use Appwrite\Services\Videos;
use Appwrite\Permission;
use Appwrite\Role;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$videos = new Videos($client);

$result = $videos->create(
    videoId: '<VIDEO_ID>',
    bucketId: '<BUCKET_ID>',
    fileId: '<FILE_ID>',
    name: '<NAME>', // optional
    permissions: [Permission::read(Role::any())] // optional
);
```
