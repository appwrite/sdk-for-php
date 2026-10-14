```php
<?php

use Appwrite\Client;
use Appwrite\InputFile;
use Appwrite\Services\Avatars;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$avatars = new Avatars($client);

$result = $avatars->updatePhoto(
    file: InputFile::withPath('file.png')
);
```
