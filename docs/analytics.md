# Analytics Service


```http request
GET https://cloud.appwrite.io/v1/analytics/properties
```

** List analytics properties for the current project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, domain, enabled, type | [] |
| search | string | Search term to filter your list results. Matches the property ID, name and domain. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/analytics/properties
```

** Create a new analytics property to track a website or application. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | Unique ID. Choose a custom ID or generate a random ID with `ID.unique()`. Max length is 36 chars. |  |
| name | string | Human-readable name for this property. |  |
| domain | string | Primary domain to track (e.g. example.com). May be empty for mobile and agent properties. |  |
| enabled | boolean | Whether the property accepts events. Events sent to a disabled property are rejected as not found. | 1 |
| allowedOrigins | array | Allowed origins for tracking. Use ["*"] to allow all. | [&quot;*&quot;] |
| identifyUsers | boolean | Record the signed-in user's ID on events sent from a client session, so traffic can be broken down and counted by user. Off by default. |  |
| type | string | Kind of product this property tracks. Only changes which panels the dashboard shows; ingestion accepts the same events for every type. | web |


```http request
GET https://cloud.appwrite.io/v1/analytics/properties/{propertyId}
```

** Get an analytics property by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/analytics/properties/{propertyId}
```

** Update an analytics property. Only the attributes you pass are changed; omitted attributes keep their current value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| name | string | Human-readable name for this property. |  |
| domain | string | Primary domain to track (e.g. example.com). Pass an empty string to clear it. |  |
| enabled | boolean | Whether the property accepts events. Events sent to a disabled property are rejected as not found. |  |
| allowedOrigins | array | Allowed origins for tracking. Use ["*"] to allow all. On a property linked to a site, Appwrite manages this list: it is rewritten from the site's production domains whenever they change. |  |
| identifyUsers | boolean | Record the signed-in user's ID on events sent from a client session, so traffic can be broken down and counted by user. |  |
| type | string | Kind of product this property tracks. Only changes which panels the dashboard shows; stored events are kept. |  |


```http request
DELETE https://cloud.appwrite.io/v1/analytics/properties/{propertyId}
```

** Delete an analytics property along with every event and session collected for it. This cannot be undone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/annotations
```

** List the annotations of an analytics property. Filter on `date` to fetch the annotations inside a chart's time range. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: date | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/annotations
```

** Create an annotation that marks a point in time on an analytics property's charts. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| annotationId | string | Unique ID. Choose a custom ID or generate a random ID with `ID.unique()`. Max length is 36 chars. |  |
| date | string | Point in time the annotation marks, in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. |  |
| content | string | Annotation text. Max length: 512 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/annotations/{annotationId}
```

** Get an analytics annotation by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| annotationId | string | **Required** Annotation unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/annotations/{annotationId}
```

** Update an analytics annotation. Only the attributes you pass are changed; omitted attributes keep their current value. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| annotationId | string | **Required** Annotation unique ID. |  |
| date | string | Point in time the annotation marks, in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. |  |
| content | string | Annotation text. Max length: 512 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/annotations/{annotationId}
```

** Delete an analytics annotation. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| annotationId | string | **Required** Annotation unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/events
```

** Send a tracking event from a browser, native app, or server-side SDK. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property ID. |  |
| name | string | Event name. "pageview" and "screen_view" are counted as views, every other name is a custom event. |  |
| url | string | Full page URL or screen identifier. |  |
| domain | string | Hostname (e.g. example.com). |  |
| referrer | string | Referrer URL. |  |
| screenWidth | integer | Viewport width in CSS pixels. | 0 |
| sessionHash | string | Optional session hash (provided by SDK). |  |
| scrollDepth | integer | Scroll depth percentage 0-100. | 0 |
| engagementTime | integer | Engagement time in seconds, 0-4294967295. | 0 |
| props | array | Custom string properties as a flat key=value list (max 32 entries, alternating key,value). | [] |
| userId | string | Override user ID. Pass an opaque ID, not personal data such as an email. Requires API-key auth with analytics.write scope. |  |
| ip | string | Override IP address. Requires API-key auth with analytics.write scope. |  |
| userAgent | string | Override user agent. Requires API-key auth with analytics.write scope. |  |
| interactive | boolean | Whether this event is a visitor interaction that ends a bounce. Set false for telemetry such as heartbeats or background syncs. Defaults to true for custom events and false for the automatic engagement, scroll and app lifecycle events. Ignored for views. |  |


```http request
GET https://cloud.appwrite.io/v1/analytics/properties/{propertyId}/metrics
```

** Read analytics metrics (visitors, sessions, pageviews, events, bounceRate, …) for a property over a date range.

**Three response shapes**, chosen by `dimensions[]` and `interval`:
- Neither: one row aggregating the whole window, with `value` and `date` null. Only this shape carries `visits`, `bounceRate`, `visitDuration`, `viewsPerVisit`, `scrollDepth` and `engagementTime`.
- `dimensions[]`: one row per dimension value, ranked by visitors, with `value` set and `date` null.
- `interval`: one row per time bucket in chronological order, with `date` set and `value` null.

`pageviews` is carried by the flat aggregate and by `interval`, but not by a breakdown.

`userId` and `users` cover identified traffic only: events sent with an API key's `userId`, or from a signed-in session on a property with `identifyUsers` on. A `userId` breakdown leaves out anonymous events; returned values are the project's user IDs.

Custom event props: `dimensions[]=props` ranks the prop keys seen in the window, and adding `propKey` ranks the values of that one key. `queries[]` filters on a prop's value with the `props.<key>` attribute, e.g. `equal("props.plan", ["pro"])`.

Combining `dimensions[]` with `interval` is not supported yet. `queries[]` filters the underlying events using standard Utopia query syntax. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| propertyId | string | **Required** Analytics property unique ID. |  |
| queries | array | Up to 10 filter queries in Utopia syntax. Allowed attributes: country, region, city, browser, browserVersion, operatingSystem, operatingSystemVersion, device, screenSize, referrerSource, channel, utmSource, utmMedium, utmCampaign, utmContent, utmTerm, page, hostname, trafficType, botName, botCategory, userId, eventName, and `props.<key>` for a custom prop. page, userId, eventName and `props.<key>` are only accepted alongside `interval`, or with a breakdown on a dimension other than entryPage, exitPage. Allowed methods: equal, notEqual, contains, startsWith, endsWith. Example: `queries[]=equal("country", ["US"])`. | [] |
| interval | string | Time bucket size. Omit (null) for a flat aggregate over the whole window. Allowed: 1h, 1d, 1w, 1m. |  |
| dimensions | array | Dimension to break the metrics down by. One at most for now; the parameter is a list so that cap can be raised without a breaking change. Allowed: country, region, city, browser, browserVersion, operatingSystem, operatingSystemVersion, device, screenSize, referrerSource, channel, utmSource, utmMedium, utmCampaign, utmContent, utmTerm, page, hostname, entryPage, exitPage, trafficType, botName, botCategory, userId, eventName, props. | [] |
| propKey | string | Custom prop key whose values to rank, with `dimensions[]=props`. Omit to rank the prop keys themselves. |  |
| dateRange | string | Date range shorthand (e.g. 7d, 30d). Ignored for any bound you supply explicitly via startAt/endAt. | 30d |
| startAt | string | Explicit window start in ISO 8601. Defaults to endAt minus dateRange. |  |
| endAt | string | Explicit window end in ISO 8601. Defaults to the current time. |  |
| limit | integer | Maximum number of ranked values to return. | 100 |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |

