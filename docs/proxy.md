# Proxy Service

## List Rules

```http request
GET https://HOSTNAME/v1/proxy/rules
```

** Get a list of all the proxy rules. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: domain, resourceType, resourceId, url | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create Rule

```http request
POST https://HOSTNAME/v1/proxy/rules
```

** Create a new proxy rule. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | Domain name. |  |
| resourceType | string | Action definition for the rule. Possible values are "api", "function" |  |
| resourceId | string | ID of resource for the action type. If resourceType is "api", leave empty. If resourceType is "function", provide ID of the function. |  |

## Get Rule

```http request
GET https://HOSTNAME/v1/proxy/rules/{ruleId}
```

** Get a proxy rule by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |

## Delete Rule

```http request
DELETE https://HOSTNAME/v1/proxy/rules/{ruleId}
```

** Delete a proxy rule by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |

## Update Rule Verification Status

```http request
PATCH https://HOSTNAME/v1/proxy/rules/{ruleId}/verification
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |

