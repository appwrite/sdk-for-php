<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\VectorsDBIndexType;

class VectorsDB extends Service
{
    /**
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\DatabaseList
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

        return \Appwrite\Models\DatabaseList::from($response);
    }

    /**
     * Create a new Database.
     *
     * @throws AppwriteException
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null): \Appwrite\Models\Database
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

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        if (!is_null($replicas)) {
            $apiParams['replicas'] = $replicas;
        }
        $apiParams['syncMode'] = $syncMode;

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

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * List the dedicated database specifications available on the current plan.
     * Each specification reports its resource limits, pricing, and whether it is
     * enabled for the organization.
     *
     * @throws AppwriteException
     */
    public function listSpecifications(): \Appwrite\Models\DedicatedDatabaseSpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/vectorsdb/specifications'
        );

        $apiParams = [];

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

        return \Appwrite\Models\DedicatedDatabaseSpecificationList::from($response);
    }

    /**
     * List transactions across all databases.
     *
     * @throws AppwriteException
     */
    public function listTransactions(?array $queries = null): \Appwrite\Models\TransactionList
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

        return \Appwrite\Models\TransactionList::from($response);
    }

    /**
     * Create a new transaction.
     *
     * @throws AppwriteException
     */
    public function createTransaction(?int $ttl = null): \Appwrite\Models\Transaction
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

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Get a transaction by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getTransaction(string $transactionId): \Appwrite\Models\Transaction
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/vectorsdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

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

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Update a transaction, to either commit or roll back its operations.
     *
     * @throws AppwriteException
     */
    public function updateTransaction(string $transactionId, ?bool $commit = null, ?bool $rollback = null): \Appwrite\Models\Transaction
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

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Delete a transaction by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create multiple operations in a single transaction.
     *
     * @throws AppwriteException
     */
    public function createOperations(string $transactionId, ?array $operations = null): \Appwrite\Models\Transaction
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

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @throws AppwriteException
     */
    public function get(string $databaseId): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * Update a database by its unique ID.
     *
     * @throws AppwriteException
     */
    public function update(string $databaseId, string $name, ?bool $enabled = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null): \Appwrite\Models\Database
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
        $apiParams['specification'] = $specification;
        $apiParams['replicas'] = $replicas;
        $apiParams['syncMode'] = $syncMode;

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

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * Delete a database by its unique ID. Only API keys with with databases.write
     * scope can delete a database.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all collections that belong to the provided databaseId. You
     * can use the search parameter to filter your results.
     *
     * @throws AppwriteException
     */
    public function listCollections(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\VectorsdbCollectionList
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

        return \Appwrite\Models\VectorsdbCollectionList::from($response);
    }

    /**
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createCollection(string $databaseId, string $collectionId, string $name, int $dimension, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): \Appwrite\Models\VectorsdbCollection
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

        return \Appwrite\Models\VectorsdbCollection::from($response);
    }

    /**
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @throws AppwriteException
     */
    public function getCollection(string $databaseId, string $collectionId): \Appwrite\Models\VectorsdbCollection
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

        return \Appwrite\Models\VectorsdbCollection::from($response);
    }

    /**
     * Update a collection by its unique ID.
     *
     * @throws AppwriteException
     */
    public function updateCollection(string $databaseId, string $collectionId, string $name, ?int $dimension = null, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): \Appwrite\Models\VectorsdbCollection
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

        return \Appwrite\Models\VectorsdbCollection::from($response);
    }

    /**
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results.
     *
     * @throws AppwriteException
     */
    public function listDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\DocumentList
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

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createDocument(string $databaseId, string $collectionId, string $documentId, array $data, ?array $permissions = null): \Appwrite\Models\Document
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

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Create new Documents. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createDocuments(string $databaseId, string $collectionId, array $documents): \Appwrite\Models\DocumentList
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

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Create or update Documents. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function upsertDocuments(string $databaseId, string $collectionId, array $documents, ?string $transactionId = null): \Appwrite\Models\DocumentList
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

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Update all documents that match your queries, if no queries are submitted
     * then all documents are updated. You can pass only specific fields to be
     * updated.
     *
     * @throws AppwriteException
     */
    public function updateDocuments(string $databaseId, string $collectionId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\DocumentList
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

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Bulk delete documents using queries, if no queries are passed then all
     * documents are deleted.
     *
     * @throws AppwriteException
     */
    public function deleteDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\DocumentList
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Get a list of all the user's documents in a given collection using a POST
     * request. This behaves identically to the list documents endpoint but
     * accepts the queries in the request body, allowing much larger `queries`
     * arrays than can fit in a URL query string.
     *
     * @throws AppwriteException
     */
    public function createQuery(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\DocumentList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/vectorsdb/{databaseId}/collections/{collectionId}/documents/query'
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

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @throws AppwriteException
     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\Document
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

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Create or update a Document. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function upsertDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Document
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

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Update a document by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     *
     * @throws AppwriteException
     */
    public function updateDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Document
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

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Delete a document by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List indexes in the collection.
     *
     * @throws AppwriteException
     */
    public function listIndexes(string $databaseId, string $collectionId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\IndexList
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

        return \Appwrite\Models\IndexList::from($response);
    }

    /**
     * Creates an index on the attributes listed. Your index should include all
     * the attributes you will query in a single request.
     * Attributes can be `key`, `fulltext`, and `unique`.
     *
     * @throws AppwriteException
     */
    public function createIndex(string $databaseId, string $collectionId, string $key, VectorsDBIndexType $type, array $attributes, ?array $orders = null, ?array $lengths = null): \Appwrite\Models\Index
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

        return \Appwrite\Models\Index::from($response);
    }

    /**
     * Get index by ID.
     *
     * @throws AppwriteException
     */
    public function getIndex(string $databaseId, string $collectionId, string $key): \Appwrite\Models\Index
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

        return \Appwrite\Models\Index::from($response);
    }

    /**
     * Delete an index.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Trigger a manual failover for a dedicated database with high availability
     * enabled. Promotes a replica to primary. The failover runs asynchronously;
     * poll the database document for status updates. A database left
     * mid-operation also accepts this call as a repair once nothing is driving
     * the operation it is stuck in. Repairing a failover that did not finish, a
     * `failed` database, a stranded upgrade or migrate, or a stranded compute
     * resize additionally requires `targetReplicaId` to name the member to
     * promote, because the default target may be the member that operation
     * already promoted.
     *
     * @throws AppwriteException
     */
    public function createFailover(string $databaseId, ?string $targetReplicaId = null): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/failovers'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['targetReplicaId'] = $targetReplicaId;

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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * List the lifecycle operations recorded for a dedicated database, newest
     * first. Every provision, update, restore, backup and replication action is
     * recorded here with its outcome, including an attempt that was abandoned
     * because another worker took over the database.
     *
     * @throws AppwriteException
     */
    public function listOperations(string $databaseId, ?string $status = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\DedicatedDatabaseOperationList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/operations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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

        return \Appwrite\Models\DedicatedDatabaseOperationList::from($response);
    }

    /**
     * Get high availability status for a dedicated database. Returns replica
     * statuses, replication lag, and sync mode.
     *
     * @throws AppwriteException
     */
    public function getReplicas(string $databaseId): \Appwrite\Models\DedicatedDatabaseReplicas
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/replicas'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\DedicatedDatabaseReplicas::from($response);
    }

    /**
     * Get real-time health and status information for a dedicated database.
     * Returns health status, readiness, uptime, connection info, replica status,
     * and volume information.
     *
     * @throws AppwriteException
     */
    public function getStatus(string $databaseId): \Appwrite\Models\DatabaseStatus
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/vectorsdb/{databaseId}/status'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\DatabaseStatus::from($response);
    }
}
