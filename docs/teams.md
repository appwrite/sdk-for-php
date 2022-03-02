# Teams Service

## List Teams

```http request
GET https://HOSTNAME/v1/teams
```

** Get a list of all the teams in which the current user is a member. You can use the parameters to filter your results.

In admin mode, this endpoint returns a list of all the teams in the current project. [Learn more about different API modes](/docs/admin). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of teams to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the team used as the starting point for the query, excluding the team itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Team

```http request
POST https://HOSTNAME/v1/teams
```

** Create a new team. The user who creates the team will automatically be assigned as the owner of the team. Only the users with the owner role can invite new members, add new owners and delete or update the team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | Team ID. Choose your own unique ID or pass the string &quot;unique()&quot; to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| name | string | Team name. Max length: 128 chars. |  |
| roles | array | Array of strings. Use this param to set the roles in the team for the user who created it. The default role is **owner**. A role can be any string. Learn more about [roles and permissions](/docs/permissions). Max length for each role is 32 chars. | [&quot;owner&quot;] |

## Get Team

```http request
GET https://HOSTNAME/v1/teams/{teamId}
```

** Get a team by its ID. All team members have read access for this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |

## Update Team

```http request
PUT https://HOSTNAME/v1/teams/{teamId}
```

** Update a team using its ID. Only members with the owner role can update the team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| name | string | New team name. Max length: 128 chars. |  |

## Delete Team

```http request
DELETE https://HOSTNAME/v1/teams/{teamId}
```

** Delete a team using its ID. Only team members with the owner role can delete the team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |

## Get Team Memberships

```http request
GET https://HOSTNAME/v1/teams/{teamId}/memberships
```

** Use this endpoint to list a team&#039;s members using the team&#039;s ID. All team members have read access to this endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of memberships to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the membership used as the starting point for the query, excluding the membership itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create Team Membership

```http request
POST https://HOSTNAME/v1/teams/{teamId}/memberships
```

** Invite a new member to join your team. If initiated from the client SDK, an email with a link to join the team will be sent to the member&#039;s email address and an account will be created for them should they not be signed up already. If initiated from server-side SDKs, the new member will automatically be added to the team.

Use the &#039;url&#039; parameter to redirect the user from the invitation email back to your app. When the user is redirected, use the [Update Team Membership Status](/docs/client/teams#teamsUpdateMembershipStatus) endpoint to allow the user to accept the invitation to the team. 

Please note that to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md) the only valid redirect URL&#039;s are the once from domains you have set when adding your platforms in the console interface. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| email | string | Email of the new team member. |  |
| roles | array | Array of strings. Use this param to set the user roles in the team. A role can be any string. Learn more about [roles and permissions](/docs/permissions). Max length for each role is 32 chars. |  |
| url | string | URL to redirect the user back to your app from the invitation email.  Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| name | string | Name of the new team member. Max length: 128 chars. |  |

## Get Team Membership

```http request
GET https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** Get a team member by the membership unique id. All team members have read access for this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |

## Update Membership Roles

```http request
PATCH https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** Modify the roles of a team member. Only team members with the owner role have access to this endpoint. Learn more about [roles and permissions](/docs/permissions). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |
| roles | array | An array of strings. Use this param to set the user&#039;s roles in the team. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Max length for each role is 32 chars. |  |

## Delete Team Membership

```http request
DELETE https://HOSTNAME/v1/teams/{teamId}/memberships/{membershipId}
```

** This endpoint allows a user to leave a team or for a team owner to delete the membership of any other team member. You can also use this endpoint to delete a user membership even if it is not accepted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| teamId | string | **Required** Team ID. |  |
| membershipId | string | **Required** Membership ID. |  |

## Update Team Membership Status

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

