# Oauth2 Service


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/approve
```

** Approve an OAuth2 grant after the user gives consent. Returns the `redirectUrl` the end user should be sent to. The consent screen may optionally pass enriched `authorization_details` to record the concrete resources the user selected. You can pass Accept header of `application/json` to receive a JSON response instead of a redirect. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| grant_id | string | Grant ID made during authorization, provided to consent screen in URL search params. |  |
| authorization_details | string | Enriched `authorization_details` the user consented to, replacing what the client requested. Each entry must use a `type` the project accepts. Optional; omit to keep the originally requested details. |  |
| scope | string | Space-separated scopes the user consented to. Must be a subset of the scopes originally requested; identity scopes such as `openid` are always retained. Optional; omit to keep the originally requested scopes. |  |


```http request
GET https://cloud.appwrite.io/v1/oauth2/{project_id}/authorize
```

** Begin the OAuth2 authorization flow. When called without a session, the user is redirected to the consent screen without grant ID. When called with a session, the redirect URL includes param for grant ID. You can pass Accept header of `application/json` to receive a JSON response instead of a redirect. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| redirect_uri | string | Redirect URI where visitor will be redirected after authorization, whether successful or not. |  |
| response_type | string | OAuth2 / OIDC response type. One of `code` (Authorization Code Flow), `id_token` (Implicit Flow, OIDC login only), or `code id_token` (Hybrid Flow). |  |
| scope | string | Space-separated OAuth2 scopes. Can include project scopes, and built-in scopes: `openid`, `email`, `profile`, `phone`. |  |
| state | string | OAuth2 state. You receive this back in the redirect URI. |  |
| nonce | string | OIDC nonce parameter to prevent replay attacks. Required when response_type includes `id_token`. |  |
| code_challenge | string | PKCE code challenge. Required when OAuth2 app is public. |  |
| code_challenge_method | string | PKCE code challenge method. Required when OAuth2 app is public. |  |
| prompt | string | OIDC prompt parameter for customization of consent screen. Space-separated list of: none, login, consent, select_account. |  |
| max_age | integer | OIDC max_age paraleter for customization of consent screen. Maximum allowable elapsed time in seconds since the user last authenticated. If exceeded, re-authentication is required. |  |
| authorization_details | string | Rich authorization request. JSON array of objects, each with a `type` and project-defined fields |  |
| resource | string | RFC 8707 resource indicator URI or URI list. Each value must be an absolute URI without a fragment. | [] |
| audience | string | Compatibility alias for a single OAuth2 resource indicator URI. |  |
| request_uri | string | OAuth2 authorization request handle returned by the pushed authorization request endpoint. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/authorize
```

** Begin the OAuth2 authorization flow. When called without a session, the user is redirected to the consent screen without grant ID. When called with a session, the redirect URL includes param for grant ID. You can pass Accept header of `application/json` to receive a JSON response instead of a redirect. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| redirect_uri | string | Redirect URI where visitor will be redirected after authorization, whether successful or not. |  |
| response_type | string | OAuth2 / OIDC response type. One of `code` (Authorization Code Flow), `id_token` (Implicit Flow, OIDC login only), or `code id_token` (Hybrid Flow). |  |
| scope | string | Space-separated OAuth2 scopes. Can include project scopes, and built-in scopes: `openid`, `email`, `profile`, `phone`. |  |
| state | string | OAuth2 state. You receive this back in the redirect URI. |  |
| nonce | string | OIDC nonce parameter to prevent replay attacks. Required when response_type includes `id_token`. |  |
| code_challenge | string | PKCE code challenge. Required when OAuth2 app is public. |  |
| code_challenge_method | string | PKCE code challenge method. Required when OAuth2 app is public. |  |
| prompt | string | OIDC prompt parameter for customization of consent screen. Space-separated list of: none, login, consent, select_account. |  |
| max_age | integer | OIDC max_age paraleter for customization of consent screen. Maximum allowable elapsed time in seconds since the user last authenticated. If exceeded, re-authentication is required. |  |
| authorization_details | string | Rich authorization request. JSON array of objects, each with a `type` and project-defined fields |  |
| resource | string | RFC 8707 resource indicator URI or URI list. Each value must be an absolute URI without a fragment. | [] |
| audience | string | Compatibility alias for a single OAuth2 resource indicator URI. |  |
| request_uri | string | OAuth2 authorization request handle returned by the pushed authorization request endpoint. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/device_authorization
```

** Start the OAuth2 Device Authorization Grant. Returns the device code, user code, verification URL, expiration, and polling interval. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| scope | string | Space-separated OAuth2 scopes. Can include project scopes, and built-in scopes: `openid`, `email`, `profile`. |  |
| authorization_details | string | Rich authorization request. JSON array of objects, each with a `type` and project-defined fields |  |
| resource | string | RFC 8707 resource indicator URI or URI list. Each value must be an absolute URI without a fragment. | [] |
| audience | string | Compatibility alias for a single OAuth2 resource indicator URI. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/grants
```

** Exchange a device flow user code for an OAuth2 grant. The authenticated user is bound to the pending grant. Pass the returned grant ID to the get grant endpoint to render the consent screen, then to the approve or reject endpoint to complete the flow. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| user_code | string | User code displayed on the device. |  |


```http request
GET https://cloud.appwrite.io/v1/oauth2/{project_id}/grants/{grant_id}
```

** Get an OAuth2 grant by its ID. Used by the consent screen to display the details of the authorization the user is being asked to approve. A grant can only be read by the user it belongs to, or by server SDK. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client that created grant during authorization exists. |  |
| grant_id | string | **Required** Grant ID made during authorization, provided to consent screen in URL search params. |  |


```http request
GET https://cloud.appwrite.io/v1/oauth2/{project_id}/organizations
```

** List the organizations the OAuth2 access token can access. Resolves the token's `organization` authorization details, expanding the `*` wildcard into the concrete set of organizations the user can see. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID of the console project the OAuth2 access token was issued for. |  |
| limit | integer | Maximum number of organizations to return. Between 1 and 5000. | 25 |
| offset | integer | Number of organizations to skip before returning results. Used for pagination. | 0 |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/par
```

** Store an OAuth2 authorization request server-side and receive a short-lived request_uri handle for the authorize endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| redirect_uri | string | Redirect URI where visitor will be redirected after authorization, whether successful or not. |  |
| response_type | string | OAuth2 / OIDC response type. |  |
| scope | string | Space-separated OAuth2 scopes. Can include project scopes, and built-in scopes: `openid`, `email`, `profile`, `phone`. |  |
| state | string | OAuth2 state. You receive this back in the redirect URI. |  |
| nonce | string | OIDC nonce parameter to prevent replay attacks. Required when response_type includes `id_token`. |  |
| code_challenge | string | PKCE code challenge. Required when OAuth2 app is public. |  |
| code_challenge_method | string | PKCE code challenge method. Required when OAuth2 app is public. |  |
| prompt | string | OIDC prompt parameter for customization of consent screen. Space-separated list of: none, login, consent, select_account. |  |
| max_age | integer | OIDC max_age parameter for customization of consent screen. |  |
| authorization_details | string | Rich authorization request. JSON array of objects, each with a `type` and project-defined fields |  |
| resource | string | RFC 8707 resource indicator URI or URI list. Each value must be an absolute URI without a fragment. | [] |
| audience | string | Compatibility alias for a single OAuth2 resource indicator URI. |  |


```http request
GET https://cloud.appwrite.io/v1/oauth2/{project_id}/projects
```

** List the projects the OAuth2 access token can access. Resolves the token's `project` authorization details, expanding the `*` wildcard into the concrete set of projects the user can see. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID of the console project the OAuth2 access token was issued for. |  |
| limit | integer | Maximum number of projects to return. Between 1 and 5000. | 25 |
| offset | integer | Number of projects to skip before returning results. Used for pagination. | 0 |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/reject
```

** Reject an OAuth2 grant when the user denies consent. Returns the `redirectUrl` the end user should be sent to with an `access_denied` error. You can pass Accept header of `application/json` to receive a JSON response instead of a redirect. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| grant_id | string | Grant ID made during authorization, provided to consent screen in URL search params. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/revoke
```

** Revoke an OAuth2 access token or refresh token. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| token | string | The access or refresh token to revoke. |  |
| token_type_hint | string | Type of token to revoke (access_token or refresh_token). |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| client_secret | string | OAuth2 client secret. Required for confidential apps; omitted for public apps. |  |


```http request
POST https://cloud.appwrite.io/v1/oauth2/{project_id}/token
```

** Exchange an OAuth2 authorization code, refresh token, or device code for access and refresh tokens. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| project_id | string | **Required** Project ID in which OAuth2 client exists. |  |
| grant_type | string | OAuth2 grant type. Can be one of: `authorization_code`, `refresh_token`, `urn:ietf:params:oauth:grant-type:device_code`. |  |
| code | string | Authorization code to be exchanged for access and refresh tokens. Required for `authorization_code` grant type. |  |
| refresh_token | string | Refresh token to be exchanged for a new access and refresh tokens. Required for `refresh_token` grant type. |  |
| device_code | string | Device code obtained from the device authorization endpoint. Required for `urn:ietf:params:oauth:grant-type:device_code` grant type. |  |
| client_id | string | OAuth2 client ID. Either a registered app ID or an HTTPS client ID metadata document URL. |  |
| client_secret | string | OAuth2 client secret. Required for confidential apps. |  |
| code_verifier | string | PKCE code verifier. Required for public apps. |  |
| redirect_uri | string | Redirect URI. Required for `authorization_code` grant type. |  |
| resource | string | RFC 8707 resource indicator URI or URI list. Each value must be an absolute URI without a fragment. | [] |
| audience | string | Compatibility alias for a single OAuth2 resource indicator URI. |  |

