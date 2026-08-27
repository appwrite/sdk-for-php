<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Presences extends Service
{
    /**
     * List presence logs. Expired entries are filtered out automatically.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
     */
    public function update(string $presenceId, string $userId, ?string $status = null, ?string $expiresAt = null, ?array $metadata = null, ?array $permissions = null, ?bool $purge = null): \Appwrite\Models\Presence
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
