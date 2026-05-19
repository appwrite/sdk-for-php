<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectKeyScopes implements JsonSerializable
{
    private static ProjectKeyScopes $PROJECTREAD;
    private static ProjectKeyScopes $PROJECTWRITE;
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
    private static ProjectKeyScopes $TEMPLATESREAD;
    private static ProjectKeyScopes $TEMPLATESWRITE;
    private static ProjectKeyScopes $OAUTH2READ;
    private static ProjectKeyScopes $OAUTH2WRITE;
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
    private static ProjectKeyScopes $COLLECTIONSREAD;
    private static ProjectKeyScopes $COLLECTIONSWRITE;
    private static ProjectKeyScopes $ATTRIBUTESREAD;
    private static ProjectKeyScopes $ATTRIBUTESWRITE;
    private static ProjectKeyScopes $DOCUMENTSREAD;
    private static ProjectKeyScopes $DOCUMENTSWRITE;
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
    private static ProjectKeyScopes $EVENTSREAD;
    private static ProjectKeyScopes $USAGEREAD;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
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
        if (!isset(self::$PROJECTREAD)) {
            self::$PROJECTREAD = new ProjectKeyScopes('project.read');
        }
        return self::$PROJECTREAD;
    }
    public static function PROJECTWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$PROJECTWRITE)) {
            self::$PROJECTWRITE = new ProjectKeyScopes('project.write');
        }
        return self::$PROJECTWRITE;
    }
    public static function KEYSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$KEYSREAD)) {
            self::$KEYSREAD = new ProjectKeyScopes('keys.read');
        }
        return self::$KEYSREAD;
    }
    public static function KEYSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$KEYSWRITE)) {
            self::$KEYSWRITE = new ProjectKeyScopes('keys.write');
        }
        return self::$KEYSWRITE;
    }
    public static function PLATFORMSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$PLATFORMSREAD)) {
            self::$PLATFORMSREAD = new ProjectKeyScopes('platforms.read');
        }
        return self::$PLATFORMSREAD;
    }
    public static function PLATFORMSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$PLATFORMSWRITE)) {
            self::$PLATFORMSWRITE = new ProjectKeyScopes('platforms.write');
        }
        return self::$PLATFORMSWRITE;
    }
    public static function MOCKSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$MOCKSREAD)) {
            self::$MOCKSREAD = new ProjectKeyScopes('mocks.read');
        }
        return self::$MOCKSREAD;
    }
    public static function MOCKSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$MOCKSWRITE)) {
            self::$MOCKSWRITE = new ProjectKeyScopes('mocks.write');
        }
        return self::$MOCKSWRITE;
    }
    public static function POLICIESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$POLICIESREAD)) {
            self::$POLICIESREAD = new ProjectKeyScopes('policies.read');
        }
        return self::$POLICIESREAD;
    }
    public static function POLICIESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$POLICIESWRITE)) {
            self::$POLICIESWRITE = new ProjectKeyScopes('policies.write');
        }
        return self::$POLICIESWRITE;
    }
    public static function PROJECTPOLICIESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$PROJECTPOLICIESREAD)) {
            self::$PROJECTPOLICIESREAD = new ProjectKeyScopes('project.policies.read');
        }
        return self::$PROJECTPOLICIESREAD;
    }
    public static function PROJECTPOLICIESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$PROJECTPOLICIESWRITE)) {
            self::$PROJECTPOLICIESWRITE = new ProjectKeyScopes('project.policies.write');
        }
        return self::$PROJECTPOLICIESWRITE;
    }
    public static function TEMPLATESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TEMPLATESREAD)) {
            self::$TEMPLATESREAD = new ProjectKeyScopes('templates.read');
        }
        return self::$TEMPLATESREAD;
    }
    public static function TEMPLATESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TEMPLATESWRITE)) {
            self::$TEMPLATESWRITE = new ProjectKeyScopes('templates.write');
        }
        return self::$TEMPLATESWRITE;
    }
    public static function OAUTH2READ(): ProjectKeyScopes
    {
        if (!isset(self::$OAUTH2READ)) {
            self::$OAUTH2READ = new ProjectKeyScopes('oauth2.read');
        }
        return self::$OAUTH2READ;
    }
    public static function OAUTH2WRITE(): ProjectKeyScopes
    {
        if (!isset(self::$OAUTH2WRITE)) {
            self::$OAUTH2WRITE = new ProjectKeyScopes('oauth2.write');
        }
        return self::$OAUTH2WRITE;
    }
    public static function USERSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$USERSREAD)) {
            self::$USERSREAD = new ProjectKeyScopes('users.read');
        }
        return self::$USERSREAD;
    }
    public static function USERSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$USERSWRITE)) {
            self::$USERSWRITE = new ProjectKeyScopes('users.write');
        }
        return self::$USERSWRITE;
    }
    public static function SESSIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$SESSIONSREAD)) {
            self::$SESSIONSREAD = new ProjectKeyScopes('sessions.read');
        }
        return self::$SESSIONSREAD;
    }
    public static function SESSIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$SESSIONSWRITE)) {
            self::$SESSIONSWRITE = new ProjectKeyScopes('sessions.write');
        }
        return self::$SESSIONSWRITE;
    }
    public static function TEAMSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TEAMSREAD)) {
            self::$TEAMSREAD = new ProjectKeyScopes('teams.read');
        }
        return self::$TEAMSREAD;
    }
    public static function TEAMSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TEAMSWRITE)) {
            self::$TEAMSWRITE = new ProjectKeyScopes('teams.write');
        }
        return self::$TEAMSWRITE;
    }
    public static function DATABASESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$DATABASESREAD)) {
            self::$DATABASESREAD = new ProjectKeyScopes('databases.read');
        }
        return self::$DATABASESREAD;
    }
    public static function DATABASESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$DATABASESWRITE)) {
            self::$DATABASESWRITE = new ProjectKeyScopes('databases.write');
        }
        return self::$DATABASESWRITE;
    }
    public static function TABLESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TABLESREAD)) {
            self::$TABLESREAD = new ProjectKeyScopes('tables.read');
        }
        return self::$TABLESREAD;
    }
    public static function TABLESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TABLESWRITE)) {
            self::$TABLESWRITE = new ProjectKeyScopes('tables.write');
        }
        return self::$TABLESWRITE;
    }
    public static function COLUMNSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$COLUMNSREAD)) {
            self::$COLUMNSREAD = new ProjectKeyScopes('columns.read');
        }
        return self::$COLUMNSREAD;
    }
    public static function COLUMNSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$COLUMNSWRITE)) {
            self::$COLUMNSWRITE = new ProjectKeyScopes('columns.write');
        }
        return self::$COLUMNSWRITE;
    }
    public static function INDEXESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$INDEXESREAD)) {
            self::$INDEXESREAD = new ProjectKeyScopes('indexes.read');
        }
        return self::$INDEXESREAD;
    }
    public static function INDEXESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$INDEXESWRITE)) {
            self::$INDEXESWRITE = new ProjectKeyScopes('indexes.write');
        }
        return self::$INDEXESWRITE;
    }
    public static function ROWSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$ROWSREAD)) {
            self::$ROWSREAD = new ProjectKeyScopes('rows.read');
        }
        return self::$ROWSREAD;
    }
    public static function ROWSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$ROWSWRITE)) {
            self::$ROWSWRITE = new ProjectKeyScopes('rows.write');
        }
        return self::$ROWSWRITE;
    }
    public static function COLLECTIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$COLLECTIONSREAD)) {
            self::$COLLECTIONSREAD = new ProjectKeyScopes('collections.read');
        }
        return self::$COLLECTIONSREAD;
    }
    public static function COLLECTIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$COLLECTIONSWRITE)) {
            self::$COLLECTIONSWRITE = new ProjectKeyScopes('collections.write');
        }
        return self::$COLLECTIONSWRITE;
    }
    public static function ATTRIBUTESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$ATTRIBUTESREAD)) {
            self::$ATTRIBUTESREAD = new ProjectKeyScopes('attributes.read');
        }
        return self::$ATTRIBUTESREAD;
    }
    public static function ATTRIBUTESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$ATTRIBUTESWRITE)) {
            self::$ATTRIBUTESWRITE = new ProjectKeyScopes('attributes.write');
        }
        return self::$ATTRIBUTESWRITE;
    }
    public static function DOCUMENTSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$DOCUMENTSREAD)) {
            self::$DOCUMENTSREAD = new ProjectKeyScopes('documents.read');
        }
        return self::$DOCUMENTSREAD;
    }
    public static function DOCUMENTSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$DOCUMENTSWRITE)) {
            self::$DOCUMENTSWRITE = new ProjectKeyScopes('documents.write');
        }
        return self::$DOCUMENTSWRITE;
    }
    public static function BUCKETSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$BUCKETSREAD)) {
            self::$BUCKETSREAD = new ProjectKeyScopes('buckets.read');
        }
        return self::$BUCKETSREAD;
    }
    public static function BUCKETSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$BUCKETSWRITE)) {
            self::$BUCKETSWRITE = new ProjectKeyScopes('buckets.write');
        }
        return self::$BUCKETSWRITE;
    }
    public static function FILESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$FILESREAD)) {
            self::$FILESREAD = new ProjectKeyScopes('files.read');
        }
        return self::$FILESREAD;
    }
    public static function FILESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$FILESWRITE)) {
            self::$FILESWRITE = new ProjectKeyScopes('files.write');
        }
        return self::$FILESWRITE;
    }
    public static function TOKENSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TOKENSREAD)) {
            self::$TOKENSREAD = new ProjectKeyScopes('tokens.read');
        }
        return self::$TOKENSREAD;
    }
    public static function TOKENSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TOKENSWRITE)) {
            self::$TOKENSWRITE = new ProjectKeyScopes('tokens.write');
        }
        return self::$TOKENSWRITE;
    }
    public static function FUNCTIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$FUNCTIONSREAD)) {
            self::$FUNCTIONSREAD = new ProjectKeyScopes('functions.read');
        }
        return self::$FUNCTIONSREAD;
    }
    public static function FUNCTIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$FUNCTIONSWRITE)) {
            self::$FUNCTIONSWRITE = new ProjectKeyScopes('functions.write');
        }
        return self::$FUNCTIONSWRITE;
    }
    public static function EXECUTIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$EXECUTIONSREAD)) {
            self::$EXECUTIONSREAD = new ProjectKeyScopes('executions.read');
        }
        return self::$EXECUTIONSREAD;
    }
    public static function EXECUTIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$EXECUTIONSWRITE)) {
            self::$EXECUTIONSWRITE = new ProjectKeyScopes('executions.write');
        }
        return self::$EXECUTIONSWRITE;
    }
    public static function EXECUTIONREAD(): ProjectKeyScopes
    {
        if (!isset(self::$EXECUTIONREAD)) {
            self::$EXECUTIONREAD = new ProjectKeyScopes('execution.read');
        }
        return self::$EXECUTIONREAD;
    }
    public static function EXECUTIONWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$EXECUTIONWRITE)) {
            self::$EXECUTIONWRITE = new ProjectKeyScopes('execution.write');
        }
        return self::$EXECUTIONWRITE;
    }
    public static function SITESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$SITESREAD)) {
            self::$SITESREAD = new ProjectKeyScopes('sites.read');
        }
        return self::$SITESREAD;
    }
    public static function SITESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$SITESWRITE)) {
            self::$SITESWRITE = new ProjectKeyScopes('sites.write');
        }
        return self::$SITESWRITE;
    }
    public static function LOGREAD(): ProjectKeyScopes
    {
        if (!isset(self::$LOGREAD)) {
            self::$LOGREAD = new ProjectKeyScopes('log.read');
        }
        return self::$LOGREAD;
    }
    public static function LOGWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$LOGWRITE)) {
            self::$LOGWRITE = new ProjectKeyScopes('log.write');
        }
        return self::$LOGWRITE;
    }
    public static function PROVIDERSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$PROVIDERSREAD)) {
            self::$PROVIDERSREAD = new ProjectKeyScopes('providers.read');
        }
        return self::$PROVIDERSREAD;
    }
    public static function PROVIDERSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$PROVIDERSWRITE)) {
            self::$PROVIDERSWRITE = new ProjectKeyScopes('providers.write');
        }
        return self::$PROVIDERSWRITE;
    }
    public static function TOPICSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TOPICSREAD)) {
            self::$TOPICSREAD = new ProjectKeyScopes('topics.read');
        }
        return self::$TOPICSREAD;
    }
    public static function TOPICSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TOPICSWRITE)) {
            self::$TOPICSWRITE = new ProjectKeyScopes('topics.write');
        }
        return self::$TOPICSWRITE;
    }
    public static function SUBSCRIBERSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$SUBSCRIBERSREAD)) {
            self::$SUBSCRIBERSREAD = new ProjectKeyScopes('subscribers.read');
        }
        return self::$SUBSCRIBERSREAD;
    }
    public static function SUBSCRIBERSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$SUBSCRIBERSWRITE)) {
            self::$SUBSCRIBERSWRITE = new ProjectKeyScopes('subscribers.write');
        }
        return self::$SUBSCRIBERSWRITE;
    }
    public static function TARGETSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$TARGETSREAD)) {
            self::$TARGETSREAD = new ProjectKeyScopes('targets.read');
        }
        return self::$TARGETSREAD;
    }
    public static function TARGETSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$TARGETSWRITE)) {
            self::$TARGETSWRITE = new ProjectKeyScopes('targets.write');
        }
        return self::$TARGETSWRITE;
    }
    public static function MESSAGESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$MESSAGESREAD)) {
            self::$MESSAGESREAD = new ProjectKeyScopes('messages.read');
        }
        return self::$MESSAGESREAD;
    }
    public static function MESSAGESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$MESSAGESWRITE)) {
            self::$MESSAGESWRITE = new ProjectKeyScopes('messages.write');
        }
        return self::$MESSAGESWRITE;
    }
    public static function RULESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$RULESREAD)) {
            self::$RULESREAD = new ProjectKeyScopes('rules.read');
        }
        return self::$RULESREAD;
    }
    public static function RULESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$RULESWRITE)) {
            self::$RULESWRITE = new ProjectKeyScopes('rules.write');
        }
        return self::$RULESWRITE;
    }
    public static function WEBHOOKSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$WEBHOOKSREAD)) {
            self::$WEBHOOKSREAD = new ProjectKeyScopes('webhooks.read');
        }
        return self::$WEBHOOKSREAD;
    }
    public static function WEBHOOKSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$WEBHOOKSWRITE)) {
            self::$WEBHOOKSWRITE = new ProjectKeyScopes('webhooks.write');
        }
        return self::$WEBHOOKSWRITE;
    }
    public static function LOCALEREAD(): ProjectKeyScopes
    {
        if (!isset(self::$LOCALEREAD)) {
            self::$LOCALEREAD = new ProjectKeyScopes('locale.read');
        }
        return self::$LOCALEREAD;
    }
    public static function AVATARSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$AVATARSREAD)) {
            self::$AVATARSREAD = new ProjectKeyScopes('avatars.read');
        }
        return self::$AVATARSREAD;
    }
    public static function HEALTHREAD(): ProjectKeyScopes
    {
        if (!isset(self::$HEALTHREAD)) {
            self::$HEALTHREAD = new ProjectKeyScopes('health.read');
        }
        return self::$HEALTHREAD;
    }
    public static function ASSISTANTREAD(): ProjectKeyScopes
    {
        if (!isset(self::$ASSISTANTREAD)) {
            self::$ASSISTANTREAD = new ProjectKeyScopes('assistant.read');
        }
        return self::$ASSISTANTREAD;
    }
    public static function MIGRATIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$MIGRATIONSREAD)) {
            self::$MIGRATIONSREAD = new ProjectKeyScopes('migrations.read');
        }
        return self::$MIGRATIONSREAD;
    }
    public static function MIGRATIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$MIGRATIONSWRITE)) {
            self::$MIGRATIONSWRITE = new ProjectKeyScopes('migrations.write');
        }
        return self::$MIGRATIONSWRITE;
    }
    public static function SCHEDULESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$SCHEDULESREAD)) {
            self::$SCHEDULESREAD = new ProjectKeyScopes('schedules.read');
        }
        return self::$SCHEDULESREAD;
    }
    public static function SCHEDULESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$SCHEDULESWRITE)) {
            self::$SCHEDULESWRITE = new ProjectKeyScopes('schedules.write');
        }
        return self::$SCHEDULESWRITE;
    }
    public static function VCSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$VCSREAD)) {
            self::$VCSREAD = new ProjectKeyScopes('vcs.read');
        }
        return self::$VCSREAD;
    }
    public static function VCSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$VCSWRITE)) {
            self::$VCSWRITE = new ProjectKeyScopes('vcs.write');
        }
        return self::$VCSWRITE;
    }
    public static function INSIGHTSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$INSIGHTSREAD)) {
            self::$INSIGHTSREAD = new ProjectKeyScopes('insights.read');
        }
        return self::$INSIGHTSREAD;
    }
    public static function INSIGHTSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$INSIGHTSWRITE)) {
            self::$INSIGHTSWRITE = new ProjectKeyScopes('insights.write');
        }
        return self::$INSIGHTSWRITE;
    }
    public static function REPORTSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$REPORTSREAD)) {
            self::$REPORTSREAD = new ProjectKeyScopes('reports.read');
        }
        return self::$REPORTSREAD;
    }
    public static function REPORTSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$REPORTSWRITE)) {
            self::$REPORTSWRITE = new ProjectKeyScopes('reports.write');
        }
        return self::$REPORTSWRITE;
    }
    public static function PRESENCESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$PRESENCESREAD)) {
            self::$PRESENCESREAD = new ProjectKeyScopes('presences.read');
        }
        return self::$PRESENCESREAD;
    }
    public static function PRESENCESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$PRESENCESWRITE)) {
            self::$PRESENCESWRITE = new ProjectKeyScopes('presences.write');
        }
        return self::$PRESENCESWRITE;
    }
    public static function BACKUPSPOLICIESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$BACKUPSPOLICIESREAD)) {
            self::$BACKUPSPOLICIESREAD = new ProjectKeyScopes('backups.policies.read');
        }
        return self::$BACKUPSPOLICIESREAD;
    }
    public static function BACKUPSPOLICIESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$BACKUPSPOLICIESWRITE)) {
            self::$BACKUPSPOLICIESWRITE = new ProjectKeyScopes('backups.policies.write');
        }
        return self::$BACKUPSPOLICIESWRITE;
    }
    public static function ARCHIVESREAD(): ProjectKeyScopes
    {
        if (!isset(self::$ARCHIVESREAD)) {
            self::$ARCHIVESREAD = new ProjectKeyScopes('archives.read');
        }
        return self::$ARCHIVESREAD;
    }
    public static function ARCHIVESWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$ARCHIVESWRITE)) {
            self::$ARCHIVESWRITE = new ProjectKeyScopes('archives.write');
        }
        return self::$ARCHIVESWRITE;
    }
    public static function RESTORATIONSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$RESTORATIONSREAD)) {
            self::$RESTORATIONSREAD = new ProjectKeyScopes('restorations.read');
        }
        return self::$RESTORATIONSREAD;
    }
    public static function RESTORATIONSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$RESTORATIONSWRITE)) {
            self::$RESTORATIONSWRITE = new ProjectKeyScopes('restorations.write');
        }
        return self::$RESTORATIONSWRITE;
    }
    public static function DOMAINSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$DOMAINSREAD)) {
            self::$DOMAINSREAD = new ProjectKeyScopes('domains.read');
        }
        return self::$DOMAINSREAD;
    }
    public static function DOMAINSWRITE(): ProjectKeyScopes
    {
        if (!isset(self::$DOMAINSWRITE)) {
            self::$DOMAINSWRITE = new ProjectKeyScopes('domains.write');
        }
        return self::$DOMAINSWRITE;
    }
    public static function EVENTSREAD(): ProjectKeyScopes
    {
        if (!isset(self::$EVENTSREAD)) {
            self::$EVENTSREAD = new ProjectKeyScopes('events.read');
        }
        return self::$EVENTSREAD;
    }
    public static function USAGEREAD(): ProjectKeyScopes
    {
        if (!isset(self::$USAGEREAD)) {
            self::$USAGEREAD = new ProjectKeyScopes('usage.read');
        }
        return self::$USAGEREAD;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'project.read' => self::PROJECTREAD(),
            'project.write' => self::PROJECTWRITE(),
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
            'templates.read' => self::TEMPLATESREAD(),
            'templates.write' => self::TEMPLATESWRITE(),
            'oauth2.read' => self::OAUTH2READ(),
            'oauth2.write' => self::OAUTH2WRITE(),
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
            'collections.read' => self::COLLECTIONSREAD(),
            'collections.write' => self::COLLECTIONSWRITE(),
            'attributes.read' => self::ATTRIBUTESREAD(),
            'attributes.write' => self::ATTRIBUTESWRITE(),
            'documents.read' => self::DOCUMENTSREAD(),
            'documents.write' => self::DOCUMENTSWRITE(),
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
            'events.read' => self::EVENTSREAD(),
            'usage.read' => self::USAGEREAD(),
            default => throw new \InvalidArgumentException('Unknown ProjectKeyScopes value: ' . $value),
        };
    }
}
