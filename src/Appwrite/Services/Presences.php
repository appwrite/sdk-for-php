<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Presences extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * List presence logs. Expired entries are filtered out automatically.
     * 
     *
     * @param ?array $queries
     * @param ?bool $total
     * @param ?int $ttl
     * @throws AppwriteException
     * @return \Appwrite\Models\PresenceList
     */
    public function list(?array $queries = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\PresenceList
    {
        $apiPath = str_replace(
            [],
            [],
            '/presences'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
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

        return \Appwrite\Models\PresenceList::from($response);

    }

    /**
     * Get a presence log by its unique ID. Entries whose `expiresAt` is in the
     * past are treated as not found.
     * 
     *
     * @param string $presenceId
     * @throws AppwriteException
     * @return \Appwrite\Models\Presence
     */
    public function get(string $presenceId): \Appwrite\Models\Presence
    {
        $apiPath = str_replace(
            ['{presenceId}'],
            [$presenceId],
            '/presences/{presenceId}'
        );

        $apiParams = [];
        $apiParams['presenceId'] = $presenceId;

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

        return \Appwrite\Models\Presence::from($response);

    }

    /**
     * Create or update a presence log by its user ID.
     * 
     *
     * @param string $presenceId
     * @param string $userId
     * @param string $status
     * @param ?array $permissions
     * @param ?string $expiresAt
     * @param ?array $metadata
     * @throws AppwriteException
     * @return \Appwrite\Models\Presence
     */
    public function upsert(string $presenceId, string $userId, string $status, ?array $permissions = null, ?string $expiresAt = null, ?array $metadata = null): \Appwrite\Models\Presence
    {
        $apiPath = str_replace(
            ['{presenceId}'],
            [$presenceId],
            '/presences/{presenceId}'
        );

        $apiParams = [];
        $apiParams['presenceId'] = $presenceId;
        $apiParams['userId'] = $userId;
        $apiParams['status'] = $status;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expiresAt'] = $expiresAt;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

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

        return \Appwrite\Models\Presence::from($response);

    }

    /**
     * Update a presence log by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     * 
     *
     * @param string $presenceId
     * @param string $userId
     * @param ?string $status
     * @param ?string $expiresAt
     * @param ?array $metadata
     * @param ?array $permissions
     * @param ?bool $purge
     * @throws AppwriteException
     * @return \Appwrite\Models\Presence
     */
    public function updatePresence(string $presenceId, string $userId, ?string $status = null, ?string $expiresAt = null, ?array $metadata = null, ?array $permissions = null, ?bool $purge = null): \Appwrite\Models\Presence
    {
        $apiPath = str_replace(
            ['{presenceId}'],
            [$presenceId],
            '/presences/{presenceId}'
        );

        $apiParams = [];
        $apiParams['presenceId'] = $presenceId;
        $apiParams['userId'] = $userId;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expiresAt'] = $expiresAt;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($purge)) {
            $apiParams['purge'] = $purge;
        }

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

        return \Appwrite\Models\Presence::from($response);

    }

    /**
     * Delete a presence log by its unique ID.
     * 
     *
     * @param string $presenceId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $presenceId): string
    {
        $apiPath = str_replace(
            ['{presenceId}'],
            [$presenceId],
            '/presences/{presenceId}'
        );

        $apiParams = [];
        $apiParams['presenceId'] = $presenceId;

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
