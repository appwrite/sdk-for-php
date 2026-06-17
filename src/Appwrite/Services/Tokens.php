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
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ResourceTokenList
     */
    public function list(string $bucketId, string $fileId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ResourceTokenList
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

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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

        return \Appwrite\Models\ResourceTokenList::from($response);

    }

    /**
     * Create a new token. A token is linked to a file. Token can be passed as a
     * request URL search parameter.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\ResourceToken
     */
    public function createFileToken(string $bucketId, string $fileId, ?string $expire = null): \Appwrite\Models\ResourceToken
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ResourceToken::from($response);

    }

    /**
     * Get a token by its unique ID.
     *
     * @param string $tokenId
     * @throws AppwriteException
     * @return \Appwrite\Models\ResourceToken
     */
    public function get(string $tokenId): \Appwrite\Models\ResourceToken
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

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

        return \Appwrite\Models\ResourceToken::from($response);

    }

    /**
     * Update a token by its unique ID. Use this endpoint to update a token's
     * expiry date.
     *
     * @param string $tokenId
     * @param ?string $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\ResourceToken
     */
    public function update(string $tokenId, ?string $expire = null): \Appwrite\Models\ResourceToken
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

        return \Appwrite\Models\ResourceToken::from($response);

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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
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
