```php
<?php

use Appwrite\Client;
use Appwrite\Services\Users;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$users = new Users($client);

$result = $users->createBcryptUser(
    userId: '<USER_ID>',
    email: 'email@example.com',
    password: '$2y$10$vBiMe4NOvlbYL1iJUNdqkO.QJy17fvslZQ5oiqKq1G4uwyRWvdrXC',
    name: '<NAME>' // optional
);
```
