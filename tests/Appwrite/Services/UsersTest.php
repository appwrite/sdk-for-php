<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\PasswordHash;
use Appwrite\Enums\AuthenticatorType;
use Appwrite\Enums\MessagingProviderType;

final class UsersTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Users $users;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->users = new Users($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "users" => [
                [
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
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/users',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'search' => "<SEARCH>",
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

        $response = $this->users->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\UserList::class, $response);
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
                '/users',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'phone', 'password', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'phone' => "+12065550100",
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

        $response = $this->users->create(
            "<USER_ID>",
            email: "email@example.com",
            phone: "+12065550100",
            password: "password",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateArgon2User(): void
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
                '/users/argon2',
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

        $response = $this->users->createArgon2User(
            "<USER_ID>",
            "email@example.com",
            "password",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateBcryptUser(): void
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
                '/users/bcrypt',
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

        $response = $this->users->createBcryptUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            name: "<NAME>"
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
                '/users/identities',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'search' => "<SEARCH>",
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

        $response = $this->users->listIdentities(
            queries: [],
            search: "<SEARCH>",
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
                '/users/identities/%3CIDENTITY_ID%3E',
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

        $response = $this->users->deleteIdentity(
            "<IDENTITY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateMD5User(): void
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
                '/users/md5',
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

        $response = $this->users->createMD5User(
            "<USER_ID>",
            "email@example.com",
            "password",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreatePHPassUser(): void
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
                '/users/phpass',
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

        $response = $this->users->createPHPassUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateScryptUser(): void
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
                '/users/scrypt',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'password', 'passwordSalt', 'passwordCpu', 'passwordMemory', 'passwordParallel', 'passwordLength', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'password' => "password",
                        'passwordSalt' => "<PASSWORD_SALT>",
                        'passwordCpu' => 1,
                        'passwordMemory' => 1,
                        'passwordParallel' => 1,
                        'passwordLength' => 1,
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

        $response = $this->users->createScryptUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            "<PASSWORD_SALT>",
            1,
            1,
            1,
            1,
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateScryptModifiedUser(): void
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
                '/users/scrypt-modified',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'password', 'passwordSalt', 'passwordSaltSeparator', 'passwordSignerKey', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'password' => "password",
                        'passwordSalt' => "<PASSWORD_SALT>",
                        'passwordSaltSeparator' => "<PASSWORD_SALT_SEPARATOR>",
                        'passwordSignerKey' => "<PASSWORD_SIGNER_KEY>",
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

        $response = $this->users->createScryptModifiedUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            "<PASSWORD_SALT>",
            "<PASSWORD_SALT_SEPARATOR>",
            "<PASSWORD_SIGNER_KEY>",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateSHAUser(): void
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
                '/users/sha',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email', 'password', 'passwordVersion', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                        'password' => "password",
                        'passwordVersion' => PasswordHash::SHA1(),
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

        $response = $this->users->createSHAUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            passwordVersion: PasswordHash::SHA1(),
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
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
                '/users/%3CUSER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->get(
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/users/%3CUSER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->delete(
            "<USER_ID>"
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
                '/users/%3CUSER_ID%3E/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'email'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'email' => "email@example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateEmail(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodUpdateImpersonator(): void
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
                '/users/%3CUSER_ID%3E/impersonator',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'impersonator'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'impersonator' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateImpersonator(
            "<USER_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodCreateJWT(): void
    {
        $data = [
            "jwt" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/users/%3CUSER_ID%3E/jwts',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'sessionId', 'duration'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'sessionId' => "recent()",
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

        $response = $this->users->createJWT(
            "<USER_ID>",
            sessionId: "recent()",
            duration: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Jwt::class, $response);
    }
    public function testMethodUpdateLabels(): void
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
                '/users/%3CUSER_ID%3E/labels',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'labels'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'labels' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateLabels(
            "<USER_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
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
                '/users/%3CUSER_ID%3E/memberships',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'queries' => [],
                        'search' => "<SEARCH>",
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

        $response = $this->users->listMemberships(
            "<USER_ID>",
            queries: [],
            search: "<SEARCH>",
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
                '/users/%3CUSER_ID%3E/mfa',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'mfa'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->updateMFA(
            "<USER_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodDeleteMFAAuthenticator(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/users/%3CUSER_ID%3E/mfa/authenticators/totp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'type'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->deleteMFAAuthenticator(
            "<USER_ID>",
            AuthenticatorType::TOTP()
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetMFAChallenge(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "code" => "446372"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/users/%3CUSER_ID%3E/mfa/challenges/%3CCHALLENGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'challengeId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'challengeId' => "<CHALLENGE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->getMFAChallenge(
            "<USER_ID>",
            "<CHALLENGE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MfaChallengeSecret::class, $response);
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
                '/users/%3CUSER_ID%3E/mfa/factors',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->listMFAFactors(
            "<USER_ID>"
        );

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
                '/users/%3CUSER_ID%3E/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->getMFARecoveryCodes(
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MfaRecoveryCodes::class, $response);
    }
    public function testMethodUpdateMFARecoveryCodes(): void
    {
        $data = [
            "recoveryCodes" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/users/%3CUSER_ID%3E/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateMFARecoveryCodes(
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MfaRecoveryCodes::class, $response);
    }
    public function testMethodCreateMFARecoveryCodes(): void
    {
        $data = [
            "recoveryCodes" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/users/%3CUSER_ID%3E/mfa/recovery-codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->createMFARecoveryCodes(
            "<USER_ID>"
        );

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
                '/users/%3CUSER_ID%3E/name',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->updateName(
            "<USER_ID>",
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
                '/users/%3CUSER_ID%3E/passkeys',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->listPasskeys(
            "<USER_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PasskeyList::class, $response);
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
                '/users/%3CUSER_ID%3E/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'passkeyId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->getPasskey(
            "<USER_ID>",
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
                '/users/%3CUSER_ID%3E/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'passkeyId', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->updatePasskey(
            "<USER_ID>",
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
                '/users/%3CUSER_ID%3E/passkeys/%3CPASSKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'passkeyId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->deletePasskey(
            "<USER_ID>",
            "<PASSKEY_ID>"
        );

        $this->assertSame($data, $response);
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
                '/users/%3CUSER_ID%3E/password',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'password'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->updatePassword(
            "<USER_ID>",
            "password"
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
                '/users/%3CUSER_ID%3E/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'number'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'number' => "+12065550100",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updatePhone(
            "<USER_ID>",
            "+12065550100"
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodGetPrefs(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'GET',
                '/users/%3CUSER_ID%3E/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->getPrefs(
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Preferences::class, $response);
    }
    public function testMethodUpdatePrefs(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'PATCH',
                '/users/%3CUSER_ID%3E/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'prefs'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->updatePrefs(
            "<USER_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Preferences::class, $response);
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
                '/users/%3CUSER_ID%3E/sessions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'total'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->listSessions(
            "<USER_ID>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\SessionList::class, $response);
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
                '/users/%3CUSER_ID%3E/sessions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->createSession(
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Session::class, $response);
    }
    public function testMethodDeleteSessions(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/users/%3CUSER_ID%3E/sessions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->deleteSessions(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodDeleteSession(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/users/%3CUSER_ID%3E/sessions/%3CSESSION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'sessionId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->deleteSession(
            "<USER_ID>",
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
                '/users/%3CUSER_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'status'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'status' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateStatus(
            "<USER_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodListTargets(): void
    {
        $data = [
            "total" => 5,
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
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/users/%3CUSER_ID%3E/targets',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
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

        $response = $this->users->listTargets(
            "<USER_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TargetList::class, $response);
    }
    public function testMethodCreateTarget(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Apple iPhone 12",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",
            "expired" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/users/%3CUSER_ID%3E/targets',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'targetId', 'providerType', 'identifier', 'providerId', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'targetId' => "<TARGET_ID>",
                        'providerType' => MessagingProviderType::EMAIL(),
                        'identifier' => "<IDENTIFIER>",
                        'providerId' => "<PROVIDER_ID>",
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

        $response = $this->users->createTarget(
            "<USER_ID>",
            "<TARGET_ID>",
            MessagingProviderType::EMAIL(),
            "<IDENTIFIER>",
            providerId: "<PROVIDER_ID>",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Target::class, $response);
    }
    public function testMethodGetTarget(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Apple iPhone 12",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",
            "expired" => true
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/users/%3CUSER_ID%3E/targets/%3CTARGET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'targetId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'targetId' => "<TARGET_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->getTarget(
            "<USER_ID>",
            "<TARGET_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Target::class, $response);
    }
    public function testMethodUpdateTarget(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Apple iPhone 12",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",
            "expired" => true
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/users/%3CUSER_ID%3E/targets/%3CTARGET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'targetId', 'identifier', 'providerId', 'name'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'targetId' => "<TARGET_ID>",
                        'identifier' => "<IDENTIFIER>",
                        'providerId' => "<PROVIDER_ID>",
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

        $response = $this->users->updateTarget(
            "<USER_ID>",
            "<TARGET_ID>",
            identifier: "<IDENTIFIER>",
            providerId: "<PROVIDER_ID>",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Target::class, $response);
    }
    public function testMethodDeleteTarget(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/users/%3CUSER_ID%3E/targets/%3CTARGET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'targetId'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'targetId' => "<TARGET_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->deleteTarget(
            "<USER_ID>",
            "<TARGET_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateToken(): void
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
                '/users/%3CUSER_ID%3E/tokens',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'length', 'expire'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'length' => 1,
                        'expire' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->createToken(
            "<USER_ID>",
            length: 1,
            expire: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Token::class, $response);
    }
    public function testMethodUpdateEmailVerification(): void
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
                '/users/%3CUSER_ID%3E/verification',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'emailVerification'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'emailVerification' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updateEmailVerification(
            "<USER_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
    public function testMethodUpdatePhoneVerification(): void
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
                '/users/%3CUSER_ID%3E/verification/phone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'phoneVerification'], array_keys($params));
                    $expected = [
                        'userId' => "<USER_ID>",
                        'phoneVerification' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->users->updatePhoneVerification(
            "<USER_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\User::class, $response);
    }
}
