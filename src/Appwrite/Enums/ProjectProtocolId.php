<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectProtocolId implements JsonSerializable, Stringable
{
    private static ProjectProtocolId $REST;
    private static ProjectProtocolId $GRAPHQL;
    private static ProjectProtocolId $WEBSOCKET;

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

    public static function REST(): ProjectProtocolId
    {
        self::$REST ??= new ProjectProtocolId('rest');

        return self::$REST;
    }
    public static function GRAPHQL(): ProjectProtocolId
    {
        self::$GRAPHQL ??= new ProjectProtocolId('graphql');

        return self::$GRAPHQL;
    }
    public static function WEBSOCKET(): ProjectProtocolId
    {
        self::$WEBSOCKET ??= new ProjectProtocolId('websocket');

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
