<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Function
 *
 * @phpstan-consistent-constructor
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
     * @param bool $emailEnabled whether inbound email (smtp) may trigger this function. opt-in; default is false. when disabled, recipients for this function are rejected.
     * @param int|null $interval minutes between scheduled executions. 0 when the function has no interval.
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
        public string $runtimeSpecification,
        public bool $emailEnabled,
        public ?int $interval = null
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
            'execute' => [],
            'name' => "",
            'enabled' => true,
            'live' => true,
            'logging' => true,
            'runtime' => "",
            'deploymentRetention' => 0,
            'deploymentId' => "",
            'deploymentCreatedAt' => "",
            'latestDeploymentId' => "",
            'latestDeploymentCreatedAt' => "",
            'latestDeploymentStatus' => "",
            'scopes' => [],
            'vars' => [],
            'events' => [],
            'schedule' => "",
            'timeout' => 15,
            'entrypoint' => "",
            'commands' => "",
            'version' => "v5",
            'installationId' => "",
            'providerRepositoryId' => "",
            'providerBranch' => "",
            'providerRootDirectory' => "",
            'providerSilentMode' => false,
            'providerBranches' => [],
            'providerPaths' => [],
            'buildSpecification' => "s-1vcpu-512mb",
            'runtimeSpecification' => "s-1vcpu-512mb",
            'emailEnabled' => false,
        ];

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
            runtimeSpecification: $data['runtimeSpecification'],
            emailEnabled: $data['emailEnabled'],
            interval: $data['interval'] ?? null
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
            'interval' => static::serializeValue($this->interval),
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
            'runtimeSpecification' => static::serializeValue($this->runtimeSpecification),
            'emailEnabled' => static::serializeValue($this->emailEnabled)
        ];
    }
}
