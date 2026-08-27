<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\DatabasesIndexType;

final class DatabasesTest extends TestCase
{
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
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "enabled" => true,
                    "type" => "legacy"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->list();

        $this->assertInstanceOf(\Appwrite\Models\DatabaseList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->create(
            "<DATABASE_ID>",
            "<NAME>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->listTransactions();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createTransaction();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodDeleteTransaction(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createOperations(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->update(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
                    "enabled" => true,
                    "documentSecurity" => true,
                    "attributes" => [],
                    "indexes" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->listCollections(
            "<DATABASE_ID>"
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
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>"
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
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Collection::class, $response);
    }
    public function testMethodDeleteCollection(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->listAttributes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeList::class, $response);
    }
    public function testMethodCreateBigIntAttribute(): void
    {
        $data = [
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createBigIntAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBigint::class, $response);
    }
    public function testMethodUpdateBigIntAttribute(): void
    {
        $data = [
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateBigIntAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBigint::class, $response);
    }
    public function testMethodCreateBooleanAttribute(): void
    {
        $data = [
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBoolean::class, $response);
    }
    public function testMethodUpdateBooleanAttribute(): void
    {
        $data = [
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeBoolean::class, $response);
    }
    public function testMethodCreateDatetimeAttribute(): void
    {
        $data = [
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeDatetime::class, $response);
    }
    public function testMethodUpdateDatetimeAttribute(): void
    {
        $data = [
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeDatetime::class, $response);
    }
    public function testMethodCreateEmailAttribute(): void
    {
        $data = [
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEmail::class, $response);
    }
    public function testMethodUpdateEmailAttribute(): void
    {
        $data = [
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "email@example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEmail::class, $response);
    }
    public function testMethodCreateEnumAttribute(): void
    {
        $data = [
            "key" => "status",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            [],
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEnum::class, $response);
    }
    public function testMethodUpdateEnumAttribute(): void
    {
        $data = [
            "key" => "status",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            [],
            true,
            "active"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeEnum::class, $response);
    }
    public function testMethodCreateFloatAttribute(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeFloat::class, $response);
    }
    public function testMethodUpdateFloatAttribute(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            1.0
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeFloat::class, $response);
    }
    public function testMethodCreateIntegerAttribute(): void
    {
        $data = [
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeInteger::class, $response);
    }
    public function testMethodUpdateIntegerAttribute(): void
    {
        $data = [
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeInteger::class, $response);
    }
    public function testMethodCreateIpAttribute(): void
    {
        $data = [
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeIp::class, $response);
    }
    public function testMethodUpdateIpAttribute(): void
    {
        $data = [
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "192.0.2.0"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeIp::class, $response);
    }
    public function testMethodCreateLineAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createLineAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLine::class, $response);
    }
    public function testMethodUpdateLineAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateLineAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLine::class, $response);
    }
    public function testMethodCreateLongtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createLongtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLongtext::class, $response);
    }
    public function testMethodUpdateLongtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateLongtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeLongtext::class, $response);
    }
    public function testMethodCreateMediumtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createMediumtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeMediumtext::class, $response);
    }
    public function testMethodUpdateMediumtextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateMediumtextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeMediumtext::class, $response);
    }
    public function testMethodCreatePointAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createPointAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePoint::class, $response);
    }
    public function testMethodUpdatePointAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updatePointAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePoint::class, $response);
    }
    public function testMethodCreatePolygonAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createPolygonAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePolygon::class, $response);
    }
    public function testMethodUpdatePolygonAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updatePolygonAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributePolygon::class, $response);
    }
    public function testMethodCreateRelationshipAttribute(): void
    {
        $data = [
            "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<RELATED_COLLECTION_ID>",
            RelationshipType::ONETOONE()
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeRelationship::class, $response);
    }
    public function testMethodUpdateRelationshipAttribute(): void
    {
        $data = [
            "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeRelationship::class, $response);
    }
    public function testMethodCreateStringAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeString::class, $response);
    }
    public function testMethodUpdateStringAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeString::class, $response);
    }
    public function testMethodCreateTextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createTextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeText::class, $response);
    }
    public function testMethodUpdateTextAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateTextAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeText::class, $response);
    }
    public function testMethodCreateUrlAttribute(): void
    {
        $data = [
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeUrl::class, $response);
    }
    public function testMethodUpdateUrlAttribute(): void
    {
        $data = [
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeUrl::class, $response);
    }
    public function testMethodCreateVarcharAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createVarcharAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeVarchar::class, $response);
    }
    public function testMethodUpdateVarcharAttribute(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateVarcharAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\AttributeVarchar::class, $response);
    }
    public function testMethodGetAttribute(): void
    {
        $data = array_replace(
            [
                "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->listDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->upsertDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->deleteDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->getDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->upsertDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->updateDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Document::class, $response);
    }
    public function testMethodDeleteDocument(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->deleteDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->decrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            "<ATTRIBUTE>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->incrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            "<ATTRIBUTE>"
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
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => [],
                    "lengths" => []
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->listIndexes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
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
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => [],
            "lengths" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->databases->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<KEY>",
            DatabasesIndexType::KEY(),
            []
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
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => [],
            "lengths" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
