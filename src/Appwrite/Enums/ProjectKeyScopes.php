<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectKeyScopes implements JsonSerializable, Stringable
{
    private static ProjectKeyScopes $PROJECTREAD;
    private static ProjectKeyScopes $PROJECTWRITE;
    private static ProjectKeyScopes $USAGEREAD;
    private static ProjectKeyScopes $KEYSREAD;
    private static ProjectKeyScopes $KEYSWRITE;
    private static ProjectKeyScopes $PLATFORMSREAD;
    private static ProjectKeyScopes $PLATFORMSWRITE;
    private static ProjectKeyScopes $MOCKSREAD;
    private static ProjectKeyScopes $MOCKSWRITE;
    private static ProjectKeyScopes $POLICIESREAD;
    private static ProjectKeyScopes $POLICIESWRITE;
    private static ProjectKeyScopes $PROJECTPOLICIESREAD;
    private static ProjectKeyScopes $PROJECTPOLICIESWRITE;
    private static ProjectKeyScopes $PROJECTOAUTH2READ;
    private static ProjectKeyScopes $PROJECTOAUTH2WRITE;
    private static ProjectKeyScopes $TEMPLATESREAD;
    private static ProjectKeyScopes $TEMPLATESWRITE;
    private static ProjectKeyScopes $STAGESREAD;
    private static ProjectKeyScopes $STAGESWRITE;
    private static ProjectKeyScopes $USERSREAD;
    private static ProjectKeyScopes $USERSWRITE;
    private static ProjectKeyScopes $SESSIONSREAD;
    private static ProjectKeyScopes $SESSIONSWRITE;
    private static ProjectKeyScopes $TEAMSREAD;
    private static ProjectKeyScopes $TEAMSWRITE;
    private static ProjectKeyScopes $DATABASESREAD;
    private static ProjectKeyScopes $DATABASESWRITE;
    private static ProjectKeyScopes $TABLESREAD;
    private static ProjectKeyScopes $TABLESWRITE;
    private static ProjectKeyScopes $COLUMNSREAD;
    private static ProjectKeyScopes $COLUMNSWRITE;
    private static ProjectKeyScopes $INDEXESREAD;
    private static ProjectKeyScopes $INDEXESWRITE;
    private static ProjectKeyScopes $ROWSREAD;
    private static ProjectKeyScopes $ROWSWRITE;
    private static ProjectKeyScopes $EMBEDDINGSWRITE;
    private static ProjectKeyScopes $COLLECTIONSREAD;
    private static ProjectKeyScopes $COLLECTIONSWRITE;
    private static ProjectKeyScopes $ATTRIBUTESREAD;
    private static ProjectKeyScopes $ATTRIBUTESWRITE;
    private static ProjectKeyScopes $DOCUMENTSREAD;
    private static ProjectKeyScopes $DOCUMENTSWRITE;
    private static ProjectKeyScopes $DOCUMENTSDBREAD;
    private static ProjectKeyScopes $DOCUMENTSDBWRITE;
    private static ProjectKeyScopes $DOCUMENTSDBCOLLECTIONSREAD;
    private static ProjectKeyScopes $DOCUMENTSDBCOLLECTIONSWRITE;
    private static ProjectKeyScopes $DOCUMENTSDBDOCUMENTSREAD;
    private static ProjectKeyScopes $DOCUMENTSDBDOCUMENTSWRITE;
    private static ProjectKeyScopes $VECTORSDBREAD;
    private static ProjectKeyScopes $VECTORSDBWRITE;
    private static ProjectKeyScopes $VECTORSDBCOLLECTIONSREAD;
    private static ProjectKeyScopes $VECTORSDBCOLLECTIONSWRITE;
    private static ProjectKeyScopes $VECTORSDBDOCUMENTSREAD;
    private static ProjectKeyScopes $VECTORSDBDOCUMENTSWRITE;
    private static ProjectKeyScopes $BUCKETSREAD;
    private static ProjectKeyScopes $BUCKETSWRITE;
    private static ProjectKeyScopes $FILESREAD;
    private static ProjectKeyScopes $FILESWRITE;
    private static ProjectKeyScopes $TOKENSREAD;
    private static ProjectKeyScopes $TOKENSWRITE;
    private static ProjectKeyScopes $FUNCTIONSREAD;
    private static ProjectKeyScopes $FUNCTIONSWRITE;
    private static ProjectKeyScopes $EXECUTIONSREAD;
    private static ProjectKeyScopes $EXECUTIONSWRITE;
    private static ProjectKeyScopes $EXECUTIONREAD;
    private static ProjectKeyScopes $EXECUTIONWRITE;
    private static ProjectKeyScopes $SITESREAD;
    private static ProjectKeyScopes $SITESWRITE;
    private static ProjectKeyScopes $LOGREAD;
    private static ProjectKeyScopes $LOGWRITE;
    private static ProjectKeyScopes $PROVIDERSREAD;
    private static ProjectKeyScopes $PROVIDERSWRITE;
    private static ProjectKeyScopes $TOPICSREAD;
    private static ProjectKeyScopes $TOPICSWRITE;
    private static ProjectKeyScopes $SUBSCRIBERSREAD;
    private static ProjectKeyScopes $SUBSCRIBERSWRITE;
    private static ProjectKeyScopes $TARGETSREAD;
    private static ProjectKeyScopes $TARGETSWRITE;
    private static ProjectKeyScopes $MESSAGESREAD;
    private static ProjectKeyScopes $MESSAGESWRITE;
    private static ProjectKeyScopes $RULESREAD;
    private static ProjectKeyScopes $RULESWRITE;
    private static ProjectKeyScopes $WEBHOOKSREAD;
    private static ProjectKeyScopes $WEBHOOKSWRITE;
    private static ProjectKeyScopes $LOCALEREAD;
    private static ProjectKeyScopes $AVATARSREAD;
    private static ProjectKeyScopes $HEALTHREAD;
    private static ProjectKeyScopes $ASSISTANTREAD;
    private static ProjectKeyScopes $MIGRATIONSREAD;
    private static ProjectKeyScopes $MIGRATIONSWRITE;
    private static ProjectKeyScopes $SCHEDULESREAD;
    private static ProjectKeyScopes $SCHEDULESWRITE;
    private static ProjectKeyScopes $VCSREAD;
    private static ProjectKeyScopes $VCSWRITE;
    private static ProjectKeyScopes $INSIGHTSREAD;
    private static ProjectKeyScopes $INSIGHTSWRITE;
    private static ProjectKeyScopes $REPORTSREAD;
    private static ProjectKeyScopes $REPORTSWRITE;
    private static ProjectKeyScopes $PRESENCESREAD;
    private static ProjectKeyScopes $PRESENCESWRITE;
    private static ProjectKeyScopes $BACKUPSPOLICIESREAD;
    private static ProjectKeyScopes $BACKUPSPOLICIESWRITE;
    private static ProjectKeyScopes $ARCHIVESREAD;
    private static ProjectKeyScopes $ARCHIVESWRITE;
    private static ProjectKeyScopes $RESTORATIONSREAD;
    private static ProjectKeyScopes $RESTORATIONSWRITE;
    private static ProjectKeyScopes $DOMAINSREAD;
    private static ProjectKeyScopes $DOMAINSWRITE;
    private static ProjectKeyScopes $WAFRULESREAD;
    private static ProjectKeyScopes $WAFRULESWRITE;
    private static ProjectKeyScopes $EVENTSREAD;
    private static ProjectKeyScopes $PROXYINVALIDATIONSWRITE;
    private static ProjectKeyScopes $APPSREAD;
    private static ProjectKeyScopes $APPSWRITE;
    private static ProjectKeyScopes $OAUTH2READ;
    private static ProjectKeyScopes $OAUTH2WRITE;
    private static ProjectKeyScopes $OAUTH2INTROSPECT;

    private function __construct(private readonly string $value)
    {
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function PROJECTREAD(): ProjectKeyScopes
    {
        self::$PROJECTREAD ??= new ProjectKeyScopes('project.read');

        return self::$PROJECTREAD;
    }
    public static function PROJECTWRITE(): ProjectKeyScopes
    {
        self::$PROJECTWRITE ??= new ProjectKeyScopes('project.write');

        return self::$PROJECTWRITE;
    }
    public static function USAGEREAD(): ProjectKeyScopes
    {
        self::$USAGEREAD ??= new ProjectKeyScopes('usage.read');

        return self::$USAGEREAD;
    }
    public static function KEYSREAD(): ProjectKeyScopes
    {
        self::$KEYSREAD ??= new ProjectKeyScopes('keys.read');

        return self::$KEYSREAD;
    }
    public static function KEYSWRITE(): ProjectKeyScopes
    {
        self::$KEYSWRITE ??= new ProjectKeyScopes('keys.write');

        return self::$KEYSWRITE;
    }
    public static function PLATFORMSREAD(): ProjectKeyScopes
    {
        self::$PLATFORMSREAD ??= new ProjectKeyScopes('platforms.read');

        return self::$PLATFORMSREAD;
    }
    public static function PLATFORMSWRITE(): ProjectKeyScopes
    {
        self::$PLATFORMSWRITE ??= new ProjectKeyScopes('platforms.write');

        return self::$PLATFORMSWRITE;
    }
    public static function MOCKSREAD(): ProjectKeyScopes
    {
        self::$MOCKSREAD ??= new ProjectKeyScopes('mocks.read');

        return self::$MOCKSREAD;
    }
    public static function MOCKSWRITE(): ProjectKeyScopes
    {
        self::$MOCKSWRITE ??= new ProjectKeyScopes('mocks.write');

        return self::$MOCKSWRITE;
    }
    public static function POLICIESREAD(): ProjectKeyScopes
    {
        self::$POLICIESREAD ??= new ProjectKeyScopes('policies.read');

        return self::$POLICIESREAD;
    }
    public static function POLICIESWRITE(): ProjectKeyScopes
    {
        self::$POLICIESWRITE ??= new ProjectKeyScopes('policies.write');

        return self::$POLICIESWRITE;
    }
    public static function PROJECTPOLICIESREAD(): ProjectKeyScopes
    {
        self::$PROJECTPOLICIESREAD ??= new ProjectKeyScopes('project.policies.read');

        return self::$PROJECTPOLICIESREAD;
    }
    public static function PROJECTPOLICIESWRITE(): ProjectKeyScopes
    {
        self::$PROJECTPOLICIESWRITE ??= new ProjectKeyScopes('project.policies.write');

        return self::$PROJECTPOLICIESWRITE;
    }
    public static function PROJECTOAUTH2READ(): ProjectKeyScopes
    {
        self::$PROJECTOAUTH2READ ??= new ProjectKeyScopes('project.oauth2.read');

        return self::$PROJECTOAUTH2READ;
    }
    public static function PROJECTOAUTH2WRITE(): ProjectKeyScopes
    {
        self::$PROJECTOAUTH2WRITE ??= new ProjectKeyScopes('project.oauth2.write');

        return self::$PROJECTOAUTH2WRITE;
    }
    public static function TEMPLATESREAD(): ProjectKeyScopes
    {
        self::$TEMPLATESREAD ??= new ProjectKeyScopes('templates.read');

        return self::$TEMPLATESREAD;
    }
    public static function TEMPLATESWRITE(): ProjectKeyScopes
    {
        self::$TEMPLATESWRITE ??= new ProjectKeyScopes('templates.write');

        return self::$TEMPLATESWRITE;
    }
    public static function STAGESREAD(): ProjectKeyScopes
    {
        self::$STAGESREAD ??= new ProjectKeyScopes('stages.read');

        return self::$STAGESREAD;
    }
    public static function STAGESWRITE(): ProjectKeyScopes
    {
        self::$STAGESWRITE ??= new ProjectKeyScopes('stages.write');

        return self::$STAGESWRITE;
    }
    public static function USERSREAD(): ProjectKeyScopes
    {
        self::$USERSREAD ??= new ProjectKeyScopes('users.read');

        return self::$USERSREAD;
    }
    public static function USERSWRITE(): ProjectKeyScopes
    {
        self::$USERSWRITE ??= new ProjectKeyScopes('users.write');

        return self::$USERSWRITE;
    }
    public static function SESSIONSREAD(): ProjectKeyScopes
    {
        self::$SESSIONSREAD ??= new ProjectKeyScopes('sessions.read');

        return self::$SESSIONSREAD;
    }
    public static function SESSIONSWRITE(): ProjectKeyScopes
    {
        self::$SESSIONSWRITE ??= new ProjectKeyScopes('sessions.write');

        return self::$SESSIONSWRITE;
    }
    public static function TEAMSREAD(): ProjectKeyScopes
    {
        self::$TEAMSREAD ??= new ProjectKeyScopes('teams.read');

        return self::$TEAMSREAD;
    }
    public static function TEAMSWRITE(): ProjectKeyScopes
    {
        self::$TEAMSWRITE ??= new ProjectKeyScopes('teams.write');

        return self::$TEAMSWRITE;
    }
    public static function DATABASESREAD(): ProjectKeyScopes
    {
        self::$DATABASESREAD ??= new ProjectKeyScopes('databases.read');

        return self::$DATABASESREAD;
    }
    public static function DATABASESWRITE(): ProjectKeyScopes
    {
        self::$DATABASESWRITE ??= new ProjectKeyScopes('databases.write');

        return self::$DATABASESWRITE;
    }
    public static function TABLESREAD(): ProjectKeyScopes
    {
        self::$TABLESREAD ??= new ProjectKeyScopes('tables.read');

        return self::$TABLESREAD;
    }
    public static function TABLESWRITE(): ProjectKeyScopes
    {
        self::$TABLESWRITE ??= new ProjectKeyScopes('tables.write');

        return self::$TABLESWRITE;
    }
    public static function COLUMNSREAD(): ProjectKeyScopes
    {
        self::$COLUMNSREAD ??= new ProjectKeyScopes('columns.read');

        return self::$COLUMNSREAD;
    }
    public static function COLUMNSWRITE(): ProjectKeyScopes
    {
        self::$COLUMNSWRITE ??= new ProjectKeyScopes('columns.write');

        return self::$COLUMNSWRITE;
    }
    public static function INDEXESREAD(): ProjectKeyScopes
    {
        self::$INDEXESREAD ??= new ProjectKeyScopes('indexes.read');

        return self::$INDEXESREAD;
    }
    public static function INDEXESWRITE(): ProjectKeyScopes
    {
        self::$INDEXESWRITE ??= new ProjectKeyScopes('indexes.write');

        return self::$INDEXESWRITE;
    }
    public static function ROWSREAD(): ProjectKeyScopes
    {
        self::$ROWSREAD ??= new ProjectKeyScopes('rows.read');

        return self::$ROWSREAD;
    }
    public static function ROWSWRITE(): ProjectKeyScopes
    {
        self::$ROWSWRITE ??= new ProjectKeyScopes('rows.write');

        return self::$ROWSWRITE;
    }
    public static function EMBEDDINGSWRITE(): ProjectKeyScopes
    {
        self::$EMBEDDINGSWRITE ??= new ProjectKeyScopes('embeddings.write');

        return self::$EMBEDDINGSWRITE;
    }
    public static function COLLECTIONSREAD(): ProjectKeyScopes
    {
        self::$COLLECTIONSREAD ??= new ProjectKeyScopes('collections.read');

        return self::$COLLECTIONSREAD;
    }
    public static function COLLECTIONSWRITE(): ProjectKeyScopes
    {
        self::$COLLECTIONSWRITE ??= new ProjectKeyScopes('collections.write');

        return self::$COLLECTIONSWRITE;
    }
    public static function ATTRIBUTESREAD(): ProjectKeyScopes
    {
        self::$ATTRIBUTESREAD ??= new ProjectKeyScopes('attributes.read');

        return self::$ATTRIBUTESREAD;
    }
    public static function ATTRIBUTESWRITE(): ProjectKeyScopes
    {
        self::$ATTRIBUTESWRITE ??= new ProjectKeyScopes('attributes.write');

        return self::$ATTRIBUTESWRITE;
    }
    public static function DOCUMENTSREAD(): ProjectKeyScopes
    {
        self::$DOCUMENTSREAD ??= new ProjectKeyScopes('documents.read');

        return self::$DOCUMENTSREAD;
    }
    public static function DOCUMENTSWRITE(): ProjectKeyScopes
    {
        self::$DOCUMENTSWRITE ??= new ProjectKeyScopes('documents.write');

        return self::$DOCUMENTSWRITE;
    }
    public static function DOCUMENTSDBREAD(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBREAD ??= new ProjectKeyScopes('documentsdb.read');

        return self::$DOCUMENTSDBREAD;
    }
    public static function DOCUMENTSDBWRITE(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBWRITE ??= new ProjectKeyScopes('documentsdb.write');

        return self::$DOCUMENTSDBWRITE;
    }
    public static function DOCUMENTSDBCOLLECTIONSREAD(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBCOLLECTIONSREAD ??= new ProjectKeyScopes('documentsdb.collections.read');

        return self::$DOCUMENTSDBCOLLECTIONSREAD;
    }
    public static function DOCUMENTSDBCOLLECTIONSWRITE(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBCOLLECTIONSWRITE ??= new ProjectKeyScopes('documentsdb.collections.write');

        return self::$DOCUMENTSDBCOLLECTIONSWRITE;
    }
    public static function DOCUMENTSDBDOCUMENTSREAD(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBDOCUMENTSREAD ??= new ProjectKeyScopes('documentsdb.documents.read');

        return self::$DOCUMENTSDBDOCUMENTSREAD;
    }
    public static function DOCUMENTSDBDOCUMENTSWRITE(): ProjectKeyScopes
    {
        self::$DOCUMENTSDBDOCUMENTSWRITE ??= new ProjectKeyScopes('documentsdb.documents.write');

        return self::$DOCUMENTSDBDOCUMENTSWRITE;
    }
    public static function VECTORSDBREAD(): ProjectKeyScopes
    {
        self::$VECTORSDBREAD ??= new ProjectKeyScopes('vectorsdb.read');

        return self::$VECTORSDBREAD;
    }
    public static function VECTORSDBWRITE(): ProjectKeyScopes
    {
        self::$VECTORSDBWRITE ??= new ProjectKeyScopes('vectorsdb.write');

        return self::$VECTORSDBWRITE;
    }
    public static function VECTORSDBCOLLECTIONSREAD(): ProjectKeyScopes
    {
        self::$VECTORSDBCOLLECTIONSREAD ??= new ProjectKeyScopes('vectorsdb.collections.read');

        return self::$VECTORSDBCOLLECTIONSREAD;
    }
    public static function VECTORSDBCOLLECTIONSWRITE(): ProjectKeyScopes
    {
        self::$VECTORSDBCOLLECTIONSWRITE ??= new ProjectKeyScopes('vectorsdb.collections.write');

        return self::$VECTORSDBCOLLECTIONSWRITE;
    }
    public static function VECTORSDBDOCUMENTSREAD(): ProjectKeyScopes
    {
        self::$VECTORSDBDOCUMENTSREAD ??= new ProjectKeyScopes('vectorsdb.documents.read');

        return self::$VECTORSDBDOCUMENTSREAD;
    }
    public static function VECTORSDBDOCUMENTSWRITE(): ProjectKeyScopes
    {
        self::$VECTORSDBDOCUMENTSWRITE ??= new ProjectKeyScopes('vectorsdb.documents.write');

        return self::$VECTORSDBDOCUMENTSWRITE;
    }
    public static function BUCKETSREAD(): ProjectKeyScopes
    {
        self::$BUCKETSREAD ??= new ProjectKeyScopes('buckets.read');

        return self::$BUCKETSREAD;
    }
    public static function BUCKETSWRITE(): ProjectKeyScopes
    {
        self::$BUCKETSWRITE ??= new ProjectKeyScopes('buckets.write');

        return self::$BUCKETSWRITE;
    }
    public static function FILESREAD(): ProjectKeyScopes
    {
        self::$FILESREAD ??= new ProjectKeyScopes('files.read');

        return self::$FILESREAD;
    }
    public static function FILESWRITE(): ProjectKeyScopes
    {
        self::$FILESWRITE ??= new ProjectKeyScopes('files.write');

        return self::$FILESWRITE;
    }
    public static function TOKENSREAD(): ProjectKeyScopes
    {
        self::$TOKENSREAD ??= new ProjectKeyScopes('tokens.read');

        return self::$TOKENSREAD;
    }
    public static function TOKENSWRITE(): ProjectKeyScopes
    {
        self::$TOKENSWRITE ??= new ProjectKeyScopes('tokens.write');

        return self::$TOKENSWRITE;
    }
    public static function FUNCTIONSREAD(): ProjectKeyScopes
    {
        self::$FUNCTIONSREAD ??= new ProjectKeyScopes('functions.read');

        return self::$FUNCTIONSREAD;
    }
    public static function FUNCTIONSWRITE(): ProjectKeyScopes
    {
        self::$FUNCTIONSWRITE ??= new ProjectKeyScopes('functions.write');

        return self::$FUNCTIONSWRITE;
    }
    public static function EXECUTIONSREAD(): ProjectKeyScopes
    {
        self::$EXECUTIONSREAD ??= new ProjectKeyScopes('executions.read');

        return self::$EXECUTIONSREAD;
    }
    public static function EXECUTIONSWRITE(): ProjectKeyScopes
    {
        self::$EXECUTIONSWRITE ??= new ProjectKeyScopes('executions.write');

        return self::$EXECUTIONSWRITE;
    }
    public static function EXECUTIONREAD(): ProjectKeyScopes
    {
        self::$EXECUTIONREAD ??= new ProjectKeyScopes('execution.read');

        return self::$EXECUTIONREAD;
    }
    public static function EXECUTIONWRITE(): ProjectKeyScopes
    {
        self::$EXECUTIONWRITE ??= new ProjectKeyScopes('execution.write');

        return self::$EXECUTIONWRITE;
    }
    public static function SITESREAD(): ProjectKeyScopes
    {
        self::$SITESREAD ??= new ProjectKeyScopes('sites.read');

        return self::$SITESREAD;
    }
    public static function SITESWRITE(): ProjectKeyScopes
    {
        self::$SITESWRITE ??= new ProjectKeyScopes('sites.write');

        return self::$SITESWRITE;
    }
    public static function LOGREAD(): ProjectKeyScopes
    {
        self::$LOGREAD ??= new ProjectKeyScopes('log.read');

        return self::$LOGREAD;
    }
    public static function LOGWRITE(): ProjectKeyScopes
    {
        self::$LOGWRITE ??= new ProjectKeyScopes('log.write');

        return self::$LOGWRITE;
    }
    public static function PROVIDERSREAD(): ProjectKeyScopes
    {
        self::$PROVIDERSREAD ??= new ProjectKeyScopes('providers.read');

        return self::$PROVIDERSREAD;
    }
    public static function PROVIDERSWRITE(): ProjectKeyScopes
    {
        self::$PROVIDERSWRITE ??= new ProjectKeyScopes('providers.write');

        return self::$PROVIDERSWRITE;
    }
    public static function TOPICSREAD(): ProjectKeyScopes
    {
        self::$TOPICSREAD ??= new ProjectKeyScopes('topics.read');

        return self::$TOPICSREAD;
    }
    public static function TOPICSWRITE(): ProjectKeyScopes
    {
        self::$TOPICSWRITE ??= new ProjectKeyScopes('topics.write');

        return self::$TOPICSWRITE;
    }
    public static function SUBSCRIBERSREAD(): ProjectKeyScopes
    {
        self::$SUBSCRIBERSREAD ??= new ProjectKeyScopes('subscribers.read');

        return self::$SUBSCRIBERSREAD;
    }
    public static function SUBSCRIBERSWRITE(): ProjectKeyScopes
    {
        self::$SUBSCRIBERSWRITE ??= new ProjectKeyScopes('subscribers.write');

        return self::$SUBSCRIBERSWRITE;
    }
    public static function TARGETSREAD(): ProjectKeyScopes
    {
        self::$TARGETSREAD ??= new ProjectKeyScopes('targets.read');

        return self::$TARGETSREAD;
    }
    public static function TARGETSWRITE(): ProjectKeyScopes
    {
        self::$TARGETSWRITE ??= new ProjectKeyScopes('targets.write');

        return self::$TARGETSWRITE;
    }
    public static function MESSAGESREAD(): ProjectKeyScopes
    {
        self::$MESSAGESREAD ??= new ProjectKeyScopes('messages.read');

        return self::$MESSAGESREAD;
    }
    public static function MESSAGESWRITE(): ProjectKeyScopes
    {
        self::$MESSAGESWRITE ??= new ProjectKeyScopes('messages.write');

        return self::$MESSAGESWRITE;
    }
    public static function RULESREAD(): ProjectKeyScopes
    {
        self::$RULESREAD ??= new ProjectKeyScopes('rules.read');

        return self::$RULESREAD;
    }
    public static function RULESWRITE(): ProjectKeyScopes
    {
        self::$RULESWRITE ??= new ProjectKeyScopes('rules.write');

        return self::$RULESWRITE;
    }
    public static function WEBHOOKSREAD(): ProjectKeyScopes
    {
        self::$WEBHOOKSREAD ??= new ProjectKeyScopes('webhooks.read');

        return self::$WEBHOOKSREAD;
    }
    public static function WEBHOOKSWRITE(): ProjectKeyScopes
    {
        self::$WEBHOOKSWRITE ??= new ProjectKeyScopes('webhooks.write');

        return self::$WEBHOOKSWRITE;
    }
    public static function LOCALEREAD(): ProjectKeyScopes
    {
        self::$LOCALEREAD ??= new ProjectKeyScopes('locale.read');

        return self::$LOCALEREAD;
    }
    public static function AVATARSREAD(): ProjectKeyScopes
    {
        self::$AVATARSREAD ??= new ProjectKeyScopes('avatars.read');

        return self::$AVATARSREAD;
    }
    public static function HEALTHREAD(): ProjectKeyScopes
    {
        self::$HEALTHREAD ??= new ProjectKeyScopes('health.read');

        return self::$HEALTHREAD;
    }
    public static function ASSISTANTREAD(): ProjectKeyScopes
    {
        self::$ASSISTANTREAD ??= new ProjectKeyScopes('assistant.read');

        return self::$ASSISTANTREAD;
    }
    public static function MIGRATIONSREAD(): ProjectKeyScopes
    {
        self::$MIGRATIONSREAD ??= new ProjectKeyScopes('migrations.read');

        return self::$MIGRATIONSREAD;
    }
    public static function MIGRATIONSWRITE(): ProjectKeyScopes
    {
        self::$MIGRATIONSWRITE ??= new ProjectKeyScopes('migrations.write');

        return self::$MIGRATIONSWRITE;
    }
    public static function SCHEDULESREAD(): ProjectKeyScopes
    {
        self::$SCHEDULESREAD ??= new ProjectKeyScopes('schedules.read');

        return self::$SCHEDULESREAD;
    }
    public static function SCHEDULESWRITE(): ProjectKeyScopes
    {
        self::$SCHEDULESWRITE ??= new ProjectKeyScopes('schedules.write');

        return self::$SCHEDULESWRITE;
    }
    public static function VCSREAD(): ProjectKeyScopes
    {
        self::$VCSREAD ??= new ProjectKeyScopes('vcs.read');

        return self::$VCSREAD;
    }
    public static function VCSWRITE(): ProjectKeyScopes
    {
        self::$VCSWRITE ??= new ProjectKeyScopes('vcs.write');

        return self::$VCSWRITE;
    }
    public static function INSIGHTSREAD(): ProjectKeyScopes
    {
        self::$INSIGHTSREAD ??= new ProjectKeyScopes('insights.read');

        return self::$INSIGHTSREAD;
    }
    public static function INSIGHTSWRITE(): ProjectKeyScopes
    {
        self::$INSIGHTSWRITE ??= new ProjectKeyScopes('insights.write');

        return self::$INSIGHTSWRITE;
    }
    public static function REPORTSREAD(): ProjectKeyScopes
    {
        self::$REPORTSREAD ??= new ProjectKeyScopes('reports.read');

        return self::$REPORTSREAD;
    }
    public static function REPORTSWRITE(): ProjectKeyScopes
    {
        self::$REPORTSWRITE ??= new ProjectKeyScopes('reports.write');

        return self::$REPORTSWRITE;
    }
    public static function PRESENCESREAD(): ProjectKeyScopes
    {
        self::$PRESENCESREAD ??= new ProjectKeyScopes('presences.read');

        return self::$PRESENCESREAD;
    }
    public static function PRESENCESWRITE(): ProjectKeyScopes
    {
        self::$PRESENCESWRITE ??= new ProjectKeyScopes('presences.write');

        return self::$PRESENCESWRITE;
    }
    public static function BACKUPSPOLICIESREAD(): ProjectKeyScopes
    {
        self::$BACKUPSPOLICIESREAD ??= new ProjectKeyScopes('backups.policies.read');

        return self::$BACKUPSPOLICIESREAD;
    }
    public static function BACKUPSPOLICIESWRITE(): ProjectKeyScopes
    {
        self::$BACKUPSPOLICIESWRITE ??= new ProjectKeyScopes('backups.policies.write');

        return self::$BACKUPSPOLICIESWRITE;
    }
    public static function ARCHIVESREAD(): ProjectKeyScopes
    {
        self::$ARCHIVESREAD ??= new ProjectKeyScopes('archives.read');

        return self::$ARCHIVESREAD;
    }
    public static function ARCHIVESWRITE(): ProjectKeyScopes
    {
        self::$ARCHIVESWRITE ??= new ProjectKeyScopes('archives.write');

        return self::$ARCHIVESWRITE;
    }
    public static function RESTORATIONSREAD(): ProjectKeyScopes
    {
        self::$RESTORATIONSREAD ??= new ProjectKeyScopes('restorations.read');

        return self::$RESTORATIONSREAD;
    }
    public static function RESTORATIONSWRITE(): ProjectKeyScopes
    {
        self::$RESTORATIONSWRITE ??= new ProjectKeyScopes('restorations.write');

        return self::$RESTORATIONSWRITE;
    }
    public static function DOMAINSREAD(): ProjectKeyScopes
    {
        self::$DOMAINSREAD ??= new ProjectKeyScopes('domains.read');

        return self::$DOMAINSREAD;
    }
    public static function DOMAINSWRITE(): ProjectKeyScopes
    {
        self::$DOMAINSWRITE ??= new ProjectKeyScopes('domains.write');

        return self::$DOMAINSWRITE;
    }
    public static function WAFRULESREAD(): ProjectKeyScopes
    {
        self::$WAFRULESREAD ??= new ProjectKeyScopes('wafRules.read');

        return self::$WAFRULESREAD;
    }
    public static function WAFRULESWRITE(): ProjectKeyScopes
    {
        self::$WAFRULESWRITE ??= new ProjectKeyScopes('wafRules.write');

        return self::$WAFRULESWRITE;
    }
    public static function EVENTSREAD(): ProjectKeyScopes
    {
        self::$EVENTSREAD ??= new ProjectKeyScopes('events.read');

        return self::$EVENTSREAD;
    }
    public static function PROXYINVALIDATIONSWRITE(): ProjectKeyScopes
    {
        self::$PROXYINVALIDATIONSWRITE ??= new ProjectKeyScopes('proxy.invalidations.write');

        return self::$PROXYINVALIDATIONSWRITE;
    }
    public static function APPSREAD(): ProjectKeyScopes
    {
        self::$APPSREAD ??= new ProjectKeyScopes('apps.read');

        return self::$APPSREAD;
    }
    public static function APPSWRITE(): ProjectKeyScopes
    {
        self::$APPSWRITE ??= new ProjectKeyScopes('apps.write');

        return self::$APPSWRITE;
    }
    public static function OAUTH2READ(): ProjectKeyScopes
    {
        self::$OAUTH2READ ??= new ProjectKeyScopes('oauth2.read');

        return self::$OAUTH2READ;
    }
    public static function OAUTH2WRITE(): ProjectKeyScopes
    {
        self::$OAUTH2WRITE ??= new ProjectKeyScopes('oauth2.write');

        return self::$OAUTH2WRITE;
    }
    public static function OAUTH2INTROSPECT(): ProjectKeyScopes
    {
        self::$OAUTH2INTROSPECT ??= new ProjectKeyScopes('oauth2.introspect');

        return self::$OAUTH2INTROSPECT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'project.read' => self::PROJECTREAD(),
            'project.write' => self::PROJECTWRITE(),
            'usage.read' => self::USAGEREAD(),
            'keys.read' => self::KEYSREAD(),
            'keys.write' => self::KEYSWRITE(),
            'platforms.read' => self::PLATFORMSREAD(),
            'platforms.write' => self::PLATFORMSWRITE(),
            'mocks.read' => self::MOCKSREAD(),
            'mocks.write' => self::MOCKSWRITE(),
            'policies.read' => self::POLICIESREAD(),
            'policies.write' => self::POLICIESWRITE(),
            'project.policies.read' => self::PROJECTPOLICIESREAD(),
            'project.policies.write' => self::PROJECTPOLICIESWRITE(),
            'project.oauth2.read' => self::PROJECTOAUTH2READ(),
            'project.oauth2.write' => self::PROJECTOAUTH2WRITE(),
            'templates.read' => self::TEMPLATESREAD(),
            'templates.write' => self::TEMPLATESWRITE(),
            'stages.read' => self::STAGESREAD(),
            'stages.write' => self::STAGESWRITE(),
            'users.read' => self::USERSREAD(),
            'users.write' => self::USERSWRITE(),
            'sessions.read' => self::SESSIONSREAD(),
            'sessions.write' => self::SESSIONSWRITE(),
            'teams.read' => self::TEAMSREAD(),
            'teams.write' => self::TEAMSWRITE(),
            'databases.read' => self::DATABASESREAD(),
            'databases.write' => self::DATABASESWRITE(),
            'tables.read' => self::TABLESREAD(),
            'tables.write' => self::TABLESWRITE(),
            'columns.read' => self::COLUMNSREAD(),
            'columns.write' => self::COLUMNSWRITE(),
            'indexes.read' => self::INDEXESREAD(),
            'indexes.write' => self::INDEXESWRITE(),
            'rows.read' => self::ROWSREAD(),
            'rows.write' => self::ROWSWRITE(),
            'embeddings.write' => self::EMBEDDINGSWRITE(),
            'collections.read' => self::COLLECTIONSREAD(),
            'collections.write' => self::COLLECTIONSWRITE(),
            'attributes.read' => self::ATTRIBUTESREAD(),
            'attributes.write' => self::ATTRIBUTESWRITE(),
            'documents.read' => self::DOCUMENTSREAD(),
            'documents.write' => self::DOCUMENTSWRITE(),
            'documentsdb.read' => self::DOCUMENTSDBREAD(),
            'documentsdb.write' => self::DOCUMENTSDBWRITE(),
            'documentsdb.collections.read' => self::DOCUMENTSDBCOLLECTIONSREAD(),
            'documentsdb.collections.write' => self::DOCUMENTSDBCOLLECTIONSWRITE(),
            'documentsdb.documents.read' => self::DOCUMENTSDBDOCUMENTSREAD(),
            'documentsdb.documents.write' => self::DOCUMENTSDBDOCUMENTSWRITE(),
            'vectorsdb.read' => self::VECTORSDBREAD(),
            'vectorsdb.write' => self::VECTORSDBWRITE(),
            'vectorsdb.collections.read' => self::VECTORSDBCOLLECTIONSREAD(),
            'vectorsdb.collections.write' => self::VECTORSDBCOLLECTIONSWRITE(),
            'vectorsdb.documents.read' => self::VECTORSDBDOCUMENTSREAD(),
            'vectorsdb.documents.write' => self::VECTORSDBDOCUMENTSWRITE(),
            'buckets.read' => self::BUCKETSREAD(),
            'buckets.write' => self::BUCKETSWRITE(),
            'files.read' => self::FILESREAD(),
            'files.write' => self::FILESWRITE(),
            'tokens.read' => self::TOKENSREAD(),
            'tokens.write' => self::TOKENSWRITE(),
            'functions.read' => self::FUNCTIONSREAD(),
            'functions.write' => self::FUNCTIONSWRITE(),
            'executions.read' => self::EXECUTIONSREAD(),
            'executions.write' => self::EXECUTIONSWRITE(),
            'execution.read' => self::EXECUTIONREAD(),
            'execution.write' => self::EXECUTIONWRITE(),
            'sites.read' => self::SITESREAD(),
            'sites.write' => self::SITESWRITE(),
            'log.read' => self::LOGREAD(),
            'log.write' => self::LOGWRITE(),
            'providers.read' => self::PROVIDERSREAD(),
            'providers.write' => self::PROVIDERSWRITE(),
            'topics.read' => self::TOPICSREAD(),
            'topics.write' => self::TOPICSWRITE(),
            'subscribers.read' => self::SUBSCRIBERSREAD(),
            'subscribers.write' => self::SUBSCRIBERSWRITE(),
            'targets.read' => self::TARGETSREAD(),
            'targets.write' => self::TARGETSWRITE(),
            'messages.read' => self::MESSAGESREAD(),
            'messages.write' => self::MESSAGESWRITE(),
            'rules.read' => self::RULESREAD(),
            'rules.write' => self::RULESWRITE(),
            'webhooks.read' => self::WEBHOOKSREAD(),
            'webhooks.write' => self::WEBHOOKSWRITE(),
            'locale.read' => self::LOCALEREAD(),
            'avatars.read' => self::AVATARSREAD(),
            'health.read' => self::HEALTHREAD(),
            'assistant.read' => self::ASSISTANTREAD(),
            'migrations.read' => self::MIGRATIONSREAD(),
            'migrations.write' => self::MIGRATIONSWRITE(),
            'schedules.read' => self::SCHEDULESREAD(),
            'schedules.write' => self::SCHEDULESWRITE(),
            'vcs.read' => self::VCSREAD(),
            'vcs.write' => self::VCSWRITE(),
            'insights.read' => self::INSIGHTSREAD(),
            'insights.write' => self::INSIGHTSWRITE(),
            'reports.read' => self::REPORTSREAD(),
            'reports.write' => self::REPORTSWRITE(),
            'presences.read' => self::PRESENCESREAD(),
            'presences.write' => self::PRESENCESWRITE(),
            'backups.policies.read' => self::BACKUPSPOLICIESREAD(),
            'backups.policies.write' => self::BACKUPSPOLICIESWRITE(),
            'archives.read' => self::ARCHIVESREAD(),
            'archives.write' => self::ARCHIVESWRITE(),
            'restorations.read' => self::RESTORATIONSREAD(),
            'restorations.write' => self::RESTORATIONSWRITE(),
            'domains.read' => self::DOMAINSREAD(),
            'domains.write' => self::DOMAINSWRITE(),
            'wafRules.read' => self::WAFRULESREAD(),
            'wafRules.write' => self::WAFRULESWRITE(),
            'events.read' => self::EVENTSREAD(),
            'proxy.invalidations.write' => self::PROXYINVALIDATIONSWRITE(),
            'apps.read' => self::APPSREAD(),
            'apps.write' => self::APPSWRITE(),
            'oauth2.read' => self::OAUTH2READ(),
            'oauth2.write' => self::OAUTH2WRITE(),
            'oauth2.introspect' => self::OAUTH2INTROSPECT(),
            default => throw new \InvalidArgumentException('Unknown ProjectKeyScopes value: ' . $value),
        };
    }
}
