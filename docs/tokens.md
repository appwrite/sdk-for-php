# Tokens Service


```http request
GET https://cloud.appwrite.io/v1/tokens/buckets/{bucketId}/files/{fileId}
```

** List all the tokens created for a specific file or bucket. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: expire | [] |


```http request
POST https://cloud.appwrite.io/v1/tokens/buckets/{bucketId}/files/{fileId}
```

** Create a new token. A token is linked to a file. Token can be passed as a header or request get parameter. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File unique ID. |  |
| expire | string | Token expiry date |  |


```http request
GET https://cloud.appwrite.io/v1/tokens/{tokenId}
```

** Get a token by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| tokenId | string | **Required** Token ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tokens/{tokenId}
```

** Update a token by its unique ID. Use this endpoint to update a token&#039;s expiry date. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| tokenId | string | **Required** Token unique ID. |  |
| expire | string | File token expiry date |  |


```http request
DELETE https://cloud.appwrite.io/v1/tokens/{tokenId}
```

** Delete a token by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| tokenId | string | **Required** Token ID. |  |

