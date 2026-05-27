<?php

namespace Appwrite\Models;

/**
 * Function
 */
readonly class FunctionModel
{
    use ArraySerializable;

    /**
     * Function constructor.
     *
     * @param string $id function id.
     * @param string $createdAt function creation date in iso 8601 format.
     * @param string $updatedAt function update date in iso 8601 format.
     * @param array $execute execution permissions.
     * @param string $name function name.
     * @param bool $enabled function enabled.
     * @param bool $live is the function deployed with the latest configuration? this is set to false if you've changed an environment variables, entrypoint, commands, or other settings that needs redeploy to be applied. when the value is false, redeploy the function to update it with the latest configuration.
     * @param bool $logging when disabled, executions will exclude logs and errors, and will be slightly faster.
     * @param string $runtime function execution and build runtime.
     * @param int $deploymentRetention how many days to keep the non-active deployments before they will be automatically deleted.
     * @param string $deploymentId function's active deployment id.
     * @param string $deploymentCreatedAt active deployment creation date in iso 8601 format.
     * @param string $latestDeploymentId function's latest deployment id.
     * @param string $latestDeploymentCreatedAt latest deployment creation date in iso 8601 format.
     * @param string $latestDeploymentStatus status of latest deployment. possible values are "waiting", "processing", "building", "ready", and "failed".
     * @param array $scopes allowed permission scopes.
     * @param list<Variable> $vars function variables.
     * @param array $events function trigger events.
     * @param string $schedule function execution schedule in cron format.
     * @param int $timeout function execution timeout in seconds.
     * @param string $entrypoint the entrypoint file used to execute the deployment.
     * @param string $commands the build command used to build the deployment.
     * @param string $version version of open runtimes used for the function.
     * @param string $installationId function vcs (version control system) installation id.
     * @param string $providerRepositoryId vcs (version control system) repository id
     * @param string $providerBranch vcs (version control system) branch name
     * @param string $providerRootDirectory path to function in vcs (version control system) repository
     * @param bool $providerSilentMode is vcs (version control system) connection is in silent mode? when in silence mode, no comments will be posted on the repository pull or merge requests
     * @param array $providerBranches list of branch name patterns that trigger automatic deployments. supports glob wildcards. empty list deploys on all branches.
     * @param array $providerPaths list of file path patterns that trigger automatic deployments. supports glob wildcards. empty list deploys on all file changes.
     * @param string $buildSpecification machine specification for deployment builds.
     * @param string $runtimeSpecification machine specification for executions.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $execute,
        public string $name,
        public bool $enabled,
        public bool $live,
        public bool $logging,
        public string $runtime,
        public int $deploymentRetention,
        public string $deploymentId,
        public string $deploymentCreatedAt,
        public string $latestDeploymentId,
        public string $latestDeploymentCreatedAt,
        public string $latestDeploymentStatus,
        public array $scopes,
        public array $vars,
        public array $events,
        public string $schedule,
        public int $timeout,
        public string $entrypoint,
        public string $commands,
        public string $version,
        public string $installationId,
        public string $providerRepositoryId,
        public string $providerBranch,
        public string $providerRootDirectory,
        public bool $providerSilentMode,
        public array $providerBranches,
        public array $providerPaths,
        public string $buildSpecification,
        public string $runtimeSpecification
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
        if (!array_key_exists('execute', $data)) {
            throw new \InvalidArgumentException('Missing required field "execute" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('live', $data)) {
            throw new \InvalidArgumentException('Missing required field "live" for ' . static::class . '.');
        }
        if (!array_key_exists('logging', $data)) {
            throw new \InvalidArgumentException('Missing required field "logging" for ' . static::class . '.');
        }
        if (!array_key_exists('runtime', $data)) {
            throw new \InvalidArgumentException('Missing required field "runtime" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentRetention', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentRetention" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentCreatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentCreatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentCreatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentCreatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentStatus', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentStatus" for ' . static::class . '.');
        }
        if (!array_key_exists('scopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "scopes" for ' . static::class . '.');
        }
        if (!array_key_exists('vars', $data)) {
            throw new \InvalidArgumentException('Missing required field "vars" for ' . static::class . '.');
        }
        if (!array_key_exists('events', $data)) {
            throw new \InvalidArgumentException('Missing required field "events" for ' . static::class . '.');
        }
        if (!array_key_exists('schedule', $data)) {
            throw new \InvalidArgumentException('Missing required field "schedule" for ' . static::class . '.');
        }
        if (!array_key_exists('timeout', $data)) {
            throw new \InvalidArgumentException('Missing required field "timeout" for ' . static::class . '.');
        }
        if (!array_key_exists('entrypoint', $data)) {
            throw new \InvalidArgumentException('Missing required field "entrypoint" for ' . static::class . '.');
        }
        if (!array_key_exists('commands', $data)) {
            throw new \InvalidArgumentException('Missing required field "commands" for ' . static::class . '.');
        }
        if (!array_key_exists('version', $data)) {
            throw new \InvalidArgumentException('Missing required field "version" for ' . static::class . '.');
        }
        if (!array_key_exists('installationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "installationId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerRepositoryId', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerRepositoryId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerBranch', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerBranch" for ' . static::class . '.');
        }
        if (!array_key_exists('providerRootDirectory', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerRootDirectory" for ' . static::class . '.');
        }
        if (!array_key_exists('providerSilentMode', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerSilentMode" for ' . static::class . '.');
        }
        if (!array_key_exists('providerBranches', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerBranches" for ' . static::class . '.');
        }
        if (!array_key_exists('providerPaths', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerPaths" for ' . static::class . '.');
        }
        if (!array_key_exists('buildSpecification', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildSpecification" for ' . static::class . '.');
        }
        if (!array_key_exists('runtimeSpecification', $data)) {
            throw new \InvalidArgumentException('Missing required field "runtimeSpecification" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            execute: $data['execute'],
            name: $data['name'],
            enabled: $data['enabled'],
            live: $data['live'],
            logging: $data['logging'],
            runtime: $data['runtime'],
            deploymentRetention: $data['deploymentRetention'],
            deploymentId: $data['deploymentId'],
            deploymentCreatedAt: $data['deploymentCreatedAt'],
            latestDeploymentId: $data['latestDeploymentId'],
            latestDeploymentCreatedAt: $data['latestDeploymentCreatedAt'],
            latestDeploymentStatus: $data['latestDeploymentStatus'],
            scopes: $data['scopes'],
            vars: is_array($data['vars'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Variable::class, $item),
                    $data['vars']
                )
                : $data['vars'],
            events: $data['events'],
            schedule: $data['schedule'],
            timeout: $data['timeout'],
            entrypoint: $data['entrypoint'],
            commands: $data['commands'],
            version: $data['version'],
            installationId: $data['installationId'],
            providerRepositoryId: $data['providerRepositoryId'],
            providerBranch: $data['providerBranch'],
            providerRootDirectory: $data['providerRootDirectory'],
            providerSilentMode: $data['providerSilentMode'],
            providerBranches: $data['providerBranches'],
            providerPaths: $data['providerPaths'],
            buildSpecification: $data['buildSpecification'],
            runtimeSpecification: $data['runtimeSpecification']
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
            'execute' => static::serializeValue($this->execute),
            'name' => static::serializeValue($this->name),
            'enabled' => static::serializeValue($this->enabled),
            'live' => static::serializeValue($this->live),
            'logging' => static::serializeValue($this->logging),
            'runtime' => static::serializeValue($this->runtime),
            'deploymentRetention' => static::serializeValue($this->deploymentRetention),
            'deploymentId' => static::serializeValue($this->deploymentId),
            'deploymentCreatedAt' => static::serializeValue($this->deploymentCreatedAt),
            'latestDeploymentId' => static::serializeValue($this->latestDeploymentId),
            'latestDeploymentCreatedAt' => static::serializeValue($this->latestDeploymentCreatedAt),
            'latestDeploymentStatus' => static::serializeValue($this->latestDeploymentStatus),
            'scopes' => static::serializeValue($this->scopes),
            'vars' => static::serializeValue($this->vars),
            'events' => static::serializeValue($this->events),
            'schedule' => static::serializeValue($this->schedule),
            'timeout' => static::serializeValue($this->timeout),
            'entrypoint' => static::serializeValue($this->entrypoint),
            'commands' => static::serializeValue($this->commands),
            'version' => static::serializeValue($this->version),
            'installationId' => static::serializeValue($this->installationId),
            'providerRepositoryId' => static::serializeValue($this->providerRepositoryId),
            'providerBranch' => static::serializeValue($this->providerBranch),
            'providerRootDirectory' => static::serializeValue($this->providerRootDirectory),
            'providerSilentMode' => static::serializeValue($this->providerSilentMode),
            'providerBranches' => static::serializeValue($this->providerBranches),
            'providerPaths' => static::serializeValue($this->providerPaths),
            'buildSpecification' => static::serializeValue($this->buildSpecification),
            'runtimeSpecification' => static::serializeValue($this->runtimeSpecification)
        ];

        return $result;
    }
}
