<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\DocumentsDBIndexType;
use Appwrite\Enums\OrderBy;

final class DocumentsDBTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private DocumentsDB $documentsDB;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->documentsDB = new DocumentsDB($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "databases" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "name" => "My Database",
                    "description" => "Customer orders and invoices.",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "enabled" => true,
                    "type" => "legacy"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description', 'specification', 'replicas', 'syncMode'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'description' => "<DESCRIPTION>",
                        'specification' => "serverless",
                        'replicas' => 1,
                        'syncMode' => "async",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->create(
            "<DATABASE_ID>",
            "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>",
            specification: "serverless",
            replicas: 1,
            syncMode: "async"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodListSpecifications(): void
    {
        $data = [
            "specifications" => [
                [
                    "slug" => "s-2vcpu-2gb",
                    "name" => "Standard",
                    "price" => 20,
                    "storageOverageRate" => 0.125,
                    "bandwidthOverageRate" => 0.08,
                    "replicaRate" => 1,
                    "pitrRate" => 0.2,
                    "cpu" => 2000,
                    "memory" => 2048,
                    "maxConnections" => 200,
                    "includedStorage" => 25,
                    "includedBandwidth" => 200,
                    "enabled" => true
                ]
            ],
            "total" => 9
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/specifications',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listSpecifications();

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseSpecificationList::class, $response);
    }
    public function testMethodListTransactions(): void
    {
        $data = [
            "total" => 5,
            "transactions" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "status" => "pending",
                    "operations" => 5,
                    "expiresAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/transactions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listTransactions(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TransactionList::class, $response);
    }
    public function testMethodCreateTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/transactions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ttl'], array_keys($params));
                    $expected = [
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createTransaction(
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGetTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodUpdateTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/documentsdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId', 'commit', 'rollback'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                        'commit' => false,
                        'rollback' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->updateTransaction(
            "<TRANSACTION_ID>",
            commit: false,
            rollback: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodDeleteTransaction(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->deleteTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateOperations(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/transactions/%3CTRANSACTION_ID%3E/operations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId', 'operations'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                        'operations' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createOperations(
            "<TRANSACTION_ID>",
            operations: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->get(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/documentsdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description', 'specification', 'replicas', 'syncMode'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'description' => "<DESCRIPTION>",
                        'specification' => "serverless",
                        'replicas' => 1,
                        'syncMode' => "async",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->update(
            "<DATABASE_ID>",
            "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>",
            specification: "serverless",
            replicas: 1,
            syncMode: "async"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListCollections(): void
    {
        $data = [
            "total" => 5,
            "collections" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Collection",
                    "description" => "Movies available in the catalog.",
                    "enabled" => true,
                    "documentSecurity" => true,
                    "attributes" => [],
                    "indexes" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "description" => "Speeds up lookups by email.",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "attributes" => [],
                            "lengths" => []
                        ]
                    ],
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'queries' => [],
                        'search' => "<SEARCH>",
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listCollections(
            "<DATABASE_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\CollectionList::class, $response);
    }
    public function testMethodCreateCollection(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/collections',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'name', 'permissions', 'documentSecurity', 'enabled', 'attributes', 'indexes', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'documentSecurity' => false,
                        'enabled' => false,
                        'attributes' => [],
                        'indexes' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>",
            permissions: [],
            documentSecurity: false,
            enabled: false,
            attributes: [],
            indexes: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Collection::class, $response);
    }
    public function testMethodGetCollection(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Collection::class, $response);
    }
    public function testMethodUpdateCollection(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'name', 'permissions', 'documentSecurity', 'enabled', 'purge', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'documentSecurity' => false,
                        'enabled' => false,
                        'purge' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->updateCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>",
            permissions: [],
            documentSecurity: false,
            enabled: false,
            purge: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Collection::class, $response);
    }
    public function testMethodDeleteCollection(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->deleteCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListDocuments(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'queries', 'transactionId', 'total', 'ttl'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                        'total' => false,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>",
            total: false,
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodCreateDocument(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodCreateDocuments(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documents', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documents' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodUpsertDocuments(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documents', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documents' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->upsertDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodUpdateDocuments(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'data', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'data' => [],
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->updateDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            data: [],
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodDeleteDocuments(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->deleteDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodCreateQuery(): void
    {
        $data = [
            "total" => 5,
            "documents" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$collectionId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/query',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'queries', 'transactionId', 'total', 'ttl'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                        'total' => false,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createQuery(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>",
            total: false,
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DocumentList::class, $response);
    }
    public function testMethodGetDocument(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodUpsertDocument(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->upsertDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            data: [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodUpdateDocument(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->updateDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            data: [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodDeleteDocument(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->deleteDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodDecrementDocumentAttribute(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E/%3CATTRIBUTE%3E/decrement',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'attribute', 'value', 'min', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'attribute' => "<ATTRIBUTE>",
                        'value' => 1.0,
                        'min' => 1.0,
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->decrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            "<ATTRIBUTE>",
            value: 1.0,
            min: 1.0,
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodIncrementDocumentAttribute(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E/%3CATTRIBUTE%3E/increment',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'documentId', 'attribute', 'value', 'max', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'documentId' => "<DOCUMENT_ID>",
                        'attribute' => "<ATTRIBUTE>",
                        'value' => 1.0,
                        'max' => 1.0,
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->incrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            "<ATTRIBUTE>",
            value: 1.0,
            max: 1.0,
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodListIndexes(): void
    {
        $data = [
            "total" => 5,
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => [],
                    "lengths" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listIndexes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\IndexList::class, $response);
    }
    public function testMethodCreateIndex(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "description" => "Speeds up lookups by email.",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => [],
            "lengths" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'type', 'attributes', 'orders', 'lengths', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'type' => DocumentsDBIndexType::KEY(),
                        'attributes' => [],
                        'orders' => [OrderBy::ASC()],
                        'lengths' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            DocumentsDBIndexType::KEY(),
            [],
            orders: [OrderBy::ASC()],
            lengths: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Index::class, $response);
    }
    public function testMethodGetIndex(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "description" => "Speeds up lookups by email.",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => [],
            "lengths" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Index::class, $response);
    }
    public function testMethodDeleteIndex(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/documentsdb/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->deleteIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateFailover(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "name" => "My Production Database",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "connectionString" => "postgresql://user:pass@db-myproject-mydb.fra.appwrite.center:5432/postgres?sslmode=require",
            "ssl" => true,
            "status" => "ready",
            "containerStatus" => "active",
            "lifecycleState" => "active",
            "idleTimeoutMinutes" => 15,
            "cpu" => 2000,
            "memory" => 4096,
            "storage" => 100,
            "storageStatus" => "resizing",
            "storageTargetGb" => 120,
            "storageClass" => "ssd",
            "storageMaxGb" => 100,
            "nodePool" => "db-pool-4vcpu-8gb",
            "replicas" => 2,
            "syncMode" => "async",
            "networkMaxConnections" => 500,
            "networkIdleTimeoutSeconds" => 900,
            "networkIPAllowlist" => [],
            "backupEnabled" => true,
            "pitr" => true,
            "pitrRetentionDays" => 14,
            "storageAutoscaling" => true,
            "storageAutoscalingThresholdPercent" => 85,
            "storageAutoscalingMaxGb" => 30,
            "maintenanceWindowDay" => "sun",
            "maintenanceWindowHourUtc" => 3,
            "metricsEnabled" => true,
            "sqlApiEnabled" => true,
            "sqlApiAllowedStatements" => [],
            "sqlApiMaxRows" => 10000,
            "sqlApiMaxBytes" => 10485760,
            "sqlApiTimeoutSeconds" => 30,
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/documentsdb/%3CDATABASE_ID%3E/failovers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'targetReplicaId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'targetReplicaId' => "<TARGET_REPLICA_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->createFailover(
            "<DATABASE_ID>",
            targetReplicaId: "<TARGET_REPLICA_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodListOperations(): void
    {
        $data = [
            "total" => 5,
            "operations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "databaseId" => "5e5ea5c16897e",
                    "type" => "update",
                    "status" => "completed",
                    "attempts" => 1,
                    "errorCode" => "Interrupted",
                    "errorMessage" => "[ERRORMESSAGE]"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/operations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'status', 'limit', 'offset'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'status' => "queued",
                        'limit' => 1,
                        'offset' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->listOperations(
            "<DATABASE_ID>",
            status: "queued",
            limit: 1,
            offset: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseOperationList::class, $response);
    }
    public function testMethodGetReplicas(): void
    {
        $data = [
            "replicas" => 2,
            "syncMode" => "async",
            "syncDegraded" => true,
            "syncAcknowledgements" => 1,
            "syncStandbyCount" => 2,
            "members" => [
                [
                    "\$id" => "1",
                    "role" => "replica",
                    "status" => "active"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/replicas',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getReplicas(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseReplicas::class, $response);
    }
    public function testMethodGetStatus(): void
    {
        $data = [
            "health" => "healthy",
            "ready" => true,
            "engine" => "postgresql",
            "version" => "17",
            "uptime" => 86400,
            "syncMode" => "async",
            "syncDegraded" => true,
            "syncAcknowledgements" => 1,
            "syncStandbyCount" => 2,
            "replicas" => [
                [
                    "index" => 0,
                    "role" => "primary",
                    "healthy" => true
                ]
            ],
            "volumes" => [
                [
                    "path" => "/var/lib/postgresql/data",
                    "usedPercent" => "45%",
                    "available" => "55GB",
                    "mounted" => true
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/documentsdb/%3CDATABASE_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->documentsDB->getStatus(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseStatus::class, $response);
    }
}
