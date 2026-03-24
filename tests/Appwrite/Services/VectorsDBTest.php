<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Model;
use Appwrite\Enums\VectorsDBIndexType;
use Appwrite\Enums\OrderBy;

final class VectorsDBTest extends TestCase {
    private $client;
    private $vectorsDB;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->vectorsDB = new VectorsDB($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "databases" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->list(
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

        $response = $this->vectorsDB->create(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTextEmbeddings(): void {

        $data = array(
            "total" => 5,
            "embeddings" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->createTextEmbeddings(
            array()
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

        $response = $this->vectorsDB->listTransactions(
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

        $response = $this->vectorsDB->createTransaction(
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

        $response = $this->vectorsDB->getTransaction(
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

        $response = $this->vectorsDB->updateTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteTransaction(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->deleteTransaction(
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

        $response = $this->vectorsDB->createOperations(
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

        $response = $this->vectorsDB->get(
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

        $response = $this->vectorsDB->update(
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

        $response = $this->vectorsDB->delete(
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

        $response = $this->vectorsDB->listCollections(
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
            "bytesUsed" => 1500,
            "dimension" => 1536);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->createCollection(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<NAME>",
            1
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
            "bytesUsed" => 1500,
            "dimension" => 1536);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->getCollection(
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
            "bytesUsed" => 1500,
            "dimension" => 1536);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vectorsDB->updateCollection(
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

        $response = $this->vectorsDB->deleteCollection(
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

        $response = $this->vectorsDB->listDocuments(
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

        $response = $this->vectorsDB->createDocument(
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

        $response = $this->vectorsDB->createDocuments(
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

        $response = $this->vectorsDB->upsertDocuments(
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

        $response = $this->vectorsDB->updateDocuments(
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

        $response = $this->vectorsDB->deleteDocuments(
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

        $response = $this->vectorsDB->getDocument(
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

        $response = $this->vectorsDB->upsertDocument(
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

        $response = $this->vectorsDB->updateDocument(
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

        $response = $this->vectorsDB->deleteDocument(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<DOCUMENT_ID>"
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

        $response = $this->vectorsDB->listIndexes(
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

        $response = $this->vectorsDB->createIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "",
            VectorsDBIndexType::HNSWEUCLIDEAN(),
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

        $response = $this->vectorsDB->getIndex(
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

        $response = $this->vectorsDB->deleteIndex(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

}
