<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\EmbeddingModel;

final class EmbeddingsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Embeddings $embeddings;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->embeddings = new Embeddings($this->client);
    }

    public function testMethodCreateTextEmbeddings(): void
    {
        $data = [
            "total" => 5,
            "embeddings" => [
                [
                    "model" => "nomic-embed-text",
                    "dimension" => 768,
                    "embedding" => [],
                    "error" => "Error message"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/embeddings/text',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['texts', 'model'], array_keys($params));
                    $expected = [
                        'texts' => [],
                        'model' => EmbeddingModel::NOMICEMBEDTEXT(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->embeddings->createTextEmbeddings(
            [],
            model: EmbeddingModel::NOMICEMBEDTEXT()
        );

        $this->assertInstanceOf(\Appwrite\Models\EmbeddingList::class, $response);
    }
}
