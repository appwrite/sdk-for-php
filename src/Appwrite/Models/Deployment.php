<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\DeploymentStatus;

/**
 * Deployment
 *
 * @phpstan-consistent-constructor
 */
readonly class Deployment
{
    use ArraySerializable;

    /**
     * Deployment constructor.
     *
     * @param string $id deployment id.
     * @param string $createdAt deployment creation date in iso 8601 format.
     * @param string $updatedAt deployment update date in iso 8601 format.
     * @param string $type type of deployment.
     * @param string $resourceId resource id.
     * @param string $resourceType resource type.
     * @param string $entrypoint the entrypoint file to use to execute the deployment code.
     * @param int $sourceSize the code size in bytes.
     * @param int $buildSize the build output size in bytes.
     * @param int $totalSize the total size in bytes (source and build output).
     * @param string $buildId the current build id.
     * @param bool $activate whether the deployment should be automatically activated.
     * @param string $screenshotLight screenshot with light theme preference file id.
     * @param string $screenshotDark screenshot with dark theme preference file id.
     * @param DeploymentStatus $status the deployment status. possible values are "waiting", "processing", "building", "ready", "canceled" and "failed".
     * @param string $buildLogs the build logs.
     * @param int $buildDuration the current build time in seconds.
     * @param string $providerRepositoryName the name of the vcs provider repository
     * @param string $providerRepositoryOwner the name of the vcs provider repository owner
     * @param string $providerRepositoryUrl the url of the vcs provider repository
     * @param string $providerCommitHash the commit hash of the vcs commit
     * @param string $providerCommitAuthorUrl the url of vcs commit author
     * @param string $providerCommitAuthor the name of vcs commit author
     * @param string $providerCommitMessage the commit message
     * @param string $providerCommitUrl the url of the vcs commit
     * @param string $providerBranch the branch of the vcs repository
     * @param string $providerBranchUrl the branch of the vcs repository
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $type,
        public string $resourceId,
        public string $resourceType,
        public string $entrypoint,
        public int $sourceSize,
        public int $buildSize,
        public int $totalSize,
        public string $buildId,
        public bool $activate,
        public string $screenshotLight,
        public string $screenshotDark,
        public DeploymentStatus $status,
        public string $buildLogs,
        public int $buildDuration,
        public string $providerRepositoryName,
        public string $providerRepositoryOwner,
        public string $providerRepositoryUrl,
        public string $providerCommitHash,
        public string $providerCommitAuthorUrl,
        public string $providerCommitAuthor,
        public string $providerCommitMessage,
        public string $providerCommitUrl,
        public string $providerBranch,
        public string $providerBranchUrl
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
            'type' => "",
            'resourceId' => "",
            'resourceType' => "",
            'entrypoint' => "",
            'sourceSize' => 0,
            'buildSize' => 0,
            'totalSize' => 0,
            'buildId' => "",
            'activate' => false,
            'screenshotLight' => "",
            'screenshotDark' => "",
            'buildLogs' => "",
            'buildDuration' => 0,
            'providerRepositoryName' => "",
            'providerRepositoryOwner' => "",
            'providerRepositoryUrl' => "",
            'providerCommitHash' => "",
            'providerCommitAuthorUrl' => "",
            'providerCommitAuthor' => "",
            'providerCommitMessage' => "",
            'providerCommitUrl' => "",
            'providerBranch' => "",
            'providerBranchUrl' => "",
        ];

        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            type: $data['type'],
            resourceId: $data['resourceId'],
            resourceType: $data['resourceType'],
            entrypoint: $data['entrypoint'],
            sourceSize: $data['sourceSize'],
            buildSize: $data['buildSize'],
            totalSize: $data['totalSize'],
            buildId: $data['buildId'],
            activate: $data['activate'],
            screenshotLight: $data['screenshotLight'],
            screenshotDark: $data['screenshotDark'],
            status: static::hydrateTypedValue(DeploymentStatus::class, $data['status']),
            buildLogs: $data['buildLogs'],
            buildDuration: $data['buildDuration'],
            providerRepositoryName: $data['providerRepositoryName'],
            providerRepositoryOwner: $data['providerRepositoryOwner'],
            providerRepositoryUrl: $data['providerRepositoryUrl'],
            providerCommitHash: $data['providerCommitHash'],
            providerCommitAuthorUrl: $data['providerCommitAuthorUrl'],
            providerCommitAuthor: $data['providerCommitAuthor'],
            providerCommitMessage: $data['providerCommitMessage'],
            providerCommitUrl: $data['providerCommitUrl'],
            providerBranch: $data['providerBranch'],
            providerBranchUrl: $data['providerBranchUrl']
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
            'type' => static::serializeValue($this->type),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType),
            'entrypoint' => static::serializeValue($this->entrypoint),
            'sourceSize' => static::serializeValue($this->sourceSize),
            'buildSize' => static::serializeValue($this->buildSize),
            'totalSize' => static::serializeValue($this->totalSize),
            'buildId' => static::serializeValue($this->buildId),
            'activate' => static::serializeValue($this->activate),
            'screenshotLight' => static::serializeValue($this->screenshotLight),
            'screenshotDark' => static::serializeValue($this->screenshotDark),
            'status' => static::serializeValue($this->status),
            'buildLogs' => static::serializeValue($this->buildLogs),
            'buildDuration' => static::serializeValue($this->buildDuration),
            'providerRepositoryName' => static::serializeValue($this->providerRepositoryName),
            'providerRepositoryOwner' => static::serializeValue($this->providerRepositoryOwner),
            'providerRepositoryUrl' => static::serializeValue($this->providerRepositoryUrl),
            'providerCommitHash' => static::serializeValue($this->providerCommitHash),
            'providerCommitAuthorUrl' => static::serializeValue($this->providerCommitAuthorUrl),
            'providerCommitAuthor' => static::serializeValue($this->providerCommitAuthor),
            'providerCommitMessage' => static::serializeValue($this->providerCommitMessage),
            'providerCommitUrl' => static::serializeValue($this->providerCommitUrl),
            'providerBranch' => static::serializeValue($this->providerBranch),
            'providerBranchUrl' => static::serializeValue($this->providerBranchUrl)
        ];
    }
}
