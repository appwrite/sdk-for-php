<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\DocumentsDBIndexType;
use Appwrite\Enums\OrderBy;

class DocumentsDB extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
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
            '/documentsdb'
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
     * Create a new Database.
     * 
     *
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
            '/documentsdb'
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
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listTransactions(?array $queries = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/documentsdb/transactions'
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
            '/documentsdb/transactions'
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
            '/documentsdb/transactions/{transactionId}'
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
            '/documentsdb/transactions/{transactionId}'
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
            '/documentsdb/transactions/{transactionId}'
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
            '/documentsdb/transactions/{transactionId}/operations'
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
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $databaseId): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/documentsdb/{databaseId}'
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
     * Update a database by its unique ID.
     *
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
            '/documentsdb/{databaseId}'
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
     * Delete a database by its unique ID. Only API keys with with databases.write
     * scope can delete a database.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/documentsdb/{databaseId}'
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
     * Get a list of all collections that belong to the provided databaseId. You
     * can use the search parameter to filter your results.
     *
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
            '/documentsdb/{databaseId}/collections'
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
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @param ?array $attributes
     * @param ?array $indexes
     * @throws AppwriteException
     * @return array
     */
    public function createCollection(string $databaseId, string $collectionId, string $name, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null, ?array $attributes = null, ?array $indexes = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/documentsdb/{databaseId}/collections'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;
        $apiParams['permissions'] = $permissions;

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($attributes)) {
            $apiParams['attributes'] = $attributes;
        }

        if (!is_null($indexes)) {
            $apiParams['indexes'] = $indexes;
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
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}'
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
     * Update a collection by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateCollection(string $databaseId, string $collectionId, string $name, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/documentsdb/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;

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
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}'
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
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Create new Documents. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Create or update Documents. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     * 
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Update all documents that match your queries, if no queries are submitted
     * then all documents are updated. You can pass only specific fields to be
     * updated.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Bulk delete documents using queries, if no queries are passed then all
     * documents are deleted.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents'
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
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
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
     * Create or update a Document. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#documentsDBCreateCollection)
     * API or directly from your database console.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
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
     * Update a document by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
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
     * Delete a document by its unique ID.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}'
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
     * Decrement a specific column of a row by a given value.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param string $attribute
     * @param ?float $value
     * @param ?float $min
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function decrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $min = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}', '{attribute}'],
            [$databaseId, $collectionId, $documentId, $attribute],
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/decrement'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['attribute'] = $attribute;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
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
     * Increment a specific column of a row by a given value.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param string $attribute
     * @param ?float $value
     * @param ?float $max
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function incrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $max = null, ?string $transactionId = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}', '{attribute}'],
            [$databaseId, $collectionId, $documentId, $attribute],
            '/documentsdb/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/increment'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['attribute'] = $attribute;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
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
     * List indexes in the collection.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/indexes'
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
     * Creates an index on the attributes listed. Your index should include all
     * the attributes you will query in a single request.
     * Attributes can be `key`, `fulltext`, and `unique`.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param DocumentsDBIndexType $type
     * @param array $attributes
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return array
     */
    public function createIndex(string $databaseId, string $collectionId, string $key, DocumentsDBIndexType $type, array $attributes, ?array $orders = null, ?array $lengths = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/documentsdb/{databaseId}/collections/{collectionId}/indexes'
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
     * Get index by ID.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/indexes/{key}'
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
     * Delete an index.
     *
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
            '/documentsdb/{databaseId}/collections/{collectionId}/indexes/{key}'
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