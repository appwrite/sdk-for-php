<?php

use Appwrite\Client;
use Appwrite\Payload;
use Appwrite\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setSession(''); // The user session to authenticate with

$storage = new Storage($client);

$result = $storage->createFile(
    bucketId: '<BUCKET_ID>',
    fileId: '<FILE_ID>',
    file: Payload::fromFile('file.png'),
    permissions: ["read("any")"] // optional
);