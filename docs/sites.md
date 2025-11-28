# Sites Service


```http request
GET https://cloud.appwrite.io/v1/sites
```

** Get a list of all the project&#039;s sites. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, enabled, framework, deploymentId, buildCommand, installCommand, outputDirectory, installationId | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/sites
```

** Create a new site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | Site ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Site name. Max length: 128 chars. |  |
| framework | string | Sites framework. |  |
| enabled | boolean | Is site enabled? When set to 'disabled', users cannot access the site but Server SDKs with and API key can still access the site. No data is lost when this is toggled. | 1 |
| logging | boolean | When disabled, request logs will exclude logs and errors, and site responses will be slightly faster. | 1 |
| timeout | integer | Maximum request time in seconds. | 30 |
| installCommand | string | Install Command. |  |
| buildCommand | string | Build Command. |  |
| outputDirectory | string | Output Directory for site. |  |
| buildRuntime | string | Runtime to use during build step. |  |
| adapter | string | Framework adapter defining rendering strategy. Allowed values are: static, ssr |  |
| installationId | string | Appwrite Installation ID for VCS (Version Control System) deployment. |  |
| fallbackFile | string | Fallback file for single page application sites. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the site. |  |
| providerBranch | string | Production branch for the repo linked to the site. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the site? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to site code in the linked repo. |  |
| specification | string | Framework specification for the site and builds. | [] |


```http request
GET https://cloud.appwrite.io/v1/sites/frameworks
```

** Get a list of all frameworks that are currently available on the server instance. **


```http request
GET https://cloud.appwrite.io/v1/sites/specifications
```

** List allowed site specifications for this instance. **


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}
```

** Get a site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/sites/{siteId}
```

** Update site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| name | string | Site name. Max length: 128 chars. |  |
| framework | string | Sites framework. |  |
| enabled | boolean | Is site enabled? When set to 'disabled', users cannot access the site but Server SDKs with and API key can still access the site. No data is lost when this is toggled. | 1 |
| logging | boolean | When disabled, request logs will exclude logs and errors, and site responses will be slightly faster. | 1 |
| timeout | integer | Maximum request time in seconds. | 30 |
| installCommand | string | Install Command. |  |
| buildCommand | string | Build Command. |  |
| outputDirectory | string | Output Directory for site. |  |
| buildRuntime | string | Runtime to use during build step. |  |
| adapter | string | Framework adapter defining rendering strategy. Allowed values are: static, ssr |  |
| fallbackFile | string | Fallback file for single page application sites. |  |
| installationId | string | Appwrite Installation ID for VCS (Version Control System) deployment. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the site. |  |
| providerBranch | string | Production branch for the repo linked to the site. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the site? In silent mode, comments will not be made on commits and pull requests. |  |
| providerRootDirectory | string | Path to site code in the linked repo. |  |
| specification | string | Framework specification for the site and builds. | [] |


```http request
DELETE https://cloud.appwrite.io/v1/sites/{siteId}
```

** Delete a site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/sites/{siteId}/deployment
```

** Update the site active deployment. Use this endpoint to switch the code deployment that should be used when visitor opens your site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/deployments
```

** Get a list of all the site&#039;s code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: buildSize, sourceSize, totalSize, buildDuration, status, activate, type | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/sites/{siteId}/deployments
```

** Create a new site code deployment. Use this endpoint to upload a new version of your site code. To activate your newly uploaded code, you&#039;ll need to update the site&#039;s deployment to use your new deployment ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| installCommand | string | Install Commands. |  |
| buildCommand | string | Build Commands. |  |
| outputDirectory | string | Output Directory. |  |
| code | file | Gzip file with your code package. When used with the Appwrite CLI, pass the path to your code directory, and the CLI will automatically package your code. Use a path that is within the current directory. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |


```http request
POST https://cloud.appwrite.io/v1/sites/{siteId}/deployments/duplicate
```

** Create a new build for an existing site deployment. This endpoint allows you to rebuild a deployment with the updated site configuration, including its commands and output directory if they have been modified. The build process will be queued and executed asynchronously. The original deployment&#039;s code will be preserved and used for the new build. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
POST https://cloud.appwrite.io/v1/sites/{siteId}/deployments/template
```

** Create a deployment based on a template.

Use this endpoint with combination of [listTemplates](https://appwrite.io/docs/products/sites/templates) to find the template details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| repository | string | Repository name of the template. |  |
| owner | string | The name of the owner of the template. |  |
| rootDirectory | string | Path to site code in the template repo. |  |
| type | string | Type for the reference provided. Can be commit, branch, or tag |  |
| reference | string | Reference value, can be a commit hash, branch name, or release tag |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |


```http request
POST https://cloud.appwrite.io/v1/sites/{siteId}/deployments/vcs
```

** Create a deployment when a site is connected to VCS.

This endpoint lets you create deployment from a branch, commit, or a tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| type | string | Type of reference passed. Allowed values are: branch, commit |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/deployments/{deploymentId}
```

** Get a site deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/sites/{siteId}/deployments/{deploymentId}
```

** Delete a site deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/deployments/{deploymentId}/download
```

** Get a site deployment content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |
| type | string | Deployment file to download. Can be: "source", "output". | source |


```http request
PATCH https://cloud.appwrite.io/v1/sites/{siteId}/deployments/{deploymentId}/status
```

** Cancel an ongoing site deployment build. If the build is already in progress, it will be stopped and marked as canceled. If the build hasn&#039;t started yet, it will be marked as canceled without executing. You cannot cancel builds that have already completed (status &#039;ready&#039;) or failed. The response includes the final build status and details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/logs
```

** Get a list of all site logs. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: trigger, status, responseStatusCode, duration, requestMethod, requestPath, deploymentId | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/logs/{logId}
```

** Get a site request log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| logId | string | **Required** Log ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/sites/{siteId}/logs/{logId}
```

** Delete a site log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| logId | string | **Required** Log ID. |  |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/variables
```

** Get a list of all variables of a specific site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/sites/{siteId}/variables
```

** Create a new site variable. These variables can be accessed during build and runtime (server-side rendering) as environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only sites can read them during build and runtime. | 1 |


```http request
GET https://cloud.appwrite.io/v1/sites/{siteId}/variables/{variableId}
```

** Get a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/sites/{siteId}/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only sites can read them during build and runtime. |  |


```http request
DELETE https://cloud.appwrite.io/v1/sites/{siteId}/variables/{variableId}
```

** Delete a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |

