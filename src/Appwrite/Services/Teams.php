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
     * List Teams
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
        $path   = str_replace([], [], '/teams');

        $params = [];
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Team
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
        $path   = str_replace([], [], '/teams');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($teamId)) {
            $params['teamId'] = $teamId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($roles)) {
            $params['roles'] = $roles;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Team
     *
     * Get a team by its ID. All team members have read access for this resource.
     *
     * @param string $teamId
     * @throws AppwriteException
     * @return array

     */
    public function get(string $teamId): array
    {
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Name
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
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Team
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
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Team Memberships
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
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Team Membership
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
     * Status](/docs/client/teams#teamsUpdateMembershipStatus) endpoint to allow
     * the user to accept the invitation to the team. 
     * 
     * Please note that to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md)
     * Appwrite will accept the only redirect URLs under the domains you have
     * added as a platform on the Appwrite Console.
     * 
     *
     * @param string $teamId
     * @param array $roles
     * @param string $url
     * @param string $email
     * @param string $userId
     * @param string $phone
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createMembership(string $teamId, array $roles, string $url, string $email = null, string $userId = null, string $phone = null, string $name = null): array
    {
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($roles)) {
            throw new AppwriteException('Missing required parameter: "roles"');
        }
        if (!isset($url)) {
            throw new AppwriteException('Missing required parameter: "url"');
        }
        if (!is_null($email)) {
            $params['email'] = $email;
        }

        if (!is_null($userId)) {
            $params['userId'] = $userId;
        }

        if (!is_null($phone)) {
            $params['phone'] = $phone;
        }

        if (!is_null($roles)) {
            $params['roles'] = $roles;
        }

        if (!is_null($url)) {
            $params['url'] = $url;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Team Membership
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
        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Membership Roles
     *
     * Modify the roles of a team member. Only team members with the owner role
     * have access to this endpoint. Learn more about [roles and
     * permissions](/docs/permissions).
     *
     * @param string $teamId
     * @param string $membershipId
     * @param array $roles
     * @throws AppwriteException
     * @return array

     */
    public function updateMembershipRoles(string $teamId, string $membershipId, array $roles): array
    {
        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $params = [];
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
            $params['roles'] = $roles;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Team Membership
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
        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Team Membership Status
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
        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}/status');

        $params = [];
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
            $params['userId'] = $userId;
        }

        if (!is_null($secret)) {
            $params['secret'] = $secret;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Team Preferences
     *
     * Get the team's shared preferences by its unique ID. If a preference doesn't
     * need to be shared by all team members, prefer storing them in [user
     * preferences](/docs/client/account#accountGetPrefs).
     *
     * @param string $teamId
     * @throws AppwriteException
     * @return array

     */
    public function getPrefs(string $teamId): array
    {
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/prefs');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Preferences
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
        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/prefs');

        $params = [];
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }
        if (!isset($prefs)) {
            throw new AppwriteException('Missing required parameter: "prefs"');
        }
        if (!is_null($prefs)) {
            $params['prefs'] = $prefs;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
