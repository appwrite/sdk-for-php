# Backups Service


```http request
GET https://cloud.appwrite.io/v1/backups/archives
```

** List all archives for a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
POST https://cloud.appwrite.io/v1/backups/archives
```

** Create a new archive asynchronously for a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| services | array | Array of services to backup |  |
| resourceId | string | Resource ID. When set, only this single resource will be backed up. |  |


```http request
GET https://cloud.appwrite.io/v1/backups/archives/{archiveId}
```

** Get a backup archive using it's ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| archiveId | string | **Required** Archive ID. Choose a custom ID`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/backups/archives/{archiveId}
```

** Delete an existing archive for a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| archiveId | string | **Required** Policy ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/backups/policies
```

** List all policies for a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
POST https://cloud.appwrite.io/v1/backups/policies
```

** Create a new backup policy. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| policyId | string | Policy ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Policy name. Max length: 128 chars. |  |
| services | array | Array of services to backup |  |
| resourceId | string | Resource ID. When set, only this single resource will be backed up. |  |
| enabled | boolean | Is policy enabled? When set to 'disabled', no backups will be taken | 1 |
| retention | integer | Days to keep backups before deletion |  |
| schedule | string | Schedule CRON syntax. |  |


```http request
GET https://cloud.appwrite.io/v1/backups/policies/{policyId}
```

** Get a backup policy using it's ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| policyId | string | **Required** Policy ID. Choose a custom ID`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
PATCH https://cloud.appwrite.io/v1/backups/policies/{policyId}
```

** Update an existing policy using it's ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| policyId | string | **Required** Policy ID. Choose a custom ID`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Policy name. Max length: 128 chars. |  |
| retention | integer | Days to keep backups before deletion |  |
| schedule | string | Cron expression |  |
| enabled | boolean | Is Backup enabled? When set to 'disabled', No backup will be taken |  |


```http request
DELETE https://cloud.appwrite.io/v1/backups/policies/{policyId}
```

** Delete a policy using it's ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| policyId | string | **Required** Policy ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/backups/restoration
```

** Create and trigger a new restoration for a backup on a project.

For a backup of one database, the restoration resolves its destination before it is queued. When `newResourceId` is omitted, the archived database is restored in place and its own ID is returned in `options`. Pass a different `newResourceId` to restore alongside it as a new database instead.

The restoration migration records the archived database in `resourceId` and `resourceType`, and the resolved database in `destinationResourceId` and `destinationResourceType`. Database types are stored canonically as `database`, `documentsdb`, or `vectorsdb`. Project-wide restorations leave these fields empty because they do not have a single source or destination database.

To list every migration related to one database, use its canonical type in a nested `OR(AND(...), AND(...), AND(...))` across the root, parent, and destination relation pairs: `(resourceType, resourceId)`, `(parentResourceType, parentResourceId)`, and `(destinationResourceType, destinationResourceId)`. Legacy and TablesDB databases use `database`; the operational `resourceType` of a table migration is not rewritten to `tablesdb`.

When restoring a DocumentsDB or VectorsDB database from a dedicated source, the restore provisions a fresh dedicated backing database at the source database's own specification and lands the data there. An in-place restore swaps the database onto that backing only once the restore has succeeded, and retires the backing it displaced only once that swap is confirmed, so the source keeps serving its own data until the restored data is in place and any failure leaves it untouched. A serverless source has no dedicated backing to clone and restores onto the archived database instead.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| archiveId | string | Backup archive ID to restore |  |
| services | array | Array of services to restore |  |
| newResourceId | string | Destination resource ID. Omit to restore the archived resource in place, or pass a different ID to restore alongside it as a new resource. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| newResourceName | string | Database name. Max length: 128 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/backups/restorations
```

** List all backup restorations for a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |


```http request
GET https://cloud.appwrite.io/v1/backups/restorations/{restorationId}
```

** Get the current status of a backup restoration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| restorationId | string | **Required** Restoration ID. Choose a custom ID`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |

