<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\MessagePriority;
use Appwrite\Enums\SmtpEncryption;

final class MessagingTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Messaging $messaging;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->messaging = new Messaging($this->client);
    }

    public function testMethodListMessages(): void
    {
        $data = [
            "total" => 5,
            "messages" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "providerType" => "email",
                    "topics" => [],
                    "users" => [],
                    "targets" => [],
                    "deliveredTotal" => 1,
                    "data" => [],
                    "status" => "draft"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/messages',
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

        $response = $this->messaging->listMessages(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MessageList::class, $response);
    }
    public function testMethodCreateEmail(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/messages/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'subject', 'content', 'topics', 'users', 'targets', 'cc', 'bcc', 'attachments', 'draft', 'html', 'scheduledAt', 'replyToEmail', 'replyToName', 'emails'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'subject' => "<SUBJECT>",
                        'content' => "<CONTENT>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'cc' => [],
                        'bcc' => [],
                        'attachments' => [],
                        'draft' => false,
                        'html' => false,
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                        'replyToEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'emails' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createEmail(
            "<MESSAGE_ID>",
            "<SUBJECT>",
            "<CONTENT>",
            topics: [],
            users: [],
            targets: [],
            cc: [],
            bcc: [],
            attachments: [],
            draft: false,
            html: false,
            scheduledAt: "2020-10-15T06:38:00.000+00:00",
            replyToEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            emails: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodUpdateEmail(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/messages/email/%3CMESSAGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'topics', 'users', 'targets', 'subject', 'content', 'draft', 'html', 'cc', 'bcc', 'scheduledAt', 'attachments', 'replyToEmail', 'replyToName', 'emails'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'subject' => "<SUBJECT>",
                        'content' => "<CONTENT>",
                        'draft' => false,
                        'html' => false,
                        'cc' => [],
                        'bcc' => [],
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                        'attachments' => [],
                        'replyToEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'emails' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateEmail(
            "<MESSAGE_ID>",
            topics: [],
            users: [],
            targets: [],
            subject: "<SUBJECT>",
            content: "<CONTENT>",
            draft: false,
            html: false,
            cc: [],
            bcc: [],
            scheduledAt: "2020-10-15T06:38:00.000+00:00",
            attachments: [],
            replyToEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            emails: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodCreatePush(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/messages/push',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'title', 'body', 'topics', 'users', 'targets', 'data', 'action', 'image', 'icon', 'sound', 'color', 'tag', 'badge', 'draft', 'scheduledAt', 'contentAvailable', 'critical', 'priority', 'channelId'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'title' => "<TITLE>",
                        'body' => "<BODY>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'data' => [],
                        'action' => "<ACTION>",
                        'image' => "<ID1:ID2>",
                        'icon' => "<ICON>",
                        'sound' => "<SOUND>",
                        'color' => "<COLOR>",
                        'tag' => "<TAG>",
                        'badge' => 1,
                        'draft' => false,
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                        'contentAvailable' => false,
                        'critical' => false,
                        'priority' => MessagePriority::NORMAL(),
                        'channelId' => "<CHANNEL_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createPush(
            "<MESSAGE_ID>",
            title: "<TITLE>",
            body: "<BODY>",
            topics: [],
            users: [],
            targets: [],
            data: [],
            action: "<ACTION>",
            image: "<ID1:ID2>",
            icon: "<ICON>",
            sound: "<SOUND>",
            color: "<COLOR>",
            tag: "<TAG>",
            badge: 1,
            draft: false,
            scheduledAt: "2020-10-15T06:38:00.000+00:00",
            contentAvailable: false,
            critical: false,
            priority: MessagePriority::NORMAL(),
            channelId: "<CHANNEL_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodUpdatePush(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/messages/push/%3CMESSAGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'topics', 'users', 'targets', 'title', 'body', 'data', 'action', 'image', 'icon', 'sound', 'color', 'tag', 'badge', 'draft', 'scheduledAt', 'contentAvailable', 'critical', 'priority', 'channelId'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'title' => "<TITLE>",
                        'body' => "<BODY>",
                        'data' => [],
                        'action' => "<ACTION>",
                        'image' => "<ID1:ID2>",
                        'icon' => "<ICON>",
                        'sound' => "<SOUND>",
                        'color' => "<COLOR>",
                        'tag' => "<TAG>",
                        'badge' => 1,
                        'draft' => false,
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                        'contentAvailable' => false,
                        'critical' => false,
                        'priority' => MessagePriority::NORMAL(),
                        'channelId' => "<CHANNEL_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updatePush(
            "<MESSAGE_ID>",
            topics: [],
            users: [],
            targets: [],
            title: "<TITLE>",
            body: "<BODY>",
            data: [],
            action: "<ACTION>",
            image: "<ID1:ID2>",
            icon: "<ICON>",
            sound: "<SOUND>",
            color: "<COLOR>",
            tag: "<TAG>",
            badge: 1,
            draft: false,
            scheduledAt: "2020-10-15T06:38:00.000+00:00",
            contentAvailable: false,
            critical: false,
            priority: MessagePriority::NORMAL(),
            channelId: "<CHANNEL_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodCreateSMS(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/messages/sms',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'content', 'topics', 'users', 'targets', 'draft', 'scheduledAt'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'content' => "<CONTENT>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'draft' => false,
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSMS(
            "<MESSAGE_ID>",
            "<CONTENT>",
            topics: [],
            users: [],
            targets: [],
            draft: false,
            scheduledAt: "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodUpdateSMS(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/messages/sms/%3CMESSAGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'topics', 'users', 'targets', 'content', 'draft', 'scheduledAt'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                        'topics' => [],
                        'users' => [],
                        'targets' => [],
                        'content' => "<CONTENT>",
                        'draft' => false,
                        'scheduledAt' => "2020-10-15T06:38:00.000+00:00",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSMS(
            "<MESSAGE_ID>",
            topics: [],
            users: [],
            targets: [],
            content: "<CONTENT>",
            draft: false,
            scheduledAt: "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodGetMessage(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => [],
            "users" => [],
            "targets" => [],
            "deliveredTotal" => 1,
            "data" => [],
            "status" => "draft"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/messages/%3CMESSAGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->getMessage(
            "<MESSAGE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Message::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/messaging/messages/%3CMESSAGE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->delete(
            "<MESSAGE_ID>"
        );

        $this->assertSame($data, $response);
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
                '/messaging/messages/%3CMESSAGE_ID%3E/targets',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['messageId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'messageId' => "<MESSAGE_ID>",
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

        $response = $this->messaging->listTargets(
            "<MESSAGE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TargetList::class, $response);
    }
    public function testMethodListProviders(): void
    {
        $data = [
            "total" => 5,
            "providers" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Mailgun",
                    "provider" => "mailgun",
                    "enabled" => true,
                    "type" => "sms",
                    "credentials" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/providers',
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

        $response = $this->messaging->listProviders(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ProviderList::class, $response);
    }
    public function testMethodCreateAPNSProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/apns',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'authKey', 'authKeyId', 'teamId', 'bundleId', 'sandbox', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'authKey' => "<AUTH_KEY>",
                        'authKeyId' => "<AUTH_KEY_ID>",
                        'teamId' => "<TEAM_ID>",
                        'bundleId' => "<BUNDLE_ID>",
                        'sandbox' => false,
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createAPNSProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            authKey: "<AUTH_KEY>",
            authKeyId: "<AUTH_KEY_ID>",
            teamId: "<TEAM_ID>",
            bundleId: "<BUNDLE_ID>",
            sandbox: false,
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateAPNSProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/apns/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'authKey', 'authKeyId', 'teamId', 'bundleId', 'sandbox'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'authKey' => "<AUTH_KEY>",
                        'authKeyId' => "<AUTH_KEY_ID>",
                        'teamId' => "<TEAM_ID>",
                        'bundleId' => "<BUNDLE_ID>",
                        'sandbox' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateAPNSProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            authKey: "<AUTH_KEY>",
            authKeyId: "<AUTH_KEY_ID>",
            teamId: "<TEAM_ID>",
            bundleId: "<BUNDLE_ID>",
            sandbox: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateAppwriteProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/appwrite',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'qos', 'expiry'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'qos' => 1,
                        'expiry' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createAppwriteProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            enabled: false,
            qos: 1,
            expiry: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateAppwriteProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/appwrite/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'qos', 'expiry'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'qos' => 1,
                        'expiry' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateAppwriteProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            qos: 1,
            expiry: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateFCMProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/fcm',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'serviceAccountJSON', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'serviceAccountJSON' => [],
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createFCMProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            serviceAccountJSON: [],
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateFCMProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/fcm/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'serviceAccountJSON'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'serviceAccountJSON' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateFCMProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            serviceAccountJSON: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateMailgunProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/mailgun',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'apiKey', 'domain', 'isEuRegion', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'apiKey' => "<API_KEY>",
                        'domain' => "example.com",
                        'isEuRegion' => false,
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "email@example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createMailgunProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            apiKey: "<API_KEY>",
            domain: "example.com",
            isEuRegion: false,
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "email@example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateMailgunProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/mailgun/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'apiKey', 'domain', 'isEuRegion', 'enabled', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'apiKey' => "<API_KEY>",
                        'domain' => "example.com",
                        'isEuRegion' => false,
                        'enabled' => false,
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "<REPLY_TO_EMAIL>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateMailgunProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            apiKey: "<API_KEY>",
            domain: "example.com",
            isEuRegion: false,
            enabled: false,
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "<REPLY_TO_EMAIL>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateMsg91Provider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/msg91',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'templateId', 'senderId', 'authKey', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'templateId' => "<TEMPLATE_ID>",
                        'senderId' => "<SENDER_ID>",
                        'authKey' => "<AUTH_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createMsg91Provider(
            "<PROVIDER_ID>",
            "<NAME>",
            templateId: "<TEMPLATE_ID>",
            senderId: "<SENDER_ID>",
            authKey: "<AUTH_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateMsg91Provider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/msg91/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'templateId', 'senderId', 'authKey'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'templateId' => "<TEMPLATE_ID>",
                        'senderId' => "<SENDER_ID>",
                        'authKey' => "<AUTH_KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateMsg91Provider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            templateId: "<TEMPLATE_ID>",
            senderId: "<SENDER_ID>",
            authKey: "<AUTH_KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateResendProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/resend',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'apiKey', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'apiKey' => "<API_KEY>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "email@example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createResendProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            apiKey: "<API_KEY>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "email@example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateResendProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/resend/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'apiKey', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'apiKey' => "<API_KEY>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "<REPLY_TO_EMAIL>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateResendProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            apiKey: "<API_KEY>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "<REPLY_TO_EMAIL>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateSendgridProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/sendgrid',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'apiKey', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'apiKey' => "<API_KEY>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "email@example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSendgridProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            apiKey: "<API_KEY>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "email@example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateSendgridProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/sendgrid/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'apiKey', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'apiKey' => "<API_KEY>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "<REPLY_TO_EMAIL>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSendgridProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            apiKey: "<API_KEY>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "<REPLY_TO_EMAIL>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateSesProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/ses',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'accessKey', 'secretKey', 'region', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'accessKey' => "<ACCESS_KEY>",
                        'secretKey' => "<SECRET_KEY>",
                        'region' => "<REGION>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "email@example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSesProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            accessKey: "<ACCESS_KEY>",
            secretKey: "<SECRET_KEY>",
            region: "<REGION>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "email@example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateSesProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/ses/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'accessKey', 'secretKey', 'region', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'accessKey' => "<ACCESS_KEY>",
                        'secretKey' => "<SECRET_KEY>",
                        'region' => "<REGION>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "<REPLY_TO_EMAIL>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSesProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            accessKey: "<ACCESS_KEY>",
            secretKey: "<SECRET_KEY>",
            region: "<REGION>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "<REPLY_TO_EMAIL>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateSMTPProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/smtp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'host', 'port', 'username', 'password', 'encryption', 'autoTLS', 'mailer', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'host' => "<HOST>",
                        'port' => 1,
                        'username' => "<USERNAME>",
                        'password' => "password",
                        'encryption' => SmtpEncryption::NONE(),
                        'autoTLS' => false,
                        'mailer' => "<MAILER>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "email@example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSMTPProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            "<HOST>",
            port: 1,
            username: "<USERNAME>",
            password: "password",
            encryption: SmtpEncryption::NONE(),
            autoTLS: false,
            mailer: "<MAILER>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "email@example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateSMTPProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/smtp/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'host', 'port', 'username', 'password', 'encryption', 'autoTLS', 'mailer', 'fromName', 'fromEmail', 'replyToName', 'replyToEmail', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'host' => "<HOST>",
                        'port' => 1,
                        'username' => "<USERNAME>",
                        'password' => "password",
                        'encryption' => SmtpEncryption::NONE(),
                        'autoTLS' => false,
                        'mailer' => "<MAILER>",
                        'fromName' => "<FROM_NAME>",
                        'fromEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'replyToEmail' => "<REPLY_TO_EMAIL>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSMTPProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            host: "<HOST>",
            port: 1,
            username: "<USERNAME>",
            password: "password",
            encryption: SmtpEncryption::NONE(),
            autoTLS: false,
            mailer: "<MAILER>",
            fromName: "<FROM_NAME>",
            fromEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            replyToEmail: "<REPLY_TO_EMAIL>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateTelesignProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/telesign',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'from', 'customerId', 'apiKey', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'from' => "+12065550100",
                        'customerId' => "<CUSTOMER_ID>",
                        'apiKey' => "<API_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTelesignProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            from: "+12065550100",
            customerId: "<CUSTOMER_ID>",
            apiKey: "<API_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateTelesignProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/telesign/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'customerId', 'apiKey', 'from'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'customerId' => "<CUSTOMER_ID>",
                        'apiKey' => "<API_KEY>",
                        'from' => "<FROM>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTelesignProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            customerId: "<CUSTOMER_ID>",
            apiKey: "<API_KEY>",
            from: "<FROM>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateTextmagicProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/textmagic',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'from', 'username', 'apiKey', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'from' => "+12065550100",
                        'username' => "<USERNAME>",
                        'apiKey' => "<API_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTextmagicProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            from: "+12065550100",
            username: "<USERNAME>",
            apiKey: "<API_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateTextmagicProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/textmagic/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'username', 'apiKey', 'from'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'username' => "<USERNAME>",
                        'apiKey' => "<API_KEY>",
                        'from' => "<FROM>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTextmagicProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            username: "<USERNAME>",
            apiKey: "<API_KEY>",
            from: "<FROM>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateTwilioProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/twilio',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'from', 'accountSid', 'authToken', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'from' => "<FROM>",
                        'accountSid' => "<ACCOUNT_SID>",
                        'authToken' => "<AUTH_TOKEN>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTwilioProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            from: "<FROM>",
            accountSid: "<ACCOUNT_SID>",
            authToken: "<AUTH_TOKEN>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateTwilioProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/twilio/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'accountSid', 'authToken', 'from'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'accountSid' => "<ACCOUNT_SID>",
                        'authToken' => "<AUTH_TOKEN>",
                        'from' => "<FROM>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTwilioProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            accountSid: "<ACCOUNT_SID>",
            authToken: "<AUTH_TOKEN>",
            from: "<FROM>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodCreateVonageProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/providers/vonage',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'from', 'apiKey', 'apiSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'from' => "+12065550100",
                        'apiKey' => "<API_KEY>",
                        'apiSecret' => "<API_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createVonageProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            from: "+12065550100",
            apiKey: "<API_KEY>",
            apiSecret: "<API_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodUpdateVonageProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/providers/vonage/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId', 'name', 'enabled', 'apiKey', 'apiSecret', 'from'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'apiKey' => "<API_KEY>",
                        'apiSecret' => "<API_SECRET>",
                        'from' => "<FROM>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateVonageProvider(
            "<PROVIDER_ID>",
            name: "<NAME>",
            enabled: false,
            apiKey: "<API_KEY>",
            apiSecret: "<API_SECRET>",
            from: "<FROM>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodGetProvider(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/providers/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->getProvider(
            "<PROVIDER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Provider::class, $response);
    }
    public function testMethodDeleteProvider(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/messaging/providers/%3CPROVIDER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId'], array_keys($params));
                    $expected = [
                        'providerId' => "<PROVIDER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->deleteProvider(
            "<PROVIDER_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListTopics(): void
    {
        $data = [
            "total" => 5,
            "topics" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "events",
                    "description" => "Order status updates sent to customers.",
                    "emailTotal" => 100,
                    "smsTotal" => 100,
                    "pushTotal" => 100,
                    "subscribe" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/topics',
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

        $response = $this->messaging->listTopics(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TopicList::class, $response);
    }
    public function testMethodCreateTopic(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "description" => "Order status updates sent to customers.",
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/topics',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'name', 'subscribe', 'qos', 'expiry', 'description'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                        'name' => "<NAME>",
                        'subscribe' => [],
                        'qos' => 1,
                        'expiry' => 1,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTopic(
            "<TOPIC_ID>",
            "<NAME>",
            subscribe: [],
            qos: 1,
            expiry: 1,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Topic::class, $response);
    }
    public function testMethodGetTopic(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "description" => "Order status updates sent to customers.",
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/topics/%3CTOPIC_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->getTopic(
            "<TOPIC_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Topic::class, $response);
    }
    public function testMethodUpdateTopic(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "description" => "Order status updates sent to customers.",
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/messaging/topics/%3CTOPIC_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'name', 'subscribe', 'qos', 'expiry', 'description'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                        'name' => "<NAME>",
                        'subscribe' => [],
                        'qos' => 1,
                        'expiry' => 1,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTopic(
            "<TOPIC_ID>",
            name: "<NAME>",
            subscribe: [],
            qos: 1,
            expiry: 1,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Topic::class, $response);
    }
    public function testMethodDeleteTopic(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/messaging/topics/%3CTOPIC_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->deleteTopic(
            "<TOPIC_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListSubscribers(): void
    {
        $data = [
            "total" => 5,
            "subscribers" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "targetId" => "259125845563242502",
                    "target" => [
                        "\$id" => "259125845563242502",
                        "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                        "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                        "name" => "Apple iPhone 12",
                        "userId" => "259125845563242502",
                        "providerType" => "email",
                        "identifier" => "token",
                        "expired" => true
                    ],
                    "userId" => "5e5ea5c16897e",
                    "userName" => "Aegon Targaryen",
                    "topicId" => "259125845563242502",
                    "providerType" => "email"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/topics/%3CTOPIC_ID%3E/subscribers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
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

        $response = $this->messaging->listSubscribers(
            "<TOPIC_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\SubscriberList::class, $response);
    }
    public function testMethodCreateSubscriber(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "targetId" => "259125845563242502",
            "target" => [
                "\$id" => "259125845563242502",
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "name" => "Apple iPhone 12",
                "userId" => "259125845563242502",
                "providerType" => "email",
                "identifier" => "token",
                "expired" => true
            ],
            "userId" => "5e5ea5c16897e",
            "userName" => "Aegon Targaryen",
            "topicId" => "259125845563242502",
            "providerType" => "email"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/messaging/topics/%3CTOPIC_ID%3E/subscribers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'subscriberId', 'targetId'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                        'subscriberId' => "<SUBSCRIBER_ID>",
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

        $response = $this->messaging->createSubscriber(
            "<TOPIC_ID>",
            "<SUBSCRIBER_ID>",
            "<TARGET_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Subscriber::class, $response);
    }
    public function testMethodGetSubscriber(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "targetId" => "259125845563242502",
            "target" => [
                "\$id" => "259125845563242502",
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "name" => "Apple iPhone 12",
                "userId" => "259125845563242502",
                "providerType" => "email",
                "identifier" => "token",
                "expired" => true
            ],
            "userId" => "5e5ea5c16897e",
            "userName" => "Aegon Targaryen",
            "topicId" => "259125845563242502",
            "providerType" => "email"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/messaging/topics/%3CTOPIC_ID%3E/subscribers/%3CSUBSCRIBER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'subscriberId'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                        'subscriberId' => "<SUBSCRIBER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->getSubscriber(
            "<TOPIC_ID>",
            "<SUBSCRIBER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Subscriber::class, $response);
    }
    public function testMethodDeleteSubscriber(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/messaging/topics/%3CTOPIC_ID%3E/subscribers/%3CSUBSCRIBER_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['topicId', 'subscriberId'], array_keys($params));
                    $expected = [
                        'topicId' => "<TOPIC_ID>",
                        'subscriberId' => "<SUBSCRIBER_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->deleteSubscriber(
            "<TOPIC_ID>",
            "<SUBSCRIBER_ID>"
        );

        $this->assertSame($data, $response);
    }
}
