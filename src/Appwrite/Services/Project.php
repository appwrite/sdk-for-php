<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\ProtocolId;
use Appwrite\Enums\ServiceId;

class Project extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all API keys from the current project.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\KeyList
     */
    public function listKeys(?array $queries = null, ?bool $total = null): \Appwrite\Models\KeyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/keys'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\KeyList::from($response);

    }

    /**
     * Create a new API key. It's recommended to have multiple API keys with
     * strict scopes for separate functions within your project.
     *
     * @param string $keyId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function createKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/keys'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Key::from($response);

    }

    /**
     * Get a key by its unique ID. 
     *
     * @param string $keyId
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function getKey(string $keyId): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Key::from($response);

    }

    /**
     * Update a key by its unique ID. Use this endpoint to update the name,
     * scopes, or expiration time of an API key.
     *
     * @param string $keyId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\Key
     */
    public function updateKey(string $keyId, string $name, array $scopes, ?string $expire = null): \Appwrite\Models\Key
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Key::from($response);

    }

    /**
     * Delete a key by its unique ID. Once deleted, the key can no longer be used
     * to authenticate API calls.
     *
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteKey(string $keyId): string
    {
        $apiPath = str_replace(
            ['{keyId}'],
            [$keyId],
            '/project/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the project labels. Labels can be used to easily filter projects in
     * an organization.
     *
     * @param array $labels
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateLabels(array $labels): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/labels'
        );

        $apiParams = [];
        $apiParams['labels'] = $labels;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Project::from($response);

    }

    /**
     * Get a list of all platforms in the project. This endpoint returns an array
     * of all platforms and their configurations.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformList
     */
    public function listPlatforms(?array $queries = null, ?bool $total = null): \Appwrite\Models\PlatformList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformList::from($response);

    }

    /**
     * Create a new Android platform for your project. Use this endpoint to
     * register a new Android platform where your users will run your application
     * which will interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $applicationId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformAndroid
     */
    public function createAndroidPlatform(string $platformId, string $name, string $applicationId): \Appwrite\Models\PlatformAndroid
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/android'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['applicationId'] = $applicationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformAndroid::from($response);

    }

    /**
     * Update an Android platform by its unique ID. Use this endpoint to update
     * the platform's name or application ID.
     *
     * @param string $platformId
     * @param string $name
     * @param string $applicationId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformAndroid
     */
    public function updateAndroidPlatform(string $platformId, string $name, string $applicationId): \Appwrite\Models\PlatformAndroid
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/android/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['applicationId'] = $applicationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformAndroid::from($response);

    }

    /**
     * Create a new Apple platform for your project. Use this endpoint to register
     * a new Apple platform where your users will run your application which will
     * interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $bundleIdentifier
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformApple
     */
    public function createApplePlatform(string $platformId, string $name, string $bundleIdentifier): \Appwrite\Models\PlatformApple
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/apple'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['bundleIdentifier'] = $bundleIdentifier;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformApple::from($response);

    }

    /**
     * Update an Apple platform by its unique ID. Use this endpoint to update the
     * platform's name or bundle identifier.
     *
     * @param string $platformId
     * @param string $name
     * @param string $bundleIdentifier
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformApple
     */
    public function updateApplePlatform(string $platformId, string $name, string $bundleIdentifier): \Appwrite\Models\PlatformApple
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/apple/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['bundleIdentifier'] = $bundleIdentifier;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformApple::from($response);

    }

    /**
     * Create a new Linux platform for your project. Use this endpoint to register
     * a new Linux platform where your users will run your application which will
     * interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformLinux
     */
    public function createLinuxPlatform(string $platformId, string $name, string $packageName): \Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/linux'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageName'] = $packageName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformLinux::from($response);

    }

    /**
     * Update a Linux platform by its unique ID. Use this endpoint to update the
     * platform's name or package name.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformLinux
     */
    public function updateLinuxPlatform(string $platformId, string $name, string $packageName): \Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/linux/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageName'] = $packageName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformLinux::from($response);

    }

    /**
     * Create a new web platform for your project. Use this endpoint to register a
     * new platform where your users will run your application which will interact
     * with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $hostname
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb
     */
    public function createWebPlatform(string $platformId, string $name, string $hostname): \Appwrite\Models\PlatformWeb
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/web'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['hostname'] = $hostname;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWeb::from($response);

    }

    /**
     * Update a web platform by its unique ID. Use this endpoint to update the
     * platform's name or hostname.
     *
     * @param string $platformId
     * @param string $name
     * @param string $hostname
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb
     */
    public function updateWebPlatform(string $platformId, string $name, string $hostname): \Appwrite\Models\PlatformWeb
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/web/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['hostname'] = $hostname;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWeb::from($response);

    }

    /**
     * Create a new Windows platform for your project. Use this endpoint to
     * register a new Windows platform where your users will run your application
     * which will interact with the Appwrite API.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageIdentifierName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWindows
     */
    public function createWindowsPlatform(string $platformId, string $name, string $packageIdentifierName): \Appwrite\Models\PlatformWindows
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/platforms/windows'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageIdentifierName'] = $packageIdentifierName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWindows::from($response);

    }

    /**
     * Update a Windows platform by its unique ID. Use this endpoint to update the
     * platform's name or package identifier name.
     *
     * @param string $platformId
     * @param string $name
     * @param string $packageIdentifierName
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWindows
     */
    public function updateWindowsPlatform(string $platformId, string $name, string $packageIdentifierName): \Appwrite\Models\PlatformWindows
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/windows/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;
        $apiParams['packageIdentifierName'] = $packageIdentifierName;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PlatformWindows::from($response);

    }

    /**
     * Get a platform by its unique ID. This endpoint returns the platform's
     * details, including its name, type, and key configurations.
     *
     * @param string $platformId
     * @throws AppwriteException
     * @return \Appwrite\Models\PlatformWeb|\Appwrite\Models\PlatformApple|\Appwrite\Models\PlatformAndroid|\Appwrite\Models\PlatformWindows|\Appwrite\Models\PlatformLinux
     */
    public function getPlatform(string $platformId): \Appwrite\Models\PlatformWeb|\Appwrite\Models\PlatformApple|\Appwrite\Models\PlatformAndroid|\Appwrite\Models\PlatformWindows|\Appwrite\Models\PlatformLinux
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        if (($response['type'] ?? null) === 'web') {
            return \Appwrite\Models\PlatformWeb::from($response);
        }

        if (($response['type'] ?? null) === 'apple') {
            return \Appwrite\Models\PlatformApple::from($response);
        }

        if (($response['type'] ?? null) === 'android') {
            return \Appwrite\Models\PlatformAndroid::from($response);
        }

        if (($response['type'] ?? null) === 'windows') {
            return \Appwrite\Models\PlatformWindows::from($response);
        }

        if (($response['type'] ?? null) === 'linux') {
            return \Appwrite\Models\PlatformLinux::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');

    }

    /**
     * Delete a platform by its unique ID. This endpoint removes the platform and
     * all its configurations from the project.
     *
     * @param string $platformId
     * @throws AppwriteException
     * @return string
     */
    public function deletePlatform(string $platformId): string
    {
        $apiPath = str_replace(
            ['{platformId}'],
            [$platformId],
            '/project/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['platformId'] = $platformId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the status of a specific protocol. Use this endpoint to enable or
     * disable a protocol in your project. 
     *
     * @param ProtocolId $protocolId
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateProtocolStatus(ProtocolId $protocolId, bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{protocolId}'],
            [$protocolId],
            '/project/protocols/{protocolId}/status'
        );

        $apiParams = [];
        $apiParams['protocolId'] = $protocolId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Project::from($response);

    }

    /**
     * Update the status of a specific service. Use this endpoint to enable or
     * disable a service in your project. 
     *
     * @param ServiceId $serviceId
     * @param bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Project
     */
    public function updateServiceStatus(ServiceId $serviceId, bool $enabled): \Appwrite\Models\Project
    {
        $apiPath = str_replace(
            ['{serviceId}'],
            [$serviceId],
            '/project/services/{serviceId}/status'
        );

        $apiParams = [];
        $apiParams['serviceId'] = $serviceId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Project::from($response);

    }

    /**
     * Get a list of all project environment variables.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\VariableList
     */
    public function listVariables(?array $queries = null, ?bool $total = null): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VariableList::from($response);

    }

    /**
     * Create a new project environment variable. These variables can be accessed
     * by all functions and sites in the project.
     *
     * @param string $variableId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function createVariable(string $variableId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Get a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function getVariable(string $variableId): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Update variable by its unique ID.
     *
     * @param string $variableId
     * @param ?string $key
     * @param ?string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function updateVariable(string $variableId, ?string $key = null, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);

    }

    /**
     * Delete a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return string
     */
    public function deleteVariable(string $variableId): string
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
