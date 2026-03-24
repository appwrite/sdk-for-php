# VectorsDB Service


```http request
GET https://cloud.appwrite.io/v1/vectorsdb
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following columns: name | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is the database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/embeddings/text
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| texts | array | Array of text to generate embeddings. |  |
| model | string | The embedding model to use for generating vector embeddings. | embeddinggemma |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/transactions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). | [] |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/transactions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ttl | integer | Seconds before the transaction expires. | 300 |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/transactions/{transactionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/vectorsdb/transactions/{transactionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |
| commit | boolean | Commit transaction? |  |
| rollback | boolean | Rollback transaction? |  |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/transactions/{transactionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/transactions/{transactionId}/operations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |
| operations | array | Array of staged operations. | [] |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/vectorsdb/{databaseId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/{databaseId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, documentSecurity | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| dimension | integer | Embedding dimension. |  |
| permissions | array | An array of permissions strings. By default, no user is granted with any permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| documentSecurity | boolean | Enables configuring permissions for individual documents. A user needs one of document or collection level permissions to access a document. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is collection enabled? When set to 'disabled', users cannot access the collection but Server SDKs with and API key can still read and write to the collection. No data is lost when this is toggled. | 1 |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| dimension | integer | Embedding dimensions. |  |
| permissions | array | An array of permission strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| documentSecurity | boolean | Enables configuring permissions for individual documents. A user needs one of document or collection level permissions to access a document. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is collection enabled? When set to 'disabled', users cannot access the collection but Server SDKs with and API key can still read and write to the collection. No data is lost when this is toggled. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID to read uncommitted changes within the transaction. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |
| ttl | integer | TTL (seconds) for cached responses when caching is enabled for select queries. Must be between 0 and 86400 (24 hours). | 0 |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). Make sure to define attributes before creating documents. |  |
| documentId | string | Document ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| data | object | Document data as JSON object. | {} |
| permissions | array | An array of permissions strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). Make sure to define attributes before creating documents. |  |
| documents | array | Array of documents data as JSON objects. | [] |


```http request
PUT https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documents | array | Array of document data as JSON objects. May contain partial documents. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| data | object | Document data as JSON object. Include only attribute and value pairs to be updated. | {} |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID to read uncommitted changes within the transaction. |  |


```http request
PUT https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| data | object | Document data as JSON object. Include all required fields of the document to be created or updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| data | object | Document data as JSON object. Include only fields and value pairs to be updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/indexes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, type, status, attributes, error | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/indexes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Index Key. |  |
| type | string | Index type. |  |
| attributes | array | Array of attributes to index. Maximum of 100 attributes are allowed, each 32 characters long. |  |
| orders | array | Array of index orders. Maximum of 100 orders are allowed. | [] |
| lengths | array | Length of index. Maximum of 100 | [] |


```http request
GET https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |


```http request
DELETE https://cloud.appwrite.io/v1/vectorsdb/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |

