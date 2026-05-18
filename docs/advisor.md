# Advisor Service


```http request
GET https://cloud.appwrite.io/v1/reports
```

** Get a list of all the project&#039;s analyzer reports. You can use the query params to filter your results.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: appId, type, targetType, target, analyzedAt | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/reports/{reportId}
```

** Get an analyzer report by its unique ID. The response includes the report&#039;s metadata and the nested insights it produced.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| reportId | string | **Required** Report ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/reports/{reportId}
```

** Delete an analyzer report by its unique ID. Nested insights and CTA metadata are removed asynchronously by the deletes worker.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| reportId | string | **Required** Report ID. |  |


```http request
GET https://cloud.appwrite.io/v1/reports/{reportId}/insights
```

** List the insights produced under a single analyzer report. You can use the query params to filter your results further.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| reportId | string | **Required** Parent report ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: type, severity, status, resourceType, resourceId, parentResourceType, parentResourceId, analyzedAt, dismissedAt, dismissedBy | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/reports/{reportId}/insights/{insightId}
```

** Get an insight by its unique ID, scoped to its parent report.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| reportId | string | **Required** Parent report ID. |  |
| insightId | string | **Required** Insight ID. |  |

