<?php

namespace Appwrite\Models;

/**
 * InsightCTA
 */
readonly class InsightCTA
{
    use ArraySerializable;

    /**
     * InsightCTA constructor.
     *
     * @param string $label human-readable label for the cta, used in ui.
     * @param string $service public api service (sdk namespace) the client should invoke. must match the engine that owns the resource — for index suggestions: databases (legacy), tablesdb, documentsdb, or vectorsdb.
     * @param string $method public api method on the chosen service the client should invoke when this cta is triggered.
     * @param array $params parameter map the client should pass to the service method when this cta is triggered. keys match the target api's parameter names (e.g. databaseid/tableid/columns for tablesdb, databaseid/collectionid/attributes for the legacy databases api).
     */
    public function __construct(
        public string $label,
        public string $service,
        public string $method,
        public array $params
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('label', $data)) {
            throw new \InvalidArgumentException('Missing required field "label" for ' . static::class . '.');
        }
        if (!array_key_exists('service', $data)) {
            throw new \InvalidArgumentException('Missing required field "service" for ' . static::class . '.');
        }
        if (!array_key_exists('method', $data)) {
            throw new \InvalidArgumentException('Missing required field "method" for ' . static::class . '.');
        }
        if (!array_key_exists('params', $data)) {
            throw new \InvalidArgumentException('Missing required field "params" for ' . static::class . '.');
        }

        return new static(
            label: $data['label'],
            service: $data['service'],
            method: $data['method'],
            params: $data['params']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'label' => static::serializeValue($this->label),
            'service' => static::serializeValue($this->service),
            'method' => static::serializeValue($this->method),
            'params' => static::serializeValue($this->params)
        ];

        return $result;
    }
}
