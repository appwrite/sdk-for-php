<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Tokens extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List all the tokens created for a specific file or bucket. You can use the
     * query params to filter your results.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function list(string $bucketId, string $fileId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/tokens/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new token. A token is linked to a file. Token can be passed as a
     * header or request get parameter.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function createFileToken(string $bucketId, string $fileId, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/tokens/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a token by its unique ID.
     *
     * @param string $tokenId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $tokenId): array
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a token by its unique ID. Use this endpoint to update a token's
     * expiry date.
     *
     * @param string $tokenId
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function update(string $tokenId, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a token by its unique ID.
     *
     * @param string $tokenId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $tokenId): string
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}