<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProtocolId implements JsonSerializable
{
    private static ProtocolId $REST;
    private static ProtocolId $GRAPHQL;
    private static ProtocolId $WEBSOCKET;

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

    public static function REST(): ProtocolId
    {
        if (!isset(self::$REST)) {
            self::$REST = new ProtocolId('rest');
        }
        return self::$REST;
    }
    public static function GRAPHQL(): ProtocolId
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new ProtocolId('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function WEBSOCKET(): ProtocolId
    {
        if (!isset(self::$WEBSOCKET)) {
            self::$WEBSOCKET = new ProtocolId('websocket');
        }
        return self::$WEBSOCKET;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'rest' => self::REST(),
            'graphql' => self::GRAPHQL(),
            'websocket' => self::WEBSOCKET(),
            default => throw new \InvalidArgumentException('Unknown ProtocolId value: ' . $value),
        };
    }
}
