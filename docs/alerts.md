# Alerts Service


```http request
GET https://cloud.appwrite.io/v1/alerts
```

** Get a list of the alerts the project's monitors raised, open and resolved. An alert is created when a monitor starts firing and resolved when it recovers. Use queries to filter by monitor, status, type or resource, order by `$createdAt` for the latest first, and `Query.search('search', term)` to search alert and monitor IDs, names and metrics. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: monitorId, name, status, type, resourceType, resourceId, metric, resolvedAt, severity, acknowledgedAt, escalationId, search | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/alerts/{alertId}
```

** Get an alert by its unique ID: the monitor that raised it, when it fired and resolved, and the readings while it fired. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| alertId | string | **Required** Alert ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/alerts/{alertId}
```

** Acknowledge a firing alert, or undo that. Everyone who can read the alert sees who acknowledged it and when. The alert keeps firing until its monitor recovers; a resolved alert keeps its acknowledgement and cannot be changed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| alertId | string | **Required** Alert ID. |  |
| acknowledged | boolean | Whether the alert is acknowledged. False undoes an acknowledgement. |  |

