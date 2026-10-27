# Waf Service


```http request
GET https://cloud.appwrite.io/v1/waf/rules
```

** List WAF rules for the current project.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/waf/rules/bypass
```

** Create a bypass WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | Rule ID. Choose a custom ID or pass `ID.unique()` to generate a unique one. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Leave empty for the API resource type. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. | 0 |
| enabled | boolean | Set to false to create the rule in a disabled state. | 1 |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. | [] |


```http request
PATCH https://cloud.appwrite.io/v1/waf/rules/bypass/{ruleId}
```

** Update a bypass WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. |  |
| enabled | boolean | Set to false to disable the rule. |  |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. |  |


```http request
POST https://cloud.appwrite.io/v1/waf/rules/challenge
```

** Create a challenge WAF rule. Use `difficulty` (1 easiest to 5 hardest) to tune the client-side proof-of-work cost, and `ttl` to control how long, in seconds, a visitor stays cleared after passing the challenge before being challenged again. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | Rule ID. Choose a custom ID or pass `ID.unique()` to generate a unique one. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| challengeType | string | Challenge type enforced by the rule. | compute |
| priority | integer | Evaluation priority. Lower numbers run earlier. | 0 |
| enabled | boolean | Set to false to create the rule in a disabled state. | 1 |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. | [] |
| difficulty | integer | Challenge difficulty from 1 (easiest) to 5 (hardest). Higher values demand more client-side proof-of-work. | 3 |
| ttl | integer | How long, in seconds, a visitor stays cleared after passing the challenge before being challenged again. | 1800 |


```http request
PATCH https://cloud.appwrite.io/v1/waf/rules/challenge/{ruleId}
```

** Update a challenge WAF rule. Use `difficulty` (1 easiest to 5 hardest) to tune the client-side proof-of-work cost, and `ttl` to control how long, in seconds, a visitor stays cleared after passing the challenge before being challenged again. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| challengeType | string | Challenge type enforced by the rule. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. |  |
| enabled | boolean | Set to false to disable the rule. |  |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. |  |
| difficulty | integer | Challenge difficulty from 1 (easiest) to 5 (hardest). Higher values demand more client-side proof-of-work. |  |
| ttl | integer | How long, in seconds, a visitor stays cleared after passing the challenge before being challenged again. |  |


```http request
POST https://cloud.appwrite.io/v1/waf/rules/deny
```

** Create a deny WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon. `sessionAge` and `mfaAge` hold the seconds since the request's session was created and since its last MFA challenge. Both are null for requests without a session, such as guests and API keys, while a request authenticated with the `x-appwrite-jwt` header carries the age of the session its token is bound to; on `functions` rules the session comes from the `x-appwrite-user-jwt` header, and `mfaAge` is null when the session never completed MFA. A deny matching on `mfaAge` returns `user_challenge_required` and one matching on `sessionAge` returns `user_reauthentication_required`, both with status 401, so the user can sign in again and retry. To also deny requests without a session, combine `isNull` and `greaterThan` in an `or` condition.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | Rule ID. Choose a custom ID or pass `ID.unique()` to generate a unique one. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. | 0 |
| enabled | boolean | Set to false to create the rule in a disabled state. | 1 |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. | [] |


```http request
PATCH https://cloud.appwrite.io/v1/waf/rules/deny/{ruleId}
```

** Update a deny WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon. `sessionAge` and `mfaAge` hold the seconds since the request's session was created and since its last MFA challenge. Both are null for requests without a session, such as guests and API keys, while a request authenticated with the `x-appwrite-jwt` header carries the age of the session its token is bound to; on `functions` rules the session comes from the `x-appwrite-user-jwt` header, and `mfaAge` is null when the session never completed MFA. A deny matching on `mfaAge` returns `user_challenge_required` and one matching on `sessionAge` returns `user_reauthentication_required`, both with status 401, so the user can sign in again and retry. To also deny requests without a session, combine `isNull` and `greaterThan` in an `or` condition.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. |  |
| enabled | boolean | Set to false to disable the rule. |  |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. |  |


```http request
POST https://cloud.appwrite.io/v1/waf/rules/rate-limit
```

** Create a rate limit WAF rule. Use `key` to choose the counter: `ip` limits per client IP, while `userId` limits per authenticated user (requests without an authenticated user skip `userId` rules). Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | Rule ID. Choose a custom ID or pass `ID.unique()` to generate a unique one. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| limit | integer | Maximum number of matching requests allowed in the configured interval. |  |
| interval | integer | Interval in seconds used for rate limiting. |  |
| key | string | Rate limit key. Use `ip` to limit per client IP or `userId` to limit per authenticated user. Requests without an authenticated user skip `userId` rules. | ip |
| strategy | string | Rate limit strategy. `fixedWindow` counts requests in discrete intervals, `slidingWindow` weights the previous interval for smoother limiting, and `tokenBucket` refills allowance continuously to permit short bursts. | fixedWindow |
| maxBucketSize | integer | Maximum number of tokens the bucket can hold for the `tokenBucket` strategy, controlling how large a burst is allowed. The sustained refill rate is `limit / interval`. Defaults to `limit` when omitted. Ignored by other strategies. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. | 0 |
| enabled | boolean | Set to false to create the rule in a disabled state. | 1 |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. | [] |


```http request
PATCH https://cloud.appwrite.io/v1/waf/rules/rate-limit/{ruleId}
```

** Update a rate limit WAF rule. Use `key` to choose the counter: `ip` limits per client IP, while `userId` limits per authenticated user (requests without an authenticated user skip `userId` rules). Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| limit | integer | Maximum number of matching requests allowed in the configured interval. |  |
| interval | integer | Interval in seconds used for rate limiting. |  |
| key | string | Rate limit key. Use `ip` to limit per client IP or `userId` to limit per authenticated user. Requests without an authenticated user skip `userId` rules. |  |
| maxBucketSize | integer | Maximum number of tokens the bucket can hold for the `tokenBucket` strategy, controlling how large a burst is allowed. The sustained refill rate is `limit / interval`. Ignored by other strategies. The strategy itself cannot be changed after creation. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. |  |
| enabled | boolean | Set to false to disable the rule. |  |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. |  |


```http request
POST https://cloud.appwrite.io/v1/waf/rules/redirect
```

** Create a redirect WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | Rule ID. Choose a custom ID or pass `ID.unique()` to generate a unique one. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| location | string | Location used for redirect responses. |  |
| statusCode | integer | Integer status code used for redirect responses. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. | 0 |
| enabled | boolean | Set to false to create the rule in a disabled state. | 1 |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. | [] |


```http request
PATCH https://cloud.appwrite.io/v1/waf/rules/redirect/{ruleId}
```

** Update a redirect WAF rule. Conditions can match request attributes including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`, `accept`, `acceptLanguage`, `cookie`, `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and `state` require the premium Geo DB addon.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |
| resourceType | string | Resource type the rule applies to. |  |
| resourceId | string | Resource identifier. Required for functions and sites. |  |
| name | string | Rule name. |  |
| description | string | Optional description for the rule. |  |
| location | string | Location used for redirect responses. |  |
| statusCode | integer | Integer status code used for redirect responses. |  |
| priority | integer | Evaluation priority. Lower numbers run earlier. |  |
| enabled | boolean | Set to false to disable the rule. |  |
| conditions | array | Array of condition strings generated using the WAF Condition builder. Maximum of 100 conditions are allowed, each 4096 characters long. |  |


```http request
GET https://cloud.appwrite.io/v1/waf/rules/{ruleId}
```

** Get a WAF rule by its ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/waf/rules/{ruleId}
```

** Delete a WAF rule.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ruleId | string | **Required** Rule ID. |  |

