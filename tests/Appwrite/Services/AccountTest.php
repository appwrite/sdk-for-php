<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\AuthenticatorType;
use Appwrite\Enums\AuthenticationFactor;
use Appwrite\Enums\IdTokenProvider;
use Appwrite\Enums\OAuthProvider;

final class AccountTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Account $account;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->account = new Account($this->client);
    }

    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->get();

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'password', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'password' => "password",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->create(
            "<USER_ID>",
            "email@example.com",
            "password",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodListConsents(): void
    {
        $data = [
            "total" => 5,
            "consents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "userId" => "5e5ea5c16897e",
                    "appId" => "5e5ea5c16897e",
                    "cimdUrl" => "https://example.com/.well-known/client-metadata.json",
                    "scopes" => [],
                    "resources" => [],
                    "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
                    "expire" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/consents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listConsents(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2ConsentList::class, $response);
    }
    public function testMethodGetConsent(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "cimdUrl" => "https://example.com/.well-known/client-metadata.json",
            "scopes" => [],
            "resources" => [],
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "expire" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/consents/%3CCONSENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['consentId'], array_keys($params));
                    $expected = [
                        'consentId' => "<CONSENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getConsent(
            "<CONSENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Consent::class, $response);
    }
    public function testMethodDeleteConsent(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/consents/%3CCONSENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['consentId'], array_keys($params));
                    $expected = [
                        'consentId' => "<CONSENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteConsent(
            "<CONSENT_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListConsentTokens(): void
    {
        $data = [
            "total" => 5,
            "tokens" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "consentId" => "5e5ea5c16897e",
                    "userId" => "5e5ea5c16897e",
                    "appId" => "5e5ea5c16897e",
                    "cimdUrl" => "https://example.com/.well-known/client-metadata.json",
                    "scopes" => [],
                    "resources" => [],
                    "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
                    "expire" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/consents/%3CCONSENT_ID%3E/tokens',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['consentId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'consentId' => "<CONSENT_ID>",
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listConsentTokens(
            "<CONSENT_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2ConsentTokenList::class, $response);
    }
    public function testMethodGetConsentToken(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "consentId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "cimdUrl" => "https://example.com/.well-known/client-metadata.json",
            "scopes" => [],
            "resources" => [],
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "expire" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/consents/%3CCONSENT_ID%3E/tokens/%3CTOKEN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['consentId', 'tokenId'], array_keys($params));
                    $expected = [
                        'consentId' => "<CONSENT_ID>",
                        'tokenId' => "<TOKEN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getConsentToken(
            "<CONSENT_ID>",
            "<TOKEN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2ConsentToken::class, $response);
    }
    public function testMethodDeleteConsentToken(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/consents/%3CCONSENT_ID%3E/tokens/%3CTOKEN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['consentId', 'tokenId'], array_keys($params));
                    $expected = [
                        'consentId' => "<CONSENT_ID>",
                        'tokenId' => "<TOKEN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteConsentToken(
            "<CONSENT_ID>",
            "<TOKEN_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateEmail(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['email', 'password'], array_keys($params));
                    $expected = [
                        'email' => "email@example.com",
                        'password' => "password",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateEmail(
            "email@example.com",
            "password"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodListIdentities(): void
    {
        $data = [
            "total" => 5,
            "identities" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "userId" => "5e5bb8c16897e",
                    "provider" => "email",
                    "providerUid" => "5e5bb8c16897e",
                    "providerEmail" => "user@example.com",
                    "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
                    "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
                    "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
                    "providerIdToken" => "eyJhbGciOiJSUzI1NiIsImtpZCI6IjBhYzNmMWQwNWExYjhlN2YifQ.eyJzdWIiOiIxMTAxNjk0ODQ0NzQzODYyNzYzMzQifQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/identities',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listIdentities(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\IdentityList::class, $response);
    }
    public function testMethodDeleteIdentity(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/identities/%3CIDENTITY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['identityId'], array_keys($params));
                    $expected = [
                        'identityId' => "<IDENTITY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteIdentity(
            "<IDENTITY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListMemberships(): void
    {
        $data = [
            "total" => 5,
            "memberships" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "userId" => "5e5ea5c16897e",
                    "userName" => "John Doe",
                    "userEmail" => "john@appwrite.io",
                    "userPhone" => "+1 555 555 5555",
                    "teamId" => "5e5ea5c16897e",
                    "teamName" => "VIP",
                    "invited" => "2020-10-15T06:38:00.000+00:00",
                    "joined" => "2020-10-15T06:38:00.000+00:00",
                    "confirm" => true,
                    "mfa" => true,
                    "userAccessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "roles" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/memberships',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listMemberships(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MembershipList::class, $response);
    }
    public function testMethodUpdateMFA(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/mfa',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['mfa'], array_keys($params));
                    $expected = [
                        'mfa' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateMFA(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateMFAAuthenticator(): void
    {
        $data = [
            "secret" => "[SHARED_SECRET]",
            "uri" => "otpauth://totp/appwrite:user@example.com?secret=[SHARED_SECRET]&issuer=appwrite"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/mfa/authenticators/totp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['type'], array_keys($params));
                    $expected = [
                        'type' => AuthenticatorType::TOTP(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createMFAAuthenticator(
            AuthenticatorType::TOTP()
        );

        $this->assertInstanceOf(\Appwrite\Models\MfaType::class, $response);
    }
    public function testMethodUpdateMFAAuthenticator(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/mfa/authenticators/totp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['type', 'otp'], array_keys($params));
                    $expected = [
                        'type' => AuthenticatorType::TOTP(),
                        'otp' => "<OTP>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateMFAAuthenticator(
            AuthenticatorType::TOTP(),
            "<OTP>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodDeleteMFAAuthenticator(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/mfa/authenticators/totp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['type'], array_keys($params));
                    $expected = [
                        'type' => AuthenticatorType::TOTP(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteMFAAuthenticator(
            AuthenticatorType::TOTP()
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateMFAChallenge(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "expire" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/mfa/challenges',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['factor'], array_keys($params));
                    $expected = [
                        'factor' => AuthenticationFactor::EMAIL(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createMFAChallenge(
            AuthenticationFactor::EMAIL()
        );

        $this->assertInstanceOf(\Appwrite\Models\MfaChallenge::class, $response);
    }
    public function testMethodUpdateMFAChallenge(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/mfa/challenges',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['challengeId', 'otp'], array_keys($params));
                    $expected = [
                        'challengeId' => "<CHALLENGE_ID>",
                        'otp' => "<OTP>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateMFAChallenge(
            "<CHALLENGE_ID>",
            "<OTP>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodListMFAFactors(): void
    {
        $data = [
            "totp" => true,
            "phone" => true,
            "email" => true,
            "recoveryCode" => true,
            "custom" => true
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/mfa/factors',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listMFAFactors();

        $this->assertInstanceOf(\Appwrite\Models\MfaFactors::class, $response);
    }
    public function testMethodGetMFARecoveryCodes(): void
    {
        $data = [
            "recoveryCodes" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getMFARecoveryCodes();

        $this->assertInstanceOf(\Appwrite\Models\MfaRecoveryCodes::class, $response);
    }
    public function testMethodCreateMFARecoveryCodes(): void
    {
        $data = [
            "recoveryCodes" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createMFARecoveryCodes();

        $this->assertInstanceOf(\Appwrite\Models\MfaRecoveryCodes::class, $response);
    }
    public function testMethodUpdateMFARecoveryCodes(): void
    {
        $data = [
            "recoveryCodes" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateMFARecoveryCodes();

        $this->assertInstanceOf(\Appwrite\Models\MfaRecoveryCodes::class, $response);
    }
    public function testMethodUpdateName(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/name',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['name'], array_keys($params));
                    $expected = [
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateName(
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodListPasskeys(): void
    {
        $data = [
            "total" => 5,
            "passkeys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My laptop",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/passkeys',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listPasskeys(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PasskeyList::class, $response);
    }
    public function testMethodCreatePasskey(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "passkeyId" => "5e5ea5c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "publicKey" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/passkeys',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['passkeyId', 'name'], array_keys($params));
                    $expected = [
                        'passkeyId' => "<PASSKEY_ID>",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createPasskey(
            passkeyId: "<PASSKEY_ID>",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PasskeyChallenge::class, $response);
    }
    public function testMethodGetPasskey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My laptop",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['passkeyId'], array_keys($params));
                    $expected = [
                        'passkeyId' => "<PASSKEY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getPasskey(
            "<PASSKEY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Passkey::class, $response);
    }
    public function testMethodUpdatePasskey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My laptop",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['passkeyId', 'name'], array_keys($params));
                    $expected = [
                        'passkeyId' => "<PASSKEY_ID>",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePasskey(
            "<PASSKEY_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Passkey::class, $response);
    }
    public function testMethodDeletePasskey(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['passkeyId'], array_keys($params));
                    $expected = [
                        'passkeyId' => "<PASSKEY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deletePasskey(
            "<PASSKEY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdatePasskeyVerification(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My laptop",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/passkeys/%3CPASSKEY_ID%3E/verification',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['passkeyId', 'credential'], array_keys($params));
                    $expected = [
                        'passkeyId' => "<PASSKEY_ID>",
                        'credential' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePasskeyVerification(
            "<PASSKEY_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Passkey::class, $response);
    }
    public function testMethodUpdatePassword(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/password',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['password', 'oldPassword'], array_keys($params));
                    $expected = [
                        'password' => "password",
                        'oldPassword' => "password",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePassword(
            "password",
            oldPassword: "password"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodUpdatePhone(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['phone', 'password'], array_keys($params));
                    $expected = [
                        'phone' => "+12065550100",
                        'password' => "password",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePhone(
            "+12065550100",
            "password"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodGetPrefs(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'GET',
                '/account/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getPrefs();

        $this->assertInstanceOf(\Appwrite\Models\Preferences::class, $response);
    }
    public function testMethodUpdatePrefs(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['prefs'], array_keys($params));
                    $expected = [
                        'prefs' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePrefs(
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateRecovery(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/recovery',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['email', 'url'], array_keys($params));
                    $expected = [
                        'email' => "email@example.com",
                        'url' => "https://example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createRecovery(
            "email@example.com",
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateRecovery(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/recovery',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret', 'password'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                        'password' => "password",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateRecovery(
            "<USER_ID>",
            "<SECRET>",
            "password"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateRecoveryOTP(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/recovery/otp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['email', 'phrase'], array_keys($params));
                    $expected = [
                        'email' => "email@example.com",
                        'phrase' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createRecoveryOTP(
            "email@example.com",
            phrase: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateRecoveryOTP(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/recovery/otp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret', 'password'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                        'password' => "password",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateRecoveryOTP(
            "<USER_ID>",
            "<SECRET>",
            "password"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodListSessions(): void
    {
        $data = [
            "total" => 5,
            "sessions" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "userId" => "5e5bb8c16897e",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "provider" => "email",
                    "providerUid" => "user@example.com",
                    "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
                    "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
                    "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
                    "ip" => "127.0.0.1",
                    "osCode" => "Mac",
                    "osName" => "Mac",
                    "osVersion" => "Mac",
                    "clientType" => "browser",
                    "clientCode" => "CM",
                    "clientName" => "Chrome Mobile iOS",
                    "clientVersion" => "84.0",
                    "clientEngine" => "WebKit",
                    "clientEngineVersion" => "605.1.15",
                    "deviceName" => "smartphone",
                    "deviceBrand" => "Google",
                    "deviceModel" => "Nexus 5",
                    "countryCode" => "US",
                    "countryName" => "United States",
                    "current" => true,
                    "factors" => [],
                    "secret" => "5e5bb8c16897e",
                    "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/sessions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->listSessions(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\SessionList::class, $response);
    }
    public function testMethodDeleteSessions(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/sessions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['current'], array_keys($params));
                    $expected = [
                        'current' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteSessions(
            current: false
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateAnonymousSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/sessions/anonymous',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createAnonymousSession();

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodCreateEmailPasswordSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/sessions/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['email', 'password', 'duration'], array_keys($params));
                    $expected = [
                        'email' => "email@example.com",
                        'password' => "password",
                        'duration' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createEmailPasswordSession(
            "email@example.com",
            "password",
            duration: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodCreateIdTokenSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/sessions/id-token',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['provider', 'idToken', 'nonce', 'accessToken', 'accessTokenExpiry', 'name'], array_keys($params));
                    $expected = [
                        'provider' => IdTokenProvider::APPLE(),
                        'idToken' => "<ID_TOKEN>",
                        'nonce' => "<NONCE>",
                        'accessToken' => "<ACCESS_TOKEN>",
                        'accessTokenExpiry' => 1,
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createIdTokenSession(
            IdTokenProvider::APPLE(),
            "<ID_TOKEN>",
            nonce: "<NONCE>",
            accessToken: "<ACCESS_TOKEN>",
            accessTokenExpiry: 1,
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodUpdateMagicURLSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/sessions/magic-url',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateMagicURLSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodUpdatePhoneSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/sessions/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePhoneSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodCreateSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/sessions/token',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodGetSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/account/sessions/%3CSESSION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['sessionId'], array_keys($params));
                    $expected = [
                        'sessionId' => "<SESSION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->getSession(
            "<SESSION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodUpdateSession(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => [],
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/sessions/%3CSESSION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['sessionId'], array_keys($params));
                    $expected = [
                        'sessionId' => "<SESSION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateSession(
            "<SESSION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodDeleteSession(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/account/sessions/%3CSESSION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['sessionId'], array_keys($params));
                    $expected = [
                        'sessionId' => "<SESSION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->deleteSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateStatus(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/account/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateStatus();

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateEmailToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/tokens/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'phrase'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'phrase' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createEmailToken(
            "<USER_ID>",
            "email@example.com",
            phrase: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateMagicURLToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/tokens/magic-url',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'url', 'phrase'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'url' => "https://example.com",
                        'phrase' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createMagicURLToken(
            "<USER_ID>",
            "email@example.com",
            url: "https://example.com",
            phrase: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateOAuth2Token(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/account/tokens/oauth2/amazon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['provider', 'success', 'failure', 'scopes', 'state'], array_keys($params));
                    $expected = [
                        'provider' => OAuthProvider::AMAZON(),
                        'success' => "https://example.com",
                        'failure' => "https://example.com",
                        'scopes' => [],
                        'state' => "<STATE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                }),
                'location'
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createOAuth2Token(
            OAuthProvider::AMAZON(),
            success: "https://example.com",
            failure: "https://example.com",
            scopes: [],
            state: "<STATE>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreatePasskeyToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "passkeyId" => "5e5ea5c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "publicKey" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/tokens/passkey',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createPasskeyToken();

        $this->assertInstanceOf(\Appwrite\Models\PasskeyChallenge::class, $response);
    }
    public function testMethodUpdatePasskeyToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/tokens/passkey',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['challengeId', 'credential'], array_keys($params));
                    $expected = [
                        'challengeId' => "<CHALLENGE_ID>",
                        'credential' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePasskeyToken(
            "<CHALLENGE_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\TokenSecret::class, $response);
    }
    public function testMethodCreatePhoneToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/tokens/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'phone'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'phone' => "+12065550100",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createPhoneToken(
            "<USER_ID>",
            "+12065550100"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateEmailVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/verifications/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['url'], array_keys($params));
                    $expected = [
                        'url' => "https://example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createEmailVerification(
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/verifications/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['url'], array_keys($params));
                    $expected = [
                        'url' => "https://example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createVerification(
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateEmailVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/verifications/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateEmailVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/verifications/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreateEmailVerificationOTP(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/verifications/email/otp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['phrase'], array_keys($params));
                    $expected = [
                        'phrase' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createEmailVerificationOTP(
            phrase: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateEmailVerificationOTP(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/verifications/email/otp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updateEmailVerificationOTP(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodCreatePhoneVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/account/verifications/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->createPhoneVerification();

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdatePhoneVerification(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "[SECRET]",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/account/verifications/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'secret'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->account->updatePhoneVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
}
