# Health Service


```http request
GET https://cloud.appwrite.io/v1/health
```

** Check the Appwrite HTTP server is up and responsive. **


```http request
GET https://cloud.appwrite.io/v1/health/anti-virus
```

** Check the Appwrite Antivirus server is up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/cache
```

** Check the Appwrite in-memory cache servers are up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/certificate
```

** Get the SSL certificate for a domain **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | string |  |


```http request
GET https://cloud.appwrite.io/v1/health/db
```

** Check the Appwrite database servers are up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/pubsub
```

** Check the Appwrite pub-sub servers are up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/queue/billing-project-aggregation
```

** Get billing project aggregation queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 10000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/billing-team-aggregation
```

** Get billing team aggregation queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 10000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/builds
```

** Get the number of builds that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/builds-priority
```

** Get the priority builds queue size. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 500. | 500 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/certificates
```

** Get the number of certificates that are waiting to be issued against [Letsencrypt](https://letsencrypt.org/) in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/databases
```

** Get the number of database changes that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Queue name for which to check the queue size | database_db_main |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/deletes
```

** Get the number of background destructive changes that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/failed/{name}
```

** Returns the amount of failed jobs in a given queue.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The name of the queue |  |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/functions
```

** Get the number of function executions that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/logs
```

** Get the number of logs that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/mails
```

** Get the number of mails that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/messaging
```

** Get the number of messages that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/migrations
```

** Get the number of migrations that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/region-manager
```

** Get region manager queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 100. | 100 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/stats-resources
```

** Get the number of metrics that are waiting to be processed in the Appwrite stats resources queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/stats-usage
```

** Get the number of metrics that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/threats
```

** Get threats queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 100. | 100 |


```http request
GET https://cloud.appwrite.io/v1/health/queue/webhooks
```

** Get the number of webhooks that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |


```http request
GET https://cloud.appwrite.io/v1/health/storage
```

** Check the Appwrite storage device is up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/storage/local
```

** Check the Appwrite local storage device is up and connection is successful. **


```http request
GET https://cloud.appwrite.io/v1/health/time
```

** Check the Appwrite server time is synced with Google remote NTP server. We use this technology to smoothly handle leap seconds with no disruptive events. The [Network Time Protocol](https://en.wikipedia.org/wiki/Network_Time_Protocol) (NTP) is used by hundreds of millions of computers and devices to synchronize their clocks over the Internet. If your computer sets its own clock, it likely uses NTP. **

