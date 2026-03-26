# Webhooks Service


```http request
GET https://cloud.appwrite.io/v1/webhooks
```

** Get a list of all webhooks belonging to the project. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, url, httpUser, security, events, enabled, logs, attempts | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/webhooks
```

** Create a new webhook. Use this endpoint to configure a URL that will receive events from Appwrite when specific events occur. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| webhookId | string | Webhook ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| url | string | Webhook URL. |  |
| name | string | Webhook name. Max length: 128 chars. |  |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| enabled | boolean | Enable or disable a webhook. | 1 |
| security | boolean | Certificate verification, false for disabled or true for enabled. |  |
| httpUser | string | Webhook HTTP user. Max length: 256 chars. |  |
| httpPass | string | Webhook HTTP password. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/webhooks/{webhookId}
```

** Get a webhook by its unique ID. This endpoint returns details about a specific webhook configured for a project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| webhookId | string | **Required** Webhook ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/webhooks/{webhookId}
```

** Update a webhook by its unique ID. Use this endpoint to update the URL, events, or status of an existing webhook. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| webhookId | string | **Required** Webhook ID. |  |
| name | string | Webhook name. Max length: 128 chars. |  |
| url | string | Webhook URL. |  |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| enabled | boolean | Enable or disable a webhook. | 1 |
| security | boolean | Certificate verification, false for disabled or true for enabled. |  |
| httpUser | string | Webhook HTTP user. Max length: 256 chars. |  |
| httpPass | string | Webhook HTTP password. Max length: 256 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/webhooks/{webhookId}
```

** Delete a webhook by its unique ID. Once deleted, the webhook will no longer receive project events.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| webhookId | string | **Required** Webhook ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/webhooks/{webhookId}/signature
```

** Update the webhook signature key. This endpoint can be used to regenerate the signature key used to sign and validate payload deliveries for a specific webhook. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| webhookId | string | **Required** Webhook ID. |  |

