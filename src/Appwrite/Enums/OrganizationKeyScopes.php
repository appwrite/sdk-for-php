<?php

namespace Appwrite\Enums;

use JsonSerializable;

class OrganizationKeyScopes implements JsonSerializable
{
    private static OrganizationKeyScopes $PROJECTSREAD;
    private static OrganizationKeyScopes $PROJECTSWRITE;
    private static OrganizationKeyScopes $DEVKEYSREAD;
    private static OrganizationKeyScopes $DEVKEYSWRITE;
    private static OrganizationKeyScopes $ORGANIZATIONKEYSREAD;
    private static OrganizationKeyScopes $ORGANIZATIONKEYSWRITE;
    private static OrganizationKeyScopes $DOMAINSREAD;
    private static OrganizationKeyScopes $DOMAINSWRITE;
    private static OrganizationKeyScopes $KEYSREAD;
    private static OrganizationKeyScopes $KEYSWRITE;

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

    public static function PROJECTSREAD(): OrganizationKeyScopes
    {
        if (!isset(self::$PROJECTSREAD)) {
            self::$PROJECTSREAD = new OrganizationKeyScopes('projects.read');
        }
        return self::$PROJECTSREAD;
    }
    public static function PROJECTSWRITE(): OrganizationKeyScopes
    {
        if (!isset(self::$PROJECTSWRITE)) {
            self::$PROJECTSWRITE = new OrganizationKeyScopes('projects.write');
        }
        return self::$PROJECTSWRITE;
    }
    public static function DEVKEYSREAD(): OrganizationKeyScopes
    {
        if (!isset(self::$DEVKEYSREAD)) {
            self::$DEVKEYSREAD = new OrganizationKeyScopes('devKeys.read');
        }
        return self::$DEVKEYSREAD;
    }
    public static function DEVKEYSWRITE(): OrganizationKeyScopes
    {
        if (!isset(self::$DEVKEYSWRITE)) {
            self::$DEVKEYSWRITE = new OrganizationKeyScopes('devKeys.write');
        }
        return self::$DEVKEYSWRITE;
    }
    public static function ORGANIZATIONKEYSREAD(): OrganizationKeyScopes
    {
        if (!isset(self::$ORGANIZATIONKEYSREAD)) {
            self::$ORGANIZATIONKEYSREAD = new OrganizationKeyScopes('organization.keys.read');
        }
        return self::$ORGANIZATIONKEYSREAD;
    }
    public static function ORGANIZATIONKEYSWRITE(): OrganizationKeyScopes
    {
        if (!isset(self::$ORGANIZATIONKEYSWRITE)) {
            self::$ORGANIZATIONKEYSWRITE = new OrganizationKeyScopes('organization.keys.write');
        }
        return self::$ORGANIZATIONKEYSWRITE;
    }
    public static function DOMAINSREAD(): OrganizationKeyScopes
    {
        if (!isset(self::$DOMAINSREAD)) {
            self::$DOMAINSREAD = new OrganizationKeyScopes('domains.read');
        }
        return self::$DOMAINSREAD;
    }
    public static function DOMAINSWRITE(): OrganizationKeyScopes
    {
        if (!isset(self::$DOMAINSWRITE)) {
            self::$DOMAINSWRITE = new OrganizationKeyScopes('domains.write');
        }
        return self::$DOMAINSWRITE;
    }
    public static function KEYSREAD(): OrganizationKeyScopes
    {
        if (!isset(self::$KEYSREAD)) {
            self::$KEYSREAD = new OrganizationKeyScopes('keys.read');
        }
        return self::$KEYSREAD;
    }
    public static function KEYSWRITE(): OrganizationKeyScopes
    {
        if (!isset(self::$KEYSWRITE)) {
            self::$KEYSWRITE = new OrganizationKeyScopes('keys.write');
        }
        return self::$KEYSWRITE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'projects.read' => self::PROJECTSREAD(),
            'projects.write' => self::PROJECTSWRITE(),
            'devKeys.read' => self::DEVKEYSREAD(),
            'devKeys.write' => self::DEVKEYSWRITE(),
            'organization.keys.read' => self::ORGANIZATIONKEYSREAD(),
            'organization.keys.write' => self::ORGANIZATIONKEYSWRITE(),
            'domains.read' => self::DOMAINSREAD(),
            'domains.write' => self::DOMAINSWRITE(),
            'keys.read' => self::KEYSREAD(),
            'keys.write' => self::KEYSWRITE(),
            default => throw new \InvalidArgumentException('Unknown OrganizationKeyScopes value: ' . $value),
        };
    }
}
