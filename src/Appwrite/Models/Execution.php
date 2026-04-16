<?php

namespace Appwrite\Models;

use Appwrite\Enums\ExecutionTrigger;
use Appwrite\Enums\ExecutionStatus;

/**
 * Execution
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
     * @param string $functionId function id.
     * @param string $deploymentId function's deployment id used to create the execution.
     * @param ExecutionTrigger $trigger the trigger that caused the function to execute. possible values can be: `http`, `schedule`, or `event`.
     * @param ExecutionStatus $status the status of the function execution. possible values can be: `waiting`, `processing`, `completed`, `failed`, or `scheduled`.
     * @param string $requestMethod http request method type.
     * @param string $requestPath http request path and query.
     * @param list<Headers> $requestHeaders http request headers as a key-value object. this will return only whitelisted headers. all headers are returned if execution is created as synchronous.
     * @param int $responseStatusCode http response status code.
     * @param string $responseBody http response body. this will return empty unless execution is created as synchronous.
     * @param list<Headers> $responseHeaders http response headers as a key-value object. this will return only whitelisted headers. all headers are returned if execution is created as synchronous.
     * @param string $logs function logs. includes the last 4,000 characters. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param string $errors function errors. includes the last 4,000 characters. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param float $duration resource(function/site) execution duration in seconds.
     * @param string|null $scheduledAt the scheduled time for execution. if left empty, execution will be queued immediately.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $functionId,
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
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$permissions', $data)) {
            throw new \InvalidArgumentException('Missing required field "$permissions" for ' . static::class . '.');
        }
        if (!array_key_exists('functionId', $data)) {
            throw new \InvalidArgumentException('Missing required field "functionId" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('trigger', $data)) {
            throw new \InvalidArgumentException('Missing required field "trigger" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('requestMethod', $data)) {
            throw new \InvalidArgumentException('Missing required field "requestMethod" for ' . static::class . '.');
        }
        if (!array_key_exists('requestPath', $data)) {
            throw new \InvalidArgumentException('Missing required field "requestPath" for ' . static::class . '.');
        }
        if (!array_key_exists('requestHeaders', $data)) {
            throw new \InvalidArgumentException('Missing required field "requestHeaders" for ' . static::class . '.');
        }
        if (!array_key_exists('responseStatusCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "responseStatusCode" for ' . static::class . '.');
        }
        if (!array_key_exists('responseBody', $data)) {
            throw new \InvalidArgumentException('Missing required field "responseBody" for ' . static::class . '.');
        }
        if (!array_key_exists('responseHeaders', $data)) {
            throw new \InvalidArgumentException('Missing required field "responseHeaders" for ' . static::class . '.');
        }
        if (!array_key_exists('logs', $data)) {
            throw new \InvalidArgumentException('Missing required field "logs" for ' . static::class . '.');
        }
        if (!array_key_exists('errors', $data)) {
            throw new \InvalidArgumentException('Missing required field "errors" for ' . static::class . '.');
        }
        if (!array_key_exists('duration', $data)) {
            throw new \InvalidArgumentException('Missing required field "duration" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            functionId: $data['functionId'],
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
            scheduledAt: array_key_exists('scheduledAt', $data) ? $data['scheduledAt'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'functionId' => static::serializeValue($this->functionId),
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

        return $result;
    }
}
