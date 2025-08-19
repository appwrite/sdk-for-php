<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TablesDbTest extends TestCase {
    private $client;
    private $tablesDb;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tablesDb = new TablesDb($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "databases" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->create(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->get(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->update(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTables(): void {

        $data = array(
            "total" => 5,
            "tables" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->listTables(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTable(): void {

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
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTable(): void {

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
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->getTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTable(): void {

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
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteTable(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->deleteTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListColumns(): void {

        $data = array(
            "total" => 5,
            "columns" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->listColumns(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBooleanColumn(): void {

        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateBooleanColumn(): void {

        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDatetimeColumn(): void {

        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDatetimeColumn(): void {

        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailColumn(): void {

        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmailColumn(): void {

        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEnumColumn(): void {

        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => array(),
            "format" => "enum",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            array(),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEnumColumn(): void {

        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => array(),
            "format" => "enum",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            array(),
            true,
            "<DEFAULT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFloatColumn(): void {

        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateFloatColumn(): void {

        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIntegerColumn(): void {

        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateIntegerColumn(): void {

        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIpColumn(): void {

        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateIpColumn(): void {

        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRelationshipColumn(): void {

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
            "side" => "parent|child",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<RELATED_TABLE_ID>",
            "oneToOne"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateStringColumn(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            1,
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateStringColumn(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateUrlColumn(): void {

        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateUrlColumn(): void {

        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            true,
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetColumn(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->getColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteColumn(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->deleteColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRelationshipColumn(): void {

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
            "side" => "parent|child",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListIndexes(): void {

        $data = array(
            "total" => 5,
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->listIndexes(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIndex(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => array(),
            "lengths" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "",
            "key",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetIndex(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => array(),
            "lengths" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->getIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteIndex(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->deleteIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRows(): void {

        $data = array(
            "total" => 5,
            "rows" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->listRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRow(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRows(): void {

        $data = array(
            "total" => 5,
            "rows" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->createRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpsertRows(): void {

        $data = array(
            "total" => 5,
            "rows" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->upsertRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRows(): void {

        $data = array(
            "total" => 5,
            "rows" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteRows(): void {

        $data = array(
            "total" => 5,
            "rows" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->deleteRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetRow(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->getRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpsertRow(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->upsertRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRow(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->updateRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteRow(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->deleteRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDecrementRowColumn(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->decrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIncrementRowColumn(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => 1,
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tablesDb->incrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

}
