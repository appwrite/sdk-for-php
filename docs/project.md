# Project Service

## List Variables

```http request
GET https://HOSTNAME/v1/project/variables
```

** Get a list of all project variables. These variables will be accessible in all Appwrite Functions at runtime. **

## Create Variable

```http request
POST https://HOSTNAME/v1/project/variables
```

** Create a new project variable. This variable will be accessible in all Appwrite Functions at runtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

## Get Variable

```http request
GET https://HOSTNAME/v1/project/variables/{variableId}
```

** Get a project variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |

## Update Variable

```http request
PUT https://HOSTNAME/v1/project/variables/{variableId}
```

** Update project variable by its unique ID. This variable will be accessible in all Appwrite Functions at runtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

## Delete Variable

```http request
DELETE https://HOSTNAME/v1/project/variables/{variableId}
```

** Delete a project variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |

