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
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'permissions' => '$permissions'
    ];

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'requestHeaders' => Headers::class,
        'responseHeaders' => Headers::class
    ];

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
}
