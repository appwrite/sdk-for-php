<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Branch
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseBranch
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseBranch constructor.
     *
     * @param string $branchId branch identifier.
     * @param string $branchName branch name.
     * @param string $namespace kubernetes namespace where the branch is deployed.
     * @param int $expiresAt unix timestamp when the branch expires.
     * @param string $host branch hostname for direct connections.
     * @param int $port branch port. null until the backing reports one.
     * @param string $database advertised catalog the client connects to. mysql/mariadb use default; postgres uses the routing label.
     * @param string $username database username. shared with the parent database.
     * @param string $password database password. shared with the parent database.
     * @param bool $ssl whether ssl is required.
     * @param string $engine database engine. possible values: postgresql, mysql, mongodb.
     * @param string $connectionString full connection string for the branch.
     */
    public function __construct(
        public string $branchId,
        public string $branchName,
        public string $namespace,
        public int $expiresAt,
        public string $host,
        public int $port,
        public string $database,
        public string $username,
        public string $password,
        public bool $ssl,
        public string $engine,
        public string $connectionString
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'branchId' => "",
            'branchName' => "",
            'namespace' => "",
            'expiresAt' => 0,
            'host' => "",
            'database' => "",
            'username' => "",
            'password' => "",
            'ssl' => false,
            'engine' => "",
            'connectionString' => "",
        ];

        if (!array_key_exists('port', $data)) {
            throw new \InvalidArgumentException('Missing required field "port" for ' . static::class . '.');
        }

        return new static(
            branchId: $data['branchId'],
            branchName: $data['branchName'],
            namespace: $data['namespace'],
            expiresAt: $data['expiresAt'],
            host: $data['host'],
            port: $data['port'],
            database: $data['database'],
            username: $data['username'],
            password: $data['password'],
            ssl: $data['ssl'],
            engine: $data['engine'],
            connectionString: $data['connectionString']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'branchId' => static::serializeValue($this->branchId),
            'branchName' => static::serializeValue($this->branchName),
            'namespace' => static::serializeValue($this->namespace),
            'expiresAt' => static::serializeValue($this->expiresAt),
            'host' => static::serializeValue($this->host),
            'port' => static::serializeValue($this->port),
            'database' => static::serializeValue($this->database),
            'username' => static::serializeValue($this->username),
            'password' => static::serializeValue($this->password),
            'ssl' => static::serializeValue($this->ssl),
            'engine' => static::serializeValue($this->engine),
            'connectionString' => static::serializeValue($this->connectionString)
        ];
    }
}
