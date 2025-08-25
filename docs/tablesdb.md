# TablesDB Service


```http request
GET https://cloud.appwrite.io/v1/tablesdb
```

** Get a list of all databases from the current Appwrite project. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following columns: name | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb
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
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}
```

** Get a database by its unique ID. This endpoint response returns a JSON object with the database metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/tablesdb/{databaseId}
```

** Update a database by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Database name. Max length: 128 chars. |  |
| enabled | boolean | Is database enabled? When set to 'disabled', users cannot access the database but Server SDKs with an API key can still read and write to the database. No data is lost when this is toggled. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}
```

** Delete a database by its unique ID. Only API keys with with databases.write scope can delete a database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables
```

** Get a list of all tables that belong to the provided databaseId. You can use the search parameter to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following columns: name, enabled, rowSecurity | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables
```

** Create a new Table. Before using this route, you should create a new database resource using either a [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreateTable) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Table name. Max length: 128 chars. |  |
| permissions | array | An array of permissions strings. By default, no user is granted with any permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| rowSecurity | boolean | Enables configuring permissions for individual rows. A user needs one of row or table level permissions to access a row. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is table enabled? When set to 'disabled', users cannot access the table but Server SDKs with and API key can still read and write to the table. No data is lost when this is toggled. | 1 |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}
```

** Get a table by its unique ID. This endpoint response returns a JSON object with the table metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}
```

** Update a table by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| name | string | Table name. Max length: 128 chars. |  |
| permissions | array | An array of permission strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| rowSecurity | boolean | Enables configuring permissions for individual rows. A user needs one of row or table level permissions to access a document. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is table enabled? When set to 'disabled', users cannot access the table but Server SDKs with and API key can still read and write to the table. No data is lost when this is toggled. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}
```

** Delete a table by its unique ID. Only users with write permissions have access to delete this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns
```

** List columns in the table. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following columns: key, type, size, required, array, status, error | [] |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/boolean
```

** Create a boolean column.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| default | boolean | Default value for column when not provided. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/boolean/{key}
```

** Update a boolean column. Changing the `default` value will not update already existing rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | boolean | Default value for column when not provided. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/datetime
```

** Create a date time column according to the ISO 8601 standard. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for the column in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/datetime/{key}
```

** Update a date time column. Changing the `default` value will not update already existing rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/email
```

** Create an email column.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/email/{key}
```

** Update an email column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/enum
```

** Create an enumeration column. The `elements` param acts as a white-list of accepted values for this column. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| elements | array | Array of enum values. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/enum/{key}
```

** Update an enum column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| elements | array | Updated list of enum values. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/float
```

** Create a float column. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| min | number | Minimum value |  |
| max | number | Maximum value |  |
| default | number | Default value. Cannot be set when required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/float/{key}
```

** Update a float column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| min | number | Minimum value |  |
| max | number | Maximum value |  |
| default | number | Default value. Cannot be set when required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/integer
```

** Create an integer column. Optionally, minimum and maximum values can be provided.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| min | integer | Minimum value |  |
| max | integer | Maximum value |  |
| default | integer | Default value. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/integer/{key}
```

** Update an integer column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| min | integer | Minimum value |  |
| max | integer | Maximum value |  |
| default | integer | Default value. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/ip
```

** Create IP address column.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/ip/{key}
```

** Update an ip column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/relationship
```

** Create relationship column. [Learn more about relationship columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| relatedTableId | string | Related Table ID. |  |
| type | string | Relation type |  |
| twoWay | boolean | Is Two Way? |  |
| key | string | Column Key. |  |
| twoWayKey | string | Two Way Column Key. |  |
| onDelete | string | Constraints option | restrict |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/string
```

** Create a string column.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | Column Key. |  |
| size | integer | Column size for text columns, in number of characters. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |
| encrypt | boolean | Toggle encryption for the column. Encryption enhances security by not storing any plain text values in the database. However, encrypted columns cannot be queried. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/string/{key}
```

** Update a string column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| size | integer | Maximum size of the string column. |  |
| newKey | string | New Column Key. |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/url
```

** Create a URL column.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| array | boolean | Is column an array? |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/url/{key}
```

** Update an url column. Changing the `default` value will not update already existing rows.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| required | boolean | Is column required? |  |
| default | string | Default value for column when not provided. Cannot be set when column is required. |  |
| newKey | string | New Column Key. |  |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/{key}
```

** Get column by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/{key}
```

** Deletes a column. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/columns/{key}/relationship
```

** Update relationship column. [Learn more about relationship columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| key | string | **Required** Column Key. |  |
| onDelete | string | Constraints option |  |
| newKey | string | New Column Key. |  |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/indexes
```

** List indexes on the table. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following columns: key, type, status, attributes, error | [] |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/indexes
```

** Creates an index on the columns listed. Your index should include all the columns you will query in a single request.
Type can be `key`, `fulltext`, or `unique`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | Index Key. |  |
| type | string | Index type. |  |
| columns | array | Array of columns to index. Maximum of 100 columns are allowed, each 32 characters long. |  |
| orders | array | Array of index orders. Maximum of 100 orders are allowed. | [] |
| lengths | array | Length of index. Maximum of 100 | [] |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/indexes/{key}
```

** Get index by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | **Required** Index Key. |  |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/indexes/{key}
```

** Delete an index. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| key | string | **Required** Index Key. |  |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Get a list of all the user&#039;s rows in a given table. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the TableDB service [server integration](https://appwrite.io/docs/server/tablesdbdb#tablesdbCreate). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Create a new Row. Before using this route, you should create a new table resource using either a [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreateTable) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). Make sure to define columns before creating rows. |  |
| rowId | string | Row ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| data | object | Row data as JSON object. | {} |
| permissions | array | An array of permissions strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
POST https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Create new Rows. Before using this route, you should create a new table resource using either a [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreateTable) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). Make sure to define columns before creating rows. |  |
| rows | array | Array of documents data as JSON objects. | [] |


```http request
PUT https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Create or update Rows. Before using this route, you should create a new table resource using either a [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreateTable) API or directly from your database console.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| rows | array | Array of row data as JSON objects. May contain partial rows. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Update all rows that match your queries, if no queries are submitted then all rows are updated. You can pass only specific fields to be updated. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| data | object | Row data as JSON object. Include only column and value pairs to be updated. | {} |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows
```

** Bulk delete rows using queries, if no queries are passed then all rows are deleted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
GET https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}
```

** Get a row by its unique ID. This endpoint response returns a JSON object with the row data. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| rowId | string | **Required** Row ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
PUT https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}
```

** Create or update a Row. Before using this route, you should create a new table resource using either a [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreateTable) API or directly from your database console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| rowId | string | **Required** Row ID. |  |
| data | object | Row data as JSON object. Include all required columns of the row to be created or updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}
```

** Update a row by its unique ID. Using the patch method you can pass only specific fields that will get updated. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| rowId | string | **Required** Row ID. |  |
| data | object | Row data as JSON object. Include only columns and value pairs to be updated. | {} |
| permissions | array | An array of permissions strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
DELETE https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}
```

** Delete a row by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. You can create a new table using the Database service [server integration](https://appwrite.io/docs/server/tablesdb#tablesDBCreate). |  |
| rowId | string | **Required** Row ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}/{column}/decrement
```

** Decrement a specific column of a row by a given value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| rowId | string | **Required** Row ID. |  |
| column | string | **Required** Column key. |  |
| value | number | Value to increment the column by. The value must be a number. | 1 |
| min | number | Minimum value for the column. If the current value is lesser than this value, an exception will be thrown. |  |


```http request
PATCH https://cloud.appwrite.io/v1/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}/{column}/increment
```

** Increment a specific column of a row by a given value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| rowId | string | **Required** Row ID. |  |
| column | string | **Required** Column key. |  |
| value | number | Value to increment the column by. The value must be a number. | 1 |
| max | number | Maximum value for the column. If the current value is greater than this value, an error will be thrown. |  |

