# Health Service

## Get HTTP

```http request
GET https://HOSTNAME/v1/health
```

** Check the Appwrite HTTP server is up and responsive. **

## Get antivirus

```http request
GET https://HOSTNAME/v1/health/anti-virus
```

** Check the Appwrite Antivirus server is up and connection is successful. **

## Get cache

```http request
GET https://HOSTNAME/v1/health/cache
```

** Check the Appwrite in-memory cache servers are up and connection is successful. **

## Get DB

```http request
GET https://HOSTNAME/v1/health/db
```

** Check the Appwrite database servers are up and connection is successful. **

## Get pubsub

```http request
GET https://HOSTNAME/v1/health/pubsub
```

** Check the Appwrite pub-sub servers are up and connection is successful. **

## Get queue

```http request
GET https://HOSTNAME/v1/health/queue
```

** Check the Appwrite queue messaging servers are up and connection is successful. **

## Get builds queue

```http request
GET https://HOSTNAME/v1/health/queue/builds
```

** Get the number of builds that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get certificates queue

```http request
GET https://HOSTNAME/v1/health/queue/certificates
```

** Get the number of certificates that are waiting to be issued against [Letsencrypt](https://letsencrypt.org/) in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get databases queue

```http request
GET https://HOSTNAME/v1/health/queue/databases
```

** Get the number of database changes that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Queue name for which to check the queue size | database_db_main |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get deletes queue

```http request
GET https://HOSTNAME/v1/health/queue/deletes
```

** Get the number of background destructive changes that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get functions queue

```http request
GET https://HOSTNAME/v1/health/queue/functions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get logs queue

```http request
GET https://HOSTNAME/v1/health/queue/logs
```

** Get the number of logs that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get mails queue

```http request
GET https://HOSTNAME/v1/health/queue/mails
```

** Get the number of mails that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get messaging queue

```http request
GET https://HOSTNAME/v1/health/queue/messaging
```

** Get the number of messages that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get migrations queue

```http request
GET https://HOSTNAME/v1/health/queue/migrations
```

** Get the number of migrations that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get webhooks queue

```http request
GET https://HOSTNAME/v1/health/queue/webhooks
```

** Get the number of webhooks that are waiting to be processed in the Appwrite internal queue server. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| threshold | integer | Queue size threshold. When hit (equal or higher), endpoint returns server error. Default value is 5000. | 5000 |

## Get local storage

```http request
GET https://HOSTNAME/v1/health/storage/local
```

** Check the Appwrite local storage device is up and connection is successful. **

## Get time

```http request
GET https://HOSTNAME/v1/health/time
```

** Check the Appwrite server time is synced with Google remote NTP server. We use this technology to smoothly handle leap seconds with no disruptive events. The [Network Time Protocol](https://en.wikipedia.org/wiki/Network_Time_Protocol) (NTP) is used by hundreds of millions of computers and devices to synchronize their clocks over the Internet. If your computer sets its own clock, it likely uses NTP. **

