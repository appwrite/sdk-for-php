# Usage Service


```http request
GET https://cloud.appwrite.io/v1/usage/events
```

** Query usage event metrics from the usage database. Returns individual event rows with full metadata. Pass Query objects as JSON strings to filter, paginate, and order results. Supported query methods: equal, greaterThanEqual, lessThanEqual, orderAsc, orderDesc, limit, offset. Supported filter attributes: metric, path, method, status, resource, resourceId, country, userAgent, time (these match the underlying column names — note that the response surfaces `resource` as `resourceType` and `country` as `countryCode`). When no time filter is supplied the endpoint defaults to the last 7 days. Default `limit(100)` is applied if none is given; user-supplied limits are capped at 500. The `total` field is capped at 5000 to keep counts predictable — pass `total=false` to skip the count entirely. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings as JSON. Supported: equal("metric", [...]), equal("path", [...]), equal("method", [...]), equal("status", [...]), equal("resource", [...]), equal("resourceId", [...]), equal("country", [...]), equal("userAgent", [...]), greaterThanEqual("time", "..."), lessThanEqual("time", "..."), orderAsc("time"), orderDesc("time"), limit(N), offset(N). | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/usage/gauges
```

** Query usage gauge metrics (point-in-time resource snapshots) from the usage database. Returns individual gauge snapshots with metric, value, and timestamp. Pass Query objects as JSON strings to filter, paginate, and order results. Supported query methods: equal, greaterThanEqual, lessThanEqual, orderAsc, orderDesc, limit, offset. Supported filter attributes: metric, time. Use `orderDesc(&quot;time&quot;), limit(1)` to fetch the most recent snapshot. When no time filter is supplied the endpoint defaults to the last 7 days. Default `limit(100)` is applied if none is given; user-supplied limits are capped at 500. The `total` field is capped at 5000 to keep counts predictable — pass `total=false` to skip the count entirely. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings as JSON. Supported: equal("metric", [...]), greaterThanEqual("time", "..."), lessThanEqual("time", "..."), orderAsc("time"), orderDesc("time"), limit(N), offset(N). | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |

