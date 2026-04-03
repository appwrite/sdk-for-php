<?php

namespace Appwrite\Models;

use Appwrite\Enums\DeploymentStatus;

/**
 * Deployment
 */
readonly class Deployment
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
     * @param DeploymentStatus $status the deployment status. possible values are &quot;waiting&quot;, &quot;processing&quot;, &quot;building&quot;, &quot;ready&quot;, &quot;canceled&quot; and &quot;failed&quot;.
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
}
