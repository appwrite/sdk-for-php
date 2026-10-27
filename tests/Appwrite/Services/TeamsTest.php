<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class TeamsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Teams $teams;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->teams = new Teams($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "teams" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "VIP",
                    "total" => 7,
                    "prefs" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/teams',
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

        $response = $this->teams->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TeamList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/teams',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'name', 'roles'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'name' => "<NAME>",
                        'roles' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->create(
            "<TEAM_ID>",
            "<NAME>",
            roles: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Team::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/teams/%3CTEAM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->get(
            "<TEAM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Team::class, $response);
    }
    public function testMethodUpdateName(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/teams/%3CTEAM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'name'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
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

        $response = $this->teams->updateName(
            "<TEAM_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Team::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/teams/%3CTEAM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->delete(
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListInstallations(): void
    {
        $data = [
            "total" => 5,
            "installations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "teamId" => "5e5ea5c16897e",
                    "scopes" => [],
                    "authorizationDetails" => [],
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/teams/%3CTEAM_ID%3E/installations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
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

        $response = $this->teams->listInstallations(
            "<TEAM_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallationList::class, $response);
    }
    public function testMethodCreateInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/teams/%3CTEAM_ID%3E/installations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'appId', 'authorizationDetails'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'appId' => "<APP_ID>",
                        'authorizationDetails' => "<AUTHORIZATION_DETAILS>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->createInstallation(
            "<TEAM_ID>",
            "<APP_ID>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodGetInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/teams/%3CTEAM_ID%3E/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'installationId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'installationId' => "<INSTALLATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->getInstallation(
            "<TEAM_ID>",
            "<INSTALLATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodUpdateInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/teams/%3CTEAM_ID%3E/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'installationId', 'authorizationDetails'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'installationId' => "<INSTALLATION_ID>",
                        'authorizationDetails' => "<AUTHORIZATION_DETAILS>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->updateInstallation(
            "<TEAM_ID>",
            "<INSTALLATION_ID>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodDeleteInstallation(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/teams/%3CTEAM_ID%3E/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'installationId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'installationId' => "<INSTALLATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->deleteInstallation(
            "<TEAM_ID>",
            "<INSTALLATION_ID>"
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
                '/teams/%3CTEAM_ID%3E/memberships',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
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

        $response = $this->teams->listMemberships(
            "<TEAM_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MembershipList::class, $response);
    }
    public function testMethodCreateMembership(): void
    {
        $data = [
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
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/teams/%3CTEAM_ID%3E/memberships',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'roles', 'email', 'userId', 'phone', 'url', 'name', 'membershipId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'roles' => [],
                        'email' => "email@example.com",
                        'userId' => "<USER_ID>",
                        'phone' => "+12065550100",
                        'url' => "https://example.com",
                        'name' => "<NAME>",
                        'membershipId' => "<MEMBERSHIP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->createMembership(
            "<TEAM_ID>",
            [],
            email: "email@example.com",
            userId: "<USER_ID>",
            phone: "+12065550100",
            url: "https://example.com",
            name: "<NAME>",
            membershipId: "<MEMBERSHIP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodGetMembership(): void
    {
        $data = [
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
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/teams/%3CTEAM_ID%3E/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'membershipId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'membershipId' => "<MEMBERSHIP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->getMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodUpdateMembership(): void
    {
        $data = [
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
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/teams/%3CTEAM_ID%3E/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'membershipId', 'roles'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'membershipId' => "<MEMBERSHIP_ID>",
                        'roles' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->updateMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodDeleteMembership(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/teams/%3CTEAM_ID%3E/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'membershipId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'membershipId' => "<MEMBERSHIP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->deleteMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateMembershipStatus(): void
    {
        $data = [
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
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/teams/%3CTEAM_ID%3E/memberships/%3CMEMBERSHIP_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'membershipId', 'userId', 'secret'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'membershipId' => "<MEMBERSHIP_ID>",
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

        $response = $this->teams->updateMembershipStatus(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>",
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodGetPrefs(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'GET',
                '/teams/%3CTEAM_ID%3E/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->teams->getPrefs(
            "<TEAM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Preferences::class, $response);
    }
    public function testMethodUpdatePrefs(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'PUT',
                '/teams/%3CTEAM_ID%3E/prefs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'prefs'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
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

        $response = $this->teams->updatePrefs(
            "<TEAM_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Preferences::class, $response);
    }
}
