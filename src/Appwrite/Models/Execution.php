<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\ExecutionResourceType;
use Appwrite\Enums\ExecutionTrigger;
use Appwrite\Enums\ExecutionStatus;

/**
 * Execution
 *
 * @phpstan-consistent-constructor
 */
readonly class Execution
{
    use ArraySerializable;

    /**
     * Execution constructor.
     *
     * @param string $id execution id.
     * @param string $createdAt execution creation date in iso 8601 format.
     * @param string $updatedAt execution update date in iso 8601 format.
     * @param array $permissions execution roles.
     * @param string $resourceId function or site id.
     * @param ExecutionResourceType $resourceType execution resource type.
     * @param string $deploymentId deployment id used to create the execution.
     * @param ExecutionTrigger $trigger the trigger that caused the resource to execute. possible values can be: `http`, `schedule`, `event`, or `email`.
     * @param ExecutionStatus $status the status of the resource execution. possible values can be: `waiting`, `processing`, `completed`, `failed`, or `scheduled`.
     * @param string $requestMethod http request method type.
     * @param string $requestPath http request path and query.
     * @param list<Headers> $requestHeaders http request headers as a key-value object. this will return only whitelisted headers. all headers are returned if execution is created as synchronous.
     * @param int $responseStatusCode http response status code.
     * @param string $responseBody http response body. this will return empty unless execution is created as synchronous.
     * @param list<Headers> $responseHeaders http response headers as a key-value object. this will return only whitelisted headers. all headers are returned if execution is created as synchronous.
     * @param string $logs resource logs. includes the last 4,000 characters. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param string $errors resource errors. includes the last 4,000 characters. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param float $duration total time the resource(function/site) took to respond, in seconds.
     * @param string|null $scheduledAt the scheduled time for execution. if left empty, execution will be queued immediately.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $resourceId,
        public ExecutionResourceType $resourceType,
        public string $deploymentId,
        public ExecutionTrigger $trigger,
        public ExecutionStatus $status,
        public string $requestMethod,
        public string $requestPath,
        public array $requestHeaders,
        public int $responseStatusCode,
        public string $responseBody,
        public array $responseHeaders,
        public string $logs,
        public string $errors,
        public float $duration,
        public ?string $scheduledAt = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            '$permissions' => [],
            'resourceId' => "",
            'resourceType' => "functions",
            'deploymentId' => "",
            'requestMethod' => "",
            'requestPath' => "",
            'requestHeaders' => [],
            'responseStatusCode' => 0,
            'responseBody' => "",
            'responseHeaders' => [],
            'logs' => "",
            'errors' => "",
            'duration' => 0,
        ];

        if (!array_key_exists('trigger', $data)) {
            throw new \InvalidArgumentException('Missing required field "trigger" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            resourceId: $data['resourceId'],
            resourceType: static::hydrateTypedValue(ExecutionResourceType::class, $data['resourceType']),
            deploymentId: $data['deploymentId'],
            trigger: static::hydrateTypedValue(ExecutionTrigger::class, $data['trigger']),
            status: static::hydrateTypedValue(ExecutionStatus::class, $data['status']),
            requestMethod: $data['requestMethod'],
            requestPath: $data['requestPath'],
            requestHeaders: is_array($data['requestHeaders'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Headers::class, $item),
                    $data['requestHeaders']
                )
                : $data['requestHeaders'],
            responseStatusCode: $data['responseStatusCode'],
            responseBody: $data['responseBody'],
            responseHeaders: is_array($data['responseHeaders'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Headers::class, $item),
                    $data['responseHeaders']
                )
                : $data['responseHeaders'],
            logs: $data['logs'],
            errors: $data['errors'],
            duration: $data['duration'],
            scheduledAt: $data['scheduledAt'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType),
            'deploymentId' => static::serializeValue($this->deploymentId),
            'trigger' => static::serializeValue($this->trigger),
            'status' => static::serializeValue($this->status),
            'requestMethod' => static::serializeValue($this->requestMethod),
            'requestPath' => static::serializeValue($this->requestPath),
            'requestHeaders' => static::serializeValue($this->requestHeaders),
            'responseStatusCode' => static::serializeValue($this->responseStatusCode),
            'responseBody' => static::serializeValue($this->responseBody),
            'responseHeaders' => static::serializeValue($this->responseHeaders),
            'logs' => static::serializeValue($this->logs),
            'errors' => static::serializeValue($this->errors),
            'duration' => static::serializeValue($this->duration),
            'scheduledAt' => static::serializeValue($this->scheduledAt)
        ];
    }
}
