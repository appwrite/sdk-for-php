# Databases Service

## List databases

```http request
GET https://HOSTNAME/v1/databases
```

** Get a list of all databases from the current Appwrite project. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create database

```http request
POST https://HOSTNAME/v1/databases
```

** Create a new Database.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is the database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |

## Get database

```http request
GET https://HOSTNAME/v1/databases/{databaseId}
```

** Get a database by its unique ID. This endpoint response returns a JSON object with the database metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |

## Update database

```http request
PUT https://HOSTNAME/v1/databases/{databaseId}
```

** Update a database by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |

## Delete database

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}
```

** Delete a database by its unique ID. Only API keys with with databases.write scope can delete a database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |

## List collections

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections
```

** Get a list of all collections that belong to the provided databaseId. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, documentSecurity | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create collection

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections
```

** Create a new Collection. Before using this route, you should create a new database resource using either a [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| permissions | array | An array of permissions strings. By default, no user is granted with any permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| documentSecurity | boolean | Enables configuring permissions for individual documents. A user needs one of document or collection level permissions to access a document. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is collection enabled? When set to 'disabled', users cannot access the collection but Server SDKs with and API key can still read and write to the collection. No data is lost when this is toggled. | 1 |

## Get collection

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

** Get a collection by its unique ID. This endpoint response returns a JSON object with the collection metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |

## Update collection

```http request
PUT https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

** Update a collection by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| name | string | Collection name. Max length: 128 chars. |  |
| permissions | array | An array of permission strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| documentSecurity | boolean | Enables configuring permissions for individual documents. A user needs one of document or collection level permissions to access a document. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is collection enabled? When set to 'disabled', users cannot access the collection but Server SDKs with and API key can still read and write to the collection. No data is lost when this is toggled. | 1 |

## Delete collection

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}
```

** Delete a collection by its unique ID. Only users with write permissions have access to delete this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |

## List attributes

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, type, size, required, array, status, error | [] |

## Create boolean attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/boolean
```

** Create a boolean attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | boolean | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update boolean attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/boolean/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | boolean | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create datetime attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/datetime
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for the attribute in ISO 8601 format. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update dateTime attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/datetime/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create email attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/email
```

** Create an email attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update email attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/email/{key}
```

** Update an email attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create enum attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/enum
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| elements | array | Array of elements in enumerated type. Uses length of longest element to determine size. Maximum of 100 elements are allowed, each 4096 characters long. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update enum attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/enum/{key}
```

** Update an enum attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| elements | array | Array of elements in enumerated type. Uses length of longest element to determine size. Maximum of 100 elements are allowed, each 4096 characters long. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create float attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/float
```

** Create a float attribute. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | number | Minimum value to enforce on new documents |  |
| max | number | Maximum value to enforce on new documents |  |
| default | number | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update float attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/float/{key}
```

** Update a float attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | number | Minimum value to enforce on new documents |  |
| max | number | Maximum value to enforce on new documents |  |
| default | number | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create integer attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/integer
```

** Create an integer attribute. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | integer | Minimum value to enforce on new documents |  |
| max | integer | Maximum value to enforce on new documents |  |
| default | integer | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update integer attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/integer/{key}
```

** Update an integer attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | integer | Minimum value to enforce on new documents |  |
| max | integer | Maximum value to enforce on new documents |  |
| default | integer | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create IP address attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/ip
```

** Create IP address attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update IP address attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/ip/{key}
```

** Update an ip attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create relationship attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/relationship
```

** Create relationship attribute. [Learn more about relationship attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| relatedCollectionId | string | Related Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| type | string | Relation type |  |
| twoWay | boolean | Is Two Way? |  |
| key | string | Attribute Key. |  |
| twoWayKey | string | Two Way Attribute Key. |  |
| onDelete | string | Constraints option | restrict |

## Create string attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/string
```

** Create a string attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| size | integer | Attribute size for text attributes, in number of characters. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |
| encrypt | boolean | Toggle encryption for the attribute. Encryption enhances security by not storing any plain text values in the database. However, encrypted attributes cannot be queried. |  |

## Update string attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/string/{key}
```

** Update a string attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Create URL attribute

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/url
```

** Create a URL attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |

## Update URL attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/url/{key}
```

** Update an url attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |

## Get attribute

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |

## Delete attribute

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |

## Update relationship attribute

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}/relationship
```

** Update relationship attribute. [Learn more about relationship attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| onDelete | string | Constraints option |  |

## List documents

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Get a list of all the user&#039;s documents in a given collection. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |

## Create document

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Create a new Document. Before using this route, you should create a new collection resource using either a [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). Make sure to define attributes before creating documents. |  |
| documentId | string | Document ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| data | object | Document data as JSON object. | {} |
| permissions | array | An array of permissions strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |

## Get document

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Get a document by its unique ID. This endpoint response returns a JSON object with the document data. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Only method allowed is select. | [] |

## Update document

```http request
PATCH https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Update a document by its unique ID. Using the patch method you can pass only specific fields that will get updated. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| data | object | Document data as JSON object. Include only attribute and value pairs to be updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |

## Delete document

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Delete a document by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |

## List indexes

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, type, status, attributes, error | [] |

## Create index

```http request
POST https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes
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

## Get index

```http request
GET https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |

## Delete index

```http request
DELETE https://HOSTNAME/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |

