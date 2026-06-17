```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;
use Appwrite\Enums\ProjectSMTPSecure;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->updateSMTP(
    host: '', // optional
    port: null, // optional
    username: '<USERNAME>', // optional
    password: 'password', // optional
    senderEmail: 'email@example.com', // optional
    senderName: '<SENDER_NAME>', // optional
    replyToEmail: 'email@example.com', // optional
    replyToName: '<REPLY_TO_NAME>', // optional
    secure: ProjectSMTPSecure::TLS(), // optional
    enabled: false // optional
);```
