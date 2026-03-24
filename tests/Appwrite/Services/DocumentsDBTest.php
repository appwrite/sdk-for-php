<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\DocumentsDBIndexType;
use Appwrite\Enums\OrderBy;

final class DocumentsDBTest extends TestCase {
    private $client;
    private $documentsDB;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->documentsDB = new DocumentsDB($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "databases" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->list(
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
            "type" => "legacy",
            "policies" => array(),
            "archives" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->create(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListTransactions(): void {

        $data = array(
            "total" => 5,
            "transactions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->listTransactions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTransaction(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createTransaction(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTransaction(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->getTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTransaction(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->updateTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteTransaction(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->deleteTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateOperations(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createOperations(
            "<TRANSACTION_ID>"
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
            "type" => "legacy",
            "policies" => array(),
            "archives" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->get(
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
            "type" => "legacy",
            "policies" => array(),
            "archives" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->update(
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

        $response = $this->documentsDB->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCollections(): void {

        $data = array(
            "total" => 5,
            "collections" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->listCollections(
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
            "indexes" => array(),
            "bytesMax" => 65535,
            "bytesUsed" => 1500);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createCollection(
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
            "indexes" => array(),
            "bytesMax" => 65535,
            "bytesUsed" => 1500);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->getCollection(
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
            "indexes" => array(),
            "bytesMax" => 65535,
            "bytesUsed" => 1500);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->updateCollection(
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

        $response = $this->documentsDB->deleteCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->listDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpsertDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->upsertDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->updateDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDocuments(): void {

        $data = array(
            "total" => 5,
            "documents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->deleteDocuments(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->getDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpsertDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->upsertDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDocument(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->updateDocument(
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

        $response = $this->documentsDB->deleteDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDecrementDocumentAttribute(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->decrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIncrementDocumentAttribute(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$collectionId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->incrementDocumentAttribute(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListIndexes(): void {

        $data = array(
            "total" => 5,
            "indexes" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->listIndexes(
            "<DATABASE_ID>",
            "<COLLECTION_ID>"
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
            "attributes" => array(),
            "lengths" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            DocumentsDBIndexType::KEY(),
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
            "attributes" => array(),
            "lengths" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsDB->getIndex(
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

        $response = $this->documentsDB->deleteIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

}
