<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\DatabasesIndexType;
use Appwrite\Enums\OrderBy;

final class DatabasesTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Databases $databases;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->databases = new Databases($this->client);
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
                '/databases',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
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

        $response = $this->databases->list(
            queries: [],
            search: "<SEARCH>",
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
                '/databases',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
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

        $response = $this->databases->create(
            "<DATABASE_ID>",
            "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
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
                '/databases/transactions',
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

        $response = $this->databases->listTransactions(
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
                '/databases/transactions',
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

        $response = $this->databases->createTransaction(
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
                '/databases/transactions/%3CTRANSACTION_ID%3E',
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

        $response = $this->databases->getTransaction(
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
                '/databases/transactions/%3CTRANSACTION_ID%3E',
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

        $response = $this->databases->updateTransaction(
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
                '/databases/transactions/%3CTRANSACTION_ID%3E',
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

        $response = $this->databases->deleteTransaction(
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
                '/databases/transactions/%3CTRANSACTION_ID%3E/operations',
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

        $response = $this->databases->createOperations(
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
                '/databases/%3CDATABASE_ID%3E',
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

        $response = $this->databases->get(
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
                '/databases/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
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

        $response = $this->databases->update(
            "<DATABASE_ID>",
            name: "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/databases/%3CDATABASE_ID%3E',
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

        $response = $this->databases->delete(
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
                '/databases/%3CDATABASE_ID%3E/collections',
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

        $response = $this->databases->listCollections(
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
                '/databases/%3CDATABASE_ID%3E/collections',
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

        $response = $this->databases->createCollection(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
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

        $response = $this->databases->getCollection(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
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

        $response = $this->databases->updateCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            name: "<NAME>",
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E',
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

        $response = $this->databases->deleteCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListAttributes(): void
    {
        $data = [
            "total" => 5,
            "attributes" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes',
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

        $response = $this->databases->listAttributes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeList::class, $response);
    }
    public function testMethodCreateBigIntAttribute(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/bigint',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1,
                        'max' => 1,
                        'default' => 1,
                        'array' => false,
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

        $response = $this->databases->createBigIntAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            min: 1,
            max: 1,
            xdefault: 1,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBigint::class, $response);
    }
    public function testMethodUpdateBigIntAttribute(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/bigint/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1,
                        'min' => 1,
                        'max' => 1,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateBigIntAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            1,
            min: 1,
            max: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBigint::class, $response);
    }
    public function testMethodCreateBooleanAttribute(): void
    {
        $data = [
            "key" => "isEnabled",
            "description" => "Name shown on the public profile.",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/boolean',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => false,
                        'array' => false,
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

        $response = $this->databases->createBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: false,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBoolean::class, $response);
    }
    public function testMethodUpdateBooleanAttribute(): void
    {
        $data = [
            "key" => "isEnabled",
            "description" => "Name shown on the public profile.",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/boolean/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => false,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            false,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBoolean::class, $response);
    }
    public function testMethodCreateDatetimeAttribute(): void
    {
        $data = [
            "key" => "birthDay",
            "description" => "Name shown on the public profile.",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/datetime',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "2020-10-15T06:38:00.000+00:00",
                        'array' => false,
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

        $response = $this->databases->createDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "2020-10-15T06:38:00.000+00:00",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeDatetime::class, $response);
    }
    public function testMethodUpdateDatetimeAttribute(): void
    {
        $data = [
            "key" => "birthDay",
            "description" => "Name shown on the public profile.",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/datetime/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "2020-10-15T06:38:00.000+00:00",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "2020-10-15T06:38:00.000+00:00",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeDatetime::class, $response);
    }
    public function testMethodCreateEmailAttribute(): void
    {
        $data = [
            "key" => "userEmail",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "email@example.com",
                        'array' => false,
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

        $response = $this->databases->createEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "email@example.com",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEmail::class, $response);
    }
    public function testMethodUpdateEmailAttribute(): void
    {
        $data = [
            "key" => "userEmail",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/email/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "email@example.com",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "email@example.com",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEmail::class, $response);
    }
    public function testMethodCreateEnumAttribute(): void
    {
        $data = [
            "key" => "status",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => [],
            "format" => "enum"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/enum',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'elements', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'elements' => [],
                        'required' => false,
                        'default' => "active",
                        'array' => false,
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

        $response = $this->databases->createEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            [],
            false,
            xdefault: "active",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEnum::class, $response);
    }
    public function testMethodUpdateEnumAttribute(): void
    {
        $data = [
            "key" => "status",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => [],
            "format" => "enum"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/enum/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'elements', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'elements' => [],
                        'required' => false,
                        'default' => "active",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            [],
            false,
            "active",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEnum::class, $response);
    }
    public function testMethodCreateFloatAttribute(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "description" => "Name shown on the public profile.",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/float',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1.0,
                        'max' => 1.0,
                        'default' => 1.0,
                        'array' => false,
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

        $response = $this->databases->createFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            min: 1.0,
            max: 1.0,
            xdefault: 1.0,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeFloat::class, $response);
    }
    public function testMethodUpdateFloatAttribute(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "description" => "Name shown on the public profile.",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/float/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1.0,
                        'min' => 1.0,
                        'max' => 1.0,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            1.0,
            min: 1.0,
            max: 1.0,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeFloat::class, $response);
    }
    public function testMethodCreateIntegerAttribute(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/integer',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1,
                        'max' => 1,
                        'default' => 1,
                        'array' => false,
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

        $response = $this->databases->createIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            min: 1,
            max: 1,
            xdefault: 1,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeInteger::class, $response);
    }
    public function testMethodUpdateIntegerAttribute(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/integer/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1,
                        'min' => 1,
                        'max' => 1,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            1,
            min: 1,
            max: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeInteger::class, $response);
    }
    public function testMethodCreateIpAttribute(): void
    {
        $data = [
            "key" => "ipAddress",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/ip',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "192.0.2.0",
                        'array' => false,
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

        $response = $this->databases->createIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "192.0.2.0",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeIp::class, $response);
    }
    public function testMethodUpdateIpAttribute(): void
    {
        $data = [
            "key" => "ipAddress",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/ip/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "192.0.2.0",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "192.0.2.0",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeIp::class, $response);
    }
    public function testMethodCreateLineAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/line',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
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

        $response = $this->databases->createLineAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLine::class, $response);
    }
    public function testMethodUpdateLineAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/line/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateLineAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLine::class, $response);
    }
    public function testMethodCreateLongtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/longtext',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
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

        $response = $this->databases->createLongtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLongtext::class, $response);
    }
    public function testMethodUpdateLongtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/longtext/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateLongtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLongtext::class, $response);
    }
    public function testMethodCreateMediumtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/mediumtext',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
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

        $response = $this->databases->createMediumtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeMediumtext::class, $response);
    }
    public function testMethodUpdateMediumtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/mediumtext/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateMediumtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeMediumtext::class, $response);
    }
    public function testMethodCreatePointAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/point',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
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

        $response = $this->databases->createPointAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePoint::class, $response);
    }
    public function testMethodUpdatePointAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/point/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updatePointAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePoint::class, $response);
    }
    public function testMethodCreatePolygonAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/polygon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
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

        $response = $this->databases->createPolygonAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePolygon::class, $response);
    }
    public function testMethodUpdatePolygonAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/polygon/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updatePolygonAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePolygon::class, $response);
    }
    public function testMethodCreateRelationshipAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedCollection" => "collection",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/relationship',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'relatedCollectionId', 'type', 'twoWay', 'key', 'twoWayKey', 'onDelete', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'relatedCollectionId' => "<RELATED_COLLECTION_ID>",
                        'type' => RelationshipType::ONETOONE(),
                        'twoWay' => false,
                        'key' => "<KEY>",
                        'twoWayKey' => "<TWO_WAY_KEY>",
                        'onDelete' => RelationMutate::CASCADE(),
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

        $response = $this->databases->createRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<RELATED_COLLECTION_ID>",
            RelationshipType::ONETOONE(),
            twoWay: false,
            key: "<KEY>",
            twoWayKey: "<TWO_WAY_KEY>",
            onDelete: RelationMutate::CASCADE(),
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeRelationship::class, $response);
    }
    public function testMethodUpdateRelationshipAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedCollection" => "collection",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/relationship/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'onDelete', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'onDelete' => RelationMutate::CASCADE(),
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            onDelete: RelationMutate::CASCADE(),
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeRelationship::class, $response);
    }
    public function testMethodCreateStringAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/string',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'size', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'size' => 1,
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
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

        $response = $this->databases->createStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            1,
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeString::class, $response);
    }
    public function testMethodUpdateStringAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/string/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'size', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'size' => 1,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "Hello World",
            size: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeString::class, $response);
    }
    public function testMethodCreateTextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/text',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
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

        $response = $this->databases->createTextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeText::class, $response);
    }
    public function testMethodUpdateTextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/text/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateTextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeText::class, $response);
    }
    public function testMethodCreateUrlAttribute(): void
    {
        $data = [
            "key" => "githubUrl",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/url',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "https://example.com",
                        'array' => false,
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

        $response = $this->databases->createUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            xdefault: "https://example.com",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeUrl::class, $response);
    }
    public function testMethodUpdateUrlAttribute(): void
    {
        $data = [
            "key" => "githubUrl",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/url/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "https://example.com",
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "https://example.com",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeUrl::class, $response);
    }
    public function testMethodCreateVarcharAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/varchar',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'size', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'size' => 1,
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
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

        $response = $this->databases->createVarcharAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            1,
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeVarchar::class, $response);
    }
    public function testMethodUpdateVarcharAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/varchar/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'required', 'default', 'size', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'size' => 1,
                        'newKey' => "<NEW_KEY>",
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

        $response = $this->databases->updateVarcharAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            false,
            "Hello World",
            size: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeVarchar::class, $response);
    }
    public function testMethodGetAttribute(): void
    {
        $data = array_replace(
            [
                "key" => "fullName",
                "description" => "Name shown on the public profile.",
                "type" => "string",
                "status" => "available",
                "error" => "string",
                "required" => true,
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "size" => 128
            ],
            [
                "type" => "string"
            ]
        );

        $this->client
            ->expects()->call(
                'GET',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/%3CKEY%3E',
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

        $response = $this->databases->getAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeString::class, $response);
    }
    public function testMethodDeleteAttribute(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/attributes/%3CKEY%3E',
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

        $response = $this->databases->deleteAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->listDocuments(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->createDocument(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->createDocuments(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->upsertDocuments(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->updateDocuments(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents',
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

        $response = $this->databases->deleteDocuments(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/query',
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

        $response = $this->databases->createQuery(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
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

        $response = $this->databases->getDocument(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
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

        $response = $this->databases->upsertDocument(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
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

        $response = $this->databases->updateDocument(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E',
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

        $response = $this->databases->deleteDocument(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E/%3CATTRIBUTE%3E/decrement',
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

        $response = $this->databases->decrementDocumentAttribute(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/documents/%3CDOCUMENT_ID%3E/%3CATTRIBUTE%3E/increment',
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

        $response = $this->databases->incrementDocumentAttribute(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes',
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

        $response = $this->databases->listIndexes(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'key', 'type', 'attributes', 'orders', 'lengths', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'key' => "<KEY>",
                        'type' => DatabasesIndexType::KEY(),
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

        $response = $this->databases->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            DatabasesIndexType::KEY(),
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes/%3CKEY%3E',
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

        $response = $this->databases->getIndex(
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
                '/databases/%3CDATABASE_ID%3E/collections/%3CCOLLECTION_ID%3E/indexes/%3CKEY%3E',
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

        $response = $this->databases->deleteIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }
}
