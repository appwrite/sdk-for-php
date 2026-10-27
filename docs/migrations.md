# Migrations Service


```http request
GET https://cloud.appwrite.io/v1/migrations
```

** List all migrations in the current project. This endpoint returns a list of all migrations including their status, progress, and any errors that occurred during the migration process. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: status, stage, source, destination, resources, resourceId, resourceInternalId, resourceType, parentResourceId, parentResourceInternalId, parentResourceType, destinationResourceId, destinationResourceInternalId, destinationResourceType, statusCounters, resourceData, errors | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/migrations/appwrite
```

** Migrate data from another Appwrite project to your current project. This endpoint allows you to migrate resources like databases, collections, documents, users, and files from an existing Appwrite project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | List of resources to migrate |  |
| endpoint | string | Source Appwrite endpoint |  |
| projectId | string | Source Project ID |  |
| apiKey | string | Source API Key |  |
| onDuplicate | string | Behavior when a row with an existing $id is encountered. "fail" (default): abort on first conflict. "skip": silently ignore. "overwrite": replace existing row. | fail |


```http request
POST https://cloud.appwrite.io/v1/migrations/csv/exports
```

** Export documents to a CSV file from your Appwrite database. This endpoint allows you to export documents to a CSV file stored in a secure internal bucket. You'll receive an email with a download link when the export is complete. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Database ID containing the source collection. |  |
| collectionId | string | Collection ID to export documents from. |  |
| filename | string | The name of the file to be created for the export, excluding the .csv extension. |  |
| columns | array | List of attributes to export. If empty, all attributes will be exported. You can use the `*` wildcard to export all attributes from the collection. | [] |
| queries | array | Array of query strings generated using the Query class provided by the SDK to filter documents to export. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| delimiter | string | The character that separates each column value. Default is comma. | , |
| enclosure | string | The character that encloses each column value. Default is double quotes. | &quot; |
| escape | string | The escape character for the enclosure character. Default is double quotes. | &quot; |
| header | boolean | Whether to include the header row with column names. Default is true. | 1 |
| notify | boolean | Set to true to receive an email when the export is complete. Default is true. | 1 |


```http request
POST https://cloud.appwrite.io/v1/migrations/csv/imports
```

** Import documents from a CSV file into your Appwrite database. This endpoint allows you to import documents from a CSV file uploaded to Appwrite Storage bucket. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | File ID. |  |
| databaseId | string | Database ID containing the target collection. |  |
| collectionId | string | Collection ID to import documents into. |  |
| internalFile | boolean | Is the file stored in an internal bucket? |  |
| onDuplicate | string | Behavior when a row with an existing $id is encountered. "fail" (default): abort on first conflict. "skip": silently ignore. "overwrite": replace existing row. | fail |


```http request
POST https://cloud.appwrite.io/v1/migrations/firebase
```

** Migrate data from a Firebase project to your Appwrite project. This endpoint allows you to migrate resources like authentication and other supported services from a Firebase project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | List of resources to migrate |  |
| serviceAccount | string | JSON of the Firebase service account credentials |  |


```http request
GET https://cloud.appwrite.io/v1/migrations/firebase/report
```

** Generate a report of the data in a Firebase project before migrating. This endpoint analyzes the source project and returns information about the resources that can be migrated. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | **Required** List of resources to migrate |  |
| serviceAccount | string | **Required** JSON of the Firebase service account credentials |  |


```http request
POST https://cloud.appwrite.io/v1/migrations/json/exports
```

** Export documents to a JSON file from your Appwrite database. This endpoint allows you to export documents to a JSON file stored in a secure internal bucket. You'll receive an email with a download link when the export is complete.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Database ID containing the source collection. |  |
| collectionId | string | Collection ID to export documents from. |  |
| filename | string | The name of the file to be created for the export, excluding the .json extension. |  |
| columns | array | List of attributes to export. If empty, all attributes will be exported. You can use the `*` wildcard to export all attributes from the collection. | [] |
| queries | array | Array of query strings generated using the Query class provided by the SDK to filter documents to export. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| notify | boolean | Set to true to receive an email when the export is complete. Default is true. | 1 |


```http request
POST https://cloud.appwrite.io/v1/migrations/json/imports
```

** Import documents from a JSON file into your Appwrite database. This endpoint allows you to import documents from a JSON file uploaded to Appwrite Storage bucket.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | File ID. |  |
| databaseId | string | Database ID containing the target collection. |  |
| collectionId | string | Collection ID to import documents into. |  |
| internalFile | boolean | Is the file stored in an internal bucket? |  |
| onDuplicate | string | Behavior when a row with an existing $id is encountered. "fail" (default): abort on first conflict. "skip": silently ignore. "overwrite": replace existing row. | fail |


```http request
POST https://cloud.appwrite.io/v1/migrations/nhost
```

** Migrate data from an NHost project to your Appwrite project. This endpoint allows you to migrate resources like authentication, databases, and other supported services from an NHost project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | List of resources to migrate |  |
| subdomain | string | Source's Subdomain |  |
| region | string | Source's Region |  |
| adminSecret | string | Source's Admin Secret |  |
| database | string | Source's Database Name |  |
| username | string | Source's Database Username |  |
| password | string | Source's Database Password |  |
| port | integer | Source's Database Port | 5432 |


```http request
GET https://cloud.appwrite.io/v1/migrations/nhost/report
```

** Generate a detailed report of the data in an NHost project before migrating. This endpoint analyzes the source project and returns information about the resources that can be migrated.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | **Required** List of resources to migrate. |  |
| subdomain | string | **Required** Source's Subdomain. |  |
| region | string | **Required** Source's Region. |  |
| adminSecret | string | **Required** Source's Admin Secret. |  |
| database | string | **Required** Source's Database Name. |  |
| username | string | **Required** Source's Database Username. |  |
| password | string | **Required** Source's Database Password. |  |
| port | integer | Source's Database Port. | 5432 |


```http request
POST https://cloud.appwrite.io/v1/migrations/supabase
```

** Migrate data from a Supabase project to your Appwrite project. This endpoint allows you to migrate resources like authentication, databases, and other supported services from a Supabase project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | List of resources to migrate |  |
| endpoint | string | Source's Supabase Endpoint |  |
| apiKey | string | Source's API Key |  |
| databaseHost | string | Source's Database Host |  |
| username | string | Source's Database Username |  |
| password | string | Source's Database Password |  |
| port | integer | Source's Database Port | 5432 |


```http request
GET https://cloud.appwrite.io/v1/migrations/supabase/report
```

** Generate a report of the data in a Supabase project before migrating. This endpoint analyzes the source project and returns information about the resources that can be migrated.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| resources | array | **Required** List of resources to migrate |  |
| endpoint | string | **Required** Source's Supabase Endpoint. |  |
| apiKey | string | **Required** Source's API Key. |  |
| databaseHost | string | **Required** Source's Database Host. |  |
| username | string | **Required** Source's Database Username. |  |
| password | string | **Required** Source's Database Password. |  |
| port | integer | Source's Database Port. | 5432 |


```http request
GET https://cloud.appwrite.io/v1/migrations/{migrationId}
```

** Get a migration by its unique ID. This endpoint returns detailed information about a specific migration including its current status, progress, and any errors that occurred during the migration process.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| migrationId | string | **Required** Migration unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/migrations/{migrationId}
```

** Retry a failed migration. This endpoint allows you to retry a migration that has previously failed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| migrationId | string | **Required** Migration unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/migrations/{migrationId}
```

** Delete a migration by its unique ID. This endpoint allows you to remove a migration from your project's migration history.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| migrationId | string | **Required** Migration ID. |  |

