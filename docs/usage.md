# Usage Service


```http request
GET https://cloud.appwrite.io/v1/usage/events
```

** Aggregate usage event metrics. `metric` is required.

**Two response shapes**:
- Omit `interval` for a flat top-N table — one row per dimension combination, no time axis. Useful for &quot;top 10 paths by bandwidth in the last 7 days&quot;.
- Pass `interval` (`1m`, `15m`, `30m`, `1h`, `1d`) for a time series — one row per (time bucket × dimension combination).

`dimensions[]` breaks each row down by one or more attributes (service, path, status, country, …). `resource` and `resourceId` filter the underlying events. `orderBy=value`+`orderDir=desc`+`limit=N` returns the top-N by aggregated value. When `startAt` is omitted, the default window adapts to `interval` (or 7d when interval is omitted). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| metric | string | **Required** Metric name (required). Example: executions, network.requests. |  |
| resource | string | Resource type filter (singular form). Common values: function, site, database, bucket, file, webhook, team, user, project. |  |
| resourceId | string | Resource id filter. |  |
| interval | string | Time interval size. Omit (null) for a flat aggregate over the whole window. Allowed: 1m, 15m, 30m, 1h, 1d. |  |
| dimensions | array | Break-down dimensions (max 10). Allowed: path, method, status, service, country, region, hostname, osName, clientType, clientName, deviceName, teamId, resourceId. | [] |
| startAt | string | Range start in ISO 8601. Defaults adapt to interval (7d for the no-interval aggregate). |  |
| endAt | string | Range end in ISO 8601. Defaults to the current time. |  |
| orderBy | string | Column to order by. Allowed: time, value. Default time when an interval is set; otherwise value. | time |
| orderDir | string | Sort direction: asc or desc. Default desc — paired with the default limit, returns the most recent / highest-value groups first. | desc |
| limit | integer | Maximum rows to return (1-5000). | 500 |
| offset | integer | Pagination offset (0-100000). | 0 |


```http request
GET https://cloud.appwrite.io/v1/usage/gauges
```

** Aggregate usage gauge snapshots. Gauges are point-in-time values (storage totals, resource counts, …); each group carries the latest snapshot in its interval via `argMax(value, time)`. `metric` is required.

**Two response shapes**:
- Omit `interval` for a flat top-N table — `argMax(value, time)` per dimension combination over the whole window, no time axis. Useful for &quot;top 10 resources by current storage&quot;.
- Pass `interval` (`1m`, `15m`, `30m`, `1h`, `1d`) for a time series — one snapshot per (time bucket × dimension combination).

`dimensions[]` breaks each row down further — only `resourceId` and `teamId` are supported on gauges. `resourceId` and `teamId` parameters filter the underlying rows. `orderBy=value`+`orderDir=desc`+`limit=N` returns the top-N. When `startAt` is omitted, the default window adapts to interval (or 7d when interval is omitted). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| metric | string | **Required** Metric name (required). Example: files.storage, deployments.storage. |  |
| resourceId | string | Resource id filter. |  |
| teamId | string | Team id filter. |  |
| interval | string | Time interval size. Omit (null) for a flat aggregate over the whole window. Allowed: 1m, 15m, 30m, 1h, 1d. |  |
| dimensions | array | Break-down dimensions. Allowed: resourceId, teamId. | [] |
| startAt | string | Range start in ISO 8601. Defaults to endAt - 7d. |  |
| endAt | string | Range end in ISO 8601. Defaults to the current time. |  |
| orderBy | string | Column to order by. Allowed: time, value. Default time. | time |
| orderDir | string | Sort direction: asc or desc. Default desc — paired with the default limit, this returns the most recent groups first. Pass asc for chronological charting. | desc |
| limit | integer | Maximum rows to return (1-5000). | 500 |
| offset | integer | Pagination offset (0-100000). | 0 |

