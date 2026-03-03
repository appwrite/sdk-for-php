# Activities Service


```http request
GET https://cloud.appwrite.io/v1/activities/events
```

** List all events for selected filters. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | string | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on attributes such as userId, teamId, etc. | [] |


```http request
GET https://cloud.appwrite.io/v1/activities/events/{eventId}
```

** Get event by ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| eventId | string | **Required** Event ID. |  |

