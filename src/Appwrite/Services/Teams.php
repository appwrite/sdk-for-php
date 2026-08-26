<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Teams extends Service
{
    /**
     * Get a list of all the teams in which the current user is a member. You can
     * use the parameters to filter your results.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\TeamList
    {
        $apiPath = str_replace(
            [],
            [],
            '/teams'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\TeamList::from($response);
    }

    /**
     * Create a new team. The user who creates the team will automatically be
     * assigned as the owner of the team. Only the users with the owner role can
     * invite new members, add new owners and delete or update the team.
     *
     * @throws AppwriteException
     */
    public function create(string $teamId, string $name, ?array $roles = null): \Appwrite\Models\Team
    {
        $apiPath = str_replace(
            [],
            [],
            '/teams'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['name'] = $name;

        if (!is_null($roles)) {
            $apiParams['roles'] = $roles;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Team::from($response);
    }

    /**
     * Get a team by its ID. All team members have read access for this resource.
     *
     * @throws AppwriteException
     */
    public function get(string $teamId): \Appwrite\Models\Team
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Team::from($response);
    }

    /**
     * Update the team&#039;s name by its unique ID.
     *
     * @throws AppwriteException
     */
    public function updateName(string $teamId, string $name): \Appwrite\Models\Team
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['name'] = $name;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Team::from($response);
    }

    /**
     * Delete a team using its ID. Only team members with the owner role can
     * delete the team.
     *
     * @throws AppwriteException
     */
    public function delete(string $teamId): string
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List app installations on a team. Any team member can read installations.
     *
     * @throws AppwriteException
     */
    public function listInstallations(string $teamId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AppInstallationList
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/installations'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AppInstallationList::from($response);
    }

    /**
     * Install an app on a team. When authenticated as a user, only team members
     * with the owner role can install apps. Requests using an API key or in admin
     * mode can install apps on any team. The installation is granted the scopes
     * the app currently requests.
     *
     * @throws AppwriteException
     */
    public function createInstallation(string $teamId, string $appId, ?string $authorizationDetails = null): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/installations'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['appId'] = $appId;

        if (!is_null($authorizationDetails)) {
            $apiParams['authorizationDetails'] = $authorizationDetails;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AppInstallation::from($response);
    }

    /**
     * Get an app installation on a team by its unique ID. Any team member can
     * read installations.
     *
     * @throws AppwriteException
     */
    public function getInstallation(string $teamId, string $installationId): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{teamId}', '{installationId}'],
            [$teamId, $installationId],
            '/teams/{teamId}/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['installationId'] = $installationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AppInstallation::from($response);
    }

    /**
     * Update an app installation on a team. Only team members with the owner role
     * can update installations. The installation&#039;s granted scopes are refreshed
     * to the scopes the app currently requests; previously issued installation
     * access tokens are revoked.
     *
     * @throws AppwriteException
     */
    public function updateInstallation(string $teamId, string $installationId, ?string $authorizationDetails = null): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{teamId}', '{installationId}'],
            [$teamId, $installationId],
            '/teams/{teamId}/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['installationId'] = $installationId;
        $apiParams['authorizationDetails'] = $authorizationDetails;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AppInstallation::from($response);
    }

    /**
     * Uninstall an app from a team by its installation ID. Only team members with
     * the owner role can remove installations. Previously issued installation
     * access tokens are revoked.
     *
     * @throws AppwriteException
     */
    public function deleteInstallation(string $teamId, string $installationId): string
    {
        $apiPath = str_replace(
            ['{teamId}', '{installationId}'],
            [$teamId, $installationId],
            '/teams/{teamId}/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['installationId'] = $installationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Use this endpoint to list a team&#039;s members using the team&#039;s ID. All team
     * members have read access to this endpoint. Hide sensitive attributes from
     * the response by toggling membership privacy in the Console.
     *
     * @throws AppwriteException
     */
    public function listMemberships(string $teamId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\MembershipList
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/memberships'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MembershipList::from($response);
    }

    /**
     * Invite a new member to join your team. Provide an ID for existing users, or
     * invite unregistered users using an email or phone number. If initiated from
     * a Client SDK, Appwrite will send an email or sms with a link to join the
     * team to the invited user, and an account will be created for them if one
     * doesn&#039;t exist. If initiated from a Server SDK, the new member will be added
     * automatically to the team.
     *
     * You only need to provide one of a user ID, email, or phone number. Appwrite
     * will prioritize accepting the user ID &gt; email &gt; phone number if you provide
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
     * @throws AppwriteException
     */
    public function createMembership(string $teamId, array $roles, ?string $email = null, ?string $userId = null, ?string $phone = null, ?string $url = null, ?string $name = null): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/memberships'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['roles'] = $roles;

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($url)) {
            $apiParams['url'] = $url;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Membership::from($response);
    }

    /**
     * Get a team member by the membership unique id. All team members have read
     * access for this resource. Hide sensitive attributes from the response by
     * toggling membership privacy in the Console.
     *
     * @throws AppwriteException
     */
    public function getMembership(string $teamId, string $membershipId): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{teamId}', '{membershipId}'],
            [$teamId, $membershipId],
            '/teams/{teamId}/memberships/{membershipId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['membershipId'] = $membershipId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Membership::from($response);
    }

    /**
     * Modify the roles of a team member. Only team members with the owner role
     * have access to this endpoint. Learn more about [roles and
     * permissions](https://appwrite.io/docs/permissions).
     *
     * @throws AppwriteException
     */
    public function updateMembership(string $teamId, string $membershipId, array $roles): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{teamId}', '{membershipId}'],
            [$teamId, $membershipId],
            '/teams/{teamId}/memberships/{membershipId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['membershipId'] = $membershipId;
        $apiParams['roles'] = $roles;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Membership::from($response);
    }

    /**
     * This endpoint allows a user to leave a team or for a team owner to delete
     * the membership of any other team member. You can also use this endpoint to
     * delete a user membership even if it is not accepted.
     *
     * @throws AppwriteException
     */
    public function deleteMembership(string $teamId, string $membershipId): string
    {
        $apiPath = str_replace(
            ['{teamId}', '{membershipId}'],
            [$teamId, $membershipId],
            '/teams/{teamId}/memberships/{membershipId}'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['membershipId'] = $membershipId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Use this endpoint to allow a user to accept an invitation to join a team
     * after being redirected back to your app from the invitation email received
     * by the user.
     *
     * If the request is successful, a session for the user is automatically
     * created.
     *
     * @throws AppwriteException
     */
    public function updateMembershipStatus(string $teamId, string $membershipId, string $userId, string $secret): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{teamId}', '{membershipId}'],
            [$teamId, $membershipId],
            '/teams/{teamId}/memberships/{membershipId}/status'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['membershipId'] = $membershipId;
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Membership::from($response);
    }

    /**
     * Get the team&#039;s shared preferences by its unique ID. If a preference doesn&#039;t
     * need to be shared by all team members, prefer storing them in [user
     * preferences](https://appwrite.io/docs/references/cloud/client-web/account#getPrefs).
     *
     * @throws AppwriteException
     */
    public function getPrefs(string $teamId): \Appwrite\Models\Preferences
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/prefs'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Preferences::from($response);
    }

    /**
     * Update the team&#039;s preferences by its unique ID. The object you pass is
     * stored as is and replaces any previous value. The maximum allowed prefs
     * size is 64kB and throws an error if exceeded.
     *
     * @throws AppwriteException
     */
    public function updatePrefs(string $teamId, array $prefs): \Appwrite\Models\Preferences
    {
        $apiPath = str_replace(
            ['{teamId}'],
            [$teamId],
            '/teams/{teamId}/prefs'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['prefs'] = $prefs;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Preferences::from($response);
    }
}
