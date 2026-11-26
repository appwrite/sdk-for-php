```php
<?php

use Appwrite\Client;
use Appwrite\Services\Videos;
use Appwrite\Enums\VideoOutput;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$videos = new Videos($client);

$result = $videos->createRendition(
    videoId: '<VIDEO_ID>',
    profileId: '<PROFILE_ID>',
    output: VideoOutput::HLS()
);
```
