# Databases Service

## List Databases

```http request
GET https://HOSTNAME/v1/databases
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of collection to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the collection used as the starting point for the query, excluding the collection itself. Should be used for efficient pagination when working with large sets of data. |  |
| cursorDirection | string | Direction of the cursor, can be either &#039;before&#039; or &#039;after&#039;. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Database

```http request
POST https://HOSTNAME/v1/databases
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Collection name. Max length: 128 chars. |  |

## Get Database

```http request
GET https://HOSTNAME/v1/databases/{databaseId}
```

## Update Database

```http request
PUT https://HOSTNAME/v1/databases/{databaseId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Collection name. Max length: 128 chars. |  |

## Delete Database

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}
```

## List Collections

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of collection to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the collection used as the starting point for the query, excluding the collection itself. Should be used for efficient pagination when working with large sets of data. |  |
| cursorDirection | string | Direction of the cursor, can be either &#039;before&#039; or &#039;after&#039;. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Collection

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | Unique Id. Choose your own unique ID or pass the string &quot;unique()&quot; to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| permission | string | Specifies the permissions model used in this collection, which accepts either &#039;collection&#039; or &#039;document&#039;. For &#039;collection&#039; level permission, the permissions specified in read and write params are applied to all documents in the collection. For &#039;document&#039; level permissions, read and write permissions are specified in each document. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| read | array | An array of strings with read permissions. By default no user is granted with any read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default no user is granted with any write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |

## Get Collection

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. |  |

## Update Collection

```http request
PUT https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| permission | string | Permissions type model to use for reading documents in this collection. You can use collection-level permission set once on the collection using the `read` and `write` params, or you can set document-level permission where each document read and write params will decide who has access to read and write to each document individually. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| read | array | An array of strings with read permissions. By default inherits the existing read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default inherits the existing write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| enabled | boolean | Is collection enabled? | 1 |

## Delete Collection

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. |  |

## List Attributes

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |

## Create Boolean Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/boolean
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | boolean | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create Email Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/email
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create Enum Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/enum
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| elements | array | Array of elements in enumerated type. Uses length of longest element to determine size. Maximum of 100 elements are allowed, each 4096 characters long. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create Float Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/float
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | number | Minimum value to enforce on new documents |  |
| max | number | Maximum value to enforce on new documents |  |
| default | number | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create Integer Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/integer
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | integer | Minimum value to enforce on new documents |  |
| max | integer | Maximum value to enforce on new documents |  |
| default | integer | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create IP Address Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/ip
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create String Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/string
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| size | integer | Attribute size for text attributes, in number of characters. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Create URL Attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/url
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Get Attribute

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | **Required** Attribute Key. |  |

## Delete Attribute

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | **Required** Attribute Key. |  |

## List Documents

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/database#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| limit | integer | Maximum number of documents to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the document used as the starting point for the query, excluding the document itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor, can be either &#039;before&#039; or &#039;after&#039;. | after |
| orderAttributes | array | Array of attributes used to sort results. Maximum of 100 order attributes are allowed, each 4096 characters long. | [] |
| orderTypes | array | Array of order directions for sorting attribtues. Possible values are DESC for descending order, or ASC for ascending order. Maximum of 100 order types are allowed. | [] |

## Create Document

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). Make sure to define attributes before creating documents. |  |
| documentId | string | Document ID. Choose your own unique ID or pass the string &quot;unique()&quot; to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| data | object | Document data as JSON object. | {} |
| read | array | An array of strings with read permissions. By default only the current user is granted with read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default only the current user is granted with write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |

## Get Document

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| documentId | string | **Required** Document ID. |  |

## Update Document

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| data | object | Document data as JSON object. Include only attribute and value pairs to be updated. | {} |
| read | array | An array of strings with read permissions. By default inherits the existing read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default inherits the existing write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |

## Delete Document

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| documentId | string | **Required** Document ID. |  |

## List Indexes

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |

## Create Index

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | Index Key. |  |
| type | string | Index type. |  |
| attributes | array | Array of attributes to index. Maximum of 100 attributes are allowed, each 32 characters long. |  |
| orders | array | Array of index orders. Maximum of 100 orders are allowed. | [] |

## Get Index

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | **Required** Index Key. |  |

## Delete Index

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/database#createCollection). |  |
| key | string | **Required** Index Key. |  |

