<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MessagingTest extends TestCase {
    private $client;
    private $messaging;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->messaging = new Messaging($this->client);
    }

    public function testMethodListMessages(): void {

        $data = array(
            "total" => 5,
            "messages" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listMessages(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmail(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createEmail(
            "[MESSAGE_ID]",
            "[SUBJECT]",
            "[CONTENT]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmail(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateEmail(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePush(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createPush(
            "[MESSAGE_ID]",
            "[TITLE]",
            "[BODY]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePush(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updatePush(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSMS(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createSMS(
            "[MESSAGE_ID]",
            "[CONTENT]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSMS(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateSMS(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetMessage(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "providerType" => "email",
            "topics" => array(),
            "users" => array(),
            "targets" => array(),
            "deliveredTotal" => 1,
            "data" => array(),
            "status" => "Message status can be one of the following: processing, sent, cancelled, failed.",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->getMessage(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->delete(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListMessageLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listMessageLogs(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTargets(): void {

        $data = array(
            "total" => 5,
            "targets" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listTargets(
            "[MESSAGE_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListProviders(): void {

        $data = array(
            "total" => 5,
            "providers" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listProviders(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateAPNSProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createAPNSProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAPNSProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateAPNSProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFCMProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createFCMProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateFCMProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateFCMProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMailgunProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createMailgunProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMailgunProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateMailgunProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMsg91Provider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createMsg91Provider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMsg91Provider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateMsg91Provider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSendgridProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createSendgridProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSendgridProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateSendgridProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSMTPProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createSMTPProvider(
            "[PROVIDER_ID]",
            "[NAME]",
            "[HOST]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSMTPProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateSMTPProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTelesignProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createTelesignProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTelesignProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateTelesignProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTextmagicProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createTextmagicProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTextmagicProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateTextmagicProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTwilioProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createTwilioProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTwilioProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateTwilioProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVonageProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createVonageProvider(
            "[PROVIDER_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateVonageProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateVonageProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetProvider(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Mailgun",
            "provider" => "mailgun",
            "enabled" => true,
            "type" => "sms",
            "credentials" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->getProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteProvider(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->deleteProvider(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListProviderLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listProviderLogs(
            "[PROVIDER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSubscriberLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listSubscriberLogs(
            "[SUBSCRIBER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTopics(): void {

        $data = array(
            "total" => 5,
            "topics" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listTopics(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTopic(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "total" => 100,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createTopic(
            "[TOPIC_ID]",
            "[NAME]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTopic(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "total" => 100,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->getTopic(
            "[TOPIC_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTopic(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "events",
            "total" => 100,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->updateTopic(
            "[TOPIC_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteTopic(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->deleteTopic(
            "[TOPIC_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTopicLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listTopicLogs(
            "[TOPIC_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSubscribers(): void {

        $data = array(
            "total" => 5,
            "subscribers" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->listSubscribers(
            "[TOPIC_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSubscriber(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "targetId" => "259125845563242502",
            "target" => array(),
            "userId" => "5e5ea5c16897e",
            "userName" => "Aegon Targaryen",
            "topicId" => "259125845563242502",
            "providerType" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->createSubscriber(
            "[TOPIC_ID]",
            "[SUBSCRIBER_ID]",
            "[TARGET_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSubscriber(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "targetId" => "259125845563242502",
            "target" => array(),
            "userId" => "5e5ea5c16897e",
            "userName" => "Aegon Targaryen",
            "topicId" => "259125845563242502",
            "providerType" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->getSubscriber(
            "[TOPIC_ID]",
            "[SUBSCRIBER_ID]"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSubscriber(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->deleteSubscriber(
            "[TOPIC_ID]",
            "[SUBSCRIBER_ID]"
        );

        $this->assertSame($data, $response);
    }

}