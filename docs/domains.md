# Domains Service


```http request
GET https://cloud.appwrite.io/v1/domains
```

** List all domains registered for this project. This endpoint supports pagination. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on attributes such as domain name, teamInternalId, expiration, etc. | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/domains
```

** Create a new domain. Before creating a domain, you need to ensure that your DNS provider is properly configured. After creating the domain, you can use the verification endpoint to check if the domain is ready to be used. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | Team unique ID. |  |
| domain | string | Domain name (e.g. "example.com"). |  |


```http request
GET https://cloud.appwrite.io/v1/domains/price
```

** Get the registration price for a domain name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domain | string | **Required** Domain name to get price for. |  |
| periodYears | integer | Number of years to calculate the domain price for. Must be at least 1. | 1 |
| registrationType | string | Type of registration pricing to fetch. Allowed values: new, transfer, renewal, trade. | new |


```http request
GET https://cloud.appwrite.io/v1/domains/prices
```

** Check availability and get the requested registration price for one or more domain names. Availability is resolved for all domains in a single registrar lookup. Unavailable domains have a null price for new registrations, but can still be priced for renewal, transfer, or trade. Every priced domain also carries its renewal price for the same period, so a separate renewal lookup is not needed. A domain whose price could not be resolved, for example because its TLD is not supported, is returned with a null price. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domains | array | **Required** Domain names to check availability and price for. Maximum of 50 domains per request. |  |
| periodYears | integer | Number of years to calculate the domain price for. Must be at least 1. | 1 |
| registrationType | string | Type of registration pricing to fetch. Allowed values: new, transfer, renewal, trade. | new |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}
```

** Get a domain by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/domains/{domainId}
```

** Delete a domain by its unique ID. This endpoint can be used to delete a domain from your project.
Once deleted, the domain will no longer be available for use and all associated resources will be removed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/domains/{domainId}/nameservers
```

** Update the registrar nameservers for the given domain. When nameservers are not provided,
the domain will be updated to use Appwrite nameservers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| nameservers | array | Nameservers to set for the domain. Defaults to Appwrite nameservers when omitted. | [] |


```http request
PATCH https://cloud.appwrite.io/v1/domains/{domainId}/nameservers/verification
```

** Verify which NS records are used and update the domain accordingly. This will check the domain's
nameservers and update the domain's status based on whether the nameservers match the expected
Appwrite nameservers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/google-workspace
```

** List Google Workspace DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/google-workspace
```

** Add Google Workspace DNS records to the domain. This will create the required MX records 
for Google Workspace email hosting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/icloud
```

** List iCloud DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/icloud
```

** Add iCloud DNS records to the domain. This will create the required MX and SPF records
for using iCloud email services with your domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/mailgun
```

** List Mailgun DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/mailgun
```

** Add Mailgun DNS records to the domain. This endpoint will create the required DNS records 
for Mailgun in the specified domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/outlook
```

** List Outlook DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/outlook
```

** Add Outlook DNS records to the domain. This will create the required MX records
for setting up Outlook email hosting for your domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/proton-mail
```

** List ProtonMail DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/proton-mail
```

** Add ProtonMail DNS records to the domain. This will create the required MX records
for using ProtonMail with your custom domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/presets/zoho
```

** List Zoho DNS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/presets/zoho
```

** Add Zoho Mail DNS records to the domain. This will create the required MX records
for setting up Zoho Mail on your domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/records
```

** List DNS records for a given domain. You can use this endpoint to list all the DNS records
associated with your domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. You may filter on attributes such as type, name, value, etc. Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/a
```

** Create a new A record for the given domain. A records are used to point a domain name 
to an IPv4 address. The record value should be a valid IPv4 address. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | IPv4 address for this A record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment explaining what this record is for. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/a/{recordId}
```

** Update an existing A record for the given domain. This endpoint allows you to modify 
the properties of an A record including its name (subdomain), IPv4 address, TTL, 
and optional comment. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | IPv4 address for this A record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment explaining what this record is for. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/aaaa
```

** Create a new AAAA record for the given domain. This endpoint allows you to add a new IPv6 DNS record 
to your domain. The record will be used to point a hostname to an IPv6 address. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | IPv6 address for this AAAA record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment explaining what this record is for. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/aaaa/{recordId}
```

** Update an existing AAAA record for the given domain. This endpoint allows you to modify
the properties of an existing AAAA record, including its name (subdomain), IPv6 address,
TTL, and optional comment. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | IPv6 address for this AAAA record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/alias
```

** Create a new ALIAS record for the given domain. This record type can be used to point your domain 
to another domain name that will serve as an alias. This is particularly useful when you want to 
map your domain to a target domain that may change its IP address. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name. |  |
| value | string | Target domain for this ALIAS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/alias/{recordId}
```

** Update an existing ALIAS record for the specified domain. This endpoint allows you to modify
the properties of an existing ALIAS record including its name, target domain, TTL, and comment.
    
The ALIAS record type is similar to a CNAME record but can be used at the zone apex (root domain).
It provides a way to map one domain name to another. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name. |  |
| value | string | Target domain for this ALIAS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/caa
```

** Create a new CAA record for the given domain. CAA records are used to specify which 
Certificate Authorities (CAs) are allowed to issue SSL/TLS certificates for your domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name. |  |
| value | string | CAA value (e.g. issuer domain). |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/caa/{recordId}
```

** Update an existing CAA record for the given domain. A CAA (Certification Authority Authorization) 
record is used to specify which certificate authorities (CAs) are authorized to issue certificates 
for a domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name. |  |
| value | string | CAA value (e.g. issuer domain). |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/cname
```

** Create a new CNAME record for the given domain.
    
A CNAME record maps a subdomain to another domain name, allowing you to create aliases 
for your domain. For example, you can create a CNAME record to point 'blog.example.com' 
to 'example.wordpress.com'. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Canonical target for this CNAME record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/cname/{recordId}
```

** Update an existing CNAME record for the given domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Canonical target for this CNAME record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/https
```

** Create a new HTTPS record for the given domain. This record is used to configure HTTPS 
settings for your domain, enabling secure communication over SSL/TLS. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Target for the HTTPS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/https/{recordId}
```

** Update an existing HTTPS record for the given domain. This endpoint allows you to modify 
the properties of an HTTPS record associated with your domain, including the name (subdomain), 
target value, TTL, and optional comment. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Target for the HTTPS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/mx
```

** Create a new MX record for the given domain. MX records are used to define the mail servers responsible 
for accepting email messages for the domain. Multiple MX records can be created with different priorities.
The priority parameter determines the order in which mail servers are used, with lower values indicating 
higher priority. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Mail server domain for this MX record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| priority | integer | MX priority. Lower values are tried first. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/mx/{recordId}
```

** Update an existing MX record for the given domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Mail server domain for this MX record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| priority | integer | MX priority. Lower values are tried first. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/ns
```

** Create a new NS record for the given domain. NS records specify the nameservers that are used 
to resolve the domain name to IP addresses. Each domain can have multiple NS records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Nameserver target for this NS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/ns/{recordId}
```

** Update an existing NS record for the given domain. This endpoint allows you to modify 
the properties of an NS (nameserver) record associated with your domain. You can update 
the record name (subdomain), target nameserver value, TTL, and add or modify comments 
for better record management. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain). |  |
| value | string | Nameserver target for this NS record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/srv
```

** Create a new SRV record for the given domain. SRV records are used to define the location 
of servers for specific services. For example, they can be used to specify which server 
handles a specific service like SIP or XMPP for the domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (service name). |  |
| value | string | Target hostname for this SRV record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| priority | integer | Record priority. Lower values are tried first. |  |
| weight | integer | Record weight, used to share load between targets of equal priority. |  |
| port | integer | Port number for the service. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/srv/{recordId}
```

** Update an existing SRV record for the given domain.
    
Required parameters:
- domainId: Domain unique ID
- recordId: DNS record unique ID
- name: Record name (service name)
- value: Target hostname for this SRV record
- ttl: Time to live, in seconds
- priority: Record priority
- weight: Record weight
- port: Port number for the service
    
Optional parameters:
- comment: A comment for this record **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (service name). |  |
| value | string | Target hostname for this SRV record. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| priority | integer | Record priority. Lower values are tried first. |  |
| weight | integer | Record weight, used to share load between targets of equal priority. |  |
| port | integer | Port number for the service. |  |
| comment | string | A comment for this record. |  |


```http request
POST https://cloud.appwrite.io/v1/domains/{domainId}/records/txt
```

** Create a new TXT record for the given domain. TXT records can be used 
to provide additional information about your domain, such as domain 
verification records, SPF records, or DKIM records. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| name | string | Record name (subdomain) for the TXT record. |  |
| value | string | TXT record value. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/records/txt/{recordId}
```

** Update an existing TXT record for the given domain.
    
Update the TXT record details for a specific domain by providing the domain ID,
record ID, and the new record configuration including name, value, TTL, and an optional comment. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |
| name | string | Record name (subdomain) for the TXT record. |  |
| value | string | TXT record value. |  |
| ttl | integer | Time to live, in seconds. Must be between 1 and 2147483647. |  |
| comment | string | A comment for this record. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/records/{recordId}
```

** Get a single DNS record for a given domain by record ID.
    
This endpoint allows you to retrieve a specific DNS record associated with a domain
using its unique identifier. The record contains information about the DNS configuration
such as type, value, and TTL settings. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/domains/{domainId}/records/{recordId}
```

** Delete a DNS record for the given domain. This endpoint allows you to delete an existing DNS record 
from a specific domain. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| recordId | string | **Required** DNS record unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/domains/{domainId}/team
```

** Update the team ID for a specific domain. The caller must administer the current
team and be an owner of the destination team.

Updating the team ID will transfer ownership and access control of the domain
and all its DNS records to the new team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| teamId | string | New team unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/transfers/status
```

** Retrieve the current transfer status for a domain. Returns the status, an optional reason, and a timestamp of the last status change. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/domains/{domainId}/zone
```

** Retrieve the DNS zone file for the given domain. This endpoint will return the DNS
zone file in a standardized format that can be used to configure DNS servers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/domains/{domainId}/zone
```

** Update the DNS zone for the given domain using the provided zone file content.
All parsed records are imported and then the main domain document is returned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| domainId | string | **Required** Domain unique ID. |  |
| content | string | DNS zone file content as a string. |  |

