# Monitors Service


```http request
GET https://cloud.appwrite.io/v1/monitors
```

** Get a list of the project's monitors of every type. Use queries to filter by type, resource, severity or status, and `Query.search('search', term)` to search monitor IDs, names, metrics and resources. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, type, resourceType, resourceId, enabled, severity, escalationId, status, evaluatedAt, triggeredAt, search | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/monitors/dns
```

** Create a DNS monitor. It asks a resolver for a domain's records of one type on its own interval, and opens an alert when the resolver fails, or when its rules match the answers, by default when there is no such record. Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event when it opens and `.update` when a check passes again, for project webhooks, functions and realtime, and notifies the organization's members by email and in the console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | Monitor ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| domain | string | Domain to query, such as `example.com`. |  |
| record | string | Record type to query: `A`, `AAAA`, `CNAME`, `MX`, `TXT` or `NS`. Defaults to `A`. | A |
| resolver | string | Resolver to query, as an IP address with an optional port, such as `1.1.1.1` or `[2606:4700:4700::1111]:53`. Defaults to the server's DNS resolver. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `answer` (the first record returned, compared lowercased without the trailing dot), `answers` (number of records returned), `latency` (milliseconds the check took). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. `answer` takes `equal` and `notEqual` only. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires when the resolver returns no answers. | [] |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Defaults to 60, or to the shortest interval your plan allows when that is longer. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. | 10 |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. | 3600 |
| enabled | boolean | Set to false to create the monitor without checking it. | 1 |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Defaults to owners; pass an empty list to rely on the alert events alone. | [&quot;owner&quot;] |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. | warning |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Leave empty to notify the `notify` roles once. |  |


```http request
PATCH https://cloud.appwrite.io/v1/monitors/dns/{monitorId}
```

** Update a DNS monitor by its unique ID. Only the parameters passed change; the monitor's state, its last check and its open alert are kept. Passing `rules` replaces all of them. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| domain | string | Domain to query, such as `example.com`. |  |
| record | string | Record type to query: `A`, `AAAA`, `CNAME`, `MX`, `TXT` or `NS`. |  |
| resolver | string | Resolver to query, as an IP address with an optional port, such as `1.1.1.1` or `[2606:4700:4700::1111]:53`. Pass an empty string to use the server's DNS resolver. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `answer` (the first record returned, compared lowercased without the trailing dot), `answers` (number of records returned), `latency` (milliseconds the check took). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. `answer` takes `equal` and `notEqual` only. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires when the resolver returns no answers. Replaces the current rules; an empty list restores the defaults. |  |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. |  |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. |  |
| enabled | boolean | Whether the monitor is checked. |  |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Pass an empty list to rely on the alert events alone. |  |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. |  |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Pass an empty string to go back to the `notify` roles. |  |


```http request
POST https://cloud.appwrite.io/v1/monitors/http
```

** Create an HTTP monitor. It requests a URL on its own interval, following redirects, and opens an alert when the request fails or when its rules match the response, by default a status outside 2xx or the certificate of an HTTPS URL about to expire. The response body is discarded as it arrives. Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event when it opens and `.update` when a check passes again, for project webhooks, functions and realtime, and notifies the organization's members by email and in the console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | Monitor ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| url | string | URL to request, with an `http` or `https` scheme. |  |
| method | string | HTTP method to request the URL with: `GET`, `HEAD`, `POST`, `PUT`, `PATCH`, `DELETE` or `OPTIONS`. Defaults to `GET`. | GET |
| headers | object | HTTP headers to send, as an object of header names and values. Each name must be a valid HTTP header name. | {} |
| body | string | Request body to send. Max length: 16384 chars. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `statusCode` (HTTP status), `latency` (milliseconds the check took), `certificateDays` (whole days until the certificate expires), `certificateLifetime` (percent of the certificate's lifetime left). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on a status code outside 200 to 299, or on a certificate with fewer than 14 days and less than 25% of its lifetime left. | [] |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Defaults to 60, or to the shortest interval your plan allows when that is longer. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. | 10 |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. | 3600 |
| enabled | boolean | Set to false to create the monitor without checking it. | 1 |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Defaults to owners; pass an empty list to rely on the alert events alone. | [&quot;owner&quot;] |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. | warning |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Leave empty to notify the `notify` roles once. |  |


```http request
PATCH https://cloud.appwrite.io/v1/monitors/http/{monitorId}
```

** Update an HTTP monitor by its unique ID. Only the parameters passed change; the monitor's state, its last check and its open alert are kept. Passing `rules` replaces all of them. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| url | string | URL to request, with an `http` or `https` scheme. |  |
| method | string | HTTP method to request the URL with: `GET`, `HEAD`, `POST`, `PUT`, `PATCH`, `DELETE` or `OPTIONS`. |  |
| headers | object | HTTP headers to send, as an object of header names and values. Each name must be a valid HTTP header name. | {} |
| body | string | Request body to send. Max length: 16384 chars. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `statusCode` (HTTP status), `latency` (milliseconds the check took), `certificateDays` (whole days until the certificate expires), `certificateLifetime` (percent of the certificate's lifetime left). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on a status code outside 200 to 299, or on a certificate with fewer than 14 days and less than 25% of its lifetime left. Replaces the current rules; an empty list restores the defaults. |  |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. |  |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. |  |
| enabled | boolean | Whether the monitor is checked. |  |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Pass an empty list to rely on the alert events alone. |  |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. |  |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Pass an empty string to go back to the `notify` roles. |  |


```http request
POST https://cloud.appwrite.io/v1/monitors/smtp
```

** Create an SMTP monitor. It reads a mail server's greeting, sends `EHLO` and, as its TLS mode asks, upgrades with `STARTTLS` or speaks TLS from the start, on its own interval. It opens an alert when the server cannot be reached, refuses the session or fails the TLS handshake, or when its rules match. It never authenticates or sends mail. Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event when it opens and `.update` when a check passes again, for project webhooks, functions and realtime, and notifies the organization's members by email and in the console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | Monitor ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| host | string | Hostname or IP address of the mail server. |  |
| port | integer | Port to connect to, such as 25, 465 or 587. |  |
| tlsMode | string | TLS mode: `auto` (`implicit` on port 465, `starttls` on 587 and `none` otherwise), `none`, `starttls` (upgrade after the greeting, and fail when the server does not offer it) or `implicit` (TLS from the first byte). Defaults to `auto`. | auto |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `code` (SMTP reply code), `latency` (milliseconds the check took), `certificateDays` (whole days until the certificate expires), `certificateLifetime` (percent of the certificate's lifetime left). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on transport failures only. | [] |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Defaults to 60, or to the shortest interval your plan allows when that is longer. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. | 10 |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. | 3600 |
| enabled | boolean | Set to false to create the monitor without checking it. | 1 |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Defaults to owners; pass an empty list to rely on the alert events alone. | [&quot;owner&quot;] |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. | warning |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Leave empty to notify the `notify` roles once. |  |


```http request
PATCH https://cloud.appwrite.io/v1/monitors/smtp/{monitorId}
```

** Update an SMTP monitor by its unique ID. Only the parameters passed change; the monitor's state, its last check and its open alert are kept. Passing `rules` replaces all of them. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| host | string | Hostname or IP address of the mail server. |  |
| port | integer | Port to connect to, such as 25, 465 or 587. |  |
| tlsMode | string | TLS mode: `auto` (`implicit` on port 465, `starttls` on 587 and `none` otherwise), `none`, `starttls` (upgrade after the greeting, and fail when the server does not offer it) or `implicit` (TLS from the first byte). |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `code` (SMTP reply code), `latency` (milliseconds the check took), `certificateDays` (whole days until the certificate expires), `certificateLifetime` (percent of the certificate's lifetime left). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on transport failures only. Replaces the current rules; an empty list removes them. |  |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. |  |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. |  |
| enabled | boolean | Whether the monitor is checked. |  |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Pass an empty list to rely on the alert events alone. |  |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. |  |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Pass an empty string to go back to the `notify` roles. |  |


```http request
POST https://cloud.appwrite.io/v1/monitors/tcp
```

** Create a TCP monitor. It opens a connection to a host and port on its own interval and closes it at once, and opens an alert when the connection cannot be made, or when its rules match. Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event when it opens and `.update` when a check passes again, for project webhooks, functions and realtime, and notifies the organization's members by email and in the console. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | Monitor ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| host | string | Hostname or IP address to connect to. |  |
| port | integer | Port to connect to. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `latency` (milliseconds the check took). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on transport failures only. | [] |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Defaults to 60, or to the shortest interval your plan allows when that is longer. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. | 10 |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. | 3600 |
| enabled | boolean | Set to false to create the monitor without checking it. | 1 |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Defaults to owners; pass an empty list to rely on the alert events alone. | [&quot;owner&quot;] |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. | warning |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Leave empty to notify the `notify` roles once. |  |


```http request
PATCH https://cloud.appwrite.io/v1/monitors/tcp/{monitorId}
```

** Update a TCP monitor by its unique ID. Only the parameters passed change; the monitor's state, its last check and its open alert are kept. Passing `rules` replaces all of them. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| host | string | Hostname or IP address to connect to. |  |
| port | integer | Port to connect to. |  |
| rules | array | Rules that describe the failing state, as query strings generated with the Query class. The monitor fires when they match. Transport failures, such as timeouts, DNS failures, refused connections and denied targets, always fire. Variables: `latency` (milliseconds the check took). Operators: `equal`, `notEqual`, `lessThan`, `lessThanEqual`, `greaterThan`, `greaterThanEqual`, `between`, `notBetween`. Combine rules with `or` and `and`; top-level rules must all match. Without rules it fires on transport failures only. Replaces the current rules; an empty list removes them. |  |
| interval | integer | Seconds between two checks, between 1 and 2592000. The scheduler runs on a one second tick, so one second is the shortest interval. Reads back raised to your plan's minimum interval when the plan no longer allows it. |  |
| timeout | integer | Seconds a check may take before it fails, between 1 and 60, and no longer than the interval. |  |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. |  |
| enabled | boolean | Whether the monitor is checked. |  |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Pass an empty list to rely on the alert events alone. |  |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. |  |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Pass an empty string to go back to the `notify` roles. |  |


```http request
POST https://cloud.appwrite.io/v1/monitors/usage
```

** Create a usage monitor. It reads a usage metric of the project, or of one of its databases, buckets, functions or sites, on a schedule, and opens an alert when all its rules hold. Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event when it opens and `.update` when usage recovers, for project webhooks, functions and realtime, and notifies the confirmed members of the `notify` roles by email and in the console, or the steps of the escalation set by `escalationId`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | Monitor ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| rules | array | Rules that must all hold for the monitor to fire, as query strings generated with the Query class: one comparing a usage metric, named as the usage endpoints name it (such as `network.outbound` or `databases.operations.reads`), with a threshold in the metric's unit (bytes for storage and bandwidth, MB-seconds for GB-hours, a count otherwise), and optionally `equal` rules on `resourceType` and `resourceId` to watch one database, bucket, function or site instead of the whole project. |  |
| window | integer | Seconds a counter metric is summed over, between 60 and 2592000. Gauges compare their latest value. | 3600 |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. | 3600 |
| enabled | boolean | Set to false to create the monitor without evaluating it. | 1 |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Defaults to owners; pass an empty list to rely on the alert events alone. | [&quot;owner&quot;] |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. | warning |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Leave empty to notify the `notify` roles once. |  |


```http request
PATCH https://cloud.appwrite.io/v1/monitors/usage/{monitorId}
```

** Update a usage monitor by its unique ID. Only the parameters passed change; the monitor's state and its open alert are kept. Passing `rules` replaces all of them. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |
| name | string | Monitor name. Max length: 128 chars. |  |
| rules | array | Rules that must all hold for the monitor to fire, as query strings generated with the Query class: one comparing a usage metric, named as the usage endpoints name it (such as `network.outbound` or `databases.operations.reads`), with a threshold in the metric's unit (bytes for storage and bandwidth, MB-seconds for GB-hours, a count otherwise), and optionally `equal` rules on `resourceType` and `resourceId` to watch one database, bucket, function or site instead of the whole project. Replaces the current rules. |  |
| window | integer | Seconds a counter metric is summed over, between 60 and 2592000. Gauges compare their latest value. |  |
| cooldown | integer | Minimum seconds between two team notifications of this monitor firing, between 300 and 2592000. Events fire on every change between firing and resolved regardless. |  |
| enabled | boolean | Whether the monitor is evaluated. |  |
| notify | array | Organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. Each must be an organization role, such as `owner` or `developer`. Pass an empty list to rely on the alert events alone; pass null or omit to keep the current roles. |  |
| severity | string | How urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. Critical alerts may be delivered with higher urgency by the notification channels that support it, such as a push that rings through silent mode. Omit to keep the current one. |  |
| escalationId | string | ID of an escalation of the organization that notifies the team of this monitor's alerts step by step, until a member acknowledges the alert or it resolves. When set, `notify` is not used. Pass an empty string to go back to the `notify` roles; pass null or omit to keep the current one. |  |


```http request
GET https://cloud.appwrite.io/v1/monitors/{monitorId}
```

** Get a monitor by its unique ID, with its state as of its last evaluation. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/monitors/{monitorId}
```

** Delete a monitor by its unique ID. It stops being evaluated; an alert it is firing is resolved and kept with the rest of its alert history. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| monitorId | string | **Required** Monitor ID. |  |

