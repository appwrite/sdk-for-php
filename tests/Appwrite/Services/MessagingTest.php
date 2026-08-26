<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class MessagingTest extends TestCase
{
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->listMessages();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createEmail(
            "<MESSAGE_ID>",
            "<SUBJECT>",
            "<CONTENT>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateEmail(
            "<MESSAGE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createPush(
            "<MESSAGE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updatePush(
            "<MESSAGE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSMS(
            "<MESSAGE_ID>",
            "<CONTENT>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSMS(
            "<MESSAGE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->listTargets(
            "<MESSAGE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->listProviders();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createAPNSProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateAPNSProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createFCMProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateFCMProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createMailgunProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateMailgunProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createMsg91Provider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateMsg91Provider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createResendProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateResendProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSendgridProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSendgridProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSesProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSesProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createSMTPProvider(
            "<PROVIDER_ID>",
            "<NAME>",
            "<HOST>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateSMTPProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTelesignProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTelesignProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTextmagicProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTextmagicProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTwilioProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTwilioProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createVonageProvider(
            "<PROVIDER_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateVonageProvider(
            "<PROVIDER_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
                    "emailTotal" => 100,
                    "smsTotal" => 100,
                    "pushTotal" => 100,
                    "subscribe" => []
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->listTopics();

        $this->assertInstanceOf(\Appwrite\Models\TopicList::class, $response);
    }
    public function testMethodCreateTopic(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->createTopic(
            "<TOPIC_ID>",
            "<NAME>"
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
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "emailTotal" => 100,
            "smsTotal" => 100,
            "pushTotal" => 100,
            "subscribe" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->updateTopic(
            "<TOPIC_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Topic::class, $response);
    }
    public function testMethodDeleteTopic(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->messaging->listSubscribers(
            "<TOPIC_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
