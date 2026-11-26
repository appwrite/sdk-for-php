```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;
use Appwrite\Enums\VideoCodecId;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->createVideoProfile(
    profileId: '<PROFILE_ID>',
    name: '<NAME>',
    videoBitRate: 32000,
    audioBitRate: 32000,
    width: 16,
    height: 16,
    codec: VideoCodecId::H264() // optional
);
```
