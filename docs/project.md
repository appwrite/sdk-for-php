# Project Service


```http request
GET https://cloud.appwrite.io/v1/project
```

** Get a project. **


```http request
DELETE https://cloud.appwrite.io/v1/project
```

** Delete a project. **


```http request
PATCH https://cloud.appwrite.io/v1/project/auth-methods/{methodId}
```

** Update properties of a specific auth method. Use this endpoint to enable or disable a method in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| methodId | string | **Required** Auth Method ID. Possible values: email-password,magic-url,email-otp,anonymous,invites,jwt,phone |  |
| enabled | boolean | Auth method status. |  |


```http request
GET https://cloud.appwrite.io/v1/project/keys
```

** Get a list of all API keys from the current project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: expire, accessedAt, name, scopes | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/keys
```

** Create a new API key. It&#039;s recommended to have multiple API keys with strict scopes for separate functions within your project.

You can also create an ephemeral API key if you need a short-lived key instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | Key ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
POST https://cloud.appwrite.io/v1/project/keys/ephemeral
```

** Create a new ephemeral API key. It&#039;s recommended to have multiple API keys with strict scopes for separate functions within your project.

You can also create a standard API key if you need a longer-lived key instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| duration | integer | Time in seconds before ephemeral key expires. Maximum duration is 3600 seconds. |  |


```http request
GET https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Get a key by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Update a key by its unique ID. Use this endpoint to update the name, scopes, or expiration time of an API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Delete a key by its unique ID. Once deleted, the key can no longer be used to authenticate API calls. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/labels
```

** Update the project labels. Labels can be used to easily filter projects in an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| labels | array | Array of project labels. Replaces the previous labels. Maximum of 1000 labels are allowed, each up to 36 alphanumeric characters long. |  |


```http request
GET https://cloud.appwrite.io/v1/project/mock-phones
```

** Get a list of all mock phones in the project. This endpoint returns an array of all mock phones and their OTPs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/mock-phones
```

** Create a new mock phone for your project. Use this endpoint to register a mock phone number and its sign-in OTP for your testers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| number | string | Phone number to associate with the mock phone. Must be a valid E.164 formatted phone number. |  |
| otp | string | One-time password (OTP) to associate with the mock phone. Must be a 6-digit numeric code. |  |


```http request
GET https://cloud.appwrite.io/v1/project/mock-phones/{number}
```

** Get a mock phone by its unique number. This endpoint returns the mock phone&#039;s OTP. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| number | string | **Required** Phone number associated with the mock phone. Must be a valid E.164 formatted phone number. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/mock-phones/{number}
```

** Update a mock phone by its unique number. Use this endpoint to update the mock phone&#039;s OTP. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| number | string | **Required** Phone number associated with the mock phone. Must be a valid E.164 formatted phone number. |  |
| otp | string | One-time password (OTP) to associate with the mock phone. Must be a 6-digit numeric code. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/mock-phones/{number}
```

** Delete a mock phone by its unique number. This endpoint removes the mock phone and its OTP configuration from the project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| number | string | **Required** Phone number associated with the mock phone. Must be a valid E.164 formatted phone number. |  |


```http request
GET https://cloud.appwrite.io/v1/project/oauth2
```

** Get a list of all OAuth2 providers supported by the server, along with the project&#039;s configuration for each. Credential fields are write-only and always returned empty. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/amazon
```

** Update the project OAuth2 Amazon configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Amazon OAuth2 app. For example: amzn1.application-oa2-client.87400c00000000000000000000063d5b2 |  |
| clientSecret | string | 'Client Secret' of Amazon OAuth2 app. For example: 79ffe4000000000000000000000000000000000000000000000000000002de55 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/apple
```

** Update the project OAuth2 Apple configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| serviceId | string | 'Service ID' of Apple OAuth2 app. For example: ip.appwrite.app.web |  |
| keyId | string | 'Key ID' of Apple OAuth2 app. For example: P4000000N8 |  |
| teamId | string | 'Team ID' of Apple OAuth2 app. For example: D4000000R6 |  |
| p8File | string | Contents of the Apple OAuth2 app .p8 private key file. The secret key wrapped by the PEM markers is 200 characters long. For example: -----BEGIN PRIVATE KEY-----MIGTAg...jy2Xbna-----END PRIVATE KEY----- |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/auth0
```

** Update the project OAuth2 Auth0 configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Auth0 OAuth2 app. For example: OaOkIA000000000000000000005KLSYq |  |
| clientSecret | string | 'Client Secret' of Auth0 OAuth2 app. For example: zXz0000-00000000000000000000000000000-00000000000000000000PJafnF |  |
| endpoint | string | Domain of Auth0 instance. For example: example.us.auth0.com |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/authentik
```

** Update the project OAuth2 Authentik configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Authentik OAuth2 app. For example: dTKOPa0000000000000000000000000000e7G8hv |  |
| clientSecret | string | 'Client Secret' of Authentik OAuth2 app. For example: ntQadq000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000Hp5WK |  |
| endpoint | string | Domain of Authentik instance. For example: example.authentik.com |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/autodesk
```

** Update the project OAuth2 Autodesk configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Autodesk OAuth2 app. For example: 5zw90v00000000000000000000kVYXN7 |  |
| clientSecret | string | 'Client Secret' of Autodesk OAuth2 app. For example: 7I000000000000MW |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/bitbucket
```

** Update the project OAuth2 Bitbucket configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | 'Key' of Bitbucket OAuth2 app. For example: Knt70000000000ByRc |  |
| secret | string | 'Secret' of Bitbucket OAuth2 app. For example: NMfLZJ00000000000000000000TLQdDx |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/bitly
```

** Update the project OAuth2 Bitly configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Bitly OAuth2 app. For example: d95151000000000000000000000000000067af9b |  |
| clientSecret | string | 'Client Secret' of Bitly OAuth2 app. For example: a13e250000000000000000000000000000d73095 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/box
```

** Update the project OAuth2 Box configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Box OAuth2 app. For example: deglcs00000000000000000000x2og6y |  |
| clientSecret | string | 'Client Secret' of Box OAuth2 app. For example: OKM1f100000000000000000000eshEif |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/dailymotion
```

** Update the project OAuth2 Dailymotion configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | 'API Key' of Dailymotion OAuth2 app. For example: 07a9000000000000067f |  |
| apiSecret | string | 'API Secret' of Dailymotion OAuth2 app. For example: a399a90000000000000000000000000000d90639 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/discord
```

** Update the project OAuth2 Discord configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Discord OAuth2 app. For example: 950722000000343754 |  |
| clientSecret | string | 'Client Secret' of Discord OAuth2 app. For example: YmPXnM000000000000000000002zFg5D |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/disqus
```

** Update the project OAuth2 Disqus configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| publicKey | string | 'Public Key, also known as API Key' of Disqus OAuth2 app. For example: cgegH70000000000000000000000000000000000000000000000000000Hr1nYX |  |
| secretKey | string | 'Secret Key, also known as API Secret' of Disqus OAuth2 app. For example: W7Bykj00000000000000000000000000000000000000000000000000003o43w9 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/dropbox
```

** Update the project OAuth2 Dropbox configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appKey | string | 'App Key' of Dropbox OAuth2 app. For example: jl000000000009t |  |
| appSecret | string | 'App Secret' of Dropbox OAuth2 app. For example: g200000000000vw |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/etsy
```

** Update the project OAuth2 Etsy configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyString | string | 'Keystring' of Etsy OAuth2 app. For example: nsgzxh0000000000008j85a2 |  |
| sharedSecret | string | 'Shared Secret' of Etsy OAuth2 app. For example: tp000000ru |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/facebook
```

** Update the project OAuth2 Facebook configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| appId | string | 'App ID' of Facebook OAuth2 app. For example: 260600000007694 |  |
| appSecret | string | 'App Secret' of Facebook OAuth2 app. For example: 2d0b2800000000000000000000d38af4 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/figma
```

** Update the project OAuth2 Figma configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Figma OAuth2 app. For example: byay5H0000000000VtiI40 |  |
| clientSecret | string | 'Client Secret' of Figma OAuth2 app. For example: yEpOYn0000000000000000004iIsU5 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/fusionauth
```

** Update the project OAuth2 FusionAuth configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of FusionAuth OAuth2 app. For example: b2222c00-0000-0000-0000-000000862097 |  |
| clientSecret | string | 'Client Secret' of FusionAuth OAuth2 app. For example: Jx4s0C0000000000000000000000000000000wGqLsc |  |
| endpoint | string | Domain of FusionAuth instance. For example: example.fusionauth.io |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/github
```

** Update the project OAuth2 GitHub configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'OAuth2 app Client ID, or App ID' of GitHub OAuth2 app. For example: e4d87900000000540733. Example of wrong value: 370006 |  |
| clientSecret | string | 'Client Secret' of GitHub OAuth2 app. For example: 5e07c00000000000000000000000000000198bcc |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/gitlab
```

** Update the project OAuth2 Gitlab configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| applicationId | string | 'Application ID' of Gitlab OAuth2 app. For example: d41ffe0000000000000000000000000000000000000000000000000000d5e252 |  |
| secret | string | 'Secret' of Gitlab OAuth2 app. For example: gloas-838cfa0000000000000000000000000000000000000000000000000000ecbb38 |  |
| endpoint | string | Endpoint URL of self-hosted GitLab instance. For example: https://gitlab.com |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/google
```

** Update the project OAuth2 Google configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Google OAuth2 app. For example: 120000000095-92ifjb00000000000000000000g7ijfb.apps.googleusercontent.com |  |
| clientSecret | string | 'Client Secret' of Google OAuth2 app. For example: example-google-client-secret |  |
| prompt | array | Array of Google OAuth2 prompt values. If "none" is included, it must be the only element. "none" means: don't display any authentication or consent screens. Must not be specified with other values. "consent" means: prompt the user for consent. "select_account" means: prompt the user to select an account. |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/keycloak
```

** Update the project OAuth2 Keycloak configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Keycloak OAuth2 app. For example: appwrite-o0000000st-app |  |
| clientSecret | string | 'Client Secret' of Keycloak OAuth2 app. For example: jdjrJd00000000000000000000HUsaZO |  |
| endpoint | string | Domain of Keycloak instance. For example: keycloak.example.com |  |
| realmName | string | Keycloak realm name. For example: appwrite-realm |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/kick
```

** Update the project OAuth2 Kick configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Kick OAuth2 app. For example: 01KQ7C00000000000001MFHS32 |  |
| clientSecret | string | 'Client Secret' of Kick OAuth2 app. For example: 34ac5600000000000000000000000000000000000000000000000000e830c8b |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/linkedin
```

** Update the project OAuth2 Linkedin configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Linkedin OAuth2 app. For example: 770000000000dv |  |
| primaryClientSecret | string | 'Primary Client Secret or Secondary Client Secret' of Linkedin OAuth2 app. For example: example-linkedin-client-secret |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/microsoft
```

** Update the project OAuth2 Microsoft configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| applicationId | string | 'Entra ID Application ID, also known as Client ID' of Microsoft OAuth2 app. For example: 00001111-aaaa-2222-bbbb-3333cccc4444 |  |
| applicationSecret | string | 'Entra ID Application Secret, also known as Client Secret' of Microsoft OAuth2 app. For example: A1bC2dE3fH4iJ5kL6mN7oP8qR9sT0u |  |
| tenant | string | Microsoft Entra ID tenant identifier. Use 'common', 'organizations', 'consumers' or a specific tenant ID. For example: common |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/notion
```

** Update the project OAuth2 Notion configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| oauthClientId | string | 'OAuth Client ID' of Notion OAuth2 app. For example: 341d8700-0000-0000-0000-000000446ee3 |  |
| oauthClientSecret | string | 'OAuth Client Secret' of Notion OAuth2 app. For example: secret_dLUr4b000000000000000000000000000000lFHAa9 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/oidc
```

** Update the project OAuth2 Oidc configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Oidc OAuth2 app. For example: qibI2x0000000000000000000000000006L2YFoG |  |
| clientSecret | string | 'Client Secret' of Oidc OAuth2 app. For example: Ah68ed000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003qpcHV |  |
| wellKnownURL | string | OpenID Connect well-known configuration URL. When provided, authorization, token, and user info endpoints can be discovered automatically. For example: https://myoauth.com/.well-known/openid-configuration |  |
| authorizationURL | string | OpenID Connect authorization endpoint URL. Required when wellKnownURL is not provided. For example: https://myoauth.com/oauth2/authorize |  |
| tokenURL | string | OpenID Connect token endpoint URL. Required when wellKnownURL is not provided. For example: https://myoauth.com/oauth2/token |  |
| userInfoURL | string | OpenID Connect user info endpoint URL. Required when wellKnownURL is not provided. For example: https://myoauth.com/oauth2/userinfo |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/okta
```

** Update the project OAuth2 Okta configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Okta OAuth2 app. For example: 0oa00000000000000698 |  |
| clientSecret | string | 'Client Secret' of Okta OAuth2 app. For example: Kiq0000000000000000000000000000000000000-00000000000H2L5-3SJ-vRV |  |
| domain | string | Okta company domain. Required when enabling the provider. For example: trial-6400025.okta.com. Example of wrong value: trial-6400025-admin.okta.com, or https://trial-6400025.okta.com/ |  |
| authorizationServerId | string | Custom Authorization Servers. Optional, can be left empty or unconfigured. For example: aus000000000000000h7z |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/paypal
```

** Update the project OAuth2 Paypal configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Paypal OAuth2 app. For example: AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB |  |
| secretKey | string | 'Secret Key 1 or Secret Key 2' of Paypal OAuth2 app. For example: EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/paypalSandbox
```

** Update the project OAuth2 PaypalSandbox configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of PaypalSandbox OAuth2 app. For example: AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB |  |
| secretKey | string | 'Secret Key 1 or Secret Key 2' of PaypalSandbox OAuth2 app. For example: EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/podio
```

** Update the project OAuth2 Podio configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Podio OAuth2 app. For example: appwrite-o0000000st-app |  |
| clientSecret | string | 'Client Secret' of Podio OAuth2 app. For example: Rn247T0000000000000000000000000000000000000000000000000000W2zWTN |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/salesforce
```

** Update the project OAuth2 Salesforce configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| customerKey | string | 'Consumer Key' of Salesforce OAuth2 app. For example: 3MVG9I0000000000000000000000000000000000000000000000000000000000000000000000000C5Aejq |  |
| customerSecret | string | 'Consumer Secret' of Salesforce OAuth2 app. For example: 3w000000000000e2 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/slack
```

** Update the project OAuth2 Slack configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Slack OAuth2 app. For example: 23000000089.15000000000023 |  |
| clientSecret | string | 'Client Secret' of Slack OAuth2 app. For example: 81656000000000000000000000f3d2fd |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/spotify
```

** Update the project OAuth2 Spotify configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Spotify OAuth2 app. For example: 6ec271000000000000000000009beace |  |
| clientSecret | string | 'Client Secret' of Spotify OAuth2 app. For example: db068a000000000000000000008b5b9f |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/stripe
```

** Update the project OAuth2 Stripe configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Stripe OAuth2 app. For example: ca_UKibXX0000000000000000000006byvR |  |
| apiSecretKey | string | 'API Secret Key' of Stripe OAuth2 app. For example: sk_51SfOd000000000000000000000000000000000000000000000000000000000000000000000000000000000000000QGWYfp |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/tradeshift
```

** Update the project OAuth2 Tradeshift configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| oauth2ClientId | string | 'OAuth2 Client ID' of Tradeshift OAuth2 app. For example: appwrite-tes00000.0000000000est-app |  |
| oauth2ClientSecret | string | 'OAuth2 Client Secret' of Tradeshift OAuth2 app. For example: 7cb52700-0000-0000-0000-000000ca5b83 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/tradeshiftBox
```

** Update the project OAuth2 Tradeshift Sandbox configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| oauth2ClientId | string | 'OAuth2 Client ID' of Tradeshift Sandbox OAuth2 app. For example: appwrite-tes00000.0000000000est-app |  |
| oauth2ClientSecret | string | 'OAuth2 Client Secret' of Tradeshift Sandbox OAuth2 app. For example: 7cb52700-0000-0000-0000-000000ca5b83 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/twitch
```

** Update the project OAuth2 Twitch configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Twitch OAuth2 app. For example: vvi0in000000000000000000ikmt9p |  |
| clientSecret | string | 'Client Secret' of Twitch OAuth2 app. For example: pmapue000000000000000000zylw3v |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/wordpress
```

** Update the project OAuth2 WordPress configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of WordPress OAuth2 app. For example: 130005 |  |
| clientSecret | string | 'Client Secret' of WordPress OAuth2 app. For example: PlBfJS0000000000000000000000000000000000000000000000000000EdUZJk |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/x
```

** Update the project OAuth2 X configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| customerKey | string | 'Customer Key' of X OAuth2 app. For example: slzZV0000000000000NFLaWT |  |
| secretKey | string | 'Secret Key' of X OAuth2 app. For example: tkEPkp00000000000000000000000000000000000000FTxbI9 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/yahoo
```

** Update the project OAuth2 Yahoo configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID, also known as Customer Key' of Yahoo OAuth2 app. For example: dj0yJm000000000000000000000000000000000000000000000000000000000000000000000000000000000000Z4PWRm |  |
| clientSecret | string | 'Client Secret, also known as Customer Secret' of Yahoo OAuth2 app. For example: cf978f0000000000000000000000000000c5e2e9 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/yandex
```

** Update the project OAuth2 Yandex configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Yandex OAuth2 app. For example: 6a8a6a0000000000000000000091483c |  |
| clientSecret | string | 'Client Secret' of Yandex OAuth2 app. For example: bbf98500000000000000000000c75a63 |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/zoho
```

** Update the project OAuth2 Zoho configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Zoho OAuth2 app. For example: 1000.83C178000000000000000000RPNX0B |  |
| clientSecret | string | 'Client Secret' of Zoho OAuth2 app. For example: fb5cac000000000000000000000000000000a68f6e |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/oauth2/zoom
```

** Update the project OAuth2 Zoom configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clientId | string | 'Client ID' of Zoom OAuth2 app. For example: QMAC00000000000000w0AQ |  |
| clientSecret | string | 'Client Secret' of Zoom OAuth2 app. For example: GAWsG4000000000000000000007U01ON |  |
| enabled | boolean | OAuth2 sign-in method status. Set to true to enable new session creation. Setting to true will trigger end-to-end credentials validation, and will throw if the credentials are invalid. |  |


```http request
GET https://cloud.appwrite.io/v1/project/oauth2/{providerId}
```

** Get a single OAuth2 provider configuration. Credential fields (client secret, p8 file, key/team IDs) are write-only and always returned empty. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** OAuth2 provider key. For example: github, google, apple. |  |


```http request
GET https://cloud.appwrite.io/v1/project/platforms
```

** Get a list of all platforms in the project. This endpoint returns an array of all platforms and their configurations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: type, name, hostname, bundleIdentifier, applicationId, packageIdentifierName, packageName | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/android
```

** Create a new Android platform for your project. Use this endpoint to register a new Android platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| applicationId | string | Android application ID. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/android/{platformId}
```

** Update an Android platform by its unique ID. Use this endpoint to update the platform&#039;s name or application ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| applicationId | string | Android application ID. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/apple
```

** Create a new Apple platform for your project. Use this endpoint to register a new Apple platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| bundleIdentifier | string | Apple bundle identifier. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/apple/{platformId}
```

** Update an Apple platform by its unique ID. Use this endpoint to update the platform&#039;s name or bundle identifier. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| bundleIdentifier | string | Apple bundle identifier. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/linux
```

** Create a new Linux platform for your project. Use this endpoint to register a new Linux platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageName | string | Linux package name. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/linux/{platformId}
```

** Update a Linux platform by its unique ID. Use this endpoint to update the platform&#039;s name or package name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageName | string | Linux package name. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/web
```

** Create a new web platform for your project. Use this endpoint to register a new platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| hostname | string | Platform web hostname. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/web/{platformId}
```

** Update a web platform by its unique ID. Use this endpoint to update the platform&#039;s name or hostname. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| hostname | string | Platform web hostname. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/windows
```

** Create a new Windows platform for your project. Use this endpoint to register a new Windows platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageIdentifierName | string | Windows package identifier name. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/windows/{platformId}
```

** Update a Windows platform by its unique ID. Use this endpoint to update the platform&#039;s name or package identifier name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageIdentifierName | string | Windows package identifier name. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/project/platforms/{platformId}
```

** Get a platform by its unique ID. This endpoint returns the platform&#039;s details, including its name, type, and key configurations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/platforms/{platformId}
```

** Delete a platform by its unique ID. This endpoint removes the platform and all its configurations from the project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |


```http request
GET https://cloud.appwrite.io/v1/project/policies
```

** Get a list of all project policies and their current configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/deny-aliased-email
```

** Configures if aliased emails such as subaddresses and emails with suffixes are denied during new users sign-ups and email updates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Set whether or not to block aliased emails during signup and email updates. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/deny-disposable-email
```

** Configures if disposable emails from known temporary domains are denied during new users sign-ups and email updates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Set whether or not to block disposable email addresses during signup and email updates. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/deny-free-email
```

** Configures if emails from free providers such as Gmail or Yahoo are denied during new users sign-ups and email updates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Set whether or not to block free email addresses during signup and email updates. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/membership-privacy
```

** Updating this policy allows you to control if team members can see other members information. When enabled, all team members can see ID, name, email, phone number, and MFA status of other members.. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | boolean | Set to true if you want make user ID visible to all team members, or false to hide it. |  |
| userEmail | boolean | Set to true if you want make user email visible to all team members, or false to hide it. |  |
| userPhone | boolean | Set to true if you want make user phone number visible to all team members, or false to hide it. |  |
| userName | boolean | Set to true if you want make user name visible to all team members, or false to hide it. |  |
| userMFA | boolean | Set to true if you want make user MFA status visible to all team members, or false to hide it. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/password-dictionary
```

** Updating this policy allows you to control if new passwords are checked against most common passwords dictionary. When enabled, and user changes their password, password must not be contained in the dictionary. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Toggle password dictionary policy. Set to true if you want password change to block passwords in the dictionary, or false to allow them. When changing this policy, existing passwords remain valid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/password-history
```

** Updates one of password strength policies. Based on total length configured, previous password hashes are stored, and users cannot choose a new password that is already stored in the passwird history list, when updating an user password, or setting new one through password recovery.

Keep in mind, while password history policy is disabled, the history is not being stored. Enabling the policy will not have any history on existing users, and it will only start to collect and enforce the policy on password changes since the policy is enabled. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| total | integer | Set the password history length per user. Value can be between 1 and 5000, or null to disable the limit. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/password-personal-data
```

** Updating this policy allows you to control if password strength is checked against personal data. When enabled, and user sets or changes their password, the password must not contain user ID, name, email or phone number. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Toggle password personal data policy. Set to true if you want to block passwords including user's personal data, or false to allow it. When changing this policy, existing passwords remain valid. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/session-alert
```

** Updating this policy allows you to control if email alert is sent upon session creation. When enabled, and user signs into their account, they will be sent an email notification. There is an exception, the first session after a new sign up does not trigger an alert, even if the policy is enabled. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Toggle session alert policy. Set to true if you want users to receive email notifications when a sessions are created for their users, or false to not send email alerts. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/session-duration
```

** Update maximum duration how long sessions created within a project should stay active for. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| duration | integer | Maximum session length in seconds. Minium allowed value is 5 second, and maximum is 1 year, which is 31536000 seconds. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/session-invalidation
```

** Updating this policy allows you to control if existing sessions should be invalidated when a password of a user is changed. When enabled, and user changes their password, they will be logged out of all their devices. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Toggle session invalidation policy. Set to true if you want password change to invalidate all sessions of an user, or false to keep sessions active. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/session-limit
```

** Update the maximum number of sessions allowed per user. When the limit is hit, the oldest session will be deleted to make room for new one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| total | integer | Set the maximum number of sessions allowed per user. Value can be between 1 and 5000, or null to disable the limit. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/policies/user-limit
```

** Update the maximum number of users in the project. When the limit is hit or amount of existing users already exceeded the limit, all users remain active, but new user sign up will be prohibited. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| total | integer | Set the maximum number of users allowed in the project. Value can be between 1 and 5000, or null to disable the limit. |  |


```http request
GET https://cloud.appwrite.io/v1/project/policies/{policyId}
```

** Get a policy by its unique ID. This endpoint returns the current configuration for the requested project policy. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| policyId | string | **Required** Policy ID. Can be one of: password-dictionary, password-history, password-personal-data, session-alert, session-duration, session-invalidation, session-limit, user-limit, membership-privacy. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/protocols/{protocolId}
```

** Update properties of a specific protocol. Use this endpoint to enable or disable a protocol in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| protocolId | string | **Required** Protocol name. Can be one of: rest, graphql, websocket |  |
| enabled | boolean | Protocol status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/services/{serviceId}
```

** Update properties of a specific service. Use this endpoint to enable or disable a service in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| serviceId | string | **Required** Service name. Can be one of: account, avatars, databases, tablesdb, locale, health, project, storage, teams, users, vcs, sites, functions, proxy, graphql, migrations, messaging, advisor |  |
| enabled | boolean | Service status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/smtp
```

** Update the SMTP configuration for your project. Use this endpoint to configure your project&#039;s SMTP provider with your custom settings for sending transactional emails. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| host | string | SMTP server hostname (domain) |  |
| port | integer | SMTP server port |  |
| username | string | SMTP server username. Leave empty for no authorization. |  |
| password | string | SMTP server password. Leave empty for no authorization. This property is stored securely and cannot be read in future (write-only). |  |
| senderEmail | string | Email address shown in inbox as the sender of the email. |  |
| senderName | string | Name shown in inbox as the sender of the email. |  |
| replyToEmail | string | Email used when user replies to the email. |  |
| replyToName | string | Name used when user replies to the email. |  |
| secure | string | Configures if communication with SMTP server is encrypted. Allowed values are: tls, ssl. Leave empty for no encryption. |  |
| enabled | boolean | Enable or disable custom SMTP. Custom SMTP is useful for branding purposes, but also allows use of custom email templates. |  |


```http request
POST https://cloud.appwrite.io/v1/project/smtp/tests
```

** Send a test email to verify SMTP configuration.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| emails | array | Array of emails to send test email to. Maximum of 10 emails are allowed. |  |


```http request
GET https://cloud.appwrite.io/v1/project/templates/email
```

** Get a list of all custom email templates configured for the project. This endpoint returns an array of all configured email templates and their locales. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
PATCH https://cloud.appwrite.io/v1/project/templates/email
```

** Update a custom email template for the specified locale and type. Use this endpoint to modify the content of your email templates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| templateId | string | Custom email template type. Can be one of: verification, magicSession, recovery, invitation, mfaChallenge, sessionAlert, otpSession |  |
| locale | string | Custom email template locale. If left empty, the fallback locale (en) will be used. |  |
| subject | string | Subject of the email template. Can be up to 255 characters. |  |
| message | string | Plain or HTML body of the email template message. Can be up to 10MB of content. |  |
| senderName | string | Name of the email sender. |  |
| senderEmail | string | Email of the sender. |  |
| replyToEmail | string | Reply to email. |  |
| replyToName | string | Reply to name. |  |


```http request
GET https://cloud.appwrite.io/v1/project/templates/email/{templateId}
```

** Get a custom email template for the specified locale and type. This endpoint returns the template content, subject, and other configuration details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| templateId | string | **Required** Custom email template type. Can be one of: verification, magicSession, recovery, invitation, mfaChallenge, sessionAlert, otpSession |  |
| locale | string | Custom email template locale. If left empty, the fallback locale (en) will be used. |  |


```http request
GET https://cloud.appwrite.io/v1/project/variables
```

** Get a list of all project environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, resourceType, resourceId, secret | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/variables
```

** Create a new project environment variable. These variables can be accessed by all functions and sites in the project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | Variable unique ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. | 1 |


```http request
GET https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Get a variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Delete a variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |

