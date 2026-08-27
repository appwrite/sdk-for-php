<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * PoolerConfig
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabasePooler
{
    use ArraySerializable;

    /**
     * DedicatedDatabasePooler constructor.
     *
     * @param bool $enabled whether connection pooling is enabled.
     * @param string $mode connection pool mode. possible values: transaction (releases connections back to pool after each transaction), session (holds connections for the entire client session).
     * @param int $maxConnections client-connection ceiling the pooler accepts. enforced on mysql and mariadb; on postgresql the pooler has no client cap, so this reports the database's advertised networkmaxconnections and cannot be set here.
     * @param int $defaultPoolSize default pool size per user.
     * @param int $port pooler listening port.
     * @param bool $readWriteSplitting whether selects are routed to ha replicas while writes and locked reads stay on the primary. active only when ha is enabled.
     * @param string $poolerCpuRequest effective cpu request applied to the pooler sidecar container (kubernetes quantity). returns the proportional default (5% of db cpu, floor 100m) unless overridden.
     * @param string $poolerCpuLimit effective cpu limit applied to the pooler sidecar container (kubernetes quantity). returns the proportional default (10% of db cpu, floor 200m) unless overridden.
     * @param string $poolerMemoryRequest effective memory request applied to the pooler sidecar container (kubernetes quantity). returns the proportional default (7.5% of db memory, floor 64mi) unless overridden.
     * @param string $poolerMemoryLimit effective memory limit applied to the pooler sidecar container (kubernetes quantity). returns the proportional default (15% of db memory, floor 128mi) unless overridden.
     */
    public function __construct(
        public bool $enabled,
        public string $mode,
        public int $maxConnections,
        public int $defaultPoolSize,
        public int $port,
        public bool $readWriteSplitting,
        public string $poolerCpuRequest,
        public string $poolerCpuLimit,
        public string $poolerMemoryRequest,
        public string $poolerMemoryLimit
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('mode', $data)) {
            throw new \InvalidArgumentException('Missing required field "mode" for ' . static::class . '.');
        }
        if (!array_key_exists('maxConnections', $data)) {
            throw new \InvalidArgumentException('Missing required field "maxConnections" for ' . static::class . '.');
        }
        if (!array_key_exists('defaultPoolSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "defaultPoolSize" for ' . static::class . '.');
        }
        if (!array_key_exists('port', $data)) {
            throw new \InvalidArgumentException('Missing required field "port" for ' . static::class . '.');
        }
        if (!array_key_exists('readWriteSplitting', $data)) {
            throw new \InvalidArgumentException('Missing required field "readWriteSplitting" for ' . static::class . '.');
        }
        if (!array_key_exists('poolerCpuRequest', $data)) {
            throw new \InvalidArgumentException('Missing required field "poolerCpuRequest" for ' . static::class . '.');
        }
        if (!array_key_exists('poolerCpuLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "poolerCpuLimit" for ' . static::class . '.');
        }
        if (!array_key_exists('poolerMemoryRequest', $data)) {
            throw new \InvalidArgumentException('Missing required field "poolerMemoryRequest" for ' . static::class . '.');
        }
        if (!array_key_exists('poolerMemoryLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "poolerMemoryLimit" for ' . static::class . '.');
        }

        return new static(
            enabled: $data['enabled'],
            mode: $data['mode'],
            maxConnections: $data['maxConnections'],
            defaultPoolSize: $data['defaultPoolSize'],
            port: $data['port'],
            readWriteSplitting: $data['readWriteSplitting'],
            poolerCpuRequest: $data['poolerCpuRequest'],
            poolerCpuLimit: $data['poolerCpuLimit'],
            poolerMemoryRequest: $data['poolerMemoryRequest'],
            poolerMemoryLimit: $data['poolerMemoryLimit']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'enabled' => static::serializeValue($this->enabled),
            'mode' => static::serializeValue($this->mode),
            'maxConnections' => static::serializeValue($this->maxConnections),
            'defaultPoolSize' => static::serializeValue($this->defaultPoolSize),
            'port' => static::serializeValue($this->port),
            'readWriteSplitting' => static::serializeValue($this->readWriteSplitting),
            'poolerCpuRequest' => static::serializeValue($this->poolerCpuRequest),
            'poolerCpuLimit' => static::serializeValue($this->poolerCpuLimit),
            'poolerMemoryRequest' => static::serializeValue($this->poolerMemoryRequest),
            'poolerMemoryLimit' => static::serializeValue($this->poolerMemoryLimit)
        ];
    }
}
