<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Migration Report
 *
 * @phpstan-consistent-constructor
 */
readonly class MigrationReport
{
    use ArraySerializable;

    /**
     * MigrationReport constructor.
     *
     * @param int $user number of users to be migrated.
     * @param int $team number of teams to be migrated.
     * @param int $database number of databases to be migrated.
     * @param int $row number of rows to be migrated.
     * @param int $file number of files to be migrated.
     * @param int $bucket number of buckets to be migrated.
     * @param int $function number of functions to be migrated.
     * @param int $platform number of platforms to be migrated.
     * @param int $apiKey number of api keys to be migrated.
     * @param int $projectVariable number of project variables to be migrated.
     * @param int $webhook number of webhooks to be migrated.
     * @param int $authMethods number of auth-method configs to be migrated (always 0 or 1 — the project-level flag bundle).
     * @param int $projectProtocols number of protocol configs to be migrated (always 0 or 1 — the project-level rest/graphql/websocket flags).
     * @param int $projectLabels number of label sets to be migrated (always 0 or 1 — the project-level rbac label array).
     * @param int $projectServices number of service configs to be migrated (always 0 or 1 — the project-level enable/disable flags for all 17 services).
     * @param int $policies number of policy bundles to be migrated (always 0 or 1 — the project-level security policies covering password rules, session behavior, user limits, and membership privacy).
     * @param int $smtp number of smtp configurations to be migrated (always 0 or 1 — the project-level custom smtp settings; password is not exposed by the source api).
     * @param int $rule number of custom-domain proxy rules to be migrated. auto-generated `.appwrite.network` rules are skipped — they are recreated by parent function/site migration.
     * @param int $projectEmailTemplate number of custom email templates to be migrated (one per templateid × locale pair).
     * @param int $projectEnvironment number of project environments to be migrated. each is recreated under a new id, empty: its own resources belong to a separate project.
     * @param int $site number of sites to be migrated.
     * @param int $provider number of providers to be migrated.
     * @param int $topic number of topics to be migrated.
     * @param int $subscriber number of subscribers to be migrated.
     * @param int $message number of messages to be migrated.
     * @param int $size size of files to be migrated in mb.
     * @param string $version version of the appwrite instance to be migrated.
     * @param int $oauth2Provider number of oauth2 provider configurations to be migrated. secrets (clientsecret, p8file) are never migrated — destination admin must re-enter them per provider.
     * @param int $backupPolicy number of backup policies to be migrated.
     */
    public function __construct(
        public int $user,
        public int $team,
        public int $database,
        public int $row,
        public int $file,
        public int $bucket,
        public int $function,
        public int $platform,
        public int $apiKey,
        public int $projectVariable,
        public int $webhook,
        public int $authMethods,
        public int $projectProtocols,
        public int $projectLabels,
        public int $projectServices,
        public int $policies,
        public int $smtp,
        public int $rule,
        public int $projectEmailTemplate,
        public int $projectEnvironment,
        public int $site,
        public int $provider,
        public int $topic,
        public int $subscriber,
        public int $message,
        public int $size,
        public string $version,
        public int $oauth2Provider,
        public int $backupPolicy
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'user' => 0,
            'team' => 0,
            'database' => 0,
            'row' => 0,
            'file' => 0,
            'bucket' => 0,
            'function' => 0,
            'platform' => 0,
            'api-key' => 0,
            'project-variable' => 0,
            'webhook' => 0,
            'auth-methods' => 0,
            'project-protocols' => 0,
            'project-labels' => 0,
            'project-services' => 0,
            'policies' => 0,
            'smtp' => 0,
            'rule' => 0,
            'project-email-template' => 0,
            'project-environment' => 0,
            'site' => 0,
            'provider' => 0,
            'topic' => 0,
            'subscriber' => 0,
            'message' => 0,
            'size' => 0,
            'version' => "",
            'oauth2-provider' => 0,
            'backup-policy' => 0,
        ];

        return new static(
            user: $data['user'],
            team: $data['team'],
            database: $data['database'],
            row: $data['row'],
            file: $data['file'],
            bucket: $data['bucket'],
            function: $data['function'],
            platform: $data['platform'],
            apiKey: $data['api-key'],
            projectVariable: $data['project-variable'],
            webhook: $data['webhook'],
            authMethods: $data['auth-methods'],
            projectProtocols: $data['project-protocols'],
            projectLabels: $data['project-labels'],
            projectServices: $data['project-services'],
            policies: $data['policies'],
            smtp: $data['smtp'],
            rule: $data['rule'],
            projectEmailTemplate: $data['project-email-template'],
            projectEnvironment: $data['project-environment'],
            site: $data['site'],
            provider: $data['provider'],
            topic: $data['topic'],
            subscriber: $data['subscriber'],
            message: $data['message'],
            size: $data['size'],
            version: $data['version'],
            oauth2Provider: $data['oauth2-provider'],
            backupPolicy: $data['backup-policy']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'user' => static::serializeValue($this->user),
            'team' => static::serializeValue($this->team),
            'database' => static::serializeValue($this->database),
            'row' => static::serializeValue($this->row),
            'file' => static::serializeValue($this->file),
            'bucket' => static::serializeValue($this->bucket),
            'function' => static::serializeValue($this->function),
            'platform' => static::serializeValue($this->platform),
            'api-key' => static::serializeValue($this->apiKey),
            'project-variable' => static::serializeValue($this->projectVariable),
            'webhook' => static::serializeValue($this->webhook),
            'auth-methods' => static::serializeValue($this->authMethods),
            'project-protocols' => static::serializeValue($this->projectProtocols),
            'project-labels' => static::serializeValue($this->projectLabels),
            'project-services' => static::serializeValue($this->projectServices),
            'policies' => static::serializeValue($this->policies),
            'smtp' => static::serializeValue($this->smtp),
            'rule' => static::serializeValue($this->rule),
            'project-email-template' => static::serializeValue($this->projectEmailTemplate),
            'project-environment' => static::serializeValue($this->projectEnvironment),
            'site' => static::serializeValue($this->site),
            'provider' => static::serializeValue($this->provider),
            'topic' => static::serializeValue($this->topic),
            'subscriber' => static::serializeValue($this->subscriber),
            'message' => static::serializeValue($this->message),
            'size' => static::serializeValue($this->size),
            'version' => static::serializeValue($this->version),
            'oauth2-provider' => static::serializeValue($this->oauth2Provider),
            'backup-policy' => static::serializeValue($this->backupPolicy)
        ];
    }
}
