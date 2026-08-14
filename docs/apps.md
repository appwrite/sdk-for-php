# Apps Service


```http request
GET https://cloud.appwrite.io/v1/apps
```

** List applications. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/apps
```

** Create a new application. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | Application ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Application name. |  |
| description | string | Application description shown to users during OAuth2 consent. |  |
| clientUri | string | Application homepage URL shown to users during OAuth2 consent. |  |
| logoUri | string | Application logo URL shown to users during OAuth2 consent. |  |
| privacyPolicyUrl | string | Application privacy policy URL shown to users during OAuth2 consent. |  |
| termsUrl | string | Application terms of service URL shown to users during OAuth2 consent. |  |
| contacts | array | Application support or security contact emails. Maximum of 100 contacts are allowed. | [] |
| tagline | string | Application tagline shown to users during OAuth2 consent. |  |
| tags | array | Application tags shown to users during OAuth2 consent. Maximum of 100 tags are allowed, each up to 64 characters long. | [] |
| images | array | Application image URLs shown to users during OAuth2 consent. Maximum of 100 images are allowed. | [] |
| supportUrl | string | Application support URL shown to users during OAuth2 consent. |  |
| dataDeletionUrl | string | Application data deletion URL shown to users during OAuth2 consent. |  |
| redirectUris | array | Redirect URIs. Each must be an https URL, an http loopback URL (localhost, 127.0.0.1, [::1]), or a private-use scheme URI (e.g. com.example.app:/oauth), and must not contain a fragment. |  |
| postLogoutRedirectUris | array | Post-logout redirect URIs for OpenID Connect RP-Initiated Logout. Each must be an https URL, an http loopback URL, or a private-use scheme URI, and must not contain a fragment. After ending the user session, the logout endpoint only redirects to URIs in this list. | [] |
| enabled | boolean | Is application enabled? | 1 |
| type | string | OAuth2 client type. Use `public` for SPAs, mobile, and native apps that cannot keep a `client_secret` — PKCE is then required at the token endpoint. Use `confidential` for server-side clients that present a `client_secret`. Defaults to `confidential`. | confidential |
| deviceFlow | boolean | Allow this client to use the OAuth2 Device Authorization Grant (RFC 8628) for input-constrained devices such as TVs and CLIs. Defaults to false. |  |
| teamId | string | Team unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/scopes/installations
```

** List scopes an application can request when installed on a team. **


```http request
GET https://cloud.appwrite.io/v1/apps/scopes/oauth2
```

** List scopes an application can request during the OAuth2 flow. **


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}
```

** Get an application by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/apps/{appId}
```

** Update an application by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| name | string | Application name. |  |
| description | string | Application description shown to users during OAuth2 consent. |  |
| clientUri | string | Application homepage URL shown to users during OAuth2 consent. |  |
| logoUri | string | Application logo URL shown to users during OAuth2 consent. |  |
| privacyPolicyUrl | string | Application privacy policy URL shown to users during OAuth2 consent. |  |
| termsUrl | string | Application terms of service URL shown to users during OAuth2 consent. |  |
| contacts | array | Application support or security contact emails. Maximum of 100 contacts are allowed. | [] |
| tagline | string | Application tagline shown to users during OAuth2 consent. |  |
| tags | array | Application tags shown to users during OAuth2 consent. Maximum of 100 tags are allowed, each up to 64 characters long. | [] |
| images | array | Application image URLs shown to users during OAuth2 consent. Maximum of 100 images are allowed. | [] |
| supportUrl | string | Application support URL shown to users during OAuth2 consent. |  |
| dataDeletionUrl | string | Application data deletion URL shown to users during OAuth2 consent. |  |
| enabled | boolean | Is application enabled? | 1 |
| redirectUris | array | Redirect URIs. Each must be an https URL, an http loopback URL (localhost, 127.0.0.1, [::1]), or a private-use scheme URI (e.g. com.example.app:/oauth), and must not contain a fragment. | [] |
| postLogoutRedirectUris | array | Post-logout redirect URIs for OpenID Connect RP-Initiated Logout. Each must be an https URL, an http loopback URL, or a private-use scheme URI, and must not contain a fragment. After ending the user session, the logout endpoint only redirects to URIs in this list. | [] |
| type | string | OAuth2 client type. Use `public` for SPAs, mobile, and native apps that cannot keep a `client_secret` — PKCE is then required at the token endpoint. Use `confidential` for server-side clients that present a `client_secret`. Defaults to `confidential`. | confidential |
| deviceFlow | boolean | Allow this client to use the OAuth2 Device Authorization Grant (RFC 8628) for input-constrained devices such as TVs and CLIs. Defaults to false. |  |
| installationScopes | array | Scopes the application requests when installed on a team. Only scopes allowed by the project's OAuth2 server installation scopes configuration are accepted; use the list installation scopes endpoint to discover available values. Maximum of 100 scopes are allowed. | [] |
| installationRedirectUrl | string | URL users are redirected to after creating or updating an installation of this application. Must be an https URL, an http loopback URL (localhost, 127.0.0.1, [::1]), or a private-use scheme URI, and must not contain a fragment. Leave empty for no redirect. |  |


```http request
DELETE https://cloud.appwrite.io/v1/apps/{appId}
```

** Delete an application by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/installations
```

** List installations of an application. Requires an app key sent in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header, or a caller with update access to the app. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/installations/{installationId}
```

** Get an installation of an application by its unique ID. Requires an app key sent in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header, or a caller with update access to the app. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| installationId | string | **Required** Installation unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/apps/{appId}/installations/{installationId}
```

** Delete an installation of an application by its unique ID. Requires a caller with update access to the app. Previously issued installation access tokens are revoked. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| installationId | string | **Required** Installation unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/apps/{appId}/installations/{installationId}/tokens
```

** Create a token for an installation of an application. Requires an app key sent in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header, or a caller with update access to the app. The returned token carries the scopes and authorization details granted to the installation, and can be used as an `Authorization: Bearer` header everywhere OAuth2 access tokens are accepted. Multiple tokens can be active for the same installation at once; each token stays valid until it expires or the installation is updated or deleted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| installationId | string | **Required** Installation unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/keys
```

** List app keys for an application. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/apps/{appId}/keys
```

** Create a new app key for an application. App keys carry no scopes; send one in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header to list the application&#039;s installations and create installation access tokens. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/keys/{keyId}
```

** Get an app key by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| keyId | string | **Required** App key unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/apps/{appId}/keys/{keyId}
```

** Delete an app key by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| keyId | string | **Required** App key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/apps/{appId}/labels
```

** Update the labels of an application. Labels are read-only for clients; only a server SDK using a project API key can set them. Replaces the previous labels. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| labels | array | Array of application labels. Replaces the previous labels. Maximum of 1000 labels are allowed, each up to 36 alphanumeric characters long. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/secrets
```

** List client secrets for an application. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/apps/{appId}/secrets
```

** Create a new client secret for an application. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/apps/{appId}/secrets/{secretId}
```

** Get an application client secret by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| secretId | string | **Required** Secret unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/apps/{appId}/secrets/{secretId}
```

** Delete an application client secret by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| secretId | string | **Required** Secret unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/apps/{appId}/team
```

** Transfer an application to another team by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |
| teamId | string | Team ID of the team to transfer application to. |  |


```http request
DELETE https://cloud.appwrite.io/v1/apps/{appId}/tokens
```

** Revoke all tokens for an application by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | **Required** Application unique ID. |  |

