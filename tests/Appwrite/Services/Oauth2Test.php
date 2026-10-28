<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class Oauth2Test extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Oauth2 $oauth2;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->oauth2 = new Oauth2($this->client);
    }

    public function testMethodApprove(): void
    {
        $data = [
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//approve',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['grant_id', 'authorization_details', 'scope'], array_keys($params));
                    $expected = [
                        'grant_id' => "<GRANT_ID>",
                        'authorization_details' => "<AUTHORIZATION_DETAILS>",
                        'scope' => "<SCOPE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->approve(
            "<GRANT_ID>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>",
            scope: "<SCOPE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Approve::class, $response);
    }
    public function testMethodAuthorize(): void
    {
        $data = [
            "grantId" => "5e5ea5c16897e",
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/oauth2//authorize',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['client_id', 'redirect_uri', 'response_type', 'scope', 'state', 'nonce', 'code_challenge', 'code_challenge_method', 'prompt', 'max_age', 'authorization_details', 'resource', 'audience', 'request_uri'], array_keys($params));
                    $expected = [
                        'client_id' => "<CLIENT_ID>",
                        'redirect_uri' => "https://example.com",
                        'response_type' => "response_type",
                        'scope' => "<SCOPE>",
                        'state' => "<STATE>",
                        'nonce' => "<NONCE>",
                        'code_challenge' => "<CODE_CHALLENGE>",
                        'code_challenge_method' => "s256",
                        'prompt' => "<PROMPT>",
                        'max_age' => 1,
                        'authorization_details' => "<AUTHORIZATION_DETAILS>",
                        'resource' => [],
                        'audience' => "<AUDIENCE>",
                        'request_uri' => "<REQUEST_URI>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->authorize(
            clientId: "<CLIENT_ID>",
            redirectUri: "https://example.com",
            responseType: "response_type",
            scope: "<SCOPE>",
            state: "<STATE>",
            nonce: "<NONCE>",
            codeChallenge: "<CODE_CHALLENGE>",
            codeChallengeMethod: "s256",
            prompt: "<PROMPT>",
            maxAge: 1,
            authorizationDetails: "<AUTHORIZATION_DETAILS>",
            resource: [],
            audience: "<AUDIENCE>",
            requestUri: "<REQUEST_URI>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Authorize::class, $response);
    }
    public function testMethodAuthorizePost(): void
    {
        $data = [
            "grantId" => "5e5ea5c16897e",
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//authorize',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['client_id', 'redirect_uri', 'response_type', 'scope', 'state', 'nonce', 'code_challenge', 'code_challenge_method', 'prompt', 'max_age', 'authorization_details', 'resource', 'audience', 'request_uri'], array_keys($params));
                    $expected = [
                        'client_id' => "<CLIENT_ID>",
                        'redirect_uri' => "https://example.com",
                        'response_type' => "response_type",
                        'scope' => "<SCOPE>",
                        'state' => "<STATE>",
                        'nonce' => "<NONCE>",
                        'code_challenge' => "<CODE_CHALLENGE>",
                        'code_challenge_method' => "s256",
                        'prompt' => "<PROMPT>",
                        'max_age' => 1,
                        'authorization_details' => "<AUTHORIZATION_DETAILS>",
                        'resource' => [],
                        'audience' => "<AUDIENCE>",
                        'request_uri' => "<REQUEST_URI>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->authorizePost(
            clientId: "<CLIENT_ID>",
            redirectUri: "https://example.com",
            responseType: "response_type",
            scope: "<SCOPE>",
            state: "<STATE>",
            nonce: "<NONCE>",
            codeChallenge: "<CODE_CHALLENGE>",
            codeChallengeMethod: "s256",
            prompt: "<PROMPT>",
            maxAge: 1,
            authorizationDetails: "<AUTHORIZATION_DETAILS>",
            resource: [],
            audience: "<AUDIENCE>",
            requestUri: "<REQUEST_URI>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Authorize::class, $response);
    }
    public function testMethodCreateDeviceAuthorization(): void
    {
        $data = [
            "device_code" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
            "user_code" => "ABCD-EFGH",
            "verification_uri" => "https://appwrite.io/oauth2/device",
            "verification_uri_complete" => "https://appwrite.io/oauth2/device?user_code=ABCD-EFGH",
            "expires_in" => 900,
            "interval" => 5
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//device_authorization',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['client_id', 'scope', 'authorization_details', 'resource', 'audience'], array_keys($params));
                    $expected = [
                        'client_id' => "<CLIENT_ID>",
                        'scope' => "<SCOPE>",
                        'authorization_details' => "<AUTHORIZATION_DETAILS>",
                        'resource' => [],
                        'audience' => "<AUDIENCE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createDeviceAuthorization(
            clientId: "<CLIENT_ID>",
            scope: "<SCOPE>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>",
            resource: [],
            audience: "<AUDIENCE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2DeviceAuthorization::class, $response);
    }
    public function testMethodCreateGrant(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "scopes" => [],
            "resources" => [],
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "prompt" => "login",
            "redirectUri" => "https://example.com/callback",
            "authTime" => 1592981250,
            "expire" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//grants',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['user_code'], array_keys($params));
                    $expected = [
                        'user_code' => "<USER_CODE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createGrant(
            "<USER_CODE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Grant::class, $response);
    }
    public function testMethodGetGrant(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "scopes" => [],
            "resources" => [],
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "prompt" => "login",
            "redirectUri" => "https://example.com/callback",
            "authTime" => 1592981250,
            "expire" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/oauth2//grants/%3CGRANT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['grant_id'], array_keys($params));
                    $expected = [
                        'grant_id' => "<GRANT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->getGrant(
            "<GRANT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Grant::class, $response);
    }
    public function testMethodIntrospect(): void
    {
        $data = [
            "active" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//introspect',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['token', 'token_type_hint', 'client_id', 'client_secret'], array_keys($params));
                    $expected = [
                        'token' => "<TOKEN>",
                        'token_type_hint' => "access_token",
                        'client_id' => "<CLIENT_ID>",
                        'client_secret' => "<CLIENT_SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->introspect(
            "<TOKEN>",
            tokenTypeHint: "access_token",
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Introspection::class, $response);
    }
    public function testMethodListOrganizations(): void
    {
        $data = [
            "total" => 5,
            "organizations" => [
                [
                    "\$id" => "5e5ea5c16897e"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/oauth2//organizations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['limit', 'offset', 'search'], array_keys($params));
                    $expected = [
                        'limit' => 1,
                        'offset' => 1,
                        'search' => "<SEARCH>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->listOrganizations(
            limit: 1,
            offset: 1,
            search: "<SEARCH>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2OrganizationList::class, $response);
    }
    public function testMethodCreatePAR(): void
    {
        $data = [
            "request_uri" => "urn:appwrite:oauth2:request:5e5ea5c16897e",
            "expires_in" => 600
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//par',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['client_id', 'redirect_uri', 'response_type', 'scope', 'state', 'nonce', 'code_challenge', 'code_challenge_method', 'prompt', 'max_age', 'authorization_details', 'resource', 'audience'], array_keys($params));
                    $expected = [
                        'client_id' => "<CLIENT_ID>",
                        'redirect_uri' => "https://example.com",
                        'response_type' => "code",
                        'scope' => "<SCOPE>",
                        'state' => "<STATE>",
                        'nonce' => "<NONCE>",
                        'code_challenge' => "<CODE_CHALLENGE>",
                        'code_challenge_method' => "s256",
                        'prompt' => "<PROMPT>",
                        'max_age' => 1,
                        'authorization_details' => "<AUTHORIZATION_DETAILS>",
                        'resource' => [],
                        'audience' => "<AUDIENCE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createPAR(
            "<CLIENT_ID>",
            "https://example.com",
            "code",
            scope: "<SCOPE>",
            state: "<STATE>",
            nonce: "<NONCE>",
            codeChallenge: "<CODE_CHALLENGE>",
            codeChallengeMethod: "s256",
            prompt: "<PROMPT>",
            maxAge: 1,
            authorizationDetails: "<AUTHORIZATION_DETAILS>",
            resource: [],
            audience: "<AUDIENCE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2PAR::class, $response);
    }
    public function testMethodListProjects(): void
    {
        $data = [
            "total" => 5,
            "projects" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "region" => "fra",
                    "endpoint" => "https://fra.cloud.appwrite.io/v1"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/oauth2//projects',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['limit', 'offset', 'search'], array_keys($params));
                    $expected = [
                        'limit' => 1,
                        'offset' => 1,
                        'search' => "<SEARCH>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->listProjects(
            limit: 1,
            offset: 1,
            search: "<SEARCH>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2ProjectList::class, $response);
    }
    public function testMethodReject(): void
    {
        $data = [
            "redirectUrl" => "https://example.com/callback?error=access_denied&state=fghij"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//reject',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['grant_id'], array_keys($params));
                    $expected = [
                        'grant_id' => "<GRANT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->reject(
            "<GRANT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Reject::class, $response);
    }
    public function testMethodRevoke(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//revoke',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['token', 'token_type_hint', 'client_id', 'client_secret'], array_keys($params));
                    $expected = [
                        'token' => "<TOKEN>",
                        'token_type_hint' => "access_token",
                        'client_id' => "<CLIENT_ID>",
                        'client_secret' => "<CLIENT_SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->revoke(
            "<TOKEN>",
            tokenTypeHint: "access_token",
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateToken(): void
    {
        $data = [
            "access_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
            "token_type" => "Bearer",
            "expires_in" => 3600,
            "refresh_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
            "scope" => "openid email profile"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/oauth2//token',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['grant_type', 'code', 'refresh_token', 'device_code', 'client_id', 'client_secret', 'code_verifier', 'redirect_uri', 'resource', 'audience'], array_keys($params));
                    $expected = [
                        'grant_type' => "<GRANT_TYPE>",
                        'code' => "<CODE>",
                        'refresh_token' => "<REFRESH_TOKEN>",
                        'device_code' => "<DEVICE_CODE>",
                        'client_id' => "<CLIENT_ID>",
                        'client_secret' => "<CLIENT_SECRET>",
                        'code_verifier' => "<CODE_VERIFIER>",
                        'redirect_uri' => "https://example.com",
                        'resource' => [],
                        'audience' => "<AUDIENCE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createToken(
            "<GRANT_TYPE>",
            code: "<CODE>",
            refreshToken: "<REFRESH_TOKEN>",
            deviceCode: "<DEVICE_CODE>",
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            codeVerifier: "<CODE_VERIFIER>",
            redirectUri: "https://example.com",
            resource: [],
            audience: "<AUDIENCE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Token::class, $response);
    }
}
