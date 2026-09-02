# Postgresql Service


```http request
GET https://cloud.appwrite.io/v1/postgresql
```

** List all dedicated databases. Results support pagination. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings. | [] |


```http request
POST https://cloud.appwrite.io/v1/postgresql
```

** Create a new dedicated database with the chosen engine and configuration. Status will be 'provisioning' until the database is ready. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | Database ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Database display name. Max length: 128 chars. |  |
| version | string | Database engine version. Defaults to latest for selected engine. |  |
| specification | string | Specification identifier. Drives the allocated CPU, memory, storage, storage class, and connection ceiling. | s-1vcpu-1gb |
| replicas | integer | Number of high availability replicas (0-5). High availability is enabled when greater than 0. | 0 |
| syncMode | string | Replication sync mode preference. Allowed values: async, sync, quorum. |  |
| networkIdleTimeoutSeconds | integer | Connection idle timeout in seconds. | 900 |
| networkIPAllowlist | array | IP addresses/CIDR ranges allowed to connect. |  |
| idleTimeoutMinutes | integer | Minutes of inactivity before container scales to zero. | 15 |
| pitr | boolean | Enable point-in-time recovery (PITR). Continuously archives changes so the database can be restored to any moment within the retention window. | 1 |
| pitrRetentionDays | integer | Number of days to retain PITR data. | 7 |
| storageAutoscaling | boolean | Enable automatic storage expansion when usage exceeds threshold. |  |
| storageAutoscalingThresholdPercent | integer | Storage usage percentage (50-95) that triggers automatic expansion. | 85 |
| storageAutoscalingMaxGb | integer | Maximum storage size in GB for autoscaling. 0 means no limit. | 0 |


```http request
GET https://cloud.appwrite.io/v1/postgresql/specifications
```

** List the dedicated database specifications available on the current plan. Each specification reports its resource limits, pricing, and whether it is enabled for the organization. **


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}
```

** Get a dedicated database by its unique ID. Returns the database configuration and current status. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/postgresql/{databaseId}
```

** Update a dedicated database configuration. All changes are applied with zero downtime. Specification changes (cpu, memory, storage) are handled via rolling cutover. Storage expansion is done online. All other settings are applied in-place. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Database display name. |  |
| status | string | Database status. Allowed values: ready, paused, inactive. Set to "paused" to pause, "ready" to resume (also recovers a failed database whose infrastructure is healthy), or "inactive" to spin down a shared-pool database. |  |
| specification | string | Specification. Changes cpu, memory, storage, connection ceiling, and node pool based on specification config. Resource changes are applied via rolling cutover with zero downtime. |  |
| replicas | integer | Number of high availability replicas (0-5). High availability is enabled when greater than 0. |  |
| syncMode | string | Replication sync mode preference. Allowed values: async, sync, quorum. |  |
| networkIdleTimeoutSeconds | integer | Connection idle timeout in seconds (60-86400). |  |
| networkIPAllowlist | array | IP addresses/CIDR ranges allowed to connect. |  |
| idleTimeoutMinutes | integer | Minutes before container scales to zero. |  |
| pitr | boolean | Enable or disable point-in-time recovery (PITR). |  |
| pitrRetentionDays | integer | Days to retain PITR data. |  |
| storageAutoscaling | boolean | Enable automatic storage expansion when usage exceeds threshold. |  |
| storageAutoscalingThresholdPercent | integer | Storage usage percentage (50-95) that triggers automatic expansion. |  |
| storageAutoscalingMaxGb | integer | Maximum storage size in GB for autoscaling. 0 means no limit. |  |
| metricsTraceSampleRate | number | Fraction of queries to trace (0.0–1.0). Forwarded to the sidecar. |  |
| metricsSlowQueryLogThresholdMs | integer | Threshold in ms above which queries are logged as slow. Forwarded to the sidecar. |  |
| sqlApiEnabled | boolean | Enable the SQL API sidecar for this database. |  |
| sqlApiAllowedStatements | array | Statement types the SQL API accepts. Allowed values: SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, DROP, TRUNCATE, GRANT, REVOKE. |  |
| sqlApiMaxRows | integer | Maximum rows returned per SQL API execution (1-1000000). |  |
| sqlApiMaxBytes | integer | Maximum serialised SQL API result payload in bytes (1024-104857600). |  |
| sqlApiTimeoutSeconds | integer | Per-call SQL API execution timeout in seconds (1-300). |  |


```http request
DELETE https://cloud.appwrite.io/v1/postgresql/{databaseId}
```

** Delete a dedicated database. This action is irreversible. The database status will be set to 'deleting' and all resources will be cleaned up. Deletion is allowed from any state, and repeating the call re-dispatches the cleanup. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups
```

** List all backups for a dedicated database. Results can be filtered by status and type. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: status, type, databaseId | [] |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups
```

** Create a manual backup of a dedicated database. The backup will be created asynchronously and its status can be checked via the get backup endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| type | string | Backup type: full or incremental. | full |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/policies
```

** List scheduled backup policies for a dedicated database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. | [] |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/policies
```

** Create a scheduled backup policy for a dedicated database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| policyId | string | Policy ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Policy name. Max length: 128 chars. |  |
| schedule | string | Schedule CRON syntax. |  |
| retention | integer | Days to keep backups before deletion. |  |
| type | string | Backup type: full or incremental. | full |
| enabled | boolean | Is policy enabled? When disabled, no backups will be taken. | 1 |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/policies/{policyId}
```

** Get a scheduled backup policy for a dedicated database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| policyId | string | **Required** Policy ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/policies/{policyId}
```

** Update a scheduled backup policy for a dedicated database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| policyId | string | **Required** Policy ID. |  |
| name | string | Policy name. Max length: 128 chars. |  |
| schedule | string | Schedule CRON syntax. |  |
| retention | integer | Days to keep backups before deletion. |  |
| enabled | boolean | Is policy enabled? When disabled, no backups will be taken. |  |


```http request
DELETE https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/policies/{policyId}
```

** Delete a scheduled backup policy for a dedicated database. Backups already taken by the policy are kept until their retention expires. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| policyId | string | **Required** Policy ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/storage
```

** Configure off-cluster backup storage for a dedicated database. Supports S3, GCS, and Azure Blob Storage destinations. Backups will be stored to the configured destination in addition to on-cluster storage. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| provider | string | Storage provider for off-cluster backups. Allowed values: s3 (Amazon S3 or S3-compatible), gcs (Google Cloud Storage), azure (Azure Blob Storage). |  |
| bucket | string | Storage bucket or container name. |  |
| region | string | Storage region. |  |
| prefix | string | Object key prefix for backups. | backups/ |
| endpoint | string | Custom endpoint for S3-compatible storage (e.g. MinIO). |  |
| accessKey | string | Access key or client ID for authentication. |  |
| secretKey | string | Secret key or service account JSON for authentication. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/{backupId}
```

** Get details of a specific database backup including its status, size, and timestamps. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| backupId | string | **Required** Backup ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/postgresql/{databaseId}/backups/{backupId}
```

** Delete a database backup. This will permanently remove the backup from storage and cannot be undone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| backupId | string | **Required** Backup ID. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/branches
```

** List all ephemeral branches for a dedicated database. Returns branch metadata including ID, name, namespace, and expiration time. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/branches
```

** Create an ephemeral database branch from the primary via PVC snapshot. The branch is a full copy of the database at the current point in time, useful for testing schema migrations or running experiments without affecting production data. Branches expire after the configured TTL (default 24 hours). The branch is created asynchronously. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| branchId | string | Branch ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| ttl | integer | Time-to-live in seconds before the branch expires. Min 300 (5 min), max 604800 (7 days). Default: 86400 (24h). | 86400 |


```http request
DELETE https://cloud.appwrite.io/v1/postgresql/{databaseId}/branches/{branchId}
```

** Delete an ephemeral database branch. This removes the branch namespace, its PVC, and the associated VolumeSnapshot. The deletion runs asynchronously and is irreversible. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| branchId | string | **Required** Branch ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/postgresql/{databaseId}/credentials
```

** Queue a rotation of the primary connection credentials for a dedicated database. A hibernated database is woken by the worker before rotation. List database operations until the returned operation reaches a terminal status, then fetch the database again for the refreshed connection string. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/executions
```

** Execute SQL through the console-facing Cloud endpoint. Cloud proxies through the edge platform to the per-database SQL API sidecar. Application traffic should bypass cloud entirely and POST directly to the per-database hostname: `https://db-{project}-{db}.{region}.appwrite.center/v1/sql/executions` with an `X-Appwrite-Key` header — that path scales to the whole DB fleet without a per-query cloud round-trip. The statement type must be on the database's configured allow-list. Use bound parameters for any user-supplied values — the API does not interpolate raw strings. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| sql | string | SQL statement to execute. Exactly one statement per request. |  |
| bindings | object | Optional bound parameters. Pass either a positional list or a name => value map matching the placeholder style used in the SQL. | {} |
| timeoutSeconds | integer | Per-call execution timeout override. Must be less than or equal to the database's configured sqlApiTimeoutSeconds. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/extensions
```

** List installed and available extensions for a PostgreSQL database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/extensions
```

** Install a database extension. Only available for PostgreSQL databases. The install runs asynchronously; poll the extensions list endpoint for status. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| name | string | Extension name (e.g., pgvector, postgis, uuid-ossp). |  |


```http request
DELETE https://cloud.appwrite.io/v1/postgresql/{databaseId}/extensions/{extensionName}
```

** Uninstall a database extension from a PostgreSQL database. The uninstall runs asynchronously; poll the extensions list endpoint for status. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| extensionName | string | **Required** Extension name to uninstall. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/failovers
```

** Trigger a manual failover for a dedicated database with high availability enabled. Promotes a replica to primary. The failover runs asynchronously; poll the database document for status updates. A database left mid-operation also accepts this call as a repair once nothing is driving the operation it is stuck in. Repairing a failover that did not finish, a `failed` database, a stranded upgrade or migrate, or a stranded compute resize additionally requires `targetReplicaId` to name the member to promote, because the default target may be the member that operation already promoted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| targetReplicaId | string | Target replica ID to promote. If not specified, the healthiest replica is selected. |  |


```http request
PATCH https://cloud.appwrite.io/v1/postgresql/{databaseId}/maintenance
```

** Update the maintenance window for a dedicated database. Maintenance operations like minor version upgrades will be performed during this window. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| day | string | Day of the week for the maintenance window. Allowed values: sun, mon, tue, wed, thu, fri, sat. |  |
| hourUtc | integer | Hour in UTC (0-23) for maintenance window start. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/migrations
```

** Migrate a database between shared and dedicated types. Shared to dedicated provisions an always-on dedicated instance; dedicated to shared converts to a serverless instance that scales to zero when idle. Data is copied to the target with a brief read-only window during cutover. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| targetType | string | Target database type to migrate to. Allowed values: shared (serverless, scales to zero when idle), dedicated (always-on with persistent resources). |  |
| specification | string | Target specification to provision when migrating to dedicated. Ignored for shared. Defaults to the database's current specification. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/operations
```

** List the lifecycle operations recorded for a dedicated database, newest first. Every provision, update, restore, backup and replication action is recorded here with its outcome, including an attempt that was abandoned because another worker took over the database. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| status | string | Filter by operation status. |  |
| limit | integer | Maximum number of operations to return. | 25 |
| offset | integer | Number of operations to skip. | 0 |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/pitr
```

** Get available point-in-time recovery windows for a dedicated database. Returns the earliest and latest recovery points. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/pooler
```

** Get the connection pooler configuration for a dedicated database. Returns pooler mode, max connections, and pool size settings. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/postgresql/{databaseId}/pooler
```

** Update the connection pooler configuration for a dedicated database. Configure pool mode, max connections, and pool sizes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| mode | string | Connection pool mode. Allowed values: transaction, session. Transaction mode returns connections to the pool after each transaction; session mode holds connections for the entire session lifetime. |  |
| maxConnections | integer | Client-connection ceiling the pooler accepts. Supported on MySQL and MariaDB only; the PostgreSQL pooler has no client cap, so set networkMaxConnections on the database instead. |  |
| defaultPoolSize | integer | Default pool size per user. |  |
| readWriteSplitting | boolean | Route SELECTs to HA replicas, writes and locked reads to the primary. Defaults to true when HA is enabled. |  |
| poolerCpuRequest | string | Pooler sidecar CPU request override (Kubernetes quantity, e.g. "250m" or "1"). Leave null for the proportional default (5% of DB CPU, floor 100m). |  |
| poolerCpuLimit | string | Pooler sidecar CPU limit override (Kubernetes quantity, e.g. "500m" or "1"). Leave null for the proportional default (10% of DB CPU, floor 200m). Changing this field rolls the database pod. |  |
| poolerMemoryRequest | string | Pooler sidecar memory request override (Kubernetes quantity, e.g. "128Mi" or "1Gi"). Leave null for the proportional default (7.5% of DB memory, floor 64Mi). |  |
| poolerMemoryLimit | string | Pooler sidecar memory limit override (Kubernetes quantity, e.g. "256Mi" or "1Gi"). Leave null for the proportional default (15% of DB memory, floor 128Mi). Changing this field rolls the database pod. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/replicas
```

** Get high availability status for a dedicated database. Returns replica statuses, replication lag, and sync mode. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/restorations
```

** List all restorations for a dedicated database. Results can be filtered by status and type. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| status | string | Filter by restoration status. |  |
| type | string | Filter by restoration type. |  |
| limit | integer | Maximum number of restorations to return. | 25 |
| offset | integer | Number of restorations to skip. | 0 |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/restorations
```

** Restore a database from a backup or to a specific point in time (PITR). For backup restoration, provide a backupId. For PITR, provide a targetTime as an ISO 8601 datetime. PITR requires the database to have PITR enabled and is only available for enterprise databases. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| type | string | Restoration type. Allowed values: backup, pitr. Use "backup" to restore from a specific backup, or "pitr" for point-in-time recovery. | backup |
| backupId | string | Backup ID to restore from (required for backup type). |  |
| targetDatabaseId | string | Existing database ID to restore into. The target must be distinct, ready, and use the same engine and version. |  |
| targetTime | string | Target time for PITR (required for pitr type) as an [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) datetime. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/restorations/{restorationId}
```

** Get details of a specific database restoration including its status, type, and timestamps. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| restorationId | string | **Required** Restoration ID. |  |


```http request
GET https://cloud.appwrite.io/v1/postgresql/{databaseId}/status
```

** Get real-time health and status information for a dedicated database. Returns health status, readiness, uptime, connection info, replica status, and volume information. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |


```http request
POST https://cloud.appwrite.io/v1/postgresql/{databaseId}/upgrades
```

** Upgrade a dedicated database to a new engine version. Uses blue-green deployment for zero-downtime cutover. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| targetVersion | string | Target engine version to upgrade to. |  |

