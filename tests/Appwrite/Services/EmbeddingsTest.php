<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\EmbeddingModel;

final class EmbeddingsTest extends TestCase
{
    private $client;
    private $embeddings;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->embeddings = new Embeddings($this->client);
    }

    public function testMethodCreateTextEmbeddings(): void
    {
        $data = array(
            "total" => 5,
            "embeddings" => array(
                array(
                    "model" => "nomic-embed-text",
                    "dimension" => 768,
                    "embedding" => array(),
                    "error" => "Error message"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->embeddings->createTextEmbeddings(
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\EmbeddingList::class, $response);
    }

}
