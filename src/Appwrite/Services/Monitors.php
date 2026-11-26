<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\MonitorRecord;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Enums\MonitorMethod;
use Appwrite\Enums\MonitorTlsMode;

class Monitors extends Service
{
    /**
     * Get a list of the project's monitors of every type. Use queries to filter
     * by type, resource, severity or status, and `Query.search('search', term)`
     * to search monitor IDs, names, metrics and resources.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\MonitorList
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MonitorList::from($response);
    }

    /**
     * Create a DNS monitor. It asks a resolver for a domain's records of one type
     * on its own interval, and opens an alert when the resolver fails, or when
     * its rules match the answers, by default when there is no such record. Each
     * alert fires the `monitors.[monitorId].alerts.[alertId].create` event when
     * it opens and `.update` when a check passes again, for project webhooks,
     * functions and realtime, and notifies the organization's members by email
     * and in the console.
     *
     * @throws AppwriteException
     */
    public function createDnsMonitor(string $monitorId, string $name, string $domain, ?MonitorRecord $record = null, ?string $resolver = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors/dns'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['domain'] = $domain;

        if (!is_null($record)) {
            $apiParams['record'] = $record;
        }

        if (!is_null($resolver)) {
            $apiParams['resolver'] = $resolver;
        }

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
        }
        $apiParams['interval'] = $interval;

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($cooldown)) {
            $apiParams['cooldown'] = $cooldown;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
        }

        if (!is_null($severity)) {
            $apiParams['severity'] = $severity;
        }

        if (!is_null($escalationId)) {
            $apiParams['escalationId'] = $escalationId;
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

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Update a DNS monitor by its unique ID. Only the parameters passed change;
     * the monitor's state, its last check and its open alert are kept. Passing
     * `rules` replaces all of them.
     *
     * @throws AppwriteException
     */
    public function updateDnsMonitor(string $monitorId, ?string $name = null, ?string $domain = null, ?MonitorRecord $record = null, ?string $resolver = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/dns/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['domain'] = $domain;
        $apiParams['record'] = $record;
        $apiParams['resolver'] = $resolver;
        $apiParams['rules'] = $rules;
        $apiParams['interval'] = $interval;
        $apiParams['timeout'] = $timeout;
        $apiParams['cooldown'] = $cooldown;
        $apiParams['enabled'] = $enabled;
        $apiParams['notify'] = $notify;
        $apiParams['severity'] = $severity;
        $apiParams['escalationId'] = $escalationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Create an HTTP monitor. It requests a URL on its own interval, following
     * redirects, and opens an alert when the request fails or when its rules
     * match the response, by default a status outside 2xx or the certificate of
     * an HTTPS URL about to expire. The response body is discarded as it arrives.
     * Each alert fires the `monitors.[monitorId].alerts.[alertId].create` event
     * when it opens and `.update` when a check passes again, for project
     * webhooks, functions and realtime, and notifies the organization's members
     * by email and in the console.
     *
     * @throws AppwriteException
     */
    public function createHttpMonitor(string $monitorId, string $name, string $url, ?MonitorMethod $method = null, ?array $headers = null, ?string $body = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors/http'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['url'] = $url;

        if (!is_null($method)) {
            $apiParams['method'] = $method;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
        }
        $apiParams['interval'] = $interval;

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($cooldown)) {
            $apiParams['cooldown'] = $cooldown;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
        }

        if (!is_null($severity)) {
            $apiParams['severity'] = $severity;
        }

        if (!is_null($escalationId)) {
            $apiParams['escalationId'] = $escalationId;
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

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Update an HTTP monitor by its unique ID. Only the parameters passed change;
     * the monitor's state, its last check and its open alert are kept. Passing
     * `rules` replaces all of them.
     *
     * @throws AppwriteException
     */
    public function updateHttpMonitor(string $monitorId, ?string $name = null, ?string $url = null, ?MonitorMethod $method = null, ?array $headers = null, ?string $body = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/http/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['url'] = $url;
        $apiParams['method'] = $method;
        $apiParams['headers'] = $headers;
        $apiParams['body'] = $body;
        $apiParams['rules'] = $rules;
        $apiParams['interval'] = $interval;
        $apiParams['timeout'] = $timeout;
        $apiParams['cooldown'] = $cooldown;
        $apiParams['enabled'] = $enabled;
        $apiParams['notify'] = $notify;
        $apiParams['severity'] = $severity;
        $apiParams['escalationId'] = $escalationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Create an SMTP monitor. It reads a mail server's greeting, sends `EHLO`
     * and, as its TLS mode asks, upgrades with `STARTTLS` or speaks TLS from the
     * start, on its own interval. It opens an alert when the server cannot be
     * reached, refuses the session or fails the TLS handshake, or when its rules
     * match. It never authenticates or sends mail. Each alert fires the
     * `monitors.[monitorId].alerts.[alertId].create` event when it opens and
     * `.update` when a check passes again, for project webhooks, functions and
     * realtime, and notifies the organization's members by email and in the
     * console.
     *
     * @throws AppwriteException
     */
    public function createSmtpMonitor(string $monitorId, string $name, string $host, int $port, ?MonitorTlsMode $tlsMode = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors/smtp'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['host'] = $host;
        $apiParams['port'] = $port;

        if (!is_null($tlsMode)) {
            $apiParams['tlsMode'] = $tlsMode;
        }

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
        }
        $apiParams['interval'] = $interval;

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($cooldown)) {
            $apiParams['cooldown'] = $cooldown;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
        }

        if (!is_null($severity)) {
            $apiParams['severity'] = $severity;
        }

        if (!is_null($escalationId)) {
            $apiParams['escalationId'] = $escalationId;
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

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Update an SMTP monitor by its unique ID. Only the parameters passed change;
     * the monitor's state, its last check and its open alert are kept. Passing
     * `rules` replaces all of them.
     *
     * @throws AppwriteException
     */
    public function updateSmtpMonitor(string $monitorId, ?string $name = null, ?string $host = null, ?int $port = null, ?MonitorTlsMode $tlsMode = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/smtp/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['host'] = $host;
        $apiParams['port'] = $port;
        $apiParams['tlsMode'] = $tlsMode;
        $apiParams['rules'] = $rules;
        $apiParams['interval'] = $interval;
        $apiParams['timeout'] = $timeout;
        $apiParams['cooldown'] = $cooldown;
        $apiParams['enabled'] = $enabled;
        $apiParams['notify'] = $notify;
        $apiParams['severity'] = $severity;
        $apiParams['escalationId'] = $escalationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Create a TCP monitor. It opens a connection to a host and port on its own
     * interval and closes it at once, and opens an alert when the connection
     * cannot be made, or when its rules match. Each alert fires the
     * `monitors.[monitorId].alerts.[alertId].create` event when it opens and
     * `.update` when a check passes again, for project webhooks, functions and
     * realtime, and notifies the organization's members by email and in the
     * console.
     *
     * @throws AppwriteException
     */
    public function createTcpMonitor(string $monitorId, string $name, string $host, int $port, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors/tcp'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['host'] = $host;
        $apiParams['port'] = $port;

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
        }
        $apiParams['interval'] = $interval;

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($cooldown)) {
            $apiParams['cooldown'] = $cooldown;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
        }

        if (!is_null($severity)) {
            $apiParams['severity'] = $severity;
        }

        if (!is_null($escalationId)) {
            $apiParams['escalationId'] = $escalationId;
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

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Update a TCP monitor by its unique ID. Only the parameters passed change;
     * the monitor's state, its last check and its open alert are kept. Passing
     * `rules` replaces all of them.
     *
     * @throws AppwriteException
     */
    public function updateTcpMonitor(string $monitorId, ?string $name = null, ?string $host = null, ?int $port = null, ?array $rules = null, ?int $interval = null, ?int $timeout = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/tcp/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['host'] = $host;
        $apiParams['port'] = $port;
        $apiParams['rules'] = $rules;
        $apiParams['interval'] = $interval;
        $apiParams['timeout'] = $timeout;
        $apiParams['cooldown'] = $cooldown;
        $apiParams['enabled'] = $enabled;
        $apiParams['notify'] = $notify;
        $apiParams['severity'] = $severity;
        $apiParams['escalationId'] = $escalationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Create a usage monitor. It reads a usage metric of the project, or of one
     * of its databases, buckets, functions or sites, on a schedule, and opens an
     * alert when all its rules hold. Each alert fires the
     * `monitors.[monitorId].alerts.[alertId].create` event when it opens and
     * `.update` when usage recovers, for project webhooks, functions and
     * realtime, and notifies the confirmed members of the `notify` roles by email
     * and in the console, or the steps of the escalation set by `escalationId`.
     *
     * @throws AppwriteException
     */
    public function createUsageMonitor(string $monitorId, string $name, array $rules, ?int $window = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        $apiPath = str_replace(
            [],
            [],
            '/monitors/usage'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['rules'] = $rules;

        if (!is_null($window)) {
            $apiParams['window'] = $window;
        }

        if (!is_null($cooldown)) {
            $apiParams['cooldown'] = $cooldown;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
        }

        if (!is_null($severity)) {
            $apiParams['severity'] = $severity;
        }

        if (!is_null($escalationId)) {
            $apiParams['escalationId'] = $escalationId;
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

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Update a usage monitor by its unique ID. Only the parameters passed change;
     * the monitor's state and its open alert are kept. Passing `rules` replaces
     * all of them.
     *
     * @throws AppwriteException
     */
    public function updateUsageMonitor(string $monitorId, ?string $name = null, ?array $rules = null, ?int $window = null, ?int $cooldown = null, ?bool $enabled = null, ?array $notify = null, ?MonitorSeverity $severity = null, ?string $escalationId = null): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/usage/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;
        $apiParams['name'] = $name;
        $apiParams['rules'] = $rules;
        $apiParams['window'] = $window;
        $apiParams['cooldown'] = $cooldown;
        $apiParams['enabled'] = $enabled;
        $apiParams['notify'] = $notify;
        $apiParams['severity'] = $severity;
        $apiParams['escalationId'] = $escalationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Get a monitor by its unique ID, with its state as of its last evaluation.
     *
     * @throws AppwriteException
     */
    public function get(string $monitorId): \Appwrite\Models\Monitor
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Monitor::from($response);
    }

    /**
     * Delete a monitor by its unique ID. It stops being evaluated; an alert it is
     * firing is resolved and kept with the rest of its alert history.
     *
     * @throws AppwriteException
     */
    public function delete(string $monitorId): string
    {
        if ($monitorId === '') {
            throw new AppwriteException('Missing required parameter: "monitorId"');
        }

        $apiPath = str_replace(
            ['{monitorId}'],
            [self::encodePath($monitorId)],
            '/monitors/{monitorId}'
        );

        $apiParams = [];
        $apiParams['monitorId'] = $monitorId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
