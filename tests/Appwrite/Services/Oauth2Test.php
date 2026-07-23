<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class Oauth2Test extends TestCase
{
    private $client;
    private $oauth2;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->oauth2 = new Oauth2($this->client);
    }

    public function testMethodApprove(): void
    {
        $data = array(
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->approve(
            "<GRANT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Approve::class, $response);
    }

    public function testMethodAuthorize(): void
    {
        $data = array(
            "grantId" => "5e5ea5c16897e",
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->authorize();

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Authorize::class, $response);
    }

    public function testMethodAuthorizePost(): void
    {
        $data = array(
            "grantId" => "5e5ea5c16897e",
            "redirectUrl" => "https://example.com/callback?code=abcde&state=fghij"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->authorizePost();

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Authorize::class, $response);
    }

    public function testMethodCreateDeviceAuthorization(): void
    {
        $data = array(
            "device_code" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
            "user_code" => "ABCD-EFGH",
            "verification_uri" => "https://cloud.appwrite.io/console/oauth2/device",
            "verification_uri_complete" => "https://cloud.appwrite.io/console/oauth2/device?user_code=ABCD-EFGH",
            "expires_in" => 900,
            "interval" => 5
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createDeviceAuthorization();

        $this->assertInstanceOf(\Appwrite\Models\Oauth2DeviceAuthorization::class, $response);
    }

    public function testMethodCreateGrant(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "scopes" => array(),
            "resources" => array(),
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "prompt" => "login",
            "redirectUri" => "https://example.com/callback",
            "authTime" => 1592981250,
            "expire" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "appId" => "5e5ea5c16897e",
            "scopes" => array(),
            "resources" => array(),
            "authorizationDetails" => "[{\"type\":\"calendar\",\"identifier\":\"primary\",\"actions\":[\"read_events\",\"create_event\"]}]",
            "prompt" => "login",
            "redirectUri" => "https://example.com/callback",
            "authTime" => 1592981250,
            "expire" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->getGrant(
            "<GRANT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Grant::class, $response);
    }

    public function testMethodListOrganizations(): void
    {
        $data = array(
            "total" => 5,
            "organizations" => array(
                array(
                    "\$id" => "5e5ea5c16897e"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->listOrganizations();

        $this->assertInstanceOf(\Appwrite\Models\Oauth2OrganizationList::class, $response);
    }

    public function testMethodCreatePAR(): void
    {
        $data = array(
            "request_uri" => "urn:appwrite:oauth2:request:5e5ea5c16897e",
            "expires_in" => 600
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createPAR(
            "<CLIENT_ID>",
            "https://example.com",
            "code"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2PAR::class, $response);
    }

    public function testMethodListProjects(): void
    {
        $data = array(
            "total" => 5,
            "projects" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "region" => "fra",
                    "endpoint" => "https://fra.cloud.appwrite.io/v1"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->listProjects();

        $this->assertInstanceOf(\Appwrite\Models\Oauth2ProjectList::class, $response);
    }

    public function testMethodReject(): void
    {
        $data = array(
            "redirectUrl" => "https://example.com/callback?error=access_denied&state=fghij"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->revoke(
            "<TOKEN>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateToken(): void
    {
        $data = array(
            "access_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
            "token_type" => "Bearer",
            "expires_in" => 3600,
            "refresh_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
            "scope" => "openid email profile"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->oauth2->createToken(
            "<GRANT_TYPE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Token::class, $response);
    }

}
