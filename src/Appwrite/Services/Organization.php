<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\Region;

class Organization extends Service
{
    /**
     * Get the current organization.
     *
     * @throws AppwriteException
     */
    public function get(): \Appwrite\Models\Organization
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization'
        );

        $apiParams = [];

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

        return \Appwrite\Models\Organization::from($response);
    }

    /**
     * Update the current organization&#039;s name.
     *
     * @throws AppwriteException
     */
    public function update(string $name): \Appwrite\Models\Organization
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization'
        );

        $apiParams = [];
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

        return \Appwrite\Models\Organization::from($response);
    }

    /**
     * Delete the current organization. All projects that belong to the
     * organization are deleted as well.
     *
     * @throws AppwriteException
     */
    public function delete(): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization'
        );

        $apiParams = [];

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
     * List app installations on the organization. Any organization member can
     * read installations.
     *
     * @throws AppwriteException
     */
    public function listInstallations(?array $queries = null, ?bool $total = null): \Appwrite\Models\AppInstallationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/installations'
        );

        $apiParams = [];

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
     * Install an app on the organization. Only organization members with the
     * owner role can install apps. The installation is granted the scopes the app
     * currently requests.
     *
     * @throws AppwriteException
     */
    public function createInstallation(string $appId, ?string $authorizationDetails = null): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/installations'
        );

        $apiParams = [];
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
     * Get an app installation on the organization by its unique ID. Any
     * organization member can read installations.
     *
     * @throws AppwriteException
     */
    public function getInstallation(string $installationId): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/organization/installations/{installationId}'
        );

        $apiParams = [];
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
     * Update an app installation on the organization. Only organization members
     * with the owner role can update installations. The installation&#039;s granted
     * scopes are refreshed to the scopes the app currently requests; previously
     * issued installation access tokens are revoked.
     *
     * @throws AppwriteException
     */
    public function updateInstallation(string $installationId, ?string $authorizationDetails = null): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/organization/installations/{installationId}'
        );

        $apiParams = [];
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
     * Uninstall an app from the organization by its installation ID. Only
     * organization members with the owner role can remove installations.
     * Previously issued installation access tokens are revoked.
     *
     * @throws AppwriteException
     */
    public function deleteInstallation(string $installationId): string
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/organization/installations/{installationId}'
        );

        $apiParams = [];
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
     * Get a list of all API keys from the current organization.
     *
     * @throws AppwriteException
     */
    public function listKeys(?array $queries = null, ?bool $total = null): \Appwrite\Models\KeyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/keys'
        );

        $apiParams = [];

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

        return \Appwrite\Models\KeyList::from($response);
    }

    /**
     * Create a new organization API key.
     *
     * @throws AppwriteException
     */
    public function createKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/keys'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

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

        return \Appwrite\Models\Key::from($response);
    }

    /**
     * Get a key by its unique ID. This endpoint returns details about a specific
     * API key in your organization including its scopes.
     *
     * @throws AppwriteException
     */
    public function getKey(string $keyId): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/organization/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

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

        return \Appwrite\Models\Key::from($response);
    }

    /**
     * Update a key by its unique ID. Use this endpoint to update the name,
     * scopes, or expiration time of an API key.
     *
     * @throws AppwriteException
     */
    public function updateKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/organization/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

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

        return \Appwrite\Models\Key::from($response);
    }

    /**
     * Delete a key by its unique ID. Once deleted, the key can no longer be used
     * to authenticate API calls.
     *
     * @throws AppwriteException
     */
    public function deleteKey(string $keyId): string
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/organization/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

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
     * Get a list of all memberships from the current organization.
     *
     * @throws AppwriteException
     */
    public function listMemberships(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\MembershipList
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/memberships'
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

        return \Appwrite\Models\MembershipList::from($response);
    }

    /**
     * Invite a new member to join the current organization. An email with a link
     * to join the organization will be sent to the new member&#039;s email address. If
     * member doesn&#039;t exist in the project it will be automatically created.
     *
     * @throws AppwriteException
     */
    public function createMembership(array $roles, ?string $email = null, ?string $userId = null, ?string $phone = null, ?string $url = null, ?string $name = null): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/memberships'
        );

        $apiParams = [];
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
     * Get a membership from the current organization by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getMembership(string $membershipId): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{membershipId}'],
            [$membershipId],
            '/organization/memberships/{membershipId}'
        );

        $apiParams = [];
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
     * Modify the roles of a member in the current organization.
     *
     * @throws AppwriteException
     */
    public function updateMembership(string $membershipId, array $roles): \Appwrite\Models\Membership
    {
        $apiPath = str_replace(
            ['{membershipId}'],
            [$membershipId],
            '/organization/memberships/{membershipId}'
        );

        $apiParams = [];
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
     * Remove a member from the current organization. The member is removed
     * whether they accepted the invitation or not; a pending invitation is
     * revoked.
     *
     * @throws AppwriteException
     */
    public function deleteMembership(string $membershipId): string
    {
        $apiPath = str_replace(
            ['{membershipId}'],
            [$membershipId],
            '/organization/memberships/{membershipId}'
        );

        $apiParams = [];
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
     * Get a list of all projects. You can use the query params to filter your
     * results.
     *
     * @throws AppwriteException
     */
    public function listProjects(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\ProjectList
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/projects'
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

        return \Appwrite\Models\ProjectList::from($response);
    }

    /**
     * Create a new project.
     *
     * @throws AppwriteException
     */
    public function createProject(string $projectId, string $name, ?Region $region = null): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/organization/projects'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;

        if (!is_null($region)) {
            $apiParams['region'] = $region;
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

        return \Appwrite\Models\Project::from($response);
    }

    /**
     * Get a project.
     *
     * @throws AppwriteException
     */
    public function getProject(string $projectId): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/organization/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Project::from($response);
    }

    /**
     * Update a project by its unique ID.
     *
     * @throws AppwriteException
     */
    public function updateProject(string $projectId, string $name): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/organization/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;

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

        return \Appwrite\Models\Project::from($response);
    }

    /**
     * Delete a project by its unique ID.
     *
     * @throws AppwriteException
     */
    public function deleteProject(string $projectId): string
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/organization/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

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
}
