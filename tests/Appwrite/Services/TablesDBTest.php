<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\TablesDBIndexType;
use Appwrite\Enums\OrderBy;

final class TablesDBTest extends TestCase
{
    private $client;
    private $tablesDB;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->tablesDB = new TablesDB($this->client);
    }

    public function testMethodList(): void
    {
        $data = array(
            "total" => 5,
            "databases" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "name" => "My Database",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "enabled" => true,
                    "type" => "legacy",
                    "policies" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "attributes" => array(),
                            "lengths" => array()
                        )
                    ),
                    "archives" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$permissions" => array(),
                            "databaseId" => "5e5ea5c16897e",
                            "name" => "My Collection",
                            "enabled" => true,
                            "documentSecurity" => true,
                            "attributes" => array(),
                            "indexes" => array(
                                array(
                                    "\$id" => "5e5ea5c16897e",
                                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                                    "key" => "index1",
                                    "type" => "primary",
                                    "status" => "available",
                                    "error" => "string",
                                    "attributes" => array(),
                                    "lengths" => array()
                                )
                            ),
                            "bytesMax" => 65535,
                            "bytesUsed" => 1500
                        )
                    )
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->list();

        $this->assertInstanceOf(\Appwrite\Models\DatabaseList::class, $response);
    }

    public function testMethodCreate(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",
            "policies" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => array(),
                    "lengths" => array()
                )
            ),
            "archives" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array(),
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Collection",
                    "enabled" => true,
                    "documentSecurity" => true,
                    "attributes" => array(),
                    "indexes" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "attributes" => array(),
                            "lengths" => array()
                        )
                    ),
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->create(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }

    public function testMethodListTransactions(): void
    {
        $data = array(
            "total" => 5,
            "transactions" => array(
                array(
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "status" => "pending",
                    "operations" => 5,
                    "expiresAt" => "2020-10-15T06:38:00.000+00:00"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->listTransactions();

        $this->assertInstanceOf(\Appwrite\Models\TransactionList::class, $response);
    }

    public function testMethodCreateTransaction(): void
    {
        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createTransaction();

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }

    public function testMethodGetTransaction(): void
    {
        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->getTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }

    public function testMethodUpdateTransaction(): void
    {
        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateTransaction(
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

        $response = $this->tablesDB->deleteTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateOperations(): void
    {
        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createOperations(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",
            "policies" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => array(),
                    "lengths" => array()
                )
            ),
            "archives" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array(),
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Collection",
                    "enabled" => true,
                    "documentSecurity" => true,
                    "attributes" => array(),
                    "indexes" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "attributes" => array(),
                            "lengths" => array()
                        )
                    ),
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->get(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }

    public function testMethodUpdate(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",
            "policies" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "attributes" => array(),
                    "lengths" => array()
                )
            ),
            "archives" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array(),
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Collection",
                    "enabled" => true,
                    "documentSecurity" => true,
                    "attributes" => array(),
                    "indexes" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "attributes" => array(),
                            "lengths" => array()
                        )
                    ),
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->update(
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

        $response = $this->tablesDB->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTables(): void
    {
        $data = array(
            "total" => 5,
            "tables" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array(),
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Table",
                    "enabled" => true,
                    "rowSecurity" => true,
                    "columns" => array(),
                    "indexes" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "columns" => array(),
                            "lengths" => array()
                        )
                    ),
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->listTables(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\TableList::class, $response);
    }

    public function testMethodCreateTable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => array(),
            "indexes" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => array(),
                    "lengths" => array()
                )
            ),
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }

    public function testMethodGetTable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => array(),
            "indexes" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => array(),
                    "lengths" => array()
                )
            ),
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->getTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }

    public function testMethodUpdateTable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => array(),
            "indexes" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => array(),
                    "lengths" => array()
                )
            ),
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }

    public function testMethodDeleteTable(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->deleteTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListColumns(): void
    {
        $data = array(
            "total" => 5,
            "columns" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->listColumns(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnList::class, $response);
    }

    public function testMethodCreateBigIntColumn(): void
    {
        $data = array(
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }

    public function testMethodUpdateBigIntColumn(): void
    {
        $data = array(
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }

    public function testMethodCreateBooleanColumn(): void
    {
        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }

    public function testMethodUpdateBooleanColumn(): void
    {
        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }

    public function testMethodCreateDatetimeColumn(): void
    {
        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }

    public function testMethodUpdateDatetimeColumn(): void
    {
        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }

    public function testMethodCreateEmailColumn(): void
    {
        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }

    public function testMethodUpdateEmailColumn(): void
    {
        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "email@example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }

    public function testMethodCreateEnumColumn(): void
    {
        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => array(),
            "format" => "enum"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            array(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }

    public function testMethodUpdateEnumColumn(): void
    {
        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => array(),
            "format" => "enum"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            array(),
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }

    public function testMethodCreateFloatColumn(): void
    {
        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }

    public function testMethodUpdateFloatColumn(): void
    {
        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            1.0
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }

    public function testMethodCreateIntegerColumn(): void
    {
        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }

    public function testMethodUpdateIntegerColumn(): void
    {
        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }

    public function testMethodCreateIpColumn(): void
    {
        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }

    public function testMethodUpdateIpColumn(): void
    {
        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }

    public function testMethodCreateLineColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }

    public function testMethodUpdateLineColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }

    public function testMethodCreateLongtextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }

    public function testMethodUpdateLongtextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }

    public function testMethodCreateMediumtextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }

    public function testMethodUpdateMediumtextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }

    public function testMethodCreatePointColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createPointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }

    public function testMethodUpdatePointColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updatePointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }

    public function testMethodCreatePolygonColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createPolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }

    public function testMethodUpdatePolygonColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updatePolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }

    public function testMethodCreateRelationshipColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedTable" => "table",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<RELATED_TABLE_ID>",
            RelationshipType::ONETOONE()
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
    }

    public function testMethodCreateStringColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }

    public function testMethodUpdateStringColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }

    public function testMethodCreateTextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }

    public function testMethodUpdateTextColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }

    public function testMethodCreateUrlColumn(): void
    {
        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }

    public function testMethodUpdateUrlColumn(): void
    {
        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }

    public function testMethodCreateVarcharColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }

    public function testMethodUpdateVarcharColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }

    public function testMethodGetColumn(): void
    {
        $data = array_replace(
            array(
                "key" => "fullName",
                "type" => "string",
                "status" => "available",
                "error" => "string",
                "required" => true,
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "size" => 128
            ),
            array(
                "type" => "string"
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->getColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }

    public function testMethodDeleteColumn(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->deleteColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRelationshipColumn(): void
    {
        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedTable" => "table",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
    }

    public function testMethodListIndexes(): void
    {
        $data = array(
            "total" => 5,
            "indexes" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => array(),
                    "lengths" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->listIndexes(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndexList::class, $response);
    }

    public function testMethodCreateIndex(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => array(),
            "lengths" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            TablesDBIndexType::KEY(),
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndex::class, $response);
    }

    public function testMethodGetIndex(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => array(),
            "lengths" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->getIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndex::class, $response);
    }

    public function testMethodDeleteIndex(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->deleteIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRows(): void
    {
        $data = array(
            "total" => 5,
            "rows" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->listRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }

    public function testMethodCreateRow(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

    public function testMethodCreateRows(): void
    {
        $data = array(
            "total" => 5,
            "rows" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->createRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }

    public function testMethodUpsertRows(): void
    {
        $data = array(
            "total" => 5,
            "rows" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->upsertRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }

    public function testMethodUpdateRows(): void
    {
        $data = array(
            "total" => 5,
            "rows" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }

    public function testMethodDeleteRows(): void
    {
        $data = array(
            "total" => 5,
            "rows" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->deleteRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }

    public function testMethodGetRow(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->getRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

    public function testMethodUpsertRow(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->upsertRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

    public function testMethodUpdateRow(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->updateRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

    public function testMethodDeleteRow(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->deleteRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDecrementRowColumn(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->decrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

    public function testMethodIncrementRowColumn(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDB->incrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }

}
