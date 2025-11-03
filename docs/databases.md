# Databases Service


```http request
GET https://cloud.appwrite.io/v1/databases
```

** Get a list of all databases from the current Appwrite project. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/databases
```

** Create a new Database.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is the database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |


```http request
GET https://cloud.appwrite.io/v1/databases/transactions
```

** List transactions across all databases. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). | [] |


```http request
POST https://cloud.appwrite.io/v1/databases/transactions
```

** Create a new transaction. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ttl | integer | Seconds before the transaction expires. | 300 |


```http request
GET https://cloud.appwrite.io/v1/databases/transactions/{transactionId}
```

** Get a transaction by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/transactions/{transactionId}
```

** Update a transaction, to either commit or roll back its operations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |
| commit | boolean | Commit transaction? |  |
| rollback | boolean | Rollback transaction? |  |


```http request
DELETE https://cloud.appwrite.io/v1/databases/transactions/{transactionId}
```

** Delete a transaction by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/transactions/{transactionId}/operations
```

** Create multiple operations in a single transaction. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| transactionId | string | **Required** Transaction ID. |  |
| operations | array | Array of staged operations. | [] |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}
```

** Get a database by its unique ID. This endpoint response returns a JSON object with the database metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/databases/{databaseId}
```

** Update a database by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}
```

** Delete a database by its unique ID. Only API keys with with databases.write scope can delete a database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections
```

** Get a list of all collections that belong to the provided databaseId. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, documentSecurity | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections
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


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}
```

** Get a collection by its unique ID. This endpoint response returns a JSON object with the collection metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}
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


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}
```

** Delete a collection by its unique ID. Only users with write permissions have access to delete this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes
```

** List attributes in the collection. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, type, size, required, array, status, error | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/boolean
```

** Create a boolean attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | boolean | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/boolean/{key}
```

** Update a boolean attribute. Changing the `default` value will not update already existing documents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#createCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | boolean | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| newKey | string | New attribute key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/datetime
```

** Create a date time attribute according to the ISO 8601 standard. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#createCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for the attribute in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/datetime/{key}
```

** Update a date time attribute. Changing the `default` value will not update already existing documents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| newKey | string | New attribute key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/email
```

** Create an email attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/email/{key}
```

** Update an email attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/enum
```

** Create an enum attribute. The `elements` param acts as a white-list of accepted values for this attribute. 
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| elements | array | Array of enum values. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/enum/{key}
```

** Update an enum attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| elements | array | Updated list of enum values. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/float
```

** Create a float attribute. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | number | Minimum value. |  |
| max | number | Maximum value. |  |
| default | number | Default value. Cannot be set when required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/float/{key}
```

** Update a float attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | number | Minimum value. |  |
| max | number | Maximum value. |  |
| default | number | Default value. Cannot be set when required. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/integer
```

** Create an integer attribute. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | integer | Minimum value |  |
| max | integer | Maximum value |  |
| default | integer | Default value. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/integer/{key}
```

** Update an integer attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| min | integer | Minimum value |  |
| max | integer | Maximum value |  |
| default | integer | Default value. Cannot be set when attribute is required. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/ip
```

** Create IP address attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/ip/{key}
```

** Update an ip attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value. Cannot be set when attribute is required. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/line
```

** Create a geometric line attribute. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, two-dimensional array of coordinate pairs, [[longitude, latitude], [longitude, latitude], …], listing the vertices of the line in order. Cannot be set when attribute is required. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/line/{key}
```

** Update a line attribute. Changing the `default` value will not update already existing documents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#createCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, two-dimensional array of coordinate pairs, [[longitude, latitude], [longitude, latitude], …], listing the vertices of the line in order. Cannot be set when attribute is required. |  |
| newKey | string | New attribute key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/point
```

** Create a geometric point attribute. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, array of two numbers [longitude, latitude], representing a single coordinate. Cannot be set when attribute is required. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/point/{key}
```

** Update a point attribute. Changing the `default` value will not update already existing documents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#createCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, array of two numbers [longitude, latitude], representing a single coordinate. Cannot be set when attribute is required. |  |
| newKey | string | New attribute key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/polygon
```

** Create a geometric polygon attribute. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, three-dimensional array where the outer array holds one or more linear rings, [[[longitude, latitude], …], …], the first ring is the exterior boundary, any additional rings are interior holes, and each ring must start and end with the same coordinate pair. Cannot be set when attribute is required. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/polygon/{key}
```

** Update a polygon attribute. Changing the `default` value will not update already existing documents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#createCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | array | Default value for attribute when not provided, three-dimensional array where the outer array holds one or more linear rings, [[[longitude, latitude], …], …], the first ring is the exterior boundary, any additional rings are interior holes, and each ring must start and end with the same coordinate pair. Cannot be set when attribute is required. |  |
| newKey | string | New attribute key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/relationship
```

** Create relationship attribute. [Learn more about relationship attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| relatedCollectionId | string | Related Collection ID. |  |
| type | string | Relation type |  |
| twoWay | boolean | Is Two Way? |  |
| key | string | Attribute Key. |  |
| twoWayKey | string | Two Way Attribute Key. |  |
| onDelete | string | Constraints option | restrict |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/string
```

** Create a string attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | Attribute Key. |  |
| size | integer | Attribute size for text attributes, in number of characters. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |
| encrypt | boolean | Toggle encryption for the attribute. Encryption enhances security by not storing any plain text values in the database. However, encrypted attributes cannot be queried. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/string/{key}
```

** Update a string attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| size | integer | Maximum size of the string attribute. |  |
| newKey | string | New Attribute Key. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/url
```

** Create a URL attribute.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| array | boolean | Is attribute an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/url/{key}
```

** Update an url attribute. Changing the `default` value will not update already existing documents.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| required | boolean | Is attribute required? |  |
| default | string | Default value for attribute when not provided. Cannot be set when attribute is required. |  |
| newKey | string | New Attribute Key. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

** Get attribute by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}
```

** Deletes an attribute. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/attributes/{key}/relationship
```

** Update relationship attribute. [Learn more about relationship attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| key | string | **Required** Attribute Key. |  |
| onDelete | string | Constraints option |  |
| newKey | string | New Attribute Key. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Get a list of all the user&#039;s documents in a given collection. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID to read uncommitted changes within the transaction. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
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
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Create new Documents. Before using this route, you should create a new collection resource using either a [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). Make sure to define attributes before creating documents. |  |
| documents | array | Array of documents data as JSON objects. | [] |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PUT https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Create or update Documents. Before using this route, you should create a new collection resource using either a [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection) API or directly from your database console.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documents | array | Array of document data as JSON objects. May contain partial documents. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Update all documents that match your queries, if no queries are submitted then all documents are updated. You can pass only specific fields to be updated. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| data | object | Document data as JSON object. Include only attribute and value pairs to be updated. | {} |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents
```

** Bulk delete documents using queries, if no queries are passed then all documents are deleted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Get a document by its unique ID. This endpoint response returns a JSON object with the document data. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| transactionId | string | Transaction ID to read uncommitted changes within the transaction. |  |


```http request
PUT https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Create or update a Document. Before using this route, you should create a new collection resource using either a [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| data | object | Document data as JSON object. Include all required attributes of the document to be created or updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
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
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}
```

** Delete a document by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| documentId | string | **Required** Document ID. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/decrement
```

** Decrement a specific attribute of a document by a given value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| attribute | string | **Required** Attribute key. |  |
| value | number | Value to increment the attribute by. The value must be a number. | 1 |
| min | number | Minimum value for the attribute. If the current value is lesser than this value, an exception will be thrown. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
PATCH https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/increment
```

** Increment a specific attribute of a document by a given value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. |  |
| documentId | string | **Required** Document ID. |  |
| attribute | string | **Required** Attribute key. |  |
| value | number | Value to increment the attribute by. The value must be a number. | 1 |
| max | number | Maximum value for the attribute. If the current value is greater than this value, an error will be thrown. |  |
| transactionId | string | Transaction ID for staging the operation. |  |


```http request
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/indexes
```

** List indexes in the collection. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, type, status, attributes, error | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/indexes
```

** Creates an index on the attributes listed. Your index should include all the attributes you will query in a single request.
Attributes can be `key`, `fulltext`, and `unique`. **

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
GET https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

** Get an index by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |


```http request
DELETE https://cloud.appwrite.io/v1/databases/{databaseId}/collections/{collectionId}/indexes/{key}
```

** Delete an index. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| collectionId | string | **Required** Collection ID. You can create a new collection using the Database service [server integration](https://appwrite.io/docs/server/databases#databasesCreateCollection). |  |
| key | string | **Required** Index Key. |  |

