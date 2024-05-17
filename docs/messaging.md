# Messaging Service

## List messages

```http request
GET https://cloud.appwrite.io/v1/messaging/messages
```

** Get a list of all messages from the current Appwrite project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: scheduledAt, deliveredAt, deliveredTotal, status, description, providerType | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create email

```http request
POST https://cloud.appwrite.io/v1/messaging/messages/email
```

** Create a new email message. **

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
| attachments | array | Array of compound ID strings of bucket IDs and file IDs to be attached to the email. They should be formatted as <BUCKET_ID>:<FILE_ID>. | [] |
| draft | boolean | Is message a draft |  |
| html | boolean | Is content of type HTML |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update email

```http request
PATCH https://cloud.appwrite.io/v1/messaging/messages/email/{messageId}
```

** Update an email message by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |
| targets | array | List of Targets IDs. |  |
| subject | string | Email Subject. |  |
| content | string | Email Content. |  |
| draft | boolean | Is message a draft |  |
| html | boolean | Is content of type HTML |  |
| cc | array | Array of target IDs to be added as CC. |  |
| bcc | array | Array of target IDs to be added as BCC. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |
| attachments | array | Array of compound ID strings of bucket IDs and file IDs to be attached to the email. They should be formatted as <BUCKET_ID>:<FILE_ID>. |  |

## Create push notification

```http request
POST https://cloud.appwrite.io/v1/messaging/messages/push
```

** Create a new push notification. **

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
| image | string | Image for push notification. Must be a compound bucket ID to file ID of a jpeg, png, or bmp image in Appwrite Storage. It should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| icon | string | Icon for push notification. Available only for Android and Web Platform. |  |
| sound | string | Sound for push notification. Available only for Android and IOS Platform. |  |
| color | string | Color for push notification. Available only for Android Platform. |  |
| tag | string | Tag for push notification. Available only for Android Platform. |  |
| badge | string | Badge for push notification. Available only for IOS Platform. |  |
| draft | boolean | Is message a draft |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update push notification

```http request
PATCH https://cloud.appwrite.io/v1/messaging/messages/push/{messageId}
```

** Update a push notification by its unique ID.
 **

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
| image | string | Image for push notification. Must be a compound bucket ID to file ID of a jpeg, png, or bmp image in Appwrite Storage. It should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| icon | string | Icon for push notification. Available only for Android and Web platforms. |  |
| sound | string | Sound for push notification. Available only for Android and iOS platforms. |  |
| color | string | Color for push notification. Available only for Android platforms. |  |
| tag | string | Tag for push notification. Available only for Android platforms. |  |
| badge | integer | Badge for push notification. Available only for iOS platforms. |  |
| draft | boolean | Is message a draft |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Create SMS

```http request
POST https://cloud.appwrite.io/v1/messaging/messages/sms
```

** Create a new SMS message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| content | string | SMS Content. |  |
| topics | array | List of Topic IDs. | [] |
| users | array | List of User IDs. | [] |
| targets | array | List of Targets IDs. | [] |
| draft | boolean | Is message a draft |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Update SMS

```http request
PATCH https://cloud.appwrite.io/v1/messaging/messages/sms/{messageId}
```

** Update an email message by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |
| targets | array | List of Targets IDs. |  |
| content | string | Email Content. |  |
| draft | boolean | Is message a draft |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |

## Get message

```http request
GET https://cloud.appwrite.io/v1/messaging/messages/{messageId}
```

** Get a message by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |

## Delete message

```http request
DELETE https://cloud.appwrite.io/v1/messaging/messages/{messageId}
```

** Delete a message. If the message is not a draft or scheduled, but has been sent, this will not recall the message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |

## List message logs

```http request
GET https://cloud.appwrite.io/v1/messaging/messages/{messageId}/logs
```

** Get the message activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List message targets

```http request
GET https://cloud.appwrite.io/v1/messaging/messages/{messageId}/targets
```

** Get a list of the targets associated with a message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, providerId, identifier, providerType | [] |

## List providers

```http request
GET https://cloud.appwrite.io/v1/messaging/providers
```

** Get a list of all providers from the current Appwrite project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create APNS provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/apns
```

** Create a new Apple Push Notification service provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| authKey | string | APNS authentication key. |  |
| authKeyId | string | APNS authentication key ID. |  |
| teamId | string | APNS team ID. |  |
| bundleId | string | APNS bundle ID. |  |
| sandbox | boolean | Use APNS sandbox environment. |  |
| enabled | boolean | Set as enabled. |  |

## Update APNS provider

```http request
PATCH https://cloud.appwrite.io/v1/messaging/providers/apns/{providerId}
```

** Update a Apple Push Notification service provider by its unique ID. **

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
| sandbox | boolean | Use APNS sandbox environment. |  |

## Create FCM provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/fcm
```

** Create a new Firebase Cloud Messaging provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| serviceAccountJSON | object | FCM service account JSON. | {} |
| enabled | boolean | Set as enabled. |  |

## Update FCM provider

```http request
PATCH https://cloud.appwrite.io/v1/messaging/providers/fcm/{providerId}
```

** Update a Firebase Cloud Messaging provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| serviceAccountJSON | object | FCM service account JSON. | {} |

## Create Mailgun provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/mailgun
```

** Create a new Mailgun provider. **

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
PATCH https://cloud.appwrite.io/v1/messaging/providers/mailgun/{providerId}
```

** Update a Mailgun provider by its unique ID. **

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
POST https://cloud.appwrite.io/v1/messaging/providers/msg91
```

** Create a new MSG91 provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| templateId | string | Msg91 template ID |  |
| senderId | string | Msg91 sender ID. |  |
| authKey | string | Msg91 auth key. |  |
| enabled | boolean | Set as enabled. |  |

## Update Msg91 provider

```http request
PATCH https://cloud.appwrite.io/v1/messaging/providers/msg91/{providerId}
```

** Update a MSG91 provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| templateId | string | Msg91 template ID. |  |
| senderId | string | Msg91 sender ID. |  |
| authKey | string | Msg91 auth key. |  |

## Create Sendgrid provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/sendgrid
```

** Create a new Sendgrid provider. **

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
PATCH https://cloud.appwrite.io/v1/messaging/providers/sendgrid/{providerId}
```

** Update a Sendgrid provider by its unique ID. **

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
POST https://cloud.appwrite.io/v1/messaging/providers/smtp
```

** Create a new SMTP provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| host | string | SMTP hosts. Either a single hostname or multiple semicolon-delimited hostnames. You can also specify a different port for each host such as `smtp1.example.com:25;smtp2.example.com`. You can also specify encryption type, for example: `tls://smtp1.example.com:587;ssl://smtp2.example.com:465"`. Hosts will be tried in order. |  |
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
PATCH https://cloud.appwrite.io/v1/messaging/providers/smtp/{providerId}
```

** Update a SMTP provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| host | string | SMTP hosts. Either a single hostname or multiple semicolon-delimited hostnames. You can also specify a different port for each host such as `smtp1.example.com:25;smtp2.example.com`. You can also specify encryption type, for example: `tls://smtp1.example.com:587;ssl://smtp2.example.com:465"`. Hosts will be tried in order. |  |
| port | integer | SMTP port. |  |
| username | string | Authentication username. |  |
| password | string | Authentication password. |  |
| encryption | string | Encryption type. Can be 'ssl' or 'tls' |  |
| autoTLS | boolean | Enable SMTP AutoTLS feature. |  |
| mailer | string | The value to use for the X-Mailer header. |  |
| fromName | string | Sender Name. |  |
| fromEmail | string | Sender email address. |  |
| replyToName | string | Name set in the Reply To field for the mail. Default value is Sender Name. |  |
| replyToEmail | string | Email set in the Reply To field for the mail. Default value is Sender Email. |  |
| enabled | boolean | Set as enabled. |  |

## Create Telesign provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/telesign
```

** Create a new Telesign provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Provider name. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| customerId | string | Telesign customer ID. |  |
| apiKey | string | Telesign API key. |  |
| enabled | boolean | Set as enabled. |  |

## Update Telesign provider

```http request
PATCH https://cloud.appwrite.io/v1/messaging/providers/telesign/{providerId}
```

** Update a Telesign provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| name | string | Provider name. |  |
| enabled | boolean | Set as enabled. |  |
| customerId | string | Telesign customer ID. |  |
| apiKey | string | Telesign API key. |  |
| from | string | Sender number. |  |

## Create Textmagic provider

```http request
POST https://cloud.appwrite.io/v1/messaging/providers/textmagic
```

** Create a new Textmagic provider. **

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
PATCH https://cloud.appwrite.io/v1/messaging/providers/textmagic/{providerId}
```

** Update a Textmagic provider by its unique ID. **

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
POST https://cloud.appwrite.io/v1/messaging/providers/twilio
```

** Create a new Twilio provider. **

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
PATCH https://cloud.appwrite.io/v1/messaging/providers/twilio/{providerId}
```

** Update a Twilio provider by its unique ID. **

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
POST https://cloud.appwrite.io/v1/messaging/providers/vonage
```

** Create a new Vonage provider. **

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
PATCH https://cloud.appwrite.io/v1/messaging/providers/vonage/{providerId}
```

** Update a Vonage provider by its unique ID. **

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
GET https://cloud.appwrite.io/v1/messaging/providers/{providerId}
```

** Get a provider by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |

## Delete provider

```http request
DELETE https://cloud.appwrite.io/v1/messaging/providers/{providerId}
```

** Delete a provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |

## List provider logs

```http request
GET https://cloud.appwrite.io/v1/messaging/providers/{providerId}/logs
```

** Get the provider activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List subscriber logs

```http request
GET https://cloud.appwrite.io/v1/messaging/subscribers/{subscriberId}/logs
```

** Get the subscriber activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| subscriberId | string | **Required** Subscriber ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List topics

```http request
GET https://cloud.appwrite.io/v1/messaging/topics
```

** Get a list of all topics from the current Appwrite project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, description, emailTotal, smsTotal, pushTotal | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create topic

```http request
POST https://cloud.appwrite.io/v1/messaging/topics
```

** Create a new topic. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | Topic ID. Choose a custom Topic ID or a new Topic ID. |  |
| name | string | Topic Name. |  |
| subscribe | array | An array of role strings with subscribe permission. By default all users are granted with any subscribe permission. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. | [&quot;users&quot;] |

## Get topic

```http request
GET https://cloud.appwrite.io/v1/messaging/topics/{topicId}
```

** Get a topic by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |

## Update topic

```http request
PATCH https://cloud.appwrite.io/v1/messaging/topics/{topicId}
```

** Update a topic by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| name | string | Topic Name. |  |
| subscribe | array | An array of role strings with subscribe permission. By default all users are granted with any subscribe permission. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. |  |

## Delete topic

```http request
DELETE https://cloud.appwrite.io/v1/messaging/topics/{topicId}
```

** Delete a topic by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |

## List topic logs

```http request
GET https://cloud.appwrite.io/v1/messaging/topics/{topicId}/logs
```

** Get the topic activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List subscribers

```http request
GET https://cloud.appwrite.io/v1/messaging/topics/{topicId}/subscribers
```

** Get a list of all subscribers from the current Appwrite project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create subscriber

```http request
POST https://cloud.appwrite.io/v1/messaging/topics/{topicId}/subscribers
```

** Create a new subscriber. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID to subscribe to. |  |
| subscriberId | string | Subscriber ID. Choose a custom Subscriber ID or a new Subscriber ID. |  |
| targetId | string | Target ID. The target ID to link to the specified Topic ID. |  |

## Get subscriber

```http request
GET https://cloud.appwrite.io/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

** Get a subscriber by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |

## Delete subscriber

```http request
DELETE https://cloud.appwrite.io/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

** Delete a subscriber by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |

