<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Scopes implements JsonSerializable
{
    private static Scopes $SESSIONSWRITE;
    private static Scopes $USERSREAD;
    private static Scopes $USERSWRITE;
    private static Scopes $TEAMSREAD;
    private static Scopes $TEAMSWRITE;
    private static Scopes $DATABASESREAD;
    private static Scopes $DATABASESWRITE;
    private static Scopes $COLLECTIONSREAD;
    private static Scopes $COLLECTIONSWRITE;
    private static Scopes $TABLESREAD;
    private static Scopes $TABLESWRITE;
    private static Scopes $ATTRIBUTESREAD;
    private static Scopes $ATTRIBUTESWRITE;
    private static Scopes $COLUMNSREAD;
    private static Scopes $COLUMNSWRITE;
    private static Scopes $INDEXESREAD;
    private static Scopes $INDEXESWRITE;
    private static Scopes $DOCUMENTSREAD;
    private static Scopes $DOCUMENTSWRITE;
    private static Scopes $ROWSREAD;
    private static Scopes $ROWSWRITE;
    private static Scopes $FILESREAD;
    private static Scopes $FILESWRITE;
    private static Scopes $BUCKETSREAD;
    private static Scopes $BUCKETSWRITE;
    private static Scopes $FUNCTIONSREAD;
    private static Scopes $FUNCTIONSWRITE;
    private static Scopes $SITESREAD;
    private static Scopes $SITESWRITE;
    private static Scopes $LOGREAD;
    private static Scopes $LOGWRITE;
    private static Scopes $EXECUTIONREAD;
    private static Scopes $EXECUTIONWRITE;
    private static Scopes $LOCALEREAD;
    private static Scopes $AVATARSREAD;
    private static Scopes $HEALTHREAD;
    private static Scopes $PROVIDERSREAD;
    private static Scopes $PROVIDERSWRITE;
    private static Scopes $MESSAGESREAD;
    private static Scopes $MESSAGESWRITE;
    private static Scopes $TOPICSREAD;
    private static Scopes $TOPICSWRITE;
    private static Scopes $SUBSCRIBERSREAD;
    private static Scopes $SUBSCRIBERSWRITE;
    private static Scopes $TARGETSREAD;
    private static Scopes $TARGETSWRITE;
    private static Scopes $RULESREAD;
    private static Scopes $RULESWRITE;
    private static Scopes $SCHEDULESREAD;
    private static Scopes $SCHEDULESWRITE;
    private static Scopes $MIGRATIONSREAD;
    private static Scopes $MIGRATIONSWRITE;
    private static Scopes $VCSREAD;
    private static Scopes $VCSWRITE;
    private static Scopes $ASSISTANTREAD;
    private static Scopes $TOKENSREAD;
    private static Scopes $TOKENSWRITE;
    private static Scopes $POLICIESWRITE;
    private static Scopes $POLICIESREAD;
    private static Scopes $ARCHIVESREAD;
    private static Scopes $ARCHIVESWRITE;
    private static Scopes $RESTORATIONSREAD;
    private static Scopes $RESTORATIONSWRITE;
    private static Scopes $DOMAINSREAD;
    private static Scopes $DOMAINSWRITE;
    private static Scopes $EVENTSREAD;

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

    public static function SESSIONSWRITE(): Scopes
    {
        if (!isset(self::$SESSIONSWRITE)) {
            self::$SESSIONSWRITE = new Scopes('sessions.write');
        }
        return self::$SESSIONSWRITE;
    }
    public static function USERSREAD(): Scopes
    {
        if (!isset(self::$USERSREAD)) {
            self::$USERSREAD = new Scopes('users.read');
        }
        return self::$USERSREAD;
    }
    public static function USERSWRITE(): Scopes
    {
        if (!isset(self::$USERSWRITE)) {
            self::$USERSWRITE = new Scopes('users.write');
        }
        return self::$USERSWRITE;
    }
    public static function TEAMSREAD(): Scopes
    {
        if (!isset(self::$TEAMSREAD)) {
            self::$TEAMSREAD = new Scopes('teams.read');
        }
        return self::$TEAMSREAD;
    }
    public static function TEAMSWRITE(): Scopes
    {
        if (!isset(self::$TEAMSWRITE)) {
            self::$TEAMSWRITE = new Scopes('teams.write');
        }
        return self::$TEAMSWRITE;
    }
    public static function DATABASESREAD(): Scopes
    {
        if (!isset(self::$DATABASESREAD)) {
            self::$DATABASESREAD = new Scopes('databases.read');
        }
        return self::$DATABASESREAD;
    }
    public static function DATABASESWRITE(): Scopes
    {
        if (!isset(self::$DATABASESWRITE)) {
            self::$DATABASESWRITE = new Scopes('databases.write');
        }
        return self::$DATABASESWRITE;
    }
    public static function COLLECTIONSREAD(): Scopes
    {
        if (!isset(self::$COLLECTIONSREAD)) {
            self::$COLLECTIONSREAD = new Scopes('collections.read');
        }
        return self::$COLLECTIONSREAD;
    }
    public static function COLLECTIONSWRITE(): Scopes
    {
        if (!isset(self::$COLLECTIONSWRITE)) {
            self::$COLLECTIONSWRITE = new Scopes('collections.write');
        }
        return self::$COLLECTIONSWRITE;
    }
    public static function TABLESREAD(): Scopes
    {
        if (!isset(self::$TABLESREAD)) {
            self::$TABLESREAD = new Scopes('tables.read');
        }
        return self::$TABLESREAD;
    }
    public static function TABLESWRITE(): Scopes
    {
        if (!isset(self::$TABLESWRITE)) {
            self::$TABLESWRITE = new Scopes('tables.write');
        }
        return self::$TABLESWRITE;
    }
    public static function ATTRIBUTESREAD(): Scopes
    {
        if (!isset(self::$ATTRIBUTESREAD)) {
            self::$ATTRIBUTESREAD = new Scopes('attributes.read');
        }
        return self::$ATTRIBUTESREAD;
    }
    public static function ATTRIBUTESWRITE(): Scopes
    {
        if (!isset(self::$ATTRIBUTESWRITE)) {
            self::$ATTRIBUTESWRITE = new Scopes('attributes.write');
        }
        return self::$ATTRIBUTESWRITE;
    }
    public static function COLUMNSREAD(): Scopes
    {
        if (!isset(self::$COLUMNSREAD)) {
            self::$COLUMNSREAD = new Scopes('columns.read');
        }
        return self::$COLUMNSREAD;
    }
    public static function COLUMNSWRITE(): Scopes
    {
        if (!isset(self::$COLUMNSWRITE)) {
            self::$COLUMNSWRITE = new Scopes('columns.write');
        }
        return self::$COLUMNSWRITE;
    }
    public static function INDEXESREAD(): Scopes
    {
        if (!isset(self::$INDEXESREAD)) {
            self::$INDEXESREAD = new Scopes('indexes.read');
        }
        return self::$INDEXESREAD;
    }
    public static function INDEXESWRITE(): Scopes
    {
        if (!isset(self::$INDEXESWRITE)) {
            self::$INDEXESWRITE = new Scopes('indexes.write');
        }
        return self::$INDEXESWRITE;
    }
    public static function DOCUMENTSREAD(): Scopes
    {
        if (!isset(self::$DOCUMENTSREAD)) {
            self::$DOCUMENTSREAD = new Scopes('documents.read');
        }
        return self::$DOCUMENTSREAD;
    }
    public static function DOCUMENTSWRITE(): Scopes
    {
        if (!isset(self::$DOCUMENTSWRITE)) {
            self::$DOCUMENTSWRITE = new Scopes('documents.write');
        }
        return self::$DOCUMENTSWRITE;
    }
    public static function ROWSREAD(): Scopes
    {
        if (!isset(self::$ROWSREAD)) {
            self::$ROWSREAD = new Scopes('rows.read');
        }
        return self::$ROWSREAD;
    }
    public static function ROWSWRITE(): Scopes
    {
        if (!isset(self::$ROWSWRITE)) {
            self::$ROWSWRITE = new Scopes('rows.write');
        }
        return self::$ROWSWRITE;
    }
    public static function FILESREAD(): Scopes
    {
        if (!isset(self::$FILESREAD)) {
            self::$FILESREAD = new Scopes('files.read');
        }
        return self::$FILESREAD;
    }
    public static function FILESWRITE(): Scopes
    {
        if (!isset(self::$FILESWRITE)) {
            self::$FILESWRITE = new Scopes('files.write');
        }
        return self::$FILESWRITE;
    }
    public static function BUCKETSREAD(): Scopes
    {
        if (!isset(self::$BUCKETSREAD)) {
            self::$BUCKETSREAD = new Scopes('buckets.read');
        }
        return self::$BUCKETSREAD;
    }
    public static function BUCKETSWRITE(): Scopes
    {
        if (!isset(self::$BUCKETSWRITE)) {
            self::$BUCKETSWRITE = new Scopes('buckets.write');
        }
        return self::$BUCKETSWRITE;
    }
    public static function FUNCTIONSREAD(): Scopes
    {
        if (!isset(self::$FUNCTIONSREAD)) {
            self::$FUNCTIONSREAD = new Scopes('functions.read');
        }
        return self::$FUNCTIONSREAD;
    }
    public static function FUNCTIONSWRITE(): Scopes
    {
        if (!isset(self::$FUNCTIONSWRITE)) {
            self::$FUNCTIONSWRITE = new Scopes('functions.write');
        }
        return self::$FUNCTIONSWRITE;
    }
    public static function SITESREAD(): Scopes
    {
        if (!isset(self::$SITESREAD)) {
            self::$SITESREAD = new Scopes('sites.read');
        }
        return self::$SITESREAD;
    }
    public static function SITESWRITE(): Scopes
    {
        if (!isset(self::$SITESWRITE)) {
            self::$SITESWRITE = new Scopes('sites.write');
        }
        return self::$SITESWRITE;
    }
    public static function LOGREAD(): Scopes
    {
        if (!isset(self::$LOGREAD)) {
            self::$LOGREAD = new Scopes('log.read');
        }
        return self::$LOGREAD;
    }
    public static function LOGWRITE(): Scopes
    {
        if (!isset(self::$LOGWRITE)) {
            self::$LOGWRITE = new Scopes('log.write');
        }
        return self::$LOGWRITE;
    }
    public static function EXECUTIONREAD(): Scopes
    {
        if (!isset(self::$EXECUTIONREAD)) {
            self::$EXECUTIONREAD = new Scopes('execution.read');
        }
        return self::$EXECUTIONREAD;
    }
    public static function EXECUTIONWRITE(): Scopes
    {
        if (!isset(self::$EXECUTIONWRITE)) {
            self::$EXECUTIONWRITE = new Scopes('execution.write');
        }
        return self::$EXECUTIONWRITE;
    }
    public static function LOCALEREAD(): Scopes
    {
        if (!isset(self::$LOCALEREAD)) {
            self::$LOCALEREAD = new Scopes('locale.read');
        }
        return self::$LOCALEREAD;
    }
    public static function AVATARSREAD(): Scopes
    {
        if (!isset(self::$AVATARSREAD)) {
            self::$AVATARSREAD = new Scopes('avatars.read');
        }
        return self::$AVATARSREAD;
    }
    public static function HEALTHREAD(): Scopes
    {
        if (!isset(self::$HEALTHREAD)) {
            self::$HEALTHREAD = new Scopes('health.read');
        }
        return self::$HEALTHREAD;
    }
    public static function PROVIDERSREAD(): Scopes
    {
        if (!isset(self::$PROVIDERSREAD)) {
            self::$PROVIDERSREAD = new Scopes('providers.read');
        }
        return self::$PROVIDERSREAD;
    }
    public static function PROVIDERSWRITE(): Scopes
    {
        if (!isset(self::$PROVIDERSWRITE)) {
            self::$PROVIDERSWRITE = new Scopes('providers.write');
        }
        return self::$PROVIDERSWRITE;
    }
    public static function MESSAGESREAD(): Scopes
    {
        if (!isset(self::$MESSAGESREAD)) {
            self::$MESSAGESREAD = new Scopes('messages.read');
        }
        return self::$MESSAGESREAD;
    }
    public static function MESSAGESWRITE(): Scopes
    {
        if (!isset(self::$MESSAGESWRITE)) {
            self::$MESSAGESWRITE = new Scopes('messages.write');
        }
        return self::$MESSAGESWRITE;
    }
    public static function TOPICSREAD(): Scopes
    {
        if (!isset(self::$TOPICSREAD)) {
            self::$TOPICSREAD = new Scopes('topics.read');
        }
        return self::$TOPICSREAD;
    }
    public static function TOPICSWRITE(): Scopes
    {
        if (!isset(self::$TOPICSWRITE)) {
            self::$TOPICSWRITE = new Scopes('topics.write');
        }
        return self::$TOPICSWRITE;
    }
    public static function SUBSCRIBERSREAD(): Scopes
    {
        if (!isset(self::$SUBSCRIBERSREAD)) {
            self::$SUBSCRIBERSREAD = new Scopes('subscribers.read');
        }
        return self::$SUBSCRIBERSREAD;
    }
    public static function SUBSCRIBERSWRITE(): Scopes
    {
        if (!isset(self::$SUBSCRIBERSWRITE)) {
            self::$SUBSCRIBERSWRITE = new Scopes('subscribers.write');
        }
        return self::$SUBSCRIBERSWRITE;
    }
    public static function TARGETSREAD(): Scopes
    {
        if (!isset(self::$TARGETSREAD)) {
            self::$TARGETSREAD = new Scopes('targets.read');
        }
        return self::$TARGETSREAD;
    }
    public static function TARGETSWRITE(): Scopes
    {
        if (!isset(self::$TARGETSWRITE)) {
            self::$TARGETSWRITE = new Scopes('targets.write');
        }
        return self::$TARGETSWRITE;
    }
    public static function RULESREAD(): Scopes
    {
        if (!isset(self::$RULESREAD)) {
            self::$RULESREAD = new Scopes('rules.read');
        }
        return self::$RULESREAD;
    }
    public static function RULESWRITE(): Scopes
    {
        if (!isset(self::$RULESWRITE)) {
            self::$RULESWRITE = new Scopes('rules.write');
        }
        return self::$RULESWRITE;
    }
    public static function SCHEDULESREAD(): Scopes
    {
        if (!isset(self::$SCHEDULESREAD)) {
            self::$SCHEDULESREAD = new Scopes('schedules.read');
        }
        return self::$SCHEDULESREAD;
    }
    public static function SCHEDULESWRITE(): Scopes
    {
        if (!isset(self::$SCHEDULESWRITE)) {
            self::$SCHEDULESWRITE = new Scopes('schedules.write');
        }
        return self::$SCHEDULESWRITE;
    }
    public static function MIGRATIONSREAD(): Scopes
    {
        if (!isset(self::$MIGRATIONSREAD)) {
            self::$MIGRATIONSREAD = new Scopes('migrations.read');
        }
        return self::$MIGRATIONSREAD;
    }
    public static function MIGRATIONSWRITE(): Scopes
    {
        if (!isset(self::$MIGRATIONSWRITE)) {
            self::$MIGRATIONSWRITE = new Scopes('migrations.write');
        }
        return self::$MIGRATIONSWRITE;
    }
    public static function VCSREAD(): Scopes
    {
        if (!isset(self::$VCSREAD)) {
            self::$VCSREAD = new Scopes('vcs.read');
        }
        return self::$VCSREAD;
    }
    public static function VCSWRITE(): Scopes
    {
        if (!isset(self::$VCSWRITE)) {
            self::$VCSWRITE = new Scopes('vcs.write');
        }
        return self::$VCSWRITE;
    }
    public static function ASSISTANTREAD(): Scopes
    {
        if (!isset(self::$ASSISTANTREAD)) {
            self::$ASSISTANTREAD = new Scopes('assistant.read');
        }
        return self::$ASSISTANTREAD;
    }
    public static function TOKENSREAD(): Scopes
    {
        if (!isset(self::$TOKENSREAD)) {
            self::$TOKENSREAD = new Scopes('tokens.read');
        }
        return self::$TOKENSREAD;
    }
    public static function TOKENSWRITE(): Scopes
    {
        if (!isset(self::$TOKENSWRITE)) {
            self::$TOKENSWRITE = new Scopes('tokens.write');
        }
        return self::$TOKENSWRITE;
    }
    public static function POLICIESWRITE(): Scopes
    {
        if (!isset(self::$POLICIESWRITE)) {
            self::$POLICIESWRITE = new Scopes('policies.write');
        }
        return self::$POLICIESWRITE;
    }
    public static function POLICIESREAD(): Scopes
    {
        if (!isset(self::$POLICIESREAD)) {
            self::$POLICIESREAD = new Scopes('policies.read');
        }
        return self::$POLICIESREAD;
    }
    public static function ARCHIVESREAD(): Scopes
    {
        if (!isset(self::$ARCHIVESREAD)) {
            self::$ARCHIVESREAD = new Scopes('archives.read');
        }
        return self::$ARCHIVESREAD;
    }
    public static function ARCHIVESWRITE(): Scopes
    {
        if (!isset(self::$ARCHIVESWRITE)) {
            self::$ARCHIVESWRITE = new Scopes('archives.write');
        }
        return self::$ARCHIVESWRITE;
    }
    public static function RESTORATIONSREAD(): Scopes
    {
        if (!isset(self::$RESTORATIONSREAD)) {
            self::$RESTORATIONSREAD = new Scopes('restorations.read');
        }
        return self::$RESTORATIONSREAD;
    }
    public static function RESTORATIONSWRITE(): Scopes
    {
        if (!isset(self::$RESTORATIONSWRITE)) {
            self::$RESTORATIONSWRITE = new Scopes('restorations.write');
        }
        return self::$RESTORATIONSWRITE;
    }
    public static function DOMAINSREAD(): Scopes
    {
        if (!isset(self::$DOMAINSREAD)) {
            self::$DOMAINSREAD = new Scopes('domains.read');
        }
        return self::$DOMAINSREAD;
    }
    public static function DOMAINSWRITE(): Scopes
    {
        if (!isset(self::$DOMAINSWRITE)) {
            self::$DOMAINSWRITE = new Scopes('domains.write');
        }
        return self::$DOMAINSWRITE;
    }
    public static function EVENTSREAD(): Scopes
    {
        if (!isset(self::$EVENTSREAD)) {
            self::$EVENTSREAD = new Scopes('events.read');
        }
        return self::$EVENTSREAD;
    }
}