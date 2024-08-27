<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AccountTest extends TestCase {
    private $client;
    private $account;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->account = new Account($this->client);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->get(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->create(
            "<USER_ID>",
            "email@example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmail(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateEmail(
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListIdentities(): void {

        $data = array(
            "total" => 5,
            "identities" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listIdentities(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteIdentity(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteIdentity(
            "<IDENTITY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateJWT(): void {

        $data = array(
            "jwt" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createJWT(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listLogs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMFA(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMFA(
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMfaAuthenticator(): void {

        $data = array(
            "secret" => "1",
            "uri" => "1",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMfaAuthenticator(
            "totp"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMfaAuthenticator(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMfaAuthenticator(
            "totp",
            "<OTP>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteMfaAuthenticator(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteMfaAuthenticator(
            "totp"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMfaChallenge(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "expire" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMfaChallenge(
            "email"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMfaChallenge(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMfaChallenge(
            "<CHALLENGE_ID>",
            "<OTP>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListMfaFactors(): void {

        $data = array(
            "totp" => true,
            "phone" => true,
            "email" => true,
            "recoveryCode" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listMfaFactors(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getMfaRecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMfaRecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMfaRecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateName(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateName(
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePassword(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePassword(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhone(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhone(
            "+12065550100",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPrefs(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getPrefs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePrefs(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePrefs(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecovery(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createRecovery(
            "email@example.com",
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecovery(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateRecovery(
            "<USER_ID>",
            "<SECRET>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSessions(): void {

        $data = array(
            "total" => 5,
            "sessions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listSessions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSessions(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteSessions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateAnonymousSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createAnonymousSession(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailPasswordSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createEmailPasswordSession(
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMagicURLSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMagicURLSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhoneSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhoneSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSession(): void {

        $data = array(
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
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSession(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateStatus(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createEmailToken(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMagicURLToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMagicURLToken(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateOAuth2Token(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createOAuth2Token(
            "amazon"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePhoneToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createPhoneToken(
            "<USER_ID>",
            "+12065550100"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createVerification(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePhoneVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createPhoneVerification(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhoneVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhoneVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

}
