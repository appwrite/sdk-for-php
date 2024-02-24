<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class DatabasesTest extends TestCase {
    private $client;
    private $databases;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->databases = new Databases($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "databases" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->create(
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
            "enabled" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->get(
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
            "enabled" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->update(
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

        $response = $this->databases->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCollections(): void {

        $data = array(
            "total" => 5,
            "collections" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->listCollections(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateCollection(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => array(),
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCollection(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => array(),
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->getCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateCollection(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Collection",
            "enabled" => true,
            "documentSecurity" => true,
            "attributes" => array(),
            "indexes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteCollection(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->deleteCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListAttributes(): void {

        $data = array(
            "total" => 5,
            "attributes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->listAttributes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBooleanAttribute(): void {

        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateBooleanAttribute(): void {

        $data = array(
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateBooleanAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDatetimeAttribute(): void {

        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "datetime",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDatetimeAttribute(): void {

        $data = array(
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "datetime",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateDatetimeAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailAttribute(): void {

        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmailAttribute(): void {

        $data = array(
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "email",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateEmailAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEnumAttribute(): void {

        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "elements" => array(),
            "format" => "enum",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            array(),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEnumAttribute(): void {

        $data = array(
            "key" => "status",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "elements" => array(),
            "format" => "enum",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateEnumAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            array(),
            true,
            "<DEFAULT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFloatAttribute(): void {

        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateFloatAttribute(): void {

        $data = array(
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateFloatAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            1.0,
            1.0,
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIntegerAttribute(): void {

        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateIntegerAttribute(): void {

        $data = array(
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateIntegerAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            1,
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIpAttribute(): void {

        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "ip",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateIpAttribute(): void {

        $data = array(
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "ip",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateIpAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRelationshipAttribute(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "relatedCollection" => "collection",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<RELATED_COLLECTION_ID>",
            "oneToOne"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateStringAttribute(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "size" => 128,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            1,
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateStringAttribute(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "size" => 128,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateStringAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            "<DEFAULT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateUrlAttribute(): void {

        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "url",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateUrlAttribute(): void {

        $data = array(
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "format" => "url",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateUrlAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            true,
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetAttribute(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->getAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteAttribute(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->deleteAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRelationshipAttribute(): void {

        $data = array(
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "relatedCollection" => "collection",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateRelationshipAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->listDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->getDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->updateDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDocument(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->deleteDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
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

        $response = $this->databases->listIndexes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateIndex(): void {

        $data = array(
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            "key",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetIndex(): void {

        $data = array(
            "key" => "index1",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "attributes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->getIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteIndex(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->databases->deleteIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

}
