# Messaging Service

## List messages

```http request
GET https://HOSTNAME/v1/messaging/messages
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: scheduledAt, deliveredAt, deliveredTotal, status, description, providerType | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create an email.

```http request
POST https://HOSTNAME/v1/messaging/messages/email
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| subject | string | Email Subject. |  |
| content | string | Email Content. |  |
| topics | array | List of Topic IDs. | [] |
| users | array | List of User IDs. | [] |
| targets | array | List of Targets IDs. | [] |
| cc | array | Array of target IDs to be added as CC. | [] |
| bcc | array | Array of target IDs to be added as BCC. | [] |
| status | string | Message Status. Value must be one of: draft, scheduled, processing. | draft |
| html | boolean | Is content of type HTML |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update an email.

```http request
PATCH https://HOSTNAME/v1/messaging/messages/email/{messageId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |
| targets | array | List of Targets IDs. |  |
| subject | string | Email Subject. |  |
| content | string | Email Content. |  |
| status | string | Message Status. Value must be one of: draft, scheduled, processing. | draft |
| html | boolean | Is content of type HTML |  |
| cc | array | Array of target IDs to be added as CC. |  |
| bcc | array | Array of target IDs to be added as BCC. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Create a push notification.

```http request
POST https://HOSTNAME/v1/messaging/messages/push
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| title | string | Title for push notification. |  |
| body | string | Body for push notification. |  |
| topics | array | List of Topic IDs. | [] |
| users | array | List of User IDs. | [] |
| targets | array | List of Targets IDs. | [] |
| data | object | Additional Data for push notification. | {} |
| action | string | Action for push notification. |  |
| icon | string | Icon for push notification. Available only for Android and Web Platform. |  |
| sound | string | Sound for push notification. Available only for Android and IOS Platform. |  |
| color | string | Color for push notification. Available only for Android Platform. |  |
| tag | string | Tag for push notification. Available only for Android Platform. |  |
| badge | string | Badge for push notification. Available only for IOS Platform. |  |
| status | string | Message Status. Value must be one of: draft, scheduled, processing. | draft |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update a push notification.

```http request
PATCH https://HOSTNAME/v1/messaging/messages/push/{messageId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |
| targets | array | List of Targets IDs. |  |
| title | string | Title for push notification. |  |
| body | string | Body for push notification. |  |
| data | object | Additional Data for push notification. | {} |
| action | string | Action for push notification. |  |
| icon | string | Icon for push notification. Available only for Android and Web platforms. |  |
| sound | string | Sound for push notification. Available only for Android and iOS platforms. |  |
| color | string | Color for push notification. Available only for Android platforms. |  |
| tag | string | Tag for push notification. Available only for Android platforms. |  |
| badge | integer | Badge for push notification. Available only for iOS platforms. |  |
| status | string | Message Status. Value must be either draft, cancelled, or processing. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Create an SMS.

```http request
POST https://HOSTNAME/v1/messaging/messages/sms
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| content | string | SMS Content. |  |
| topics | array | List of Topic IDs. | [] |
| users | array | List of User IDs. | [] |
| targets | array | List of Targets IDs. | [] |
| status | string | Message Status. Value must be one of: draft, scheduled, processing. | draft |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update an SMS.

```http request
PATCH https://HOSTNAME/v1/messaging/messages/sms/{messageId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |
| targets | array | List of Targets IDs. |  |
| content | string | Email Content. |  |
| status | string | Message Status. Value must be either draft or cancelled or processing. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Get a message

```http request
GET https://HOSTNAME/v1/messaging/messages/{messageId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |

## Delete a message

```http request
DELETE https://HOSTNAME/v1/messaging/messages/{messageId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |

## List message logs

```http request
GET https://HOSTNAME/v1/messaging/messages/{messageId}/logs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List message targets

```http request
GET https://HOSTNAME/v1/messaging/messages/{messageId}/targets
```

** List the targets associated with a message as set via the targets attribute. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, providerId, identifier, providerType | [] |

## List providers

```http request
GET https://HOSTNAME/v1/messaging/providers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create APNS provider

```http request
POST https://HOSTNAME/v1/messaging/providers/apns
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| authKey | string | APNS authentication key. |  |
| authKeyId | string | APNS authentication key ID. |  |
| teamId | string | APNS team ID. |  |
| bundleId | string | APNS bundle ID. |  |
| enabled | boolean | Set as enabled. |  |

## Update APNS provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/apns/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| authKey | string | APNS authentication key. |  |
| authKeyId | string | APNS authentication key ID. |  |
| teamId | string | APNS team ID. |  |
| bundleId | string | APNS bundle ID. |  |

## Create FCM provider

```http request
POST https://HOSTNAME/v1/messaging/providers/fcm
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| serviceAccountJSON | object | FCM service account JSON. | {} |
| enabled | boolean | Set as enabled. |  |

## Update FCM provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/fcm/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| serviceAccountJSON | object | FCM service account JSON. | {} |

## Create Mailgun provider

```http request
POST https://HOSTNAME/v1/messaging/providers/mailgun
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| apiKey | string | Mailgun API Key. |  |
| domain | string | Mailgun Domain. |  |
| isEuRegion | boolean | Set as EU region. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. Reply to name must have reply to email as well. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. Reply to email must have reply to name as well. |  |
| enabled | boolean | Set as enabled. |  |

## Update Mailgun provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/mailgun/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| apiKey | string | Mailgun API Key. |  |
| domain | string | Mailgun Domain. |  |
| isEuRegion | boolean | Set as EU region. |  |
| enabled | boolean | Set as enabled. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |

## Create Msg91 provider

```http request
POST https://HOSTNAME/v1/messaging/providers/msg91
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| senderId | string | Msg91 Sender ID. |  |
| authKey | string | Msg91 Auth Key. |  |
| enabled | boolean | Set as enabled. |  |

## Update Msg91 provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/msg91/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| senderId | string | Msg91 Sender ID. |  |
| authKey | string | Msg91 Auth Key. |  |
| from | string | Sender number. |  |

## Create Sendgrid provider

```http request
POST https://HOSTNAME/v1/messaging/providers/sendgrid
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| apiKey | string | Sendgrid API key. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |
| enabled | boolean | Set as enabled. |  |

## Update Sendgrid provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/sendgrid/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| apiKey | string | Sendgrid API key. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the Reply To field for the mail. Default value is Sender Name. |  |
| replyToEmail | string | Email set in the Reply To field for the mail. Default value is Sender Email. |  |

## Create SMTP provider

```http request
POST https://HOSTNAME/v1/messaging/providers/smtp
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| host | string | SMTP hosts. Either a single hostname or multiple semicolon-delimited hostnames. You can also specify a different port for each host by using this format: [hostname:port] (e.g. "smtp1.example.com:25;smtp2.example.com"). You can also specify encryption type, for example: (e.g. "tls://smtp1.example.com:587;ssl://smtp2.example.com:465"). Hosts will be tried in order. |  |
| port | integer | The default SMTP server port. | 587 |
| username | string | Authentication username. |  |
| password | string | Authentication password. |  |
| encryption | string | Encryption type. Can be omitted, 'ssl', or 'tls' |  |
| autoTLS | boolean | Enable SMTP AutoTLS feature. | 1 |
| mailer | string | The value to use for the X-Mailer header. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |
| enabled | boolean | Set as enabled. |  |

## Update SMTP provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/smtp/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| host | string | SMTP hosts. Either a single hostname or multiple semicolon-delimited hostnames. You can also specify a different port for each host by using this format: [hostname:port] (e.g. "smtp1.example.com:25;smtp2.example.com"). You can also specify encryption type, for example: (e.g. "tls://smtp1.example.com:587;ssl://smtp2.example.com:465"). Hosts will be tried in order. |  |
| port | integer | SMTP port. |  |
| username | string | Authentication username. |  |
| password | string | Authentication password. |  |
| encryption | string | Encryption type. Can be 'ssl' or 'tls' |  |
| autoTLS | boolean | Enable SMTP AutoTLS feature. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the Reply To field for the mail. Default value is Sender Name. |  |
| replyToEmail | string | Email set in the Reply To field for the mail. Default value is Sender Email. |  |
| enabled | boolean | Set as enabled. |  |

## Create Telesign provider

```http request
POST https://HOSTNAME/v1/messaging/providers/telesign
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| username | string | Telesign username. |  |
| password | string | Telesign password. |  |
| enabled | boolean | Set as enabled. |  |

## Update Telesign provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/telesign/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| username | string | Telesign username. |  |
| password | string | Telesign password. |  |
| from | string | Sender number. |  |

## Create Textmagic provider

```http request
POST https://HOSTNAME/v1/messaging/providers/textmagic
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| username | string | Textmagic username. |  |
| apiKey | string | Textmagic apiKey. |  |
| enabled | boolean | Set as enabled. |  |

## Update Textmagic provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/textmagic/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| username | string | Textmagic username. |  |
| apiKey | string | Textmagic apiKey. |  |
| from | string | Sender number. |  |

## Create Twilio provider

```http request
POST https://HOSTNAME/v1/messaging/providers/twilio
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| accountSid | string | Twilio account secret ID. |  |
| authToken | string | Twilio authentication token. |  |
| enabled | boolean | Set as enabled. |  |

## Update Twilio provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/twilio/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| accountSid | string | Twilio account secret ID. |  |
| authToken | string | Twilio authentication token. |  |
| from | string | Sender number. |  |

## Create Vonage provider

```http request
POST https://HOSTNAME/v1/messaging/providers/vonage
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| apiKey | string | Vonage API key. |  |
| apiSecret | string | Vonage API secret. |  |
| enabled | boolean | Set as enabled. |  |

## Update Vonage provider

```http request
PATCH https://HOSTNAME/v1/messaging/providers/vonage/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| apiKey | string | Vonage API key. |  |
| apiSecret | string | Vonage API secret. |  |
| from | string | Sender number. |  |

## Get provider

```http request
GET https://HOSTNAME/v1/messaging/providers/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |

## Delete provider

```http request
DELETE https://HOSTNAME/v1/messaging/providers/{providerId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |

## List provider logs

```http request
GET https://HOSTNAME/v1/messaging/providers/{providerId}/logs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List subscriber logs

```http request
GET https://HOSTNAME/v1/messaging/subscribers/{subscriberId}/logs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| subscriberId | string | **Required** Subscriber ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List topics.

```http request
GET https://HOSTNAME/v1/messaging/topics
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, description, total | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create a topic.

```http request
POST https://HOSTNAME/v1/messaging/topics
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | Topic ID. Choose a custom Topic ID or a new Topic ID. |  |
| name | string | Topic Name. |  |

## Get a topic.

```http request
GET https://HOSTNAME/v1/messaging/topics/{topicId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |

## Update a topic.

```http request
PATCH https://HOSTNAME/v1/messaging/topics/{topicId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| name | string | Topic Name. |  |

## Delete a topic.

```http request
DELETE https://HOSTNAME/v1/messaging/topics/{topicId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |

## List topic logs

```http request
GET https://HOSTNAME/v1/messaging/topics/{topicId}/logs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List subscribers.

```http request
GET https://HOSTNAME/v1/messaging/topics/{topicId}/subscribers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create a subscriber.

```http request
POST https://HOSTNAME/v1/messaging/topics/{topicId}/subscribers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID to subscribe to. |  |
| subscriberId | string | Subscriber ID. Choose a custom Subscriber ID or a new Subscriber ID. |  |
| targetId | string | Target ID. The target ID to link to the specified Topic ID. |  |

## Get a subscriber.

```http request
GET https://HOSTNAME/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |

## Delete a subscriber.

```http request
DELETE https://HOSTNAME/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |

