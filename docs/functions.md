# Functions Service


```http request
GET https://cloud.appwrite.io/v1/functions
```

** Get a list of all the project&#039;s functions. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, runtime, deploymentId, schedule, scheduleNext, schedulePrevious, timeout, entrypoint, commands, installationId | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/functions
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
| logging | boolean | When disabled, executions will exclude logs and errors, and will be slightly faster. | 1 |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| commands | string | Build Commands. |  |
| scopes | array | List of scopes allowed for API key auto-generated for every execution. Maximum of 100 scopes are allowed. | [] |
| installationId | string | Appwrite Installation ID for VCS (Version Control System) deployment. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function. |  |
| providerBranch | string | Production branch for the repo linked to the function. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |
| specification | string | Runtime specification for the function and builds. | [] |


```http request
GET https://cloud.appwrite.io/v1/functions/runtimes
```

** Get a list of all runtimes that are currently active on your instance. **


```http request
GET https://cloud.appwrite.io/v1/functions/specifications
```

** List allowed function specifications for this instance. **


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}
```

** Get a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/functions/{functionId}
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
| logging | boolean | When disabled, executions will exclude logs and errors, and will be slightly faster. | 1 |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| commands | string | Build Commands. |  |
| scopes | array | List of scopes allowed for API Key auto-generated for every execution. Maximum of 100 scopes are allowed. | [] |
| installationId | string | Appwrite Installation ID for VCS (Version Controle System) deployment. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function |  |
| providerBranch | string | Production branch for the repo linked to the function |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |
| specification | string | Runtime specification for the function and builds. | [] |


```http request
DELETE https://cloud.appwrite.io/v1/functions/{functionId}
```

** Delete a function by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/functions/{functionId}/deployment
```

** Update the function active deployment. Use this endpoint to switch the code deployment that should be used when visitor opens your function. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/deployments
```

** Get a list of all the function&#039;s code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: buildSize, sourceSize, totalSize, buildDuration, status, activate, type | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/deployments
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


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/deployments/duplicate
```

** Create a new build for an existing function deployment. This endpoint allows you to rebuild a deployment with the updated function configuration, including its entrypoint and build commands if they have been modified. The build process will be queued and executed asynchronously. The original deployment&#039;s code will be preserved and used for the new build. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | Deployment ID. |  |
| buildId | string | Build unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/deployments/template
```

** Create a deployment based on a template.

Use this endpoint with combination of [listTemplates](https://appwrite.io/docs/products/functions/templates) to find the template details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| repository | string | Repository name of the template. |  |
| owner | string | The name of the owner of the template. |  |
| rootDirectory | string | Path to function code in the template repo. |  |
| version | string | Version (tag) for the repo linked to the function template. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/deployments/vcs
```

** Create a deployment when a function is connected to VCS.

This endpoint lets you create deployment from a branch, commit, or a tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| type | string | Type of reference passed. Allowed values are: branch, commit |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/deployments/{deploymentId}
```

** Get a function deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/functions/{functionId}/deployments/{deploymentId}
```

** Delete a code deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/deployments/{deploymentId}/download
```

** Get a function deployment content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |
| type | string | Deployment file to download. Can be: "source", "output". | source |


```http request
PATCH https://cloud.appwrite.io/v1/functions/{functionId}/deployments/{deploymentId}/status
```

** Cancel an ongoing function deployment build. If the build is already in progress, it will be stopped and marked as canceled. If the build hasn&#039;t started yet, it will be marked as canceled without executing. You cannot cancel builds that have already completed (status &#039;ready&#039;) or failed. The response includes the final build status and details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/executions
```

** Get a list of all the current user function execution logs. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: trigger, status, responseStatusCode, duration, requestMethod, requestPath, deploymentId | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/executions
```

** Trigger a function execution. The returned object will return you the current execution status. You can ping the `Get Execution` endpoint to get updates on the current execution status. Once this endpoint is called, your function execution process will start asynchronously. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| body | string | HTTP body of execution. Default value is empty string. |  |
| async | boolean | Execute code in the background. Default value is false. |  |
| path | string | HTTP path of execution. Path can include query params. Default value is / | / |
| method | string | HTTP method of execution. Default value is POST. | POST |
| headers | object | HTTP headers of execution. Defaults to empty. | {} |
| scheduledAt | string | Scheduled execution time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future with precision in minutes. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/executions/{executionId}
```

** Get a function execution log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/functions/{functionId}/executions/{executionId}
```

** Delete a function execution by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/variables
```

** Get a list of all variables of a specific function. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/functions/{functionId}/variables
```

** Create a new function environment variable. These variables can be accessed in the function at runtime as environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only functions can read them during build and runtime. | 1 |


```http request
GET https://cloud.appwrite.io/v1/functions/{functionId}/variables/{variableId}
```

** Get a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/functions/{functionId}/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only functions can read them during build and runtime. |  |


```http request
DELETE https://cloud.appwrite.io/v1/functions/{functionId}/variables/{variableId}
```

** Delete a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |

