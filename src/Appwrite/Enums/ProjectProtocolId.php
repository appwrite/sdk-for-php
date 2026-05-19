<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectProtocolId implements JsonSerializable
{
    private static ProjectProtocolId $REST;
    private static ProjectProtocolId $GRAPHQL;
    private static ProjectProtocolId $WEBSOCKET;

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

    public static function REST(): ProjectProtocolId
    {
        if (!isset(self::$REST)) {
            self::$REST = new ProjectProtocolId('rest');
        }
        return self::$REST;
    }
    public static function GRAPHQL(): ProjectProtocolId
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new ProjectProtocolId('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function WEBSOCKET(): ProjectProtocolId
    {
        if (!isset(self::$WEBSOCKET)) {
            self::$WEBSOCKET = new ProjectProtocolId('websocket');
        }
        return self::$WEBSOCKET;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'rest' => self::REST(),
            'graphql' => self::GRAPHQL(),
            'websocket' => self::WEBSOCKET(),
            default => throw new \InvalidArgumentException('Unknown ProjectProtocolId value: ' . $value),
        };
    }
}
