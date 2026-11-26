```php
<?php

use Appwrite\Client;
use Appwrite\Services\Videos;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$videos = new Videos($client);

$result = $videos->getRendition(
    videoId: '<VIDEO_ID>',
    renditionId: '<RENDITION_ID>'
);
```
