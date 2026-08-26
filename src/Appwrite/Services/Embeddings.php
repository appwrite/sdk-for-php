<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\EmbeddingModel;

class Embeddings extends Service
{
    /**
     * Generate vector embeddings for an array of text using the selected
     * embedding model. Use the returned vectors to power semantic search and
     * similarity queries against your vector collections.
     *
     * @throws AppwriteException
     */
    public function createTextEmbeddings(array $texts, ?EmbeddingModel $model = null): \Appwrite\Models\EmbeddingList
    {
        $apiPath = str_replace(
            [],
            [],
            '/embeddings/text'
        );

        $apiParams = [];
        $apiParams['texts'] = $texts;

        if (!is_null($model)) {
            $apiParams['model'] = $model;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\EmbeddingList::from($response);
    }
}
