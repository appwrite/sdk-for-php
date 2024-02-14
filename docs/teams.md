# Teams Service

## List teams

```http request
GET https://HOSTNAME/v1/teams
```

** Get a list of all the teams in which the current user is a member. You can use the parameters to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, total | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create team

```http request
POST https://HOSTNAME/v1/teams
```

** Create a new team. The user who creates the team will automatically be assigned as the owner of the team. Only the users with the owner role can invite new members, add new owners and delete or update the team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | Team ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Team name. Max length: 128 chars. |  |
| roles | array | Array of strings. Use this param to set the roles in the team for the user who created it. The default role is **owner**. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Maximum of 100 roles are allowed, each 32 characters long. | [&quot;owner&quot;] |

## Get team

```http request
GET https://HOSTNAME/v1/teams/{teamId}
```

** Get a team by its ID. All team members have read access for this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |

## Update name

```http request
PUT https://HOSTNAME/v1/teams/{teamId}
```

** Update the team&#039;s name by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| name | string | New team name. Max length: 128 chars. |  |

## Delete team

```http request
DELETE https://HOSTNAME/v1/teams/{teamId}
```

** Delete a team using its ID. Only team members with the owner role can delete the team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |

## List team memberships

```http request
GET https://HOSTNAME/v1/teams/{teamId}/memberships
```

** Use this endpoint to list a team&#039;s members using the team&#039;s ID. All team members have read access to this endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, teamId, invited, joined, confirm | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create team membership

```http request
POST https://HOSTNAME/v1/teams/{teamId}/memberships
```

** Invite a new member to join your team. Provide an ID for existing users, or invite unregistered users using an email or phone number. If initiated from a Client SDK, Appwrite will send an email or sms with a link to join the team to the invited user, and an account will be created for them if one doesn&#039;t exist. If initiated from a Server SDK, the new member will be added automatically to the team.

You only need to provide one of a user ID, email, or phone number. Appwrite will prioritize accepting the user ID &gt; email &gt; phone number if you provide more than one of these parameters.

Use the `url` parameter to redirect the user from the invitation email to your app. After the user is redirected, use the [Update Team Membership Status](https://appwrite.io/docs/references/cloud/client-web/teams#updateMembershipStatus) endpoint to allow the user to accept the invitation to the team. 

Please note that to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md) Appwrite will accept the only redirect URLs under the domains you have added as a platform on the Appwrite Console.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| email | string | Email of the new team member. |  |
| userId | string | ID of the user to be added to a team. |  |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| roles | array | Array of strings. Use this param to set the user roles in the team. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Maximum of 100 roles are allowed, each 32 characters long. |  |
| url | string | URL to redirect the user back to your app from the invitation email.  Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| name | string | Name of the new team member. Max length: 128 chars. |  |

## Get team membership

```http request
GET https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** Get a team member by the membership unique id. All team members have read access for this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |

## Update membership

```http request
PATCH https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** Modify the roles of a team member. Only team members with the owner role have access to this endpoint. Learn more about [roles and permissions](https://appwrite.io/docs/permissions).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |
| roles | array | An array of strings. Use this param to set the user's roles in the team. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Maximum of 100 roles are allowed, each 32 characters long. |  |

## Delete team membership

```http request
DELETE https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** This endpoint allows a user to leave a team or for a team owner to delete the membership of any other team member. You can also use this endpoint to delete a user membership even if it is not accepted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |

## Update team membership status

```http request
PATCH https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}/status
```

** Use this endpoint to allow a user to accept an invitation to join a team after being redirected back to your app from the invitation email received by the user.

If the request is successful, a session for the user is automatically created.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |
| userId | string | User ID. |  |
| secret | string | Secret key. |  |

## Get team preferences

```http request
GET https://HOSTNAME/v1/teams/{teamId}/prefs
```

** Get the team&#039;s shared preferences by its unique ID. If a preference doesn&#039;t need to be shared by all team members, prefer storing them in [user preferences](https://appwrite.io/docs/references/cloud/client-web/account#getPrefs). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |

## Update preferences

```http request
PUT https://HOSTNAME/v1/teams/{teamId}/prefs
```

** Update the team&#039;s preferences by its unique ID. The object you pass is stored as is and replaces any previous value. The maximum allowed prefs size is 64kB and throws an error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| prefs | object | Prefs key-value JSON object. | {} |

