<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class UsersTest extends TestCase {
    private $client;
    private $users;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->users = new Users($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "users" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->list(
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

        $response = $this->users->create(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateArgon2User(): void {

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

        $response = $this->users->createArgon2User(
            "<USER_ID>",
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBcryptUser(): void {

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

        $response = $this->users->createBcryptUser(
            "<USER_ID>",
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

        $response = $this->users->listIdentities(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteIdentity(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->deleteIdentity(
            "<IDENTITY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMD5User(): void {

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

        $response = $this->users->createMD5User(
            "<USER_ID>",
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePHPassUser(): void {

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

        $response = $this->users->createPHPassUser(
            "<USER_ID>",
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateScryptUser(): void {

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

        $response = $this->users->createScryptUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            "<PASSWORD_SALT>",
            1,
            1,
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateScryptModifiedUser(): void {

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

        $response = $this->users->createScryptModifiedUser(
            "<USER_ID>",
            "email@example.com",
            "password",
            "<PASSWORD_SALT>",
            "<PASSWORD_SALT_SEPARATOR>",
            "<PASSWORD_SIGNER_KEY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSHAUser(): void {

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

        $response = $this->users->createSHAUser(
            "<USER_ID>",
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
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

        $response = $this->users->get(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->delete(
            "<USER_ID>"
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

        $response = $this->users->updateEmail(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateJWT(): void {

        $data = array(
            "jwt" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->createJWT(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateLabels(): void {

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

        $response = $this->users->updateLabels(
            "<USER_ID>",
            array()
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

        $response = $this->users->listLogs(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListMemberships(): void {

        $data = array(
            "total" => 5,
            "memberships" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->listMemberships(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMfa(): void {

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

        $response = $this->users->updateMfa(
            "<USER_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteMfaAuthenticator(): void {

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

        $response = $this->users->deleteMfaAuthenticator(
            "<USER_ID>",
            "totp"
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

        $response = $this->users->listMfaFactors(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->getMfaRecoveryCodes(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->updateMfaRecoveryCodes(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMfaRecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->createMfaRecoveryCodes(
            "<USER_ID>"
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

        $response = $this->users->updateName(
            "<USER_ID>",
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

        $response = $this->users->updatePassword(
            "<USER_ID>",
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

        $response = $this->users->updatePhone(
            "<USER_ID>",
            "+12065550100"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPrefs(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->getPrefs(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePrefs(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->updatePrefs(
            "<USER_ID>",
            array()
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

        $response = $this->users->listSessions(
            "<USER_ID>"
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

        $response = $this->users->createSession(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSessions(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->deleteSessions(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSession(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->deleteSession(
            "<USER_ID>",
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

        $response = $this->users->updateStatus(
            "<USER_ID>",
            true
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

        $response = $this->users->listTargets(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTarget(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Aegon apple token",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->createTarget(
            "<USER_ID>",
            "<TARGET_ID>",
            "email",
            "<IDENTIFIER>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTarget(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Aegon apple token",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->getTarget(
            "<USER_ID>",
            "<TARGET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTarget(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Aegon apple token",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->updateTarget(
            "<USER_ID>",
            "<TARGET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteTarget(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->users->deleteTarget(
            "<USER_ID>",
            "<TARGET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateToken(): void {

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

        $response = $this->users->createToken(
            "<USER_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmailVerification(): void {

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

        $response = $this->users->updateEmailVerification(
            "<USER_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhoneVerification(): void {

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

        $response = $this->users->updatePhoneVerification(
            "<USER_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

}
