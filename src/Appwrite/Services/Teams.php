<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Teams extends Service
{
    /**
     * List Teams
     *
     * Get a list of all the teams in which the current user is a member. You can
     * use the parameters to filter your results.
     * 
     * In admin mode, this endpoint returns a list of all the teams in the current
     * project. [Learn more about different API modes](/docs/admin).
     *
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function list(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace([], [], '/teams');
        $params = [];

        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        $path   = str_replace([], [], '/teams');
        $params = [];

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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Team
     *
     * Update a team using its ID. Only members with the owner role can update the
     * team.
     *
     * @param string $teamId
     * @param string $name
     * @throws AppwriteException
     * @return array
     */
    public function update(string $teamId, string $name): array
    {
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');
        $params = [];

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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Team Memberships
     *
     * Use this endpoint to list a team's members using the team's ID. All team
     * members have read access to this endpoint.
     *
     * @param string $teamId
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function getMemberships(string $teamId, string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');
        $params = [];

        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Team Membership
     *
     * Invite a new member to join your team. If initiated from the client SDK, an
     * email with a link to join the team will be sent to the member's email
     * address and an account will be created for them should they not be signed
     * up already. If initiated from server-side SDKs, the new member will
     * automatically be added to the team.
     * 
     * Use the 'url' parameter to redirect the user from the invitation email back
     * to your app. When the user is redirected, use the [Update Team Membership
     * Status](/docs/client/teams#teamsUpdateMembershipStatus) endpoint to allow
     * the user to accept the invitation to the team. 
     * 
     * Please note that to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md)
     * the only valid redirect URL's are the once from domains you have set when
     * adding your platforms in the console interface.
     *
     * @param string $teamId
     * @param string $email
     * @param array $roles
     * @param string $url
     * @param string $name
     * @throws AppwriteException
     * @return array
     */
    public function createMembership(string $teamId, string $email, array $roles, string $url, string $name = null): array
    {
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }

        if (!isset($roles)) {
            throw new AppwriteException('Missing required parameter: "roles"');
        }

        if (!isset($url)) {
            throw new AppwriteException('Missing required parameter: "url"');
        }

        $path   = str_replace(['{teamId}'], [$teamId], '/teams/{teamId}/memberships');
        $params = [];

        if (!is_null($email)) {
            $params['email'] = $email;
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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');
        $params = [];

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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        if (!isset($roles)) {
            throw new AppwriteException('Missing required parameter: "roles"');
        }

        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');
        $params = [];

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
        if (!isset($teamId)) {
            throw new AppwriteException('Missing required parameter: "teamId"');
        }

        if (!isset($membershipId)) {
            throw new AppwriteException('Missing required parameter: "membershipId"');
        }

        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}');
        $params = [];

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

        $path   = str_replace(['{teamId}', '{membershipId}'], [$teamId, $membershipId], '/teams/{teamId}/memberships/{membershipId}/status');
        $params = [];

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
}
