<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Apps extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * List applications.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\AppsList
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\AppsList
    {
        $apiPath = str_replace(
            [],
            [],
            '/apps'
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

        return \Appwrite\Models\AppsList::from($response);

    }

    /**
     * Create a new application.
     *
     * @param string $appId
     * @param string $name
     * @param array $redirectUris
     * @param ?string $description
     * @param ?string $clientUri
     * @param ?string $logoUri
     * @param ?string $privacyPolicyUrl
     * @param ?string $termsUrl
     * @param ?array $contacts
     * @param ?string $tagline
     * @param ?array $tags
     * @param ?array $images
     * @param ?string $supportUrl
     * @param ?string $dataDeletionUrl
     * @param ?array $postLogoutRedirectUris
     * @param ?bool $enabled
     * @param ?string $type
     * @param ?bool $deviceFlow
     * @param ?string $teamId
     * @throws AppwriteException
     * @return \Appwrite\Models\App
     */
    public function create(string $appId, string $name, array $redirectUris, ?string $description = null, ?string $clientUri = null, ?string $logoUri = null, ?string $privacyPolicyUrl = null, ?string $termsUrl = null, ?array $contacts = null, ?string $tagline = null, ?array $tags = null, ?array $images = null, ?string $supportUrl = null, ?string $dataDeletionUrl = null, ?array $postLogoutRedirectUris = null, ?bool $enabled = null, ?string $type = null, ?bool $deviceFlow = null, ?string $teamId = null): \Appwrite\Models\App
    {
        $apiPath = str_replace(
            [],
            [],
            '/apps'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['name'] = $name;
        $apiParams['redirectUris'] = $redirectUris;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($clientUri)) {
            $apiParams['clientUri'] = $clientUri;
        }

        if (!is_null($logoUri)) {
            $apiParams['logoUri'] = $logoUri;
        }

        if (!is_null($privacyPolicyUrl)) {
            $apiParams['privacyPolicyUrl'] = $privacyPolicyUrl;
        }

        if (!is_null($termsUrl)) {
            $apiParams['termsUrl'] = $termsUrl;
        }

        if (!is_null($contacts)) {
            $apiParams['contacts'] = $contacts;
        }

        if (!is_null($tagline)) {
            $apiParams['tagline'] = $tagline;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }

        if (!is_null($images)) {
            $apiParams['images'] = $images;
        }

        if (!is_null($supportUrl)) {
            $apiParams['supportUrl'] = $supportUrl;
        }

        if (!is_null($dataDeletionUrl)) {
            $apiParams['dataDeletionUrl'] = $dataDeletionUrl;
        }

        if (!is_null($postLogoutRedirectUris)) {
            $apiParams['postLogoutRedirectUris'] = $postLogoutRedirectUris;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($deviceFlow)) {
            $apiParams['deviceFlow'] = $deviceFlow;
        }

        if (!is_null($teamId)) {
            $apiParams['teamId'] = $teamId;
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

        return \Appwrite\Models\App::from($response);

    }

    /**
     * List scopes an application can request when installed on a team.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\AppScopeList
     */
    public function listInstallationScopes(): \Appwrite\Models\AppScopeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/apps/scopes/installations'
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

        return \Appwrite\Models\AppScopeList::from($response);

    }

    /**
     * List scopes an application can request during the OAuth2 flow.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\AppScopeList
     */
    public function listOAuth2Scopes(): \Appwrite\Models\AppScopeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/apps/scopes/oauth2'
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

        return \Appwrite\Models\AppScopeList::from($response);

    }

    /**
     * Get an application by its unique ID.
     *
     * @param string $appId
     * @throws AppwriteException
     * @return \Appwrite\Models\App
     */
    public function get(string $appId): \Appwrite\Models\App
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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

        return \Appwrite\Models\App::from($response);

    }

    /**
     * Update an application by its unique ID.
     *
     * @param string $appId
     * @param string $name
     * @param ?string $description
     * @param ?string $clientUri
     * @param ?string $logoUri
     * @param ?string $privacyPolicyUrl
     * @param ?string $termsUrl
     * @param ?array $contacts
     * @param ?string $tagline
     * @param ?array $tags
     * @param ?array $images
     * @param ?string $supportUrl
     * @param ?string $dataDeletionUrl
     * @param ?bool $enabled
     * @param ?array $redirectUris
     * @param ?array $postLogoutRedirectUris
     * @param ?string $type
     * @param ?bool $deviceFlow
     * @param ?array $installationScopes
     * @param ?string $installationRedirectUrl
     * @throws AppwriteException
     * @return \Appwrite\Models\App
     */
    public function update(string $appId, string $name, ?string $description = null, ?string $clientUri = null, ?string $logoUri = null, ?string $privacyPolicyUrl = null, ?string $termsUrl = null, ?array $contacts = null, ?string $tagline = null, ?array $tags = null, ?array $images = null, ?string $supportUrl = null, ?string $dataDeletionUrl = null, ?bool $enabled = null, ?array $redirectUris = null, ?array $postLogoutRedirectUris = null, ?string $type = null, ?bool $deviceFlow = null, ?array $installationScopes = null, ?string $installationRedirectUrl = null): \Appwrite\Models\App
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['name'] = $name;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($clientUri)) {
            $apiParams['clientUri'] = $clientUri;
        }

        if (!is_null($logoUri)) {
            $apiParams['logoUri'] = $logoUri;
        }

        if (!is_null($privacyPolicyUrl)) {
            $apiParams['privacyPolicyUrl'] = $privacyPolicyUrl;
        }

        if (!is_null($termsUrl)) {
            $apiParams['termsUrl'] = $termsUrl;
        }

        if (!is_null($contacts)) {
            $apiParams['contacts'] = $contacts;
        }

        if (!is_null($tagline)) {
            $apiParams['tagline'] = $tagline;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }

        if (!is_null($images)) {
            $apiParams['images'] = $images;
        }

        if (!is_null($supportUrl)) {
            $apiParams['supportUrl'] = $supportUrl;
        }

        if (!is_null($dataDeletionUrl)) {
            $apiParams['dataDeletionUrl'] = $dataDeletionUrl;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($redirectUris)) {
            $apiParams['redirectUris'] = $redirectUris;
        }

        if (!is_null($postLogoutRedirectUris)) {
            $apiParams['postLogoutRedirectUris'] = $postLogoutRedirectUris;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($deviceFlow)) {
            $apiParams['deviceFlow'] = $deviceFlow;
        }

        if (!is_null($installationScopes)) {
            $apiParams['installationScopes'] = $installationScopes;
        }

        if (!is_null($installationRedirectUrl)) {
            $apiParams['installationRedirectUrl'] = $installationRedirectUrl;
        }

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

        return \Appwrite\Models\App::from($response);

    }

    /**
     * Delete an application by its unique ID.
     *
     * @param string $appId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $appId): string
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * List installations of an application. Requires an app key sent in the
     * `X-Appwrite-Key` header alongside the `X-Appwrite-App` header, or a caller
     * with update access to the app.
     *
     * @param string $appId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\AppInstallationList
     */
    public function listInstallations(string $appId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AppInstallationList
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/installations'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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
     * Get an installation of an application by its unique ID. Requires an app key
     * sent in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header,
     * or a caller with update access to the app.
     *
     * @param string $appId
     * @param string $installationId
     * @throws AppwriteException
     * @return \Appwrite\Models\AppInstallation
     */
    public function getInstallation(string $appId, string $installationId): \Appwrite\Models\AppInstallation
    {
        $apiPath = str_replace(
            ['{appId}', '{installationId}'],
            [$appId, $installationId],
            '/apps/{appId}/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
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
     * Delete an installation of an application by its unique ID. Requires a
     * caller with update access to the app. Previously issued installation access
     * tokens are revoked.
     *
     * @param string $appId
     * @param string $installationId
     * @throws AppwriteException
     * @return string
     */
    public function deleteInstallation(string $appId, string $installationId): string
    {
        $apiPath = str_replace(
            ['{appId}', '{installationId}'],
            [$appId, $installationId],
            '/apps/{appId}/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['installationId'] = $installationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Create a token for an installation of an application. Requires an app key
     * sent in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header,
     * or a caller with update access to the app. The returned token carries the
     * scopes and authorization details granted to the installation, and can be
     * used as an `Authorization: Bearer` header everywhere OAuth2 access tokens
     * are accepted. Multiple tokens can be active for the same installation at
     * once; each token stays valid until it expires or the installation is
     * updated or deleted.
     *
     * @param string $appId
     * @param string $installationId
     * @throws AppwriteException
     * @return \Appwrite\Models\Oauth2Token
     */
    public function createInstallationToken(string $appId, string $installationId): \Appwrite\Models\Oauth2Token
    {
        $apiPath = str_replace(
            ['{appId}', '{installationId}'],
            [$appId, $installationId],
            '/apps/{appId}/installations/{installationId}/tokens'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['installationId'] = $installationId;

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

        return \Appwrite\Models\Oauth2Token::from($response);

    }

    /**
     * List app keys for an application.
     *
     * @param string $appId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\AppKeyList
     */
    public function listKeys(string $appId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AppKeyList
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/keys'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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

        return \Appwrite\Models\AppKeyList::from($response);

    }

    /**
     * Create a new app key for an application. App keys carry no scopes; send one
     * in the `X-Appwrite-Key` header alongside the `X-Appwrite-App` header to
     * list the application's installations and create installation access tokens.
     *
     * @param string $appId
     * @throws AppwriteException
     * @return \Appwrite\Models\AppKey
     */
    public function createKey(string $appId): \Appwrite\Models\AppKey
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/keys'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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

        return \Appwrite\Models\AppKey::from($response);

    }

    /**
     * Get an app key by its unique ID.
     *
     * @param string $appId
     * @param string $keyId
     * @throws AppwriteException
     * @return \Appwrite\Models\AppKey
     */
    public function getKey(string $appId, string $keyId): \Appwrite\Models\AppKey
    {
        $apiPath = str_replace(
            ['{appId}', '{keyId}'],
            [$appId, $keyId],
            '/apps/{appId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
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

        return \Appwrite\Models\AppKey::from($response);

    }

    /**
     * Delete an app key by its unique ID.
     *
     * @param string $appId
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteKey(string $appId, string $keyId): string
    {
        $apiPath = str_replace(
            ['{appId}', '{keyId}'],
            [$appId, $keyId],
            '/apps/{appId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the labels of an application. Labels are read-only for clients; only
     * a server SDK using a project API key can set them. Replaces the previous
     * labels.
     *
     * @param string $appId
     * @param array $labels
     * @throws AppwriteException
     * @return \Appwrite\Models\App
     */
    public function updateLabels(string $appId, array $labels): \Appwrite\Models\App
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/labels'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['labels'] = $labels;

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

        return \Appwrite\Models\App::from($response);

    }

    /**
     * List client secrets for an application.
     *
     * @param string $appId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\AppSecretList
     */
    public function listSecrets(string $appId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AppSecretList
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/secrets'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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

        return \Appwrite\Models\AppSecretList::from($response);

    }

    /**
     * Create a new client secret for an application.
     *
     * @param string $appId
     * @throws AppwriteException
     * @return \Appwrite\Models\AppSecretPlaintext
     */
    public function createSecret(string $appId): \Appwrite\Models\AppSecretPlaintext
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/secrets'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

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

        return \Appwrite\Models\AppSecretPlaintext::from($response);

    }

    /**
     * Get an application client secret by its unique ID.
     *
     * @param string $appId
     * @param string $secretId
     * @throws AppwriteException
     * @return \Appwrite\Models\AppSecret
     */
    public function getSecret(string $appId, string $secretId): \Appwrite\Models\AppSecret
    {
        $apiPath = str_replace(
            ['{appId}', '{secretId}'],
            [$appId, $secretId],
            '/apps/{appId}/secrets/{secretId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['secretId'] = $secretId;

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

        return \Appwrite\Models\AppSecret::from($response);

    }

    /**
     * Delete an application client secret by its unique ID.
     *
     * @param string $appId
     * @param string $secretId
     * @throws AppwriteException
     * @return string
     */
    public function deleteSecret(string $appId, string $secretId): string
    {
        $apiPath = str_replace(
            ['{appId}', '{secretId}'],
            [$appId, $secretId],
            '/apps/{appId}/secrets/{secretId}'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['secretId'] = $secretId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Transfer an application to another team by its unique ID.
     *
     * @param string $appId
     * @param string $teamId
     * @throws AppwriteException
     * @return \Appwrite\Models\App
     */
    public function updateTeam(string $appId, string $teamId): \Appwrite\Models\App
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/team'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['teamId'] = $teamId;

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

        return \Appwrite\Models\App::from($response);

    }

    /**
     * Revoke all tokens for an application by its unique ID.
     *
     * @param string $appId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTokens(string $appId): string
    {
        $apiPath = str_replace(
            ['{appId}'],
            [$appId],
            '/apps/{appId}/tokens'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
