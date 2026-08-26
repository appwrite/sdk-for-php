<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Oauth2 extends Service
{
    /**
     * Approve an OAuth2 grant after the user gives consent. Returns the
     * `redirectUrl` the end user should be sent to. The consent screen may
     * optionally pass enriched `authorization_details` to record the concrete
     * resources the user selected. You can pass Accept header of
     * `application/json` to receive a JSON response instead of a redirect.
     *
     * @throws AppwriteException
     */
    public function approve(string $grantId, ?string $authorizationDetails = null, ?string $scope = null): \Appwrite\Models\Oauth2Approve
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/approve'
        );

        $apiParams = [];
        $apiParams['grant_id'] = $grantId;

        if (!is_null($authorizationDetails)) {
            $apiParams['authorization_details'] = $authorizationDetails;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Approve::from($response);
    }

    /**
     * Begin the OAuth2 authorization flow. When called without a session, the
     * user is redirected to the consent screen without grant ID. When called with
     * a session, the redirect URL includes param for grant ID. You can pass
     * Accept header of `application/json` to receive a JSON response instead of a
     * redirect.
     *
     * @throws AppwriteException
     */
    public function authorize(?string $clientId = null, ?string $redirectUri = null, ?string $responseType = null, ?string $scope = null, ?string $state = null, ?string $nonce = null, ?string $codeChallenge = null, ?string $codeChallengeMethod = null, ?string $prompt = null, ?int $maxAge = null, ?string $authorizationDetails = null, ?string $resource = null, ?string $audience = null, ?string $requestUri = null): \Appwrite\Models\Oauth2Authorize
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/authorize'
        );

        $apiParams = [];

        if (!is_null($clientId)) {
            $apiParams['client_id'] = $clientId;
        }

        if (!is_null($redirectUri)) {
            $apiParams['redirect_uri'] = $redirectUri;
        }

        if (!is_null($responseType)) {
            $apiParams['response_type'] = $responseType;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($nonce)) {
            $apiParams['nonce'] = $nonce;
        }

        if (!is_null($codeChallenge)) {
            $apiParams['code_challenge'] = $codeChallenge;
        }

        if (!is_null($codeChallengeMethod)) {
            $apiParams['code_challenge_method'] = $codeChallengeMethod;
        }

        if (!is_null($prompt)) {
            $apiParams['prompt'] = $prompt;
        }

        if (!is_null($maxAge)) {
            $apiParams['max_age'] = $maxAge;
        }

        if (!is_null($authorizationDetails)) {
            $apiParams['authorization_details'] = $authorizationDetails;
        }

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
        }

        if (!is_null($requestUri)) {
            $apiParams['request_uri'] = $requestUri;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Authorize::from($response);
    }

    /**
     * Begin the OAuth2 authorization flow. When called without a session, the
     * user is redirected to the consent screen without grant ID. When called with
     * a session, the redirect URL includes param for grant ID. You can pass
     * Accept header of `application/json` to receive a JSON response instead of a
     * redirect.
     *
     * @throws AppwriteException
     */
    public function authorizePost(?string $clientId = null, ?string $redirectUri = null, ?string $responseType = null, ?string $scope = null, ?string $state = null, ?string $nonce = null, ?string $codeChallenge = null, ?string $codeChallengeMethod = null, ?string $prompt = null, ?int $maxAge = null, ?string $authorizationDetails = null, ?string $resource = null, ?string $audience = null, ?string $requestUri = null): \Appwrite\Models\Oauth2Authorize
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/authorize'
        );

        $apiParams = [];

        if (!is_null($clientId)) {
            $apiParams['client_id'] = $clientId;
        }

        if (!is_null($redirectUri)) {
            $apiParams['redirect_uri'] = $redirectUri;
        }

        if (!is_null($responseType)) {
            $apiParams['response_type'] = $responseType;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($nonce)) {
            $apiParams['nonce'] = $nonce;
        }

        if (!is_null($codeChallenge)) {
            $apiParams['code_challenge'] = $codeChallenge;
        }

        if (!is_null($codeChallengeMethod)) {
            $apiParams['code_challenge_method'] = $codeChallengeMethod;
        }

        if (!is_null($prompt)) {
            $apiParams['prompt'] = $prompt;
        }
        $apiParams['max_age'] = $maxAge;

        if (!is_null($authorizationDetails)) {
            $apiParams['authorization_details'] = $authorizationDetails;
        }

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
        }

        if (!is_null($requestUri)) {
            $apiParams['request_uri'] = $requestUri;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Authorize::from($response);
    }

    /**
     * Start the OAuth2 Device Authorization Grant. Returns the device code, user
     * code, verification URL, expiration, and polling interval.
     *
     * @throws AppwriteException
     */
    public function createDeviceAuthorization(?string $clientId = null, ?string $scope = null, ?string $authorizationDetails = null, ?string $resource = null, ?string $audience = null): \Appwrite\Models\Oauth2DeviceAuthorization
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/device_authorization'
        );

        $apiParams = [];

        if (!is_null($clientId)) {
            $apiParams['client_id'] = $clientId;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($authorizationDetails)) {
            $apiParams['authorization_details'] = $authorizationDetails;
        }

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2DeviceAuthorization::from($response);
    }

    /**
     * Exchange a device flow user code for an OAuth2 grant. The authenticated
     * user is bound to the pending grant. Pass the returned grant ID to the get
     * grant endpoint to render the consent screen, then to the approve or reject
     * endpoint to complete the flow.
     *
     * @throws AppwriteException
     */
    public function createGrant(string $userCode): \Appwrite\Models\Oauth2Grant
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/grants'
        );

        $apiParams = [];
        $apiParams['user_code'] = $userCode;

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Grant::from($response);
    }

    /**
     * Get an OAuth2 grant by its ID. Used by the consent screen to display the
     * details of the authorization the user is being asked to approve. A grant
     * can only be read by the user it belongs to, or by server SDK.
     *
     * @throws AppwriteException
     */
    public function getGrant(string $grantId): \Appwrite\Models\Oauth2Grant
    {
        $apiPath = str_replace(
            ['{project_id}', '{grant_id}'],
            [$this->client->getConfig('project'), $grantId],
            '/oauth2/{project_id}/grants/{grant_id}'
        );

        $apiParams = [];
        $apiParams['grant_id'] = $grantId;

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Grant::from($response);
    }

    /**
     * List the organizations the OAuth2 access token can access. Resolves the
     * token's `organization` authorization details, expanding the `*` wildcard
     * into the concrete set of organizations the user can see.
     *
     * @throws AppwriteException
     */
    public function listOrganizations(?int $limit = null, ?int $offset = null, ?string $search = null): \Appwrite\Models\Oauth2OrganizationList
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/organizations'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2OrganizationList::from($response);
    }

    /**
     * Store an OAuth2 authorization request server-side and receive a short-lived
     * request_uri handle for the authorize endpoint.
     *
     * @throws AppwriteException
     */
    public function createPAR(string $clientId, string $redirectUri, string $responseType, ?string $scope = null, ?string $state = null, ?string $nonce = null, ?string $codeChallenge = null, ?string $codeChallengeMethod = null, ?string $prompt = null, ?int $maxAge = null, ?string $authorizationDetails = null, ?string $resource = null, ?string $audience = null): \Appwrite\Models\Oauth2PAR
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/par'
        );

        $apiParams = [];
        $apiParams['client_id'] = $clientId;
        $apiParams['redirect_uri'] = $redirectUri;
        $apiParams['response_type'] = $responseType;

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($nonce)) {
            $apiParams['nonce'] = $nonce;
        }

        if (!is_null($codeChallenge)) {
            $apiParams['code_challenge'] = $codeChallenge;
        }

        if (!is_null($codeChallengeMethod)) {
            $apiParams['code_challenge_method'] = $codeChallengeMethod;
        }

        if (!is_null($prompt)) {
            $apiParams['prompt'] = $prompt;
        }
        $apiParams['max_age'] = $maxAge;

        if (!is_null($authorizationDetails)) {
            $apiParams['authorization_details'] = $authorizationDetails;
        }

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2PAR::from($response);
    }

    /**
     * List the projects the OAuth2 access token can access. Resolves the token's
     * `project` authorization details, expanding the `*` wildcard into the
     * concrete set of projects the user can see.
     *
     * @throws AppwriteException
     */
    public function listProjects(?int $limit = null, ?int $offset = null, ?string $search = null): \Appwrite\Models\Oauth2ProjectList
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/projects'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2ProjectList::from($response);
    }

    /**
     * Reject an OAuth2 grant when the user denies consent. Returns the
     * `redirectUrl` the end user should be sent to with an `access_denied` error.
     * You can pass Accept header of `application/json` to receive a JSON response
     * instead of a redirect.
     *
     * @throws AppwriteException
     */
    public function reject(string $grantId): \Appwrite\Models\Oauth2Reject
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/reject'
        );

        $apiParams = [];
        $apiParams['grant_id'] = $grantId;

        $apiHeaders = [];
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

        return \Appwrite\Models\Oauth2Reject::from($response);
    }

    /**
     * Revoke an OAuth2 access token or refresh token.
     *
     * @throws AppwriteException
     */
    public function revoke(string $token, ?string $tokenTypeHint = null, ?string $clientId = null, ?string $clientSecret = null): array
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/revoke'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        if (!is_null($tokenTypeHint)) {
            $apiParams['token_type_hint'] = $tokenTypeHint;
        }

        if (!is_null($clientId)) {
            $apiParams['client_id'] = $clientId;
        }

        if (!is_null($clientSecret)) {
            $apiParams['client_secret'] = $clientSecret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Exchange an OAuth2 authorization code, refresh token, or device code for
     * access and refresh tokens.
     *
     * @throws AppwriteException
     */
    public function createToken(string $grantType, ?string $code = null, ?string $refreshToken = null, ?string $deviceCode = null, ?string $clientId = null, ?string $clientSecret = null, ?string $codeVerifier = null, ?string $redirectUri = null, ?string $resource = null, ?string $audience = null): \Appwrite\Models\Oauth2Token
    {
        $apiPath = str_replace(
            ['{project_id}'],
            [$this->client->getConfig('project')],
            '/oauth2/{project_id}/token'
        );

        $apiParams = [];
        $apiParams['grant_type'] = $grantType;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($refreshToken)) {
            $apiParams['refresh_token'] = $refreshToken;
        }

        if (!is_null($deviceCode)) {
            $apiParams['device_code'] = $deviceCode;
        }

        if (!is_null($clientId)) {
            $apiParams['client_id'] = $clientId;
        }

        if (!is_null($clientSecret)) {
            $apiParams['client_secret'] = $clientSecret;
        }

        if (!is_null($codeVerifier)) {
            $apiParams['code_verifier'] = $codeVerifier;
        }

        if (!is_null($redirectUri)) {
            $apiParams['redirect_uri'] = $redirectUri;
        }

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
        }

        $apiHeaders = [];
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
}
