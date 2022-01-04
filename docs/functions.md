# Functions Service

## List Functions

```http request
GET https://HOSTNAME/v1/functions
```

** Get a list of all the project&#039;s functions. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of functions to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the function used as the starting point for the query, excluding the function itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Function

```http request
POST https://HOSTNAME/v1/functions
```

** Create a new function. You can pass a list of [permissions](/docs/permissions) to allow different project users or team with access to execute the function using the client API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | Function ID. Choose your own unique ID or pass the string `unique()` to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| name | string | Function name. Max length: 128 chars. |  |
| execute | array | An array of strings with execution permissions. By default no user is granted with any execute permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| runtime | string | Execution runtime. |  |
| vars | object | Key-value JSON object that will be passed to the function as environment variables. | {} |
| events | array | Events list. | [] |
| schedule | string | Schedule CRON syntax. |  |
| timeout | integer | Function maximum execution time in seconds. | 15 |

## List the currently active function runtimes.

```http request
GET https://HOSTNAME/v1/functions/runtimes
```

** Get a list of all runtimes that are currently active in your project. **

## Get Function

```http request
GET https://HOSTNAME/v1/functions/{functionId}
```

** Get a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |

## Update Function

```http request
PUT https://HOSTNAME/v1/functions/{functionId}
```

** Update function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| name | string | Function name. Max length: 128 chars. |  |
| execute | array | An array of strings with execution permissions. By default no user is granted with any execute permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| vars | object | Key-value JSON object that will be passed to the function as environment variables. | {} |
| events | array | Events list. | [] |
| schedule | string | Schedule CRON syntax. |  |
| timeout | integer | Maximum execution time in seconds. | 15 |

## Delete Function

```http request
DELETE https://HOSTNAME/v1/functions/{functionId}
```

** Delete a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |

## List Executions

```http request
GET https://HOSTNAME/v1/functions/{functionId}/executions
```

** Get a list of all the current user function execution logs. You can use the query params to filter your results. On admin mode, this endpoint will return a list of all of the project&#039;s executions. [Learn more about different API modes](/docs/admin). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| limit | integer | Maximum number of executions to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| cursor | string | ID of the execution used as the starting point for the query, excluding the execution itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |

## Create Execution

```http request
POST https://HOSTNAME/v1/functions/{functionId}/executions
```

** Trigger a function execution. The returned object will return you the current execution status. You can ping the `Get Execution` endpoint to get updates on the current execution status. Once this endpoint is called, your function execution process will start asynchronously. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| data | string | String of custom data to send to function. |  |

## Get Execution

```http request
GET https://HOSTNAME/v1/functions/{functionId}/executions/{executionId}
```

** Get a function execution log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |

## Update Function Tag

```http request
PATCH https://HOSTNAME/v1/functions/{functionId}/tag
```

** Update the function code tag ID using the unique function ID. Use this endpoint to switch the code tag that should be executed by the execution endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| tag | string | Tag ID. |  |

## List Tags

```http request
GET https://HOSTNAME/v1/functions/{functionId}/tags
```

** Get a list of all the project&#039;s code tags. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of tags to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the tag used as the starting point for the query, excluding the tag itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Tag

```http request
POST https://HOSTNAME/v1/functions/{functionId}/tags
```

** Create a new function code tag. Use this endpoint to upload a new version of your code function. To execute your newly uploaded code, you&#039;ll need to update the function&#039;s tag to use your new tag UID.

This endpoint accepts a tar.gz file compressed with your code. Make sure to include any dependencies your code has within the compressed file. You can learn more about code packaging in the [Appwrite Cloud Functions tutorial](/docs/functions).

Use the &quot;command&quot; param to set the entry point used to execute your code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| command | string | Code execution command. |  |
| code | file | Gzip file with your code package. When used with the Appwrite CLI, pass the path to your code directory, and the CLI will automatically package your code. Use a path that is within the current directory. |  |

## Get Tag

```http request
GET https://HOSTNAME/v1/functions/{functionId}/tags/{tagId}
```

** Get a code tag by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| tagId | string | **Required** Tag ID. |  |

## Delete Tag

```http request
DELETE https://HOSTNAME/v1/functions/{functionId}/tags/{tagId}
```

** Delete a code tag by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| tagId | string | **Required** Tag ID. |  |

