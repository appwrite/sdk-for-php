<?php

declare(strict_types=1);

namespace Appwrite;

use PHPUnit\Framework\TestCase;
use ReflectionMethod;
use ReflectionProperty;
use Utopia\Client as HttpClient;

final class ClientTest extends TestCase
{
    public function testSetEndpointInvalidThrowsException(): void
    {
        $this->expectException(AppwriteException::class);
        $this->expectExceptionMessage('Invalid endpoint URL: invalid-endpoint');

        $client = new Client();
        $client->setEndpoint('invalid-endpoint');
    }

    public function testSetEndpointWithoutProtocolThrowsException(): void
    {
        $this->expectException(AppwriteException::class);
        $this->expectExceptionMessage('Invalid endpoint URL: example.com');

        $client = new Client();
        $client->setEndpoint('example.com');
    }

    public function testChaining(): void
    {
        $client = new Client();
        $result = $client
            ->setEndpoint('https://example.com')
            ->setSelfSigned(true)
            ->addHeader('X-Test', 'test');

        $this->assertInstanceOf(Client::class, $result);
    }

    public function testSetEndpointReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setEndpoint('https://example.com');
        $this->assertSame($client, $result);
    }

    public function testSetSelfSignedReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setSelfSigned(true);
        $this->assertSame($client, $result);
    }

    public function testAddHeaderReturnsClient(): void
    {
        $client = new Client();
        $result = $client->addHeader('X-Custom', 'value');
        $this->assertSame($client, $result);
    }

    public function testSetProjectReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setProject('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetKeyReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setKey('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetOrganizationReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setOrganization('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetJWTReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setJWT('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetBearerReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setBearer('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetLocaleReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setLocale('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetSessionReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setSession('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetForwardedUserAgentReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setForwardedUserAgent('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetDevKeyReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setDevKey('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetCookieReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setCookie('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetImpersonateUserIdReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setImpersonateUserId('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetImpersonateUserEmailReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setImpersonateUserEmail('test-value');
        $this->assertSame($client, $result);
    }

    public function testSetImpersonateUserPhoneReturnsClient(): void
    {
        $client = new Client();
        $result = $client->setImpersonateUserPhone('test-value');
        $this->assertSame($client, $result);
    }

    public function testHttpClientIsReusedUntilTransportOptionsChange(): void
    {
        $client = new Client();
        $client->setEndpoint('https://example.com/v1');

        $first = $this->httpClient($client, true);
        $this->assertInstanceOf(HttpClient::class, $first);
        $this->assertSame($first, $this->httpClient($client, true));

        $noRedirect = $this->httpClient($client, false);
        $this->assertInstanceOf(HttpClient::class, $noRedirect);
        $this->assertNotSame($first, $noRedirect);

        $client->setTimeout(5);
        $this->assertNull(new ReflectionProperty(Client::class, 'httpClient')->getValue($client));
        $rebuilt = $this->httpClient($client, true);
        $this->assertInstanceOf(HttpClient::class, $rebuilt);
        $this->assertNotSame($first, $rebuilt);
    }

    public function testSelfSignedAndConnectTimeoutResetHttpClient(): void
    {
        $client = new Client();
        $original = $this->httpClient($client, true);

        $client->setSelfSigned(true);
        $this->assertNotSame($original, $this->httpClient($client, true));

        $afterSelfSigned = $this->httpClient($client, true);
        $client->setConnectTimeout(2);
        $this->assertNotSame($afterSelfSigned, $this->httpClient($client, true));
    }

    private function httpClient(Client $client, bool $followRedirects): HttpClient
    {
        $method = new ReflectionMethod(Client::class, 'getHttpClient');

        return $method->invoke($client, $followRedirects);
    }
}
