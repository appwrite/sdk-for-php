```php
<?php

use Appwrite\Client;
use Appwrite\Services\Videos;
use Appwrite\Enums\ImageFormat;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$videos = new Videos($client);

$result = $videos->getThumbnail(
    videoId: '<VIDEO_ID>',
    thumbnailId: '<THUMBNAIL_ID>',
    width: 0, // optional
    height: 0, // optional
    output: ImageFormat::JPG() // optional
);
```
