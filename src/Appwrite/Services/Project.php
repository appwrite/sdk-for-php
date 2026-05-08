<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\MethodId;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\ProviderId;
use Appwrite\Enums\PolicyId;
use Appwrite\Enums\ProtocolId;
use Appwrite\Enums\ServiceId;
use Appwrite\Enums\Secure;
use Appwrite\Enums\EmailTemplateType;
use Appwrite\Enums\EmailTemplateLocale;

class Project extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Delete a project.
     *
     * @throws AppwriteException
     * @return string
     */
    public function delete(): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/project'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update properties of a specific auth method. Use this endpoint to enable or
     * disable a method in your project. 
     *
     * @param MethodId $methodId
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateAuthMethod(MethodId $methodId, bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{methodId}'],
            [$methodId],
            '/project/auth-methods/{methodId}'
        );

        $apiParams = [];
        $apiParams['methodId'] = $methodId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Get a list of all API keys from the current project.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\KeyList
     */
    public function listKeys(?array $queries = null, ?bool $total = null): \Appwrite\Models\KeyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/keys'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

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
     * Create a new API key. It's recommended to have multiple API keys with
     * strict scopes for separate functions within your project.
     * 
     * You can also create an ephemeral API key if you need a short-lived key
     * instead.
     *
     * @param string $keyId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function createKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/keys'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Create a new ephemeral API key. It's recommended to have multiple API keys
     * with strict scopes for separate functions within your project.
     * 
     * You can also create a standard API key if you need a longer-lived key
     * instead.
     *
     * @param array $scopes
     * @param int $duration
     * @throws AppwriteException
     * @return \Appwrite\Models\EphemeralKey
     */
    public function createEphemeralKey(array $scopes, int $duration): \Appwrite\Models\EphemeralKey
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/keys/ephemeral'
        );

        $apiParams = [];
        $apiParams['scopes'] = $scopes;
        $apiParams['duration'] = $duration;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\EphemeralKey::from($response);

    }

    /**
     * Get a key by its unique ID. 
     *
     * @param string $keyId
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function getKey(string $keyId): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];

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
     * @param string $keyId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function updateKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteKey(string $keyId): string
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the project labels. Labels can be used to easily filter projects in
     * an organization.
     *
     * @param array $labels
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateLabels(array $labels): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/labels'
        );

        $apiParams = [];
        $apiParams['labels'] = $labels;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
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
     * Get a list of all mock phones in the project. This endpoint returns an
     * array of all mock phones and their OTPs.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\MockNumberList
     */
    public function listMockPhones(?array $queries = null, ?bool $total = null): \Appwrite\Models\MockNumberList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/mock-phones'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MockNumberList::from($response);

    }

    /**
     * Create a new mock phone for your project. Use this endpoint to register a
     * mock phone number and its sign-in OTP for your testers.
     *
     * @param string $number
     * @param string $otp
     * @throws AppwriteException
     * @return \Appwrite\Models\MockNumber
     */
    public function createMockPhone(string $number, string $otp): \Appwrite\Models\MockNumber
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/mock-phones'
        );

        $apiParams = [];
        $apiParams['number'] = $number;
        $apiParams['otp'] = $otp;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MockNumber::from($response);

    }

    /**
     * Get a mock phone by its unique number. This endpoint returns the mock
     * phone's OTP.
     *
     * @param string $number
     * @throws AppwriteException
     * @return \Appwrite\Models\MockNumber
     */
    public function getMockPhone(string $number): \Appwrite\Models\MockNumber
    {
        $apiPath = str_replace(
            ['{number}'],
            [$number],
            '/project/mock-phones/{number}'
        );

        $apiParams = [];
        $apiParams['number'] = $number;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MockNumber::from($response);

    }

    /**
     * Update a mock phone by its unique number. Use this endpoint to update the
     * mock phone's OTP.
     *
     * @param string $number
     * @param string $otp
     * @throws AppwriteException
     * @return \Appwrite\Models\MockNumber
     */
    public function updateMockPhone(string $number, string $otp): \Appwrite\Models\MockNumber
    {
        $apiPath = str_replace(
            ['{number}'],
            [$number],
            '/project/mock-phones/{number}'
        );

        $apiParams = [];
        $apiParams['number'] = $number;
        $apiParams['otp'] = $otp;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MockNumber::from($response);

    }

    /**
     * Delete a mock phone by its unique number. This endpoint removes the mock
     * phone and its OTP configuration from the project.
     *
     * @param string $number
     * @throws AppwriteException
     * @return string
     */
    public function deleteMockPhone(string $number): string
    {
        $apiPath = str_replace(
            ['{number}'],
            [$number],
            '/project/mock-phones/{number}'
        );

        $apiParams = [];
        $apiParams['number'] = $number;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all OAuth2 providers supported by the server, along with the
     * project's configuration for each. Credential fields are write-only and
     * always returned empty.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2ProviderList
     */
    public function listOAuth2Providers(?array $queries = null, ?bool $total = null): \Appwrite\Models\OAuth2ProviderList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2ProviderList::from($response);

    }

    /**
     * Get a single OAuth2 provider configuration. Credential fields (client
     * secret, p8 file, key/team IDs) are write-only and always returned empty.
     *
     * @param ProviderId $providerId
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Github|\Appwrite\Models\OAuth2Discord|\Appwrite\Models\OAuth2Figma|\Appwrite\Models\OAuth2Dropbox|\Appwrite\Models\OAuth2Dailymotion|\Appwrite\Models\OAuth2Bitbucket|\Appwrite\Models\OAuth2Bitly|\Appwrite\Models\OAuth2Box|\Appwrite\Models\OAuth2Autodesk|\Appwrite\Models\OAuth2Google|\Appwrite\Models\OAuth2Zoom|\Appwrite\Models\OAuth2Zoho|\Appwrite\Models\OAuth2Yandex|\Appwrite\Models\OAuth2X|\Appwrite\Models\OAuth2WordPress|\Appwrite\Models\OAuth2Twitch|\Appwrite\Models\OAuth2Stripe|\Appwrite\Models\OAuth2Spotify|\Appwrite\Models\OAuth2Slack|\Appwrite\Models\OAuth2Podio|\Appwrite\Models\OAuth2Notion|\Appwrite\Models\OAuth2Salesforce|\Appwrite\Models\OAuth2Yahoo|\Appwrite\Models\OAuth2Linkedin|\Appwrite\Models\OAuth2Disqus|\Appwrite\Models\OAuth2Amazon|\Appwrite\Models\OAuth2Etsy|\Appwrite\Models\OAuth2Facebook|\Appwrite\Models\OAuth2Tradeshift|\Appwrite\Models\OAuth2Paypal|\Appwrite\Models\OAuth2Gitlab|\Appwrite\Models\OAuth2Authentik|\Appwrite\Models\OAuth2Auth0|\Appwrite\Models\OAuth2FusionAuth|\Appwrite\Models\OAuth2Keycloak|\Appwrite\Models\OAuth2Oidc|\Appwrite\Models\OAuth2Apple|\Appwrite\Models\OAuth2Okta|\Appwrite\Models\OAuth2Kick|\Appwrite\Models\OAuth2Microsoft
     */
    public function getOAuth2Provider(ProviderId $providerId): \Appwrite\Models\OAuth2Github|\Appwrite\Models\OAuth2Discord|\Appwrite\Models\OAuth2Figma|\Appwrite\Models\OAuth2Dropbox|\Appwrite\Models\OAuth2Dailymotion|\Appwrite\Models\OAuth2Bitbucket|\Appwrite\Models\OAuth2Bitly|\Appwrite\Models\OAuth2Box|\Appwrite\Models\OAuth2Autodesk|\Appwrite\Models\OAuth2Google|\Appwrite\Models\OAuth2Zoom|\Appwrite\Models\OAuth2Zoho|\Appwrite\Models\OAuth2Yandex|\Appwrite\Models\OAuth2X|\Appwrite\Models\OAuth2WordPress|\Appwrite\Models\OAuth2Twitch|\Appwrite\Models\OAuth2Stripe|\Appwrite\Models\OAuth2Spotify|\Appwrite\Models\OAuth2Slack|\Appwrite\Models\OAuth2Podio|\Appwrite\Models\OAuth2Notion|\Appwrite\Models\OAuth2Salesforce|\Appwrite\Models\OAuth2Yahoo|\Appwrite\Models\OAuth2Linkedin|\Appwrite\Models\OAuth2Disqus|\Appwrite\Models\OAuth2Amazon|\Appwrite\Models\OAuth2Etsy|\Appwrite\Models\OAuth2Facebook|\Appwrite\Models\OAuth2Tradeshift|\Appwrite\Models\OAuth2Paypal|\Appwrite\Models\OAuth2Gitlab|\Appwrite\Models\OAuth2Authentik|\Appwrite\Models\OAuth2Auth0|\Appwrite\Models\OAuth2FusionAuth|\Appwrite\Models\OAuth2Keycloak|\Appwrite\Models\OAuth2Oidc|\Appwrite\Models\OAuth2Apple|\Appwrite\Models\OAuth2Okta|\Appwrite\Models\OAuth2Kick|\Appwrite\Models\OAuth2Microsoft
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/:provider'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        if (($response['$id'] ?? null) === 'github') {
            return \Appwrite\Models\OAuth2Github::from($response);
        }

        if (($response['$id'] ?? null) === 'discord') {
            return \Appwrite\Models\OAuth2Discord::from($response);
        }

        if (($response['$id'] ?? null) === 'figma') {
            return \Appwrite\Models\OAuth2Figma::from($response);
        }

        if (($response['$id'] ?? null) === 'dropbox') {
            return \Appwrite\Models\OAuth2Dropbox::from($response);
        }

        if (($response['$id'] ?? null) === 'dailymotion') {
            return \Appwrite\Models\OAuth2Dailymotion::from($response);
        }

        if (($response['$id'] ?? null) === 'bitbucket') {
            return \Appwrite\Models\OAuth2Bitbucket::from($response);
        }

        if (($response['$id'] ?? null) === 'bitly') {
            return \Appwrite\Models\OAuth2Bitly::from($response);
        }

        if (($response['$id'] ?? null) === 'box') {
            return \Appwrite\Models\OAuth2Box::from($response);
        }

        if (($response['$id'] ?? null) === 'autodesk') {
            return \Appwrite\Models\OAuth2Autodesk::from($response);
        }

        if (($response['$id'] ?? null) === 'google') {
            return \Appwrite\Models\OAuth2Google::from($response);
        }

        if (($response['$id'] ?? null) === 'zoom') {
            return \Appwrite\Models\OAuth2Zoom::from($response);
        }

        if (($response['$id'] ?? null) === 'zoho') {
            return \Appwrite\Models\OAuth2Zoho::from($response);
        }

        if (($response['$id'] ?? null) === 'yandex') {
            return \Appwrite\Models\OAuth2Yandex::from($response);
        }

        if (($response['$id'] ?? null) === 'x') {
            return \Appwrite\Models\OAuth2X::from($response);
        }

        if (($response['$id'] ?? null) === 'wordpress') {
            return \Appwrite\Models\OAuth2WordPress::from($response);
        }

        if (($response['$id'] ?? null) === 'twitch') {
            return \Appwrite\Models\OAuth2Twitch::from($response);
        }

        if (($response['$id'] ?? null) === 'stripe') {
            return \Appwrite\Models\OAuth2Stripe::from($response);
        }

        if (($response['$id'] ?? null) === 'spotify') {
            return \Appwrite\Models\OAuth2Spotify::from($response);
        }

        if (($response['$id'] ?? null) === 'slack') {
            return \Appwrite\Models\OAuth2Slack::from($response);
        }

        if (($response['$id'] ?? null) === 'podio') {
            return \Appwrite\Models\OAuth2Podio::from($response);
        }

        if (($response['$id'] ?? null) === 'notion') {
            return \Appwrite\Models\OAuth2Notion::from($response);
        }

        if (($response['$id'] ?? null) === 'salesforce') {
            return \Appwrite\Models\OAuth2Salesforce::from($response);
        }

        if (($response['$id'] ?? null) === 'yahoo') {
            return \Appwrite\Models\OAuth2Yahoo::from($response);
        }

        if (($response['$id'] ?? null) === 'linkedin') {
            return \Appwrite\Models\OAuth2Linkedin::from($response);
        }

        if (($response['$id'] ?? null) === 'disqus') {
            return \Appwrite\Models\OAuth2Disqus::from($response);
        }

        if (($response['$id'] ?? null) === 'amazon') {
            return \Appwrite\Models\OAuth2Amazon::from($response);
        }

        if (($response['$id'] ?? null) === 'etsy') {
            return \Appwrite\Models\OAuth2Etsy::from($response);
        }

        if (($response['$id'] ?? null) === 'facebook') {
            return \Appwrite\Models\OAuth2Facebook::from($response);
        }

        if (($response['$id'] ?? null) === 'tradeshiftBox') {
            return \Appwrite\Models\OAuth2Tradeshift::from($response);
        }

        if (($response['$id'] ?? null) === 'paypalSandbox') {
            return \Appwrite\Models\OAuth2Paypal::from($response);
        }

        if (($response['$id'] ?? null) === 'gitlab') {
            return \Appwrite\Models\OAuth2Gitlab::from($response);
        }

        if (($response['$id'] ?? null) === 'authentik') {
            return \Appwrite\Models\OAuth2Authentik::from($response);
        }

        if (($response['$id'] ?? null) === 'auth0') {
            return \Appwrite\Models\OAuth2Auth0::from($response);
        }

        if (($response['$id'] ?? null) === 'fusionauth') {
            return \Appwrite\Models\OAuth2FusionAuth::from($response);
        }

        if (($response['$id'] ?? null) === 'keycloak') {
            return \Appwrite\Models\OAuth2Keycloak::from($response);
        }

        if (($response['$id'] ?? null) === 'oidc') {
            return \Appwrite\Models\OAuth2Oidc::from($response);
        }

        if (($response['$id'] ?? null) === 'apple') {
            return \Appwrite\Models\OAuth2Apple::from($response);
        }

        if (($response['$id'] ?? null) === 'okta') {
            return \Appwrite\Models\OAuth2Okta::from($response);
        }

        if (($response['$id'] ?? null) === 'kick') {
            return \Appwrite\Models\OAuth2Kick::from($response);
        }

        if (($response['$id'] ?? null) === 'microsoft') {
            return \Appwrite\Models\OAuth2Microsoft::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');

    }

    /**
     * Update the project OAuth2 Amazon configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Amazon
     */
    public function updateOAuth2Amazon(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Amazon
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/amazon'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Amazon::from($response);

    }

    /**
     * Update the project OAuth2 Apple configuration.
     *
     * @param ?string $serviceId
     * @param ?string $keyId
     * @param ?string $teamId
     * @param ?string $p8File
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Apple
     */
    public function updateOAuth2Apple(?string $serviceId = null, ?string $keyId = null, ?string $teamId = null, ?string $p8File = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Apple
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/apple'
        );

        $apiParams = [];
        $apiParams['serviceId'] = $serviceId;
        $apiParams['keyId'] = $keyId;
        $apiParams['teamId'] = $teamId;
        $apiParams['p8File'] = $p8File;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Apple::from($response);

    }

    /**
     * Update the project OAuth2 Auth0 configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $endpoint
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Auth0
     */
    public function updateOAuth2Auth0(?string $clientId = null, ?string $clientSecret = null, ?string $endpoint = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Auth0
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/auth0'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Auth0::from($response);

    }

    /**
     * Update the project OAuth2 Authentik configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $endpoint
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Authentik
     */
    public function updateOAuth2Authentik(?string $clientId = null, ?string $clientSecret = null, ?string $endpoint = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Authentik
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/authentik'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Authentik::from($response);

    }

    /**
     * Update the project OAuth2 Autodesk configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Autodesk
     */
    public function updateOAuth2Autodesk(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Autodesk
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/autodesk'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Autodesk::from($response);

    }

    /**
     * Update the project OAuth2 Bitbucket configuration.
     *
     * @param ?string $key
     * @param ?string $secret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Bitbucket
     */
    public function updateOAuth2Bitbucket(?string $key = null, ?string $secret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Bitbucket
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/bitbucket'
        );

        $apiParams = [];
        $apiParams['key'] = $key;
        $apiParams['secret'] = $secret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Bitbucket::from($response);

    }

    /**
     * Update the project OAuth2 Bitly configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Bitly
     */
    public function updateOAuth2Bitly(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Bitly
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/bitly'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Bitly::from($response);

    }

    /**
     * Update the project OAuth2 Box configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Box
     */
    public function updateOAuth2Box(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Box
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/box'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Box::from($response);

    }

    /**
     * Update the project OAuth2 Dailymotion configuration.
     *
     * @param ?string $apiKey
     * @param ?string $apiSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Dailymotion
     */
    public function updateOAuth2Dailymotion(?string $apiKey = null, ?string $apiSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Dailymotion
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/dailymotion'
        );

        $apiParams = [];
        $apiParams['apiKey'] = $apiKey;
        $apiParams['apiSecret'] = $apiSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Dailymotion::from($response);

    }

    /**
     * Update the project OAuth2 Discord configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Discord
     */
    public function updateOAuth2Discord(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Discord
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/discord'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Discord::from($response);

    }

    /**
     * Update the project OAuth2 Disqus configuration.
     *
     * @param ?string $publicKey
     * @param ?string $secretKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Disqus
     */
    public function updateOAuth2Disqus(?string $publicKey = null, ?string $secretKey = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Disqus
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/disqus'
        );

        $apiParams = [];
        $apiParams['publicKey'] = $publicKey;
        $apiParams['secretKey'] = $secretKey;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Disqus::from($response);

    }

    /**
     * Update the project OAuth2 Dropbox configuration.
     *
     * @param ?string $appKey
     * @param ?string $appSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Dropbox
     */
    public function updateOAuth2Dropbox(?string $appKey = null, ?string $appSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Dropbox
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/dropbox'
        );

        $apiParams = [];
        $apiParams['appKey'] = $appKey;
        $apiParams['appSecret'] = $appSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Dropbox::from($response);

    }

    /**
     * Update the project OAuth2 Etsy configuration.
     *
     * @param ?string $keyString
     * @param ?string $sharedSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Etsy
     */
    public function updateOAuth2Etsy(?string $keyString = null, ?string $sharedSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Etsy
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/etsy'
        );

        $apiParams = [];
        $apiParams['keyString'] = $keyString;
        $apiParams['sharedSecret'] = $sharedSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Etsy::from($response);

    }

    /**
     * Update the project OAuth2 Facebook configuration.
     *
     * @param ?string $appId
     * @param ?string $appSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Facebook
     */
    public function updateOAuth2Facebook(?string $appId = null, ?string $appSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Facebook
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/facebook'
        );

        $apiParams = [];
        $apiParams['appId'] = $appId;
        $apiParams['appSecret'] = $appSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Facebook::from($response);

    }

    /**
     * Update the project OAuth2 Figma configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Figma
     */
    public function updateOAuth2Figma(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Figma
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/figma'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Figma::from($response);

    }

    /**
     * Update the project OAuth2 FusionAuth configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $endpoint
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2FusionAuth
     */
    public function updateOAuth2FusionAuth(?string $clientId = null, ?string $clientSecret = null, ?string $endpoint = null, ?bool $enabled = null): \Appwrite\Models\OAuth2FusionAuth
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/fusionauth'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2FusionAuth::from($response);

    }

    /**
     * Update the project OAuth2 GitHub configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Github
     */
    public function updateOAuth2GitHub(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Github
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/github'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Github::from($response);

    }

    /**
     * Update the project OAuth2 Gitlab configuration.
     *
     * @param ?string $applicationId
     * @param ?string $secret
     * @param ?string $endpoint
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Gitlab
     */
    public function updateOAuth2Gitlab(?string $applicationId = null, ?string $secret = null, ?string $endpoint = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Gitlab
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/gitlab'
        );

        $apiParams = [];
        $apiParams['applicationId'] = $applicationId;
        $apiParams['secret'] = $secret;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Gitlab::from($response);

    }

    /**
     * Update the project OAuth2 Google configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Google
     */
    public function updateOAuth2Google(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Google
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/google'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Google::from($response);

    }

    /**
     * Update the project OAuth2 Keycloak configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $endpoint
     * @param ?string $realmName
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Keycloak
     */
    public function updateOAuth2Keycloak(?string $clientId = null, ?string $clientSecret = null, ?string $endpoint = null, ?string $realmName = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Keycloak
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/keycloak'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['realmName'] = $realmName;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Keycloak::from($response);

    }

    /**
     * Update the project OAuth2 Kick configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Kick
     */
    public function updateOAuth2Kick(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Kick
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/kick'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Kick::from($response);

    }

    /**
     * Update the project OAuth2 Linkedin configuration.
     *
     * @param ?string $clientId
     * @param ?string $primaryClientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Linkedin
     */
    public function updateOAuth2Linkedin(?string $clientId = null, ?string $primaryClientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Linkedin
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/linkedin'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['primaryClientSecret'] = $primaryClientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Linkedin::from($response);

    }

    /**
     * Update the project OAuth2 Microsoft configuration.
     *
     * @param ?string $applicationId
     * @param ?string $applicationSecret
     * @param ?string $tenant
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Microsoft
     */
    public function updateOAuth2Microsoft(?string $applicationId = null, ?string $applicationSecret = null, ?string $tenant = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Microsoft
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/microsoft'
        );

        $apiParams = [];
        $apiParams['applicationId'] = $applicationId;
        $apiParams['applicationSecret'] = $applicationSecret;
        $apiParams['tenant'] = $tenant;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Microsoft::from($response);

    }

    /**
     * Update the project OAuth2 Notion configuration.
     *
     * @param ?string $oauthClientId
     * @param ?string $oauthClientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Notion
     */
    public function updateOAuth2Notion(?string $oauthClientId = null, ?string $oauthClientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Notion
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/notion'
        );

        $apiParams = [];
        $apiParams['oauthClientId'] = $oauthClientId;
        $apiParams['oauthClientSecret'] = $oauthClientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Notion::from($response);

    }

    /**
     * Update the project OAuth2 Oidc configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $wellKnownURL
     * @param ?string $authorizationURL
     * @param ?string $tokenURL
     * @param ?string $userInfoURL
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Oidc
     */
    public function updateOAuth2Oidc(?string $clientId = null, ?string $clientSecret = null, ?string $wellKnownURL = null, ?string $authorizationURL = null, ?string $tokenURL = null, ?string $userInfoURL = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Oidc
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/oidc'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['wellKnownURL'] = $wellKnownURL;
        $apiParams['authorizationURL'] = $authorizationURL;
        $apiParams['tokenURL'] = $tokenURL;
        $apiParams['userInfoURL'] = $userInfoURL;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Oidc::from($response);

    }

    /**
     * Update the project OAuth2 Okta configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?string $domain
     * @param ?string $authorizationServerId
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Okta
     */
    public function updateOAuth2Okta(?string $clientId = null, ?string $clientSecret = null, ?string $domain = null, ?string $authorizationServerId = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Okta
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/okta'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['domain'] = $domain;
        $apiParams['authorizationServerId'] = $authorizationServerId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Okta::from($response);

    }

    /**
     * Update the project OAuth2 Paypal configuration.
     *
     * @param ?string $clientId
     * @param ?string $secretKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Paypal
     */
    public function updateOAuth2Paypal(?string $clientId = null, ?string $secretKey = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Paypal
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/paypal'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['secretKey'] = $secretKey;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Paypal::from($response);

    }

    /**
     * Update the project OAuth2 PaypalSandbox configuration.
     *
     * @param ?string $clientId
     * @param ?string $secretKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Paypal
     */
    public function updateOAuth2PaypalSandbox(?string $clientId = null, ?string $secretKey = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Paypal
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/paypalSandbox'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['secretKey'] = $secretKey;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Paypal::from($response);

    }

    /**
     * Update the project OAuth2 Podio configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Podio
     */
    public function updateOAuth2Podio(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Podio
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/podio'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Podio::from($response);

    }

    /**
     * Update the project OAuth2 Salesforce configuration.
     *
     * @param ?string $customerKey
     * @param ?string $customerSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Salesforce
     */
    public function updateOAuth2Salesforce(?string $customerKey = null, ?string $customerSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Salesforce
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/salesforce'
        );

        $apiParams = [];
        $apiParams['customerKey'] = $customerKey;
        $apiParams['customerSecret'] = $customerSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Salesforce::from($response);

    }

    /**
     * Update the project OAuth2 Slack configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Slack
     */
    public function updateOAuth2Slack(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Slack
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/slack'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Slack::from($response);

    }

    /**
     * Update the project OAuth2 Spotify configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Spotify
     */
    public function updateOAuth2Spotify(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Spotify
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/spotify'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Spotify::from($response);

    }

    /**
     * Update the project OAuth2 Stripe configuration.
     *
     * @param ?string $clientId
     * @param ?string $apiSecretKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Stripe
     */
    public function updateOAuth2Stripe(?string $clientId = null, ?string $apiSecretKey = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Stripe
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/stripe'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['apiSecretKey'] = $apiSecretKey;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Stripe::from($response);

    }

    /**
     * Update the project OAuth2 Tradeshift configuration.
     *
     * @param ?string $oauth2ClientId
     * @param ?string $oauth2ClientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Tradeshift
     */
    public function updateOAuth2Tradeshift(?string $oauth2ClientId = null, ?string $oauth2ClientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Tradeshift
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/tradeshift'
        );

        $apiParams = [];
        $apiParams['oauth2ClientId'] = $oauth2ClientId;
        $apiParams['oauth2ClientSecret'] = $oauth2ClientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Tradeshift::from($response);

    }

    /**
     * Update the project OAuth2 Tradeshift Sandbox configuration.
     *
     * @param ?string $oauth2ClientId
     * @param ?string $oauth2ClientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Tradeshift
     */
    public function updateOAuth2TradeshiftSandbox(?string $oauth2ClientId = null, ?string $oauth2ClientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Tradeshift
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/tradeshiftBox'
        );

        $apiParams = [];
        $apiParams['oauth2ClientId'] = $oauth2ClientId;
        $apiParams['oauth2ClientSecret'] = $oauth2ClientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Tradeshift::from($response);

    }

    /**
     * Update the project OAuth2 Twitch configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Twitch
     */
    public function updateOAuth2Twitch(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Twitch
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/twitch'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Twitch::from($response);

    }

    /**
     * Update the project OAuth2 WordPress configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2WordPress
     */
    public function updateOAuth2WordPress(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2WordPress
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/wordpress'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2WordPress::from($response);

    }

    /**
     * Update the project OAuth2 X configuration.
     *
     * @param ?string $customerKey
     * @param ?string $secretKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2X
     */
    public function updateOAuth2X(?string $customerKey = null, ?string $secretKey = null, ?bool $enabled = null): \Appwrite\Models\OAuth2X
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/x'
        );

        $apiParams = [];
        $apiParams['customerKey'] = $customerKey;
        $apiParams['secretKey'] = $secretKey;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2X::from($response);

    }

    /**
     * Update the project OAuth2 Yahoo configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Yahoo
     */
    public function updateOAuth2Yahoo(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Yahoo
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/yahoo'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Yahoo::from($response);

    }

    /**
     * Update the project OAuth2 Yandex configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Yandex
     */
    public function updateOAuth2Yandex(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Yandex
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/yandex'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Yandex::from($response);

    }

    /**
     * Update the project OAuth2 Zoho configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Zoho
     */
    public function updateOAuth2Zoho(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Zoho
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/zoho'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Zoho::from($response);

    }

    /**
     * Update the project OAuth2 Zoom configuration.
     *
     * @param ?string $clientId
     * @param ?string $clientSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\OAuth2Zoom
     */
    public function updateOAuth2Zoom(?string $clientId = null, ?string $clientSecret = null, ?bool $enabled = null): \Appwrite\Models\OAuth2Zoom
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/oauth2/zoom'
        );

        $apiParams = [];
        $apiParams['clientId'] = $clientId;
        $apiParams['clientSecret'] = $clientSecret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\OAuth2Zoom::from($response);

    }

    /**
     * Get a list of all platforms in the project. This endpoint returns an array
     * of all platforms and their configurations.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformList
     */
    public function listPlatforms(?array $queries = null, ?bool $total = null): \Appwrite\Models\PlatformList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformList::from($response);

    }

    /**
     * Create a new Android platform for your project. Use this endpoint to
     * register a new Android platform where your users will run your application
     * which will interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $applicationId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformAndroid
     */
    public function createAndroidPlatform(string $platformId, string $name, string $applicationId): \Appwrite\Models\PlatformAndroid
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/android'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['applicationId'] = $applicationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformAndroid::from($response);

    }

    /**
     * Update an Android platform by its unique ID. Use this endpoint to update
     * the platform's name or application ID.
     *
     * @param string $platformId
     * @param string $name
     * @param string $applicationId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformAndroid
     */
    public function updateAndroidPlatform(string $platformId, string $name, string $applicationId): \Appwrite\Models\PlatformAndroid
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/android/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['applicationId'] = $applicationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformAndroid::from($response);

    }

    /**
     * Create a new Apple platform for your project. Use this endpoint to register
     * a new Apple platform where your users will run your application which will
     * interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $bundleIdentifier
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformApple
     */
    public function createApplePlatform(string $platformId, string $name, string $bundleIdentifier): \Appwrite\Models\PlatformApple
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/apple'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['bundleIdentifier'] = $bundleIdentifier;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformApple::from($response);

    }

    /**
     * Update an Apple platform by its unique ID. Use this endpoint to update the
     * platform's name or bundle identifier.
     *
     * @param string $platformId
     * @param string $name
     * @param string $bundleIdentifier
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformApple
     */
    public function updateApplePlatform(string $platformId, string $name, string $bundleIdentifier): \Appwrite\Models\PlatformApple
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/apple/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['bundleIdentifier'] = $bundleIdentifier;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformApple::from($response);

    }

    /**
     * Create a new Linux platform for your project. Use this endpoint to register
     * a new Linux platform where your users will run your application which will
     * interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformLinux
     */
    public function createLinuxPlatform(string $platformId, string $name, string $packageName): \Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/linux'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageName'] = $packageName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformLinux::from($response);

    }

    /**
     * Update a Linux platform by its unique ID. Use this endpoint to update the
     * platform's name or package name.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformLinux
     */
    public function updateLinuxPlatform(string $platformId, string $name, string $packageName): \Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/linux/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageName'] = $packageName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformLinux::from($response);

    }

    /**
     * Create a new web platform for your project. Use this endpoint to register a
     * new platform where your users will run your application which will interact
     * with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $hostname
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb
     */
    public function createWebPlatform(string $platformId, string $name, string $hostname): \Appwrite\Models\PlatformWeb
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/web'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['hostname'] = $hostname;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWeb::from($response);

    }

    /**
     * Update a web platform by its unique ID. Use this endpoint to update the
     * platform's name or hostname.
     *
     * @param string $platformId
     * @param string $name
     * @param string $hostname
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb
     */
    public function updateWebPlatform(string $platformId, string $name, string $hostname): \Appwrite\Models\PlatformWeb
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/web/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['hostname'] = $hostname;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWeb::from($response);

    }

    /**
     * Create a new Windows platform for your project. Use this endpoint to
     * register a new Windows platform where your users will run your application
     * which will interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageIdentifierName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWindows
     */
    public function createWindowsPlatform(string $platformId, string $name, string $packageIdentifierName): \Appwrite\Models\PlatformWindows
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/windows'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageIdentifierName'] = $packageIdentifierName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWindows::from($response);

    }

    /**
     * Update a Windows platform by its unique ID. Use this endpoint to update the
     * platform's name or package identifier name.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageIdentifierName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWindows
     */
    public function updateWindowsPlatform(string $platformId, string $name, string $packageIdentifierName): \Appwrite\Models\PlatformWindows
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/windows/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageIdentifierName'] = $packageIdentifierName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWindows::from($response);

    }

    /**
     * Get a platform by its unique ID. This endpoint returns the platform's
     * details, including its name, type, and key configurations.
     *
     * @param string $platformId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb|\Appwrite\Models\PlatformApple|\Appwrite\Models\PlatformAndroid|\Appwrite\Models\PlatformWindows|\Appwrite\Models\PlatformLinux
     */
    public function getPlatform(string $platformId): \Appwrite\Models\PlatformWeb|\Appwrite\Models\PlatformApple|\Appwrite\Models\PlatformAndroid|\Appwrite\Models\PlatformWindows|\Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        if (($response['type'] ?? null) === 'web') {
            return \Appwrite\Models\PlatformWeb::from($response);
        }

        if (($response['type'] ?? null) === 'apple') {
            return \Appwrite\Models\PlatformApple::from($response);
        }

        if (($response['type'] ?? null) === 'android') {
            return \Appwrite\Models\PlatformAndroid::from($response);
        }

        if (($response['type'] ?? null) === 'windows') {
            return \Appwrite\Models\PlatformWindows::from($response);
        }

        if (($response['type'] ?? null) === 'linux') {
            return \Appwrite\Models\PlatformLinux::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');

    }

    /**
     * Delete a platform by its unique ID. This endpoint removes the platform and
     * all its configurations from the project.
     *
     * @param string $platformId
     * @throws AppwriteException
     * @return string
     */
    public function deletePlatform(string $platformId): string
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all project policies and their current configuration.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\PolicyList
     */
    public function listPolicies(?array $queries = null, ?bool $total = null): \Appwrite\Models\PolicyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PolicyList::from($response);

    }

    /**
     * Updating this policy allows you to control if team members can see other
     * members information. When enabled, all team members can see ID, name,
     * email, phone number, and MFA status of other members..
     *
     * @param ?bool $userId
     * @param ?bool $userEmail
     * @param ?bool $userPhone
     * @param ?bool $userName
     * @param ?bool $userMFA
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateMembershipPrivacyPolicy(?bool $userId = null, ?bool $userEmail = null, ?bool $userPhone = null, ?bool $userName = null, ?bool $userMFA = null): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/membership-privacy'
        );

        $apiParams = [];

        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($userEmail)) {
            $apiParams['userEmail'] = $userEmail;
        }

        if (!is_null($userPhone)) {
            $apiParams['userPhone'] = $userPhone;
        }

        if (!is_null($userName)) {
            $apiParams['userName'] = $userName;
        }

        if (!is_null($userMFA)) {
            $apiParams['userMFA'] = $userMFA;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Updating this policy allows you to control if new passwords are checked
     * against most common passwords dictionary. When enabled, and user changes
     * their password, password must not be contained in the dictionary.
     *
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updatePasswordDictionaryPolicy(bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/password-dictionary'
        );

        $apiParams = [];
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Updates one of password strength policies. Based on total length
     * configured, previous password hashes are stored, and users cannot choose a
     * new password that is already stored in the passwird history list, when
     * updating an user password, or setting new one through password recovery.
     * 
     * Keep in mind, while password history policy is disabled, the history is not
     * being stored. Enabling the policy will not have any history on existing
     * users, and it will only start to collect and enforce the policy on password
     * changes since the policy is enabled.
     *
     * @param ?int $total
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updatePasswordHistoryPolicy(?int $total): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/password-history'
        );

        $apiParams = [];
        $apiParams['total'] = $total;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Updating this policy allows you to control if password strength is checked
     * against personal data. When enabled, and user sets or changes their
     * password, the password must not contain user ID, name, email or phone
     * number.
     *
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updatePasswordPersonalDataPolicy(bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/password-personal-data'
        );

        $apiParams = [];
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Updating this policy allows you to control if email alert is sent upon
     * session creation. When enabled, and user signs into their account, they
     * will be sent an email notification. There is an exception, the first
     * session after a new sign up does not trigger an alert, even if the policy
     * is enabled.
     *
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateSessionAlertPolicy(bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/session-alert'
        );

        $apiParams = [];
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Update maximum duration how long sessions created within a project should
     * stay active for.
     *
     * @param int $duration
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateSessionDurationPolicy(int $duration): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/session-duration'
        );

        $apiParams = [];
        $apiParams['duration'] = $duration;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Updating this policy allows you to control if existing sessions should be
     * invalidated when a password of a user is changed. When enabled, and user
     * changes their password, they will be logged out of all their devices.
     *
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateSessionInvalidationPolicy(bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/session-invalidation'
        );

        $apiParams = [];
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Update the maximum number of sessions allowed per user. When the limit is
     * hit, the oldest session will be deleted to make room for new one.
     *
     * @param ?int $total
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateSessionLimitPolicy(?int $total): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/session-limit'
        );

        $apiParams = [];
        $apiParams['total'] = $total;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Update the maximum number of users in the project. When the limit is hit or
     * amount of existing users already exceeded the limit, all users remain
     * active, but new user sign up will be prohibited.
     *
     * @param ?int $total
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateUserLimitPolicy(?int $total): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/policies/user-limit'
        );

        $apiParams = [];
        $apiParams['total'] = $total;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Get a policy by its unique ID. This endpoint returns the current
     * configuration for the requested project policy.
     *
     * @param PolicyId $policyId
     * @throws AppwriteException
     * @return \Appwrite\Models\PolicyPasswordDictionary|\Appwrite\Models\PolicyPasswordHistory|\Appwrite\Models\PolicyPasswordPersonalData|\Appwrite\Models\PolicySessionAlert|\Appwrite\Models\PolicySessionDuration|\Appwrite\Models\PolicySessionInvalidation|\Appwrite\Models\PolicySessionLimit|\Appwrite\Models\PolicyUserLimit|\Appwrite\Models\PolicyMembershipPrivacy
     */
    public function getPolicy(PolicyId $policyId): \Appwrite\Models\PolicyPasswordDictionary|\Appwrite\Models\PolicyPasswordHistory|\Appwrite\Models\PolicyPasswordPersonalData|\Appwrite\Models\PolicySessionAlert|\Appwrite\Models\PolicySessionDuration|\Appwrite\Models\PolicySessionInvalidation|\Appwrite\Models\PolicySessionLimit|\Appwrite\Models\PolicyUserLimit|\Appwrite\Models\PolicyMembershipPrivacy
    {
        $apiPath = str_replace(
            ['{policyId}'],
            [$policyId],
            '/project/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['policyId'] = $policyId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        if (($response['$id'] ?? null) === 'password-dictionary') {
            return \Appwrite\Models\PolicyPasswordDictionary::from($response);
        }

        if (($response['$id'] ?? null) === 'password-history') {
            return \Appwrite\Models\PolicyPasswordHistory::from($response);
        }

        if (($response['$id'] ?? null) === 'password-personal-data') {
            return \Appwrite\Models\PolicyPasswordPersonalData::from($response);
        }

        if (($response['$id'] ?? null) === 'session-alert') {
            return \Appwrite\Models\PolicySessionAlert::from($response);
        }

        if (($response['$id'] ?? null) === 'session-duration') {
            return \Appwrite\Models\PolicySessionDuration::from($response);
        }

        if (($response['$id'] ?? null) === 'session-invalidation') {
            return \Appwrite\Models\PolicySessionInvalidation::from($response);
        }

        if (($response['$id'] ?? null) === 'session-limit') {
            return \Appwrite\Models\PolicySessionLimit::from($response);
        }

        if (($response['$id'] ?? null) === 'user-limit') {
            return \Appwrite\Models\PolicyUserLimit::from($response);
        }

        if (($response['$id'] ?? null) === 'membership-privacy') {
            return \Appwrite\Models\PolicyMembershipPrivacy::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');

    }

    /**
     * Update properties of a specific protocol. Use this endpoint to enable or
     * disable a protocol in your project. 
     *
     * @param ProtocolId $protocolId
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateProtocol(ProtocolId $protocolId, bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{protocolId}'],
            [$protocolId],
            '/project/protocols/{protocolId}'
        );

        $apiParams = [];
        $apiParams['protocolId'] = $protocolId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Update properties of a specific service. Use this endpoint to enable or
     * disable a service in your project. 
     *
     * @param ServiceId $serviceId
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateService(ServiceId $serviceId, bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{serviceId}'],
            [$serviceId],
            '/project/services/{serviceId}'
        );

        $apiParams = [];
        $apiParams['serviceId'] = $serviceId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Update the SMTP configuration for your project. Use this endpoint to
     * configure your project's SMTP provider with your custom settings for
     * sending transactional emails.
     *
     * @param ?string $host
     * @param ?int $port
     * @param ?string $username
     * @param ?string $password
     * @param ?string $senderEmail
     * @param ?string $senderName
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @param ?Secure $secure
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateSMTP(?string $host = null, ?int $port = null, ?string $username = null, ?string $password = null, ?string $senderEmail = null, ?string $senderName = null, ?string $replyToEmail = null, ?string $replyToName = null, ?Secure $secure = null, ?bool $enabled = null): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/smtp'
        );

        $apiParams = [];
        $apiParams['host'] = $host;
        $apiParams['port'] = $port;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;
        $apiParams['senderEmail'] = $senderEmail;
        $apiParams['senderName'] = $senderName;
        $apiParams['replyToEmail'] = $replyToEmail;
        $apiParams['replyToName'] = $replyToName;
        $apiParams['secure'] = $secure;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

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
     * Send a test email to verify SMTP configuration. 
     *
     * @param array $emails
     * @throws AppwriteException
     * @return string
     */
    public function createSMTPTest(array $emails): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/smtp/tests'
        );

        $apiParams = [];
        $apiParams['emails'] = $emails;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all custom email templates configured for the project. This
     * endpoint returns an array of all configured email templates and their
     * locales.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\EmailTemplateList
     */
    public function listEmailTemplates(?array $queries = null, ?bool $total = null): \Appwrite\Models\EmailTemplateList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/templates/email'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\EmailTemplateList::from($response);

    }

    /**
     * Update a custom email template for the specified locale and type. Use this
     * endpoint to modify the content of your email templates.
     *
     * @param EmailTemplateType $templateId
     * @param ?EmailTemplateLocale $locale
     * @param ?string $subject
     * @param ?string $message
     * @param ?string $senderName
     * @param ?string $senderEmail
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws AppwriteException
     * @return \Appwrite\Models\EmailTemplate
     */
    public function updateEmailTemplate(EmailTemplateType $templateId, ?EmailTemplateLocale $locale = null, ?string $subject = null, ?string $message = null, ?string $senderName = null, ?string $senderEmail = null, ?string $replyToEmail = null, ?string $replyToName = null): \Appwrite\Models\EmailTemplate
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/templates/email'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }
        $apiParams['subject'] = $subject;
        $apiParams['message'] = $message;
        $apiParams['senderName'] = $senderName;
        $apiParams['senderEmail'] = $senderEmail;
        $apiParams['replyToEmail'] = $replyToEmail;
        $apiParams['replyToName'] = $replyToName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\EmailTemplate::from($response);

    }

    /**
     * Get a custom email template for the specified locale and type. This
     * endpoint returns the template content, subject, and other configuration
     * details.
     *
     * @param EmailTemplateType $templateId
     * @param ?EmailTemplateLocale $locale
     * @throws AppwriteException
     * @return \Appwrite\Models\EmailTemplate
     */
    public function getEmailTemplate(EmailTemplateType $templateId, ?EmailTemplateLocale $locale = null): \Appwrite\Models\EmailTemplate
    {
        $apiPath = str_replace(
            ['{templateId}'],
            [$templateId],
            '/project/templates/email/{templateId}'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\EmailTemplate::from($response);

    }

    /**
     * Get a list of all project environment variables.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\VariableList
     */
    public function listVariables(?array $queries = null, ?bool $total = null): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VariableList::from($response);

    }

    /**
     * Create a new project environment variable. These variables can be accessed
     * by all functions and sites in the project.
     *
     * @param string $variableId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function createVariable(string $variableId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Get a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function getVariable(string $variableId): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Update variable by its unique ID.
     *
     * @param string $variableId
     * @param ?string $key
     * @param ?string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function updateVariable(string $variableId, ?string $key = null, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Delete a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return string
     */
    public function deleteVariable(string $variableId): string
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
