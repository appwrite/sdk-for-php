```php
<?php

use Appwrite\Client;
use Appwrite\Services\VectorsDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$vectorsDB = new VectorsDB($client);

$result = $vectorsDB->createOperations(
    transactionId: '<TRANSACTION_ID>',
    operations: [
	    {
	        "action": "create",
	        "databaseId": "<DATABASE_ID>",
	        "collectionId": "<COLLECTION_ID>",
	        "documentId": "<DOCUMENT_ID>",
	        "data": {
	            "embeddings": [
	                0.12,
	                -0.55,
	                0.88,
	                1.02
	            ],
	            "metadata": {
	                "name": "First document"
	            }
	        }
	    }
	] // optional
);
```
