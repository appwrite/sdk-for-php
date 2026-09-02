<?php

declare(strict_types=1);

namespace Appwrite;

use Ahc\Jwt\JWT;
use Psr\Http\Client\ClientExceptionInterface;
use Utopia\Client as HttpClient;
use Utopia\Client\Adapter\Curl\Client as CurlAdapter;
use Utopia\Psr7\Request\Factory as RequestFactory;
use Utopia\Psr7\Request\Multipart\Part;

class Client
{
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_HEAD = 'HEAD';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_CONNECT = 'CONNECT';
    public const METHOD_TRACE = 'TRACE';

    public const CHUNK_SIZE = 5 * 1024 * 1024;
    public const JWT_MAX_AGE_SECONDS = 3600;

    /**
     * Is Self Signed Certificates Allowed?
     *
     */
    protected bool $selfSigned = false;

    /**
     * Service host name
     *
     */
    protected string $endpoint = 'https://cloud.appwrite.io/v1';

    /**
     * Global Headers
     *
     */
    protected array $headers = [
        'user-agent' => 'AppwritePHPSDK/30.0.0 ()',
        'x-sdk-name' => 'PHP',
        'x-sdk-platform' => 'server',
        'x-sdk-language' => 'php',
        'x-sdk-version' => '30.0.0',
    ];

    /**
     * Auth/config values used by generated service methods.
     *
     */
    protected array $config = [];

    /**
     * API key for JWT generation
     *
     */
    protected ?string $key = null;

    /**
     * Cached authorization header value
     *
     */
    protected ?string $authorization = null;

    /**
     * Authorization header expiry time
     *
     */
    protected ?\DateTime $authorizationExpiresAt = null;

    /**
     * Timeout in seconds
     *
     */
    protected ?int $timeout = null;

    /**
     * Connect timeout in seconds
     *
     */
    protected ?int $connectTimeout = null;

    /**
     * Reused Utopia HTTP client (follows redirects).
     *
     */
    protected ?HttpClient $httpClient = null;

    /**
     * Reused Utopia HTTP client that does not follow redirects.
     *
     */
    protected ?HttpClient $httpClientNoRedirect = null;

    /**
     * PSR-7 request factory.
     *
     */
    protected RequestFactory $requestFactory;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->requestFactory = new RequestFactory();
        $this->headers['X-Appwrite-Response-Format'] = '2.0.0';
    }

    /**
     * Set Project
     *
     * Your project ID
     *
     *
     */
    public function setProject(string $value): Client
    {
        $this->config['project'] = $value;

        return $this;
    }

    /**
     * Set Key
     *
     * Your secret API key
     *
     *
     */
    public function setKey(string $value): Client
    {
        $this->addHeader('X-Appwrite-Key', $value);
        $this->config['key'] = $value;

        return $this;
    }

    /**
     * Set Organization
     *
     * Your organization ID
     *
     *
     */
    public function setOrganization(string $value): Client
    {
        $this->addHeader('X-Appwrite-Organization', $value);
        $this->config['organization'] = $value;

        return $this;
    }

    /**
     * Set JWT
     *
     * Your secret JSON Web Token
     *
     *
     */
    public function setJWT(string $value): Client
    {
        $this->addHeader('X-Appwrite-JWT', $value);
        $this->config['jwt'] = $value;

        return $this;
    }

    /**
     * Set Bearer
     *
     * The OAuth access token to authenticate with
     *
     *
     */
    public function setBearer(string $value): Client
    {
        $this->addHeader('Authorization', "Bearer {$value}");
        $this->config['bearer'] = $value;
        $this->key = null;
        $this->authorization = null;
        $this->authorizationExpiresAt = null;

        return $this;
    }

    /**
     * Set Locale
     *
     *
     */
    public function setLocale(string $value): Client
    {
        $this->addHeader('X-Appwrite-Locale', $value);
        $this->config['locale'] = $value;

        return $this;
    }

    /**
     * Set Session
     *
     * The user session to authenticate with
     *
     *
     */
    public function setSession(string $value): Client
    {
        $this->addHeader('X-Appwrite-Session', $value);
        $this->config['session'] = $value;

        return $this;
    }

    /**
     * Set ForwardedUserAgent
     *
     * The user agent string of the client that made the request
     *
     *
     */
    public function setForwardedUserAgent(string $value): Client
    {
        $this->addHeader('X-Forwarded-User-Agent', $value);
        $this->config['forwardeduseragent'] = $value;

        return $this;
    }

    /**
     * Set DevKey
     *
     * Your secret dev API key
     *
     *
     */
    public function setDevKey(string $value): Client
    {
        $this->addHeader('X-Appwrite-Dev-Key', $value);
        $this->config['devkey'] = $value;

        return $this;
    }

    /**
     * Set Cookie
     *
     * The user cookie to authenticate with. Used by SDKs that forward an incoming Cookie header in server-side runtimes.
     *
     *
     */
    public function setCookie(string $value): Client
    {
        $this->addHeader('Cookie', $value);
        $this->config['cookie'] = $value;

        return $this;
    }

    /**
     * Set ImpersonateUserId
     *
     * Impersonate a user by ID
     *
     *
     */
    public function setImpersonateUserId(string $value): Client
    {
        $this->addHeader('X-Appwrite-Impersonate-User-Id', $value);
        $this->config['impersonateuserid'] = $value;

        return $this;
    }

    /**
     * Set ImpersonateUserEmail
     *
     * Impersonate a user by email
     *
     *
     */
    public function setImpersonateUserEmail(string $value): Client
    {
        $this->addHeader('X-Appwrite-Impersonate-User-Email', $value);
        $this->config['impersonateuseremail'] = $value;

        return $this;
    }

    /**
     * Set ImpersonateUserPhone
     *
     * Impersonate a user by phone
     *
     *
     */
    public function setImpersonateUserPhone(string $value): Client
    {
        $this->addHeader('X-Appwrite-Impersonate-User-Phone', $value);
        $this->config['impersonateuserphone'] = $value;

        return $this;
    }

    /**
     * Set Signing Key
     *
     * Set a secret key used to self-sign short-lived JWTs for the Authorization header
     *
     *
     */
    public function setSigningKey(string $key): Client
    {
        $this->key = $key;
        $this->authorization = null;
        $this->authorizationExpiresAt = null;
        unset($this->headers['authorization'], $this->config['bearer']);

        return $this;
    }


    public function getConfig(string $key): string
    {
        return $this->config[$key] ?? '';
    }

    /***
     */
    public function setSelfSigned(bool $status = true): Client
    {
        $this->selfSigned = $status;
        $this->resetHttpClient();

        return $this;
    }

    /***
     */
    public function setEndpoint(string $endpoint): Client
    {
        if (!str_starts_with($endpoint, 'http://') && !str_starts_with($endpoint, 'https://')) {
            throw new AppwriteException("Invalid endpoint URL: $endpoint");
        }

        $this->endpoint = $endpoint;
        $this->resetHttpClient();

        return $this;
    }

    /**
     * Set Timeout
     *
     */
    public function setTimeout(int $timeout): Client
    {
        $this->timeout = $timeout;
        $this->resetHttpClient();

        return $this;
    }

    /**
     * Set Connect Timeout
     *
     */
    public function setConnectTimeout(int $connectTimeout): Client
    {
        $this->connectTimeout = $connectTimeout;
        $this->resetHttpClient();

        return $this;
    }

    /**
     */
    public function addHeader(string $key, string $value): Client
    {
        $this->headers[strtolower($key)] = $value;

        return $this;
    }

    /**
     * Get the request headers.
     *
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Get authorization header, generating a new JWT if needed
     *
     */
    private function getAuthorization(): string
    {
        if (\is_string($this->authorization) && $this->authorizationExpiresAt > new \DateTime()) {
            return $this->authorization;
        }

        $jwt = new JWT($this->key, maxAge: self::JWT_MAX_AGE_SECONDS);
        $this->authorization = "Bearer {$jwt->encode([])}";

        $this->authorizationExpiresAt = new \DateTime()->modify('+' . (self::JWT_MAX_AGE_SECONDS - 5) . ' seconds');

        return $this->authorization;
    }

    /**
     * Call
     *
     * Make an API call
     *
     * @throws AppwriteException
     */
    public function call(
        string $method,
        string $path = '',
        array $headers = [],
        array $params = [],
        ?string $responseType = null
    ) {
        if ($this->key !== null) {
            $this->headers['authorization'] = $this->getAuthorization();
        }
        $headers = array_merge($this->headers, $headers);
        $contentType = strtolower((string) ($headers['content-type'] ?? ''));
        if ($contentType === '') {
            unset($headers['content-type']);
        }
        $uri = $this->endpoint . $path;

        try {
            $request = match (true) {
                $method === self::METHOD_GET => $this->requestFactory->query(
                    $method,
                    $uri,
                    $params,
                    $headers
                ),
                $contentType === 'application/json' => $this->requestFactory->json(
                    $method,
                    $uri,
                    $this->prepareParams($params),
                    $headers
                ),
                $contentType === 'multipart/form-data' => $this->requestFactory->multipart(
                    $method,
                    $uri,
                    $this->toMultipartParts($params),
                    $headers
                ),
                default => $this->requestFactory->form(
                    $method,
                    $uri,
                    $params,
                    $headers
                ),
            };

            $response = $this->getHttpClient($responseType !== 'location')->sendRequest($request);
        } catch (ClientExceptionInterface|\JsonException $e) {
            throw new AppwriteException($e->getMessage(), (int) $e->getCode());
        }

        $responseStatus = $response->getStatusCode();
        $responseContentType = $response->getHeaderLine('content-type');
        $responseBody = (string) $response->getBody();

        $warnings = $response->getHeaderLine('x-appwrite-warning');
        if ($warnings) {
            foreach (explode(';', $warnings) as $warning) {
                \trigger_error($warning, E_USER_WARNING);
            }
        }

        if (str_starts_with($responseContentType, 'application/json')) {
            $responseBody = json_decode($responseBody, true);
        }

        if ($responseStatus >= 400) {
            if (is_array($responseBody)) {
                throw new AppwriteException($responseBody['message'], $responseStatus, $responseBody['type'] ?? '', json_encode($responseBody));
            }
            throw new AppwriteException($responseBody, $responseStatus, '', $responseBody);
        }

        if ($responseType === 'location') {
            return $response->getHeaderLine('location');
        }

        return $responseBody;
    }

    /**
     * Flatten params array to PHP multiple format
     *
     */
    protected function flatten(array $data, string $prefix = ''): array
    {
        $output = [];

        foreach ($data as $key => $value) {
            $finalKey = $prefix ? "{$prefix}[{$key}]" : $key;

            if (is_array($value)) {
                $output = array_merge($output, $this->flatten($value, $finalKey));
            } else {
                $output[$finalKey] = $value;
            }
        }

        return $output;
    }

    /**
     * Prepare params for JSON encoding by converting model objects to arrays
     *
     */
    protected function prepareParams($data)
    {
        if (is_array($data)) {
            return array_map($this->prepareParams(...), $data);
        }

        if (is_object($data) && method_exists($data, 'toArray')) {
            return $data->toArray();
        }

        return $data;
    }

    /**
     * Convert flattened params into Utopia multipart parts.
     *
     * @param array<array-key, mixed> $data
     * @return array<array-key, scalar|Part>
     */
    protected function toMultipartParts(array $data): array
    {
        $parts = [];

        foreach ($this->flatten($data) as $name => $value) {
            $name = (string) $name;

            if ($value instanceof Part) {
                $parts[$name] = $value;
                continue;
            }

            if ($value instanceof \CURLFile) {
                $path = $value->getFilename();
                $filename = $value->getPostFilename() !== '' ? $value->getPostFilename() : null;
                $mimeType = $value->getMimeType() !== '' ? $value->getMimeType() : null;

                if (is_file($path)) {
                    $parts[$name] = Part::file($name, $path, $filename, $mimeType);
                } else {
                    $contents = @file_get_contents($path);
                    $parts[$name] = Part::body($name, $contents === false ? '' : $contents, $filename, $mimeType);
                }

                continue;
            }

            $parts[$name] = $value;
        }

        return $parts;
    }

    protected function getHttpClient(bool $followRedirects): HttpClient
    {
        if ($followRedirects) {
            return $this->httpClient ??= $this->createHttpClient(true);
        }

        return $this->httpClientNoRedirect ??= $this->createHttpClient(false);
    }

    protected function resetHttpClient(): void
    {
        $this->httpClient = null;
        $this->httpClientNoRedirect = null;
    }

    protected function createHttpClient(bool $followRedirects): HttpClient
    {
        $adapter = new CurlAdapter(options: [
            CURLOPT_TIMEOUT_MS => 0,
            CURLOPT_USERAGENT => php_uname('s') . '-' . php_uname('r') . ':php-' . phpversion(),
        ])->withConnectionReuse();

        $client = new HttpClient($adapter)->withFollowRedirects($followRedirects);

        if ($this->selfSigned) {
            $client = $client->withSslVerification(false);
        }

        if ($this->timeout !== null) {
            $client = $client->withTimeout($this->timeout);
        }

        if ($this->connectTimeout !== null) {
            return $client->withConnectTimeout($this->connectTimeout);
        }

        return $client;
    }
}
