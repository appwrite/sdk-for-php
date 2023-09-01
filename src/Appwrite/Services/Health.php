<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Health extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * Get HTTP
     *
     * Check the Appwrite HTTP server is up and responsive.
     *
     * @throws AppwriteException
     * @return array

     */
    public function get(): array
    {
        $apiPath = str_replace([], [], '/health');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Antivirus
     *
     * Check the Appwrite Antivirus server is up and connection is successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getAntivirus(): array
    {
        $apiPath = str_replace([], [], '/health/anti-virus');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Cache
     *
     * Check the Appwrite in-memory cache servers are up and connection is
     * successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getCache(): array
    {
        $apiPath = str_replace([], [], '/health/cache');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get DB
     *
     * Check the Appwrite database servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getDB(): array
    {
        $apiPath = str_replace([], [], '/health/db');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get PubSub
     *
     * Check the Appwrite pub-sub servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getPubSub(): array
    {
        $apiPath = str_replace([], [], '/health/pubsub');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Queue
     *
     * Check the Appwrite queue messaging servers are up and connection is
     * successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getQueue(): array
    {
        $apiPath = str_replace([], [], '/health/queue');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Certificates Queue
     *
     * Get the number of certificates that are waiting to be issued against
     * [Letsencrypt](https://letsencrypt.org/) in the Appwrite internal queue
     * server.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getQueueCertificates(): array
    {
        $apiPath = str_replace([], [], '/health/queue/certificates');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Functions Queue
     *
     * @throws AppwriteException
     * @return array

     */
    public function getQueueFunctions(): array
    {
        $apiPath = str_replace([], [], '/health/queue/functions');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Logs Queue
     *
     * Get the number of logs that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getQueueLogs(): array
    {
        $apiPath = str_replace([], [], '/health/queue/logs');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Webhooks Queue
     *
     * Get the number of webhooks that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getQueueWebhooks(): array
    {
        $apiPath = str_replace([], [], '/health/queue/webhooks');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Local Storage
     *
     * Check the Appwrite local storage device is up and connection is successful.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getStorageLocal(): array
    {
        $apiPath = str_replace([], [], '/health/storage/local');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get Time
     *
     * Check the Appwrite server time is synced with Google remote NTP server. We
     * use this technology to smoothly handle leap seconds with no disruptive
     * events. The [Network Time
     * Protocol](https://en.wikipedia.org/wiki/Network_Time_Protocol) (NTP) is
     * used by hundreds of millions of computers and devices to synchronize their
     * clocks over the Internet. If your computer sets its own clock, it likely
     * uses NTP.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getTime(): array
    {
        $apiPath = str_replace([], [], '/health/time');

        $apiParams = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
