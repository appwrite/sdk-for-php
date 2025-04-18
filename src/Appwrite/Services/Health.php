<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Name;

class Health extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Check the Appwrite HTTP server is up and responsive.
     *
     * @throws AppwriteException
     * @return array
     */
    public function get(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite Antivirus server is up and connection is successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getAntivirus(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/anti-virus'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite in-memory cache servers are up and connection is
     * successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getCache(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/cache'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the SSL certificate for a domain
     *
     * @param ?string $domain
     * @throws AppwriteException
     * @return array
     */
    public function getCertificate(?string $domain = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/certificate'
        );

        $apiParams = [];

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite database servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getDB(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/db'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite pub-sub servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getPubSub(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/pubsub'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of builds that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueBuilds(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/builds'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of certificates that are waiting to be issued against
     * [Letsencrypt](https://letsencrypt.org/) in the Appwrite internal queue
     * server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueCertificates(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/certificates'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of database changes that are waiting to be processed in the
     * Appwrite internal queue server.
     *
     * @param ?string $name
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueDatabases(?string $name = null, ?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/databases'
        );

        $apiParams = [];

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of background destructive changes that are waiting to be
     * processed in the Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueDeletes(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/deletes'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Returns the amount of failed jobs in a given queue.
     * 
     *
     * @param Name $name
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getFailedJobs(Name $name, ?int $threshold = null): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/health/queue/failed/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of function executions that are waiting to be processed in
     * the Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueFunctions(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/functions'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of logs that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueLogs(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/logs'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of mails that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueMails(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/mails'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of messages that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueMessaging(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/messaging'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of migrations that are waiting to be processed in the
     * Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueMigrations(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/migrations'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of metrics that are waiting to be processed in the Appwrite
     * stats resources queue.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueStatsResources(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/stats-resources'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of metrics that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueUsage(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/stats-usage'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the number of webhooks that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return array
     */
    public function getQueueWebhooks(?int $threshold = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/webhooks'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite storage device is up and connection is successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getStorage(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/storage'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Check the Appwrite local storage device is up and connection is successful.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getStorageLocal(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/storage/local'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
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
        $apiPath = str_replace(
            [],
            [],
            '/health/time'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}