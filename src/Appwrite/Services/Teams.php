<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Teams extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List teams
     *
     * Get a list of all the teams in which the current user is a member. You can
     * use the parameters to filter your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function list(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/teams');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create team
     *
     * Create a new team. The user who creates the team will automatically be
     * assigned as the owner of the team. Only the users with the owner role can
     * invite new members, add new owners and delete or update the team.
     *
     * @param string $teamId
     * @param string $name
     * @param array $roles
     * @throws AppwriteException
     * @return array

     */
    public function create(string $teamId, string $name, array $roles = null): array
    {
        $apiPath = str_replace([], [], '/teams');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($teamId)) {
            $apiParams['teamId'] = $teamId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($roles)) {
            $apiParams['roles'] = $roles;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get team
     *
     * Get a team by its ID. All team members have read access for this resource.
     *
     * @param string $teamId
     * @throws AppwriteException
     * @return array

     */
    public function get(string $teamId): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update name
     *
     * Update the team's name by its unique ID.
     *
     * @param string $teamId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function updateName(string $teamId, string $name): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete team
     *
     * Delete a team using its ID. Only team members with the owner role can
     * delete the team.
     *
     * @param string $teamId
     * @throws AppwriteException
     * @return string

     */
    public function delete(string $teamId): string
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List team memberships
     *
     * Use this endpoint to list a team's members using the team's ID. All team
     * members have read access to this endpoint.
     *
     * @param string $teamId
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listMemberships(string $teamId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create team membership
     *
     * Invite a new member to join your team. Provide an ID for existing users, or
     * invite unregistered users using an email or phone number. If initiated from
     * a Client SDK, Appwrite will send an email or sms with a link to join the
     * team to the invited user, and an account will be created for them if one
     * doesn't exist. If initiated from a Server SDK, the new member will be added
     * automatically to the team.
     * 
     * You only need to provide one of a user ID, email, or phone number. Appwrite
     * will prioritize accepting the user ID > email > phone number if you provide
     * more than one of these parameters.
     * 
     * Use the `url` parameter to redirect the user from the invitation email to
     * your app. After the user is redirected, use the [Update Team Membership
     * Status](https://appwrite.io/docs/references/cloud/client-web/teams#updateMembershipStatus)
     * endpoint to allow the user to accept the invitation to the team. 
     * 
     * Please note that to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md)
     * Appwrite will accept the only redirect URLs under the domains you have
     * added as a platform on the Appwrite Console.
     * 
     *
     * @param string $teamId
     * @param array $roles
     * @param string $email
     * @param string $userId
     * @param string $phone
     * @param string $url
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createMembership(string $teamId, array $roles, string $email = null, string $userId = null, string $phone = null, string $url = null, string $name = null): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($roles)) {
            throw new AppwriteException('Missing required parameter: "roles"');
        }
        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($roles)) {
            $apiParams['roles'] = $roles;
        }

        if (!is_null($url)) {
            $apiParams['url'] = $url;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get team membership
     *
     * Get a team member by the membership unique id. All team members have read
     * access for this resource.
     *
     * @param string $teamId
     * @param string $membershipId
     * @throws AppwriteException
     * @return array

     */
    public function getMembership(string $teamId, string $membershipId): array
    {
        $apiPath = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update membership
     *
     * Modify the roles of a team member. Only team members with the owner role
     * have access to this endpoint. Learn more about [roles and
     * permissions](https://appwrite.io/docs/permissions).
     * 
     *
     * @param string $teamId
     * @param string $membershipId
     * @param array $roles
     * @throws AppwriteException
     * @return array

     */
    public function updateMembership(string $teamId, string $membershipId, array $roles): array
    {
        $apiPath = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }
        if (!isset($roles)) {
            throw new AppwriteException('Missing required parameter: "roles"');
        }
        if (!is_null($roles)) {
            $apiParams['roles'] = $roles;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete team membership
     *
     * This endpoint allows a user to leave a team or for a team owner to delete
     * the membership of any other team member. You can also use this endpoint to
     * delete a user membership even if it is not accepted.
     *
     * @param string $teamId
     * @param string $membershipId
     * @throws AppwriteException
     * @return string

     */
    public function deleteMembership(string $teamId, string $membershipId): string
    {
        $apiPath = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update team membership status
     *
     * Use this endpoint to allow a user to accept an invitation to join a team
     * after being redirected back to your app from the invitation email received
     * by the user.
     * 
     * If the request is successful, a session for the user is automatically
     * created.
     * 
     *
     * @param string $teamId
     * @param string $membershipId
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array

     */
    public function updateMembershipStatus(string $teamId, string $membershipId, string $userId, string $secret): array
    {
        $apiPath = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}/status');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($secret)) {
            throw new AppwriteException('Missing required parameter: "secret"');
        }
        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get team preferences
     *
     * Get the team's shared preferences by its unique ID. If a preference doesn't
     * need to be shared by all team members, prefer storing them in [user
     * preferences](https://appwrite.io/docs/references/cloud/client-web/account#getPrefs).
     *
     * @param string $teamId
     * @throws AppwriteException
     * @return array

     */
    public function getPrefs(string $teamId): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/prefs');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update preferences
     *
     * Update the team's preferences by its unique ID. The object you pass is
     * stored as is and replaces any previous value. The maximum allowed prefs
     * size is 64kB and throws an error if exceeded.
     *
     * @param string $teamId
     * @param array $prefs
     * @throws AppwriteException
     * @return array

     */
    public function updatePrefs(string $teamId, array $prefs): array
    {
        $apiPath = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/prefs');

        $apiParams = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($prefs)) {
            throw new AppwriteException('Missing required parameter: "prefs"');
        }
        if (!is_null($prefs)) {
            $apiParams['prefs'] = $prefs;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
