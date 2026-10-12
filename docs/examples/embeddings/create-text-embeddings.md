```php
<?php

use Appwrite\Client;
use Appwrite\Services\Embeddings;
use Appwrite\Enums\EmbeddingModel;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$embeddings = new Embeddings($client);

$result = $embeddings->createTextEmbeddings(
    texts: ["Appwrite helps developers build applications.", "Find documents with semantic search."],
    model: EmbeddingModel::NOMICEMBEDTEXT() // optional
);
```
