# Proxy Service


```http request
GET https://cloud.appwrite.io/v1/proxy/rules
```

** Get a list of all the proxy rules. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: domain, type, trigger, deploymentResourceType, deploymentResourceId, deploymentId, deploymentVcsProviderBranch | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/proxy/rules/api
```

** Create a new proxy rule for serving Appwrite&#039;s API on custom domain.

Rule ID is automatically generated as MD5 hash of a rule domain for performance purposes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | Domain name. |  |


```http request
POST https://cloud.appwrite.io/v1/proxy/rules/function
```

** Create a new proxy rule for executing Appwrite Function on custom domain.

Rule ID is automatically generated as MD5 hash of a rule domain for performance purposes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | Domain name. |  |
| functionId | string | ID of function to be executed. |  |
| branch | string | Name of VCS branch to deploy changes automatically |  |


```http request
POST https://cloud.appwrite.io/v1/proxy/rules/redirect
```

** Create a new proxy rule for to redirect from custom domain to another domain.

Rule ID is automatically generated as MD5 hash of a rule domain for performance purposes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | Domain name. |  |
| url | string | Target URL of redirection |  |
| statusCode | string | Status code of redirection |  |
| resourceId | string | ID of parent resource. |  |
| resourceType | string | Type of parent resource. |  |


```http request
POST https://cloud.appwrite.io/v1/proxy/rules/site
```

** Create a new proxy rule for serving Appwrite Site on custom domain.

Rule ID is automatically generated as MD5 hash of a rule domain for performance purposes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | Domain name. |  |
| siteId | string | ID of site to be executed. |  |
| branch | string | Name of VCS branch to deploy changes automatically |  |


```http request
GET https://cloud.appwrite.io/v1/proxy/rules/{ruleId}
```

** Get a proxy rule by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/proxy/rules/{ruleId}
```

** Delete a proxy rule by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/proxy/rules/{ruleId}/status
```

** If not succeeded yet, retry verification process of a proxy rule domain. This endpoint triggers domain verification by checking DNS records. If verification is successful, a TLS certificate will be automatically provisioned for the domain asynchronously in the background. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |

