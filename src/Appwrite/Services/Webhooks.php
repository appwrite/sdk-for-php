<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Webhooks extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all webhooks belonging to the project. You can use the query
     * params to filter your results.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\WebhookList
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\WebhookList
    {
        $apiPath = str_replace(
            [],
            [],
            '/webhooks'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\WebhookList::from($response);

    }

    /**
     * Create a new webhook. Use this endpoint to configure a URL that will
     * receive events from Appwrite when specific events occur.
     *
     * @param string $webhookId
     * @param string $url
     * @param string $name
     * @param array $events
     * @param ?bool $enabled
     * @param ?bool $tls
     * @param ?string $authUsername
     * @param ?string $authPassword
     * @param ?string $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Webhook
     */
    public function create(string $webhookId, string $url, string $name, array $events, ?bool $enabled = null, ?bool $tls = null, ?string $authUsername = null, ?string $authPassword = null, ?string $secret = null): \Appwrite\Models\Webhook
    {
        $apiPath = str_replace(
            [],
            [],
            '/webhooks'
        );

        $apiParams = [];
        $apiParams['webhookId'] = $webhookId;
        $apiParams['url'] = $url;
        $apiParams['name'] = $name;
        $apiParams['events'] = $events;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($tls)) {
            $apiParams['tls'] = $tls;
        }

        if (!is_null($authUsername)) {
            $apiParams['authUsername'] = $authUsername;
        }

        if (!is_null($authPassword)) {
            $apiParams['authPassword'] = $authPassword;
        }
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Webhook::from($response);

    }

    /**
     * Get a webhook by its unique ID. This endpoint returns details about a
     * specific webhook configured for a project. 
     *
     * @param string $webhookId
     * @throws AppwriteException
     * @return \Appwrite\Models\Webhook
     */
    public function get(string $webhookId): \Appwrite\Models\Webhook
    {
        $apiPath = str_replace(
            ['{webhookId}'],
            [$webhookId],
            '/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['webhookId'] = $webhookId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Webhook::from($response);

    }

    /**
     * Update a webhook by its unique ID. Use this endpoint to update the URL,
     * events, or status of an existing webhook.
     *
     * @param string $webhookId
     * @param string $name
     * @param string $url
     * @param array $events
     * @param ?bool $enabled
     * @param ?bool $tls
     * @param ?string $authUsername
     * @param ?string $authPassword
     * @throws AppwriteException
     * @return \Appwrite\Models\Webhook
     */
    public function update(string $webhookId, string $name, string $url, array $events, ?bool $enabled = null, ?bool $tls = null, ?string $authUsername = null, ?string $authPassword = null): \Appwrite\Models\Webhook
    {
        $apiPath = str_replace(
            ['{webhookId}'],
            [$webhookId],
            '/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['webhookId'] = $webhookId;
        $apiParams['name'] = $name;
        $apiParams['url'] = $url;
        $apiParams['events'] = $events;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($tls)) {
            $apiParams['tls'] = $tls;
        }

        if (!is_null($authUsername)) {
            $apiParams['authUsername'] = $authUsername;
        }

        if (!is_null($authPassword)) {
            $apiParams['authPassword'] = $authPassword;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Webhook::from($response);

    }

    /**
     * Delete a webhook by its unique ID. Once deleted, the webhook will no longer
     * receive project events. 
     *
     * @param string $webhookId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $webhookId): string
    {
        $apiPath = str_replace(
            ['{webhookId}'],
            [$webhookId],
            '/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['webhookId'] = $webhookId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the webhook signing key. This endpoint can be used to regenerate the
     * signing key used to sign and validate payload deliveries for a specific
     * webhook.
     *
     * @param string $webhookId
     * @param ?string $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Webhook
     */
    public function updateSecret(string $webhookId, ?string $secret = null): \Appwrite\Models\Webhook
    {
        $apiPath = str_replace(
            ['{webhookId}'],
            [$webhookId],
            '/webhooks/{webhookId}/secret'
        );

        $apiParams = [];
        $apiParams['webhookId'] = $webhookId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Webhook::from($response);

    }
}
