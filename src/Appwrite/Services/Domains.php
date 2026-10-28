<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\DomainRegistrationType;

class Domains extends Service
{
    /**
     * List all domains registered for this project. This endpoint supports
     * pagination.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\DomainsList
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
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

        return \Appwrite\Models\DomainsList::from($response);
    }

    /**
     * Create a new domain. Before creating a domain, you need to ensure that your
     * DNS provider is properly configured. After creating the domain, you can use
     * the verification endpoint to check if the domain is ready to be used.
     *
     * @throws AppwriteException
     */
    public function create(string $teamId, string $domain): \Appwrite\Models\Domain
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
        $apiParams['domain'] = $domain;

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

        return \Appwrite\Models\Domain::from($response);
    }

    /**
     * Get the registration price for a domain name.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 2.0.0. Please use `listPrices` instead.
     * @see Domains::listPrices
     */
    public function getPrice(string $domain, ?int $periodYears = null, ?DomainRegistrationType $registrationType = null): \Appwrite\Models\DomainPrice
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains/price'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;

        if (!is_null($periodYears)) {
            $apiParams['periodYears'] = $periodYears;
        }

        if (!is_null($registrationType)) {
            $apiParams['registrationType'] = $registrationType;
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

        return \Appwrite\Models\DomainPrice::from($response);
    }

    /**
     * Check availability and get the requested registration price for one or more
     * domain names. Availability is resolved for all domains in a single
     * registrar lookup. Unavailable domains have a null price for new
     * registrations, but can still be priced for renewal, transfer, or trade.
     * Every priced domain also carries its renewal price for the same period, so
     * a separate renewal lookup is not needed. A domain whose price could not be
     * resolved, for example because its TLD is not supported, is returned with a
     * null price.
     *
     * @throws AppwriteException
     */
    public function listPrices(array $domains, ?int $periodYears = null, ?DomainRegistrationType $registrationType = null): \Appwrite\Models\DomainPricesList
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains/prices'
        );

        $apiParams = [];
        $apiParams['domains'] = $domains;

        if (!is_null($periodYears)) {
            $apiParams['periodYears'] = $periodYears;
        }

        if (!is_null($registrationType)) {
            $apiParams['registrationType'] = $registrationType;
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

        return \Appwrite\Models\DomainPricesList::from($response);
    }

    /**
     * Get a domain by its unique ID.
     *
     * @throws AppwriteException
     */
    public function get(string $domainId): \Appwrite\Models\Domain
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\Domain::from($response);
    }

    /**
     * Delete a domain by its unique ID. This endpoint can be used to delete a
     * domain from your project.
     * Once deleted, the domain will no longer be available for use and all
     * associated resources will be removed.
     *
     * @throws AppwriteException
     */
    public function delete(string $domainId): string
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

    /**
     * Update the registrar nameservers for the given domain. When nameservers are
     * not provided,
     * the domain will be updated to use Appwrite nameservers.
     *
     * @throws AppwriteException
     */
    public function updateNameservers(string $domainId, ?array $nameservers = null): \Appwrite\Models\Domain
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/nameservers'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        if (!is_null($nameservers)) {
            $apiParams['nameservers'] = $nameservers;
        }

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

        return \Appwrite\Models\Domain::from($response);
    }

    /**
     * Verify which NS records are used and update the domain accordingly. This
     * will check the domain's
     * nameservers and update the domain's status based on whether the nameservers
     * match the expected
     * Appwrite nameservers.
     *
     * @throws AppwriteException
     */
    public function verifyNameservers(string $domainId): \Appwrite\Models\Domain
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/nameservers/verification'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\Domain::from($response);
    }

    /**
     * List Google Workspace DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetGoogleWorkspace(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/google-workspace'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add Google Workspace DNS records to the domain. This will create the
     * required MX records
     * for Google Workspace email hosting.
     *
     * @throws AppwriteException
     */
    public function createPresetGoogleWorkspace(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/google-workspace'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List iCloud DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetICloud(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/icloud'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add iCloud DNS records to the domain. This will create the required MX and
     * SPF records
     * for using iCloud email services with your domain.
     *
     * @throws AppwriteException
     */
    public function createPresetICloud(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/icloud'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List Mailgun DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetMailgun(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/mailgun'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add Mailgun DNS records to the domain. This endpoint will create the
     * required DNS records
     * for Mailgun in the specified domain.
     *
     * @throws AppwriteException
     */
    public function createPresetMailgun(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/mailgun'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List Outlook DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetOutlook(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/outlook'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add Outlook DNS records to the domain. This will create the required MX
     * records
     * for setting up Outlook email hosting for your domain.
     *
     * @throws AppwriteException
     */
    public function createPresetOutlook(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/outlook'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List ProtonMail DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetProtonMail(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/proton-mail'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add ProtonMail DNS records to the domain. This will create the required MX
     * records
     * for using ProtonMail with your custom domain.
     *
     * @throws AppwriteException
     */
    public function createPresetProtonMail(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/proton-mail'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List Zoho DNS records.
     *
     * @throws AppwriteException
     */
    public function getPresetZoho(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/zoho'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Add Zoho Mail DNS records to the domain. This will create the required MX
     * records
     * for setting up Zoho Mail on your domain.
     *
     * @throws AppwriteException
     */
    public function createPresetZoho(string $domainId): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/presets/zoho'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * List DNS records for a given domain. You can use this endpoint to list all
     * the DNS records
     * associated with your domain.
     *
     * @throws AppwriteException
     */
    public function listRecords(string $domainId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\DnsRecordsList
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DnsRecordsList::from($response);
    }

    /**
     * Create a new A record for the given domain. A records are used to point a
     * domain name
     * to an IPv4 address. The record value should be a valid IPv4 address.
     *
     * @throws AppwriteException
     */
    public function createRecordA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/a'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing A record for the given domain. This endpoint allows you
     * to modify
     * the properties of an A record including its name (subdomain), IPv4 address,
     * TTL,
     * and optional comment.
     *
     * @throws AppwriteException
     */
    public function updateRecordA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/a/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new AAAA record for the given domain. This endpoint allows you to
     * add a new IPv6 DNS record
     * to your domain. The record will be used to point a hostname to an IPv6
     * address.
     *
     * @throws AppwriteException
     */
    public function createRecordAAAA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/aaaa'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing AAAA record for the given domain. This endpoint allows
     * you to modify
     * the properties of an existing AAAA record, including its name (subdomain),
     * IPv6 address,
     * TTL, and optional comment.
     *
     * @throws AppwriteException
     */
    public function updateRecordAAAA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/aaaa/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new ALIAS record for the given domain. This record type can be
     * used to point your domain
     * to another domain name that will serve as an alias. This is particularly
     * useful when you want to
     * map your domain to a target domain that may change its IP address.
     *
     * @throws AppwriteException
     */
    public function createRecordAlias(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/alias'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing ALIAS record for the specified domain. This endpoint
     * allows you to modify
     * the properties of an existing ALIAS record including its name, target
     * domain, TTL, and comment.
     *
     * The ALIAS record type is similar to a CNAME record but can be used at the
     * zone apex (root domain).
     * It provides a way to map one domain name to another.
     *
     * @throws AppwriteException
     */
    public function updateRecordAlias(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/alias/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new CAA record for the given domain. CAA records are used to
     * specify which
     * Certificate Authorities (CAs) are allowed to issue SSL/TLS certificates for
     * your domain.
     *
     * @throws AppwriteException
     */
    public function createRecordCAA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/caa'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing CAA record for the given domain. A CAA (Certification
     * Authority Authorization)
     * record is used to specify which certificate authorities (CAs) are
     * authorized to issue certificates
     * for a domain.
     *
     * @throws AppwriteException
     */
    public function updateRecordCAA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/caa/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new CNAME record for the given domain.
     *
     * A CNAME record maps a subdomain to another domain name, allowing you to
     * create aliases
     * for your domain. For example, you can create a CNAME record to point
     * 'blog.example.com'
     * to 'example.wordpress.com'.
     *
     * @throws AppwriteException
     */
    public function createRecordCNAME(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/cname'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing CNAME record for the given domain.
     *
     * @throws AppwriteException
     */
    public function updateRecordCNAME(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/cname/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new HTTPS record for the given domain. This record is used to
     * configure HTTPS
     * settings for your domain, enabling secure communication over SSL/TLS.
     *
     * @throws AppwriteException
     */
    public function createRecordHTTPS(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/https'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing HTTPS record for the given domain. This endpoint allows
     * you to modify
     * the properties of an HTTPS record associated with your domain, including
     * the name (subdomain),
     * target value, TTL, and optional comment.
     *
     * @throws AppwriteException
     */
    public function updateRecordHTTPS(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/https/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new MX record for the given domain. MX records are used to define
     * the mail servers responsible
     * for accepting email messages for the domain. Multiple MX records can be
     * created with different priorities.
     * The priority parameter determines the order in which mail servers are used,
     * with lower values indicating
     * higher priority.
     *
     * @throws AppwriteException
     */
    public function createRecordMX(string $domainId, string $name, string $value, int $ttl, int $priority, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/mx'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing MX record for the given domain.
     *
     * @throws AppwriteException
     */
    public function updateRecordMX(string $domainId, string $recordId, string $name, string $value, int $ttl, int $priority, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/mx/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new NS record for the given domain. NS records specify the
     * nameservers that are used
     * to resolve the domain name to IP addresses. Each domain can have multiple
     * NS records.
     *
     * @throws AppwriteException
     */
    public function createRecordNS(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/ns'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing NS record for the given domain. This endpoint allows you
     * to modify
     * the properties of an NS (nameserver) record associated with your domain.
     * You can update
     * the record name (subdomain), target nameserver value, TTL, and add or
     * modify comments
     * for better record management.
     *
     * @throws AppwriteException
     */
    public function updateRecordNS(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/ns/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new SRV record for the given domain. SRV records are used to
     * define the location
     * of servers for specific services. For example, they can be used to specify
     * which server
     * handles a specific service like SIP or XMPP for the domain.
     *
     * @throws AppwriteException
     */
    public function createRecordSRV(string $domainId, string $name, string $value, int $ttl, int $priority, int $weight, int $port, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/srv'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;
        $apiParams['weight'] = $weight;
        $apiParams['port'] = $port;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing SRV record for the given domain.
     *
     * Required parameters:
     * - domainId: Domain unique ID
     * - recordId: DNS record unique ID
     * - name: Record name (service name)
     * - value: Target hostname for this SRV record
     * - ttl: Time to live, in seconds
     * - priority: Record priority
     * - weight: Record weight
     * - port: Port number for the service
     *
     * Optional parameters:
     * - comment: A comment for this record
     *
     * @throws AppwriteException
     */
    public function updateRecordSRV(string $domainId, string $recordId, string $name, string $value, int $ttl, int $priority, int $weight, int $port, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/srv/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;
        $apiParams['weight'] = $weight;
        $apiParams['port'] = $port;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Create a new TXT record for the given domain. TXT records can be used
     * to provide additional information about your domain, such as domain
     * verification records, SPF records, or DKIM records.
     *
     * @throws AppwriteException
     */
    public function createRecordTXT(string $domainId, string $name, int $ttl, ?string $value = null, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/records/txt'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['ttl'] = $ttl;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Update an existing TXT record for the given domain.
     *
     * Update the TXT record details for a specific domain by providing the domain
     * ID,
     * record ID, and the new record configuration including name, value, TTL, and
     * an optional comment.
     *
     * @throws AppwriteException
     */
    public function updateRecordTXT(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/txt/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Get a single DNS record for a given domain by record ID.
     *
     * This endpoint allows you to retrieve a specific DNS record associated with
     * a domain
     * using its unique identifier. The record contains information about the DNS
     * configuration
     * such as type, value, and TTL settings.
     *
     * @throws AppwriteException
     */
    public function getRecord(string $domainId, string $recordId): \Appwrite\Models\DnsRecord
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;

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

        return \Appwrite\Models\DnsRecord::from($response);
    }

    /**
     * Delete a DNS record for the given domain. This endpoint allows you to
     * delete an existing DNS record
     * from a specific domain.
     *
     * @throws AppwriteException
     */
    public function deleteRecord(string $domainId, string $recordId): string
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        if ($recordId === '') {
            throw new AppwriteException('Missing required parameter: "recordId"');
        }

        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [self::encodePath($domainId), self::encodePath($recordId)],
            '/domains/{domainId}/records/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;

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

    /**
     * Update the team ID for a specific domain. The caller must administer the
     * current
     * team and be an owner of the destination team.
     *
     * Updating the team ID will transfer ownership and access control of the
     * domain
     * and all its DNS records to the new team.
     *
     * @throws AppwriteException
     */
    public function updateTeam(string $domainId, string $teamId): \Appwrite\Models\Domain
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/team'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['teamId'] = $teamId;

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

        return \Appwrite\Models\Domain::from($response);
    }

    /**
     * Retrieve the current transfer status for a domain. Returns the status, an
     * optional reason, and a timestamp of the last status change.
     *
     * @throws AppwriteException
     */
    public function getTransferStatus(string $domainId): \Appwrite\Models\DomainTransferStatus
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/transfers/status'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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

        return \Appwrite\Models\DomainTransferStatus::from($response);
    }

    /**
     * Retrieve the DNS zone file for the given domain. This endpoint will return
     * the DNS
     * zone file in a standardized format that can be used to configure DNS
     * servers.
     *
     * @throws AppwriteException
     */
    public function getZone(string $domainId): string
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/zone'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'text/plain';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the DNS zone for the given domain using the provided zone file
     * content.
     * All parsed records the domain does not already have are imported and then
     * the main domain document is returned.
     *
     * @throws AppwriteException
     */
    public function updateZone(string $domainId, string $content): \Appwrite\Models\Domain
    {
        if ($domainId === '') {
            throw new AppwriteException('Missing required parameter: "domainId"');
        }

        $apiPath = str_replace(
            ['{domainId}'],
            [self::encodePath($domainId)],
            '/domains/{domainId}/zone'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['content'] = $content;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Domain::from($response);
    }
}
