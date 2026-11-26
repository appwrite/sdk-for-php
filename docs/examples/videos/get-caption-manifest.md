```php
<?php

use Appwrite\Client;
use Appwrite\Services\Videos;
use Appwrite\Enums\VideoOutput;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$videos = new Videos($client);

$result = $videos->getCaptionManifest(
    videoId: '<VIDEO_ID>',
    output: VideoOutput::HLS(),
    captionId: '<CAPTION_ID>'
);
```
