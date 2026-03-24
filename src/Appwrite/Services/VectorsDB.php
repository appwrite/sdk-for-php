<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Model;
use Appwrite\Enums\VectorsDBIndexType;
use Appwrite\Enums\OrderBy;

class VectorsDB extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * @param string $databaseId
     * @param string $name
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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
     * @param array $texts
     * @param ?Model $model
     * @throws AppwriteException
     * @return array
     */
    public function createTextEmbeddings(array $texts, ?Model $model = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb/embeddings/text'
        );

        $apiParams = [];
        $apiParams['texts'] = $texts;

        if (!is_null($model)) {
            $apiParams['model'] = $model;
        }

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
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listTransactions(?array $queries = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb/transactions'
        );

        $apiParams = [];

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
     * @param ?int $ttl
     * @throws AppwriteException
     * @return array
     */
    public function createTransaction(?int $ttl = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb/transactions'
        );

        $apiParams = [];

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
        }

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
     * @param string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function getTransaction(string $transactionId): array
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/vectorsdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $transactionId
     * @param ?bool $commit
     * @param ?bool $rollback
     * @throws AppwriteException
     * @return array
     */
    public function updateTransaction(string $transactionId, ?bool $commit = null, ?bool $rollback = null): array
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/vectorsdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        if (!is_null($commit)) {
            $apiParams['commit'] = $commit;
        }

        if (!is_null($rollback)) {
            $apiParams['rollback'] = $rollback;
        }

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
     * @param string $transactionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTransaction(string $transactionId): string
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/vectorsdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $transactionId
     * @param ?array $operations
     * @throws AppwriteException
     * @return array
     */
    public function createOperations(string $transactionId, ?array $operations = null): array
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/vectorsdb/transactions/{transactionId}/operations'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        if (!is_null($operations)) {
            $apiParams['operations'] = $operations;
        }

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
     * @param string $databaseId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $databaseId): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $name
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function update(string $databaseId, string $name, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listCollections(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/collections'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param int $dimension
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function createCollection(string $databaseId, string $collectionId, string $name, int $dimension, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/collections'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;
        $apiParams['dimension'] = $dimension;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return array
     */
    public function getCollection(string $databaseId, string $collectionId): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param ?int $dimension
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateCollection(string $databaseId, string $collectionId, string $name, ?int $dimension = null, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;

        if (!is_null($dimension)) {
            $apiParams['dimension'] = $dimension;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteCollection(string $databaseId, string $collectionId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?string $transactionId
     * @param ?bool $total
     * @param ?int $ttl
     * @throws AppwriteException
     * @return array
     */
    public function listDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param ?array $permissions
     * @throws AppwriteException
     * @return array
     */
    public function createDocument(string $databaseId, string $collectionId, string $documentId, array $data, ?array $permissions = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['data'] = $data;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

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
     * @param string $databaseId
     * @param string $collectionId
     * @param array $documents
     * @throws AppwriteException
     * @return array
     */
    public function createDocuments(string $databaseId, string $collectionId, array $documents): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documents'] = $documents;

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
     * @param string $databaseId
     * @param string $collectionId
     * @param array $documents
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function upsertDocuments(string $databaseId, string $collectionId, array $documents, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documents'] = $documents;

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $data
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function updateDocuments(string $databaseId, string $collectionId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

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
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function deleteDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId, ?array $queries = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function upsertDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function updateDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteDocument(string $databaseId, string $collectionId, string $documentId, ?string $transactionId = null): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listIndexes(string $databaseId, string $collectionId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param VectorsDBIndexType $type
     * @param array $attributes
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return array
     */
    public function createIndex(string $databaseId, string $collectionId, string $key, VectorsDBIndexType $type, array $attributes, ?array $orders = null, ?array $lengths = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['type'] = $type;
        $apiParams['attributes'] = $attributes;

        if (!is_null($orders)) {
            $apiParams['orders'] = $orders;
        }

        if (!is_null($lengths)) {
            $apiParams['lengths'] = $lengths;
        }

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
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array
     */
    public function getIndex(string $databaseId, string $collectionId, string $key): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/vectorsdb/{databaseId}/collections/{collectionId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string
     */
    public function deleteIndex(string $databaseId, string $collectionId, string $key): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/vectorsdb/{databaseId}/collections/{collectionId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

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