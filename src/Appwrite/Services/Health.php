<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\HealthQueueName;

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
     * @return \Appwrite\Models\HealthStatus
     */
    public function get(): \Appwrite\Models\HealthStatus
    {
        $apiPath = str_replace(
            [],
            [],
            '/health'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatus::from($response);

    }

    /**
     * Check the Appwrite Antivirus server is up and connection is successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthAntivirus
     */
    public function getAntivirus(): \Appwrite\Models\HealthAntivirus
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/anti-virus'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthAntivirus::from($response);

    }

    /**
     * Check the database that backs the audit and activity store. When the
     * connection is reachable the endpoint returns a passing status with its
     * response time.
     * 
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatusList
     */
    public function getAuditsDB(): \Appwrite\Models\HealthStatusList
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/audits-db'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatusList::from($response);

    }

    /**
     * Check the Appwrite in-memory cache servers are up and connection is
     * successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatusList
     */
    public function getCache(): \Appwrite\Models\HealthStatusList
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/cache'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatusList::from($response);

    }

    /**
     * Get the SSL certificate for a domain
     *
     * @param ?string $domain
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthCertificate
     */
    public function getCertificate(?string $domain = null): \Appwrite\Models\HealthCertificate
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthCertificate::from($response);

    }

    /**
     * Get console pausing health status. Monitors projects approaching the pause
     * threshold to detect potential issues with console access tracking.
     * 
     *
     * @param ?int $threshold
     * @param ?int $inactivityDays
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatus
     */
    public function getConsolePausing(?int $threshold = null, ?int $inactivityDays = null): \Appwrite\Models\HealthStatus
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/console-pausing'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        if (!is_null($inactivityDays)) {
            $apiParams['inactivityDays'] = $inactivityDays;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatus::from($response);

    }

    /**
     * Check the Appwrite database servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatusList
     */
    public function getDB(): \Appwrite\Models\HealthStatusList
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/db'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatusList::from($response);

    }

    /**
     * Check the Appwrite pub-sub servers are up and connection is successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatusList
     */
    public function getPubSub(): \Appwrite\Models\HealthStatusList
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/pubsub'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatusList::from($response);

    }

    /**
     * Get the number of audit logs that are waiting to be processed in the
     * Appwrite internal queue server.
     * 
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueAudits(?int $threshold = null): \Appwrite\Models\HealthQueue
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/queue/audits'
        );

        $apiParams = [];

        if (!is_null($threshold)) {
            $apiParams['threshold'] = $threshold;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of builds that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueBuilds(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of certificates that are waiting to be issued against
     * [Letsencrypt](https://letsencrypt.org/) in the Appwrite internal queue
     * server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueCertificates(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of database changes that are waiting to be processed in the
     * Appwrite internal queue server.
     *
     * @param ?string $name
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueDatabases(?string $name = null, ?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of background destructive changes that are waiting to be
     * processed in the Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueDeletes(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Returns the amount of failed jobs in a given queue.
     * 
     *
     * @param HealthQueueName $name
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getFailedJobs(HealthQueueName $name, ?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of function executions that are waiting to be processed in
     * the Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueFunctions(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of logs that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueLogs(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of mails that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueMails(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of messages that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueMessaging(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of migrations that are waiting to be processed in the
     * Appwrite internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueMigrations(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of metrics that are waiting to be processed in the Appwrite
     * stats resources queue.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueStatsResources(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of metrics that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueUsage(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Get the number of webhooks that are waiting to be processed in the Appwrite
     * internal queue server.
     *
     * @param ?int $threshold
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthQueue
     */
    public function getQueueWebhooks(?int $threshold = null): \Appwrite\Models\HealthQueue
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthQueue::from($response);

    }

    /**
     * Check the Appwrite storage device is up and connection is successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatus
     */
    public function getStorage(): \Appwrite\Models\HealthStatus
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/storage'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatus::from($response);

    }

    /**
     * Check the Appwrite local storage device is up and connection is successful.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\HealthStatus
     */
    public function getStorageLocal(): \Appwrite\Models\HealthStatus
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/storage/local'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthStatus::from($response);

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
     * @return \Appwrite\Models\HealthTime
     */
    public function getTime(): \Appwrite\Models\HealthTime
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/time'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\HealthTime::from($response);

    }
}
