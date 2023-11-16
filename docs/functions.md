# Functions Service

## List functions

```http request
GET https://HOSTNAME/v1/functions
```

** Get a list of all the project&#039;s functions. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, runtime, deployment, schedule, scheduleNext, schedulePrevious, timeout, entrypoint, commands, installationId | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create function

```http request
POST https://HOSTNAME/v1/functions
```

** Create a new function. You can pass a list of [permissions](https://appwrite.io/docs/permissions) to allow different project users or team with access to execute the function using the client API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | Function ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Function name. Max length: 128 chars. |  |
| runtime | string | Execution runtime. |  |
| execute | array | An array of role strings with execution permissions. By default no user is granted with any execute permissions. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. | [] |
| events | array | Events list. Maximum of 100 events are allowed. | [] |
| schedule | string | Schedule CRON syntax. |  |
| timeout | integer | Function maximum execution time in seconds. | 15 |
| enabled | boolean | Is function enabled? When set to 'disabled', users cannot access the function but Server SDKs with and API key can still access the function. No data is lost when this is toggled. | 1 |
| logging | boolean | Whether executions will be logged. When set to false, executions will not be logged, but will reduce resource used by your Appwrite project. | 1 |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| commands | string | Build Commands. |  |
| installationId | string | Appwrite Installation ID for VCS (Version Control System) deployment. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function. |  |
| providerBranch | string | Production branch for the repo linked to the function. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |
| templateRepository | string | Repository name of the template. |  |
| templateOwner | string | The name of the owner of the template. |  |
| templateRootDirectory | string | Path to function code in the template repo. |  |
| templateBranch | string | Production branch for the repo linked to the function template. |  |

## List runtimes

```http request
GET https://HOSTNAME/v1/functions/runtimes
```

** Get a list of all runtimes that are currently active on your instance. **

## Get function

```http request
GET https://HOSTNAME/v1/functions/{functionId}
```

** Get a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |

## Update function

```http request
PUT https://HOSTNAME/v1/functions/{functionId}
```

** Update function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| name | string | Function name. Max length: 128 chars. |  |
| runtime | string | Execution runtime. |  |
| execute | array | An array of role strings with execution permissions. By default no user is granted with any execute permissions. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. | [] |
| events | array | Events list. Maximum of 100 events are allowed. | [] |
| schedule | string | Schedule CRON syntax. |  |
| timeout | integer | Maximum execution time in seconds. | 15 |
| enabled | boolean | Is function enabled? When set to 'disabled', users cannot access the function but Server SDKs with and API key can still access the function. No data is lost when this is toggled. | 1 |
| logging | boolean | Whether executions will be logged. When set to false, executions will not be logged, but will reduce resource used by your Appwrite project. | 1 |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| commands | string | Build Commands. |  |
| installationId | string | Appwrite Installation ID for VCS (Version Controle System) deployment. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function |  |
| providerBranch | string | Production branch for the repo linked to the function |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |

## Delete function

```http request
DELETE https://HOSTNAME/v1/functions/{functionId}
```

** Delete a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |

## List deployments

```http request
GET https://HOSTNAME/v1/functions/{functionId}/deployments
```

** Get a list of all the project&#039;s code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: size, buildId, activate, entrypoint, commands | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create deployment

```http request
POST https://HOSTNAME/v1/functions/{functionId}/deployments
```

** Create a new function code deployment. Use this endpoint to upload a new version of your code function. To execute your newly uploaded code, you&#039;ll need to update the function&#039;s deployment to use your new deployment UID.

This endpoint accepts a tar.gz file compressed with your code. Make sure to include any dependencies your code has within the compressed file. You can learn more about code packaging in the [Appwrite Cloud Functions tutorial](https://appwrite.io/docs/functions).

Use the &quot;command&quot; param to set the entrypoint used to execute your code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| entrypoint | string | Entrypoint File. |  |
| commands | string | Build Commands. |  |
| code | file | Gzip file with your code package. When used with the Appwrite CLI, pass the path to your code directory, and the CLI will automatically package your code. Use a path that is within the current directory. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |

## Get deployment

```http request
GET https://HOSTNAME/v1/functions/{functionId}/deployments/{deploymentId}
```

** Get a code deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |

## Update function deployment

```http request
PATCH https://HOSTNAME/v1/functions/{functionId}/deployments/{deploymentId}
```

** Update the function code deployment ID using the unique function ID. Use this endpoint to switch the code deployment that should be executed by the execution endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |

## Delete deployment

```http request
DELETE https://HOSTNAME/v1/functions/{functionId}/deployments/{deploymentId}
```

** Delete a code deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |

## Create build

```http request
POST https://HOSTNAME/v1/functions/{functionId}/deployments/{deploymentId}/builds/{buildId}
```

** Create a new build for an Appwrite Function deployment. This endpoint can be used to retry a failed build. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |
| buildId | string | **Required** Build unique ID. |  |

## Download Deployment

```http request
GET https://HOSTNAME/v1/functions/{functionId}/deployments/{deploymentId}/download
```

** Get a Deployment&#039;s contents by its unique ID. This endpoint supports range requests for partial or streaming file download. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |

## List executions

```http request
GET https://HOSTNAME/v1/functions/{functionId}/executions
```

** Get a list of all the current user function execution logs. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: trigger, status, responseStatusCode, duration | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create execution

```http request
POST https://HOSTNAME/v1/functions/{functionId}/executions
```

** Trigger a function execution. The returned object will return you the current execution status. You can ping the `Get Execution` endpoint to get updates on the current execution status. Once this endpoint is called, your function execution process will start asynchronously. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| body | string | HTTP body of execution. Default value is empty string. |  |
| async | boolean | Execute code in the background. Default value is false. |  |
| path | string | HTTP path of execution. Path can include query params. Default value is / | / |
| method | string | HTTP method of execution. Default value is GET. | POST |
| headers | object | HTTP headers of execution. Defaults to empty. | {} |

## Get execution

```http request
GET https://HOSTNAME/v1/functions/{functionId}/executions/{executionId}
```

** Get a function execution log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |

## List variables

```http request
GET https://HOSTNAME/v1/functions/{functionId}/variables
```

** Get a list of all variables of a specific function. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |

## Create variable

```http request
POST https://HOSTNAME/v1/functions/{functionId}/variables
```

** Create a new function environment variable. These variables can be accessed in the function at runtime as environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

## Get variable

```http request
GET https://HOSTNAME/v1/functions/{functionId}/variables/{variableId}
```

** Get a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |

## Update variable

```http request
PUT https://HOSTNAME/v1/functions/{functionId}/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

## Delete variable

```http request
DELETE https://HOSTNAME/v1/functions/{functionId}/variables/{variableId}
```

** Delete a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |

