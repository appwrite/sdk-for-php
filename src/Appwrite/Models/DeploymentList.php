<?php

namespace Appwrite\Models;

/**
 * Deployments List
 */
readonly class DeploymentList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'deployments' => Deployment::class
    ];

    /**
     * DeploymentList constructor.
     *
     * @param int $total total number of deployments that matched your query.
     * @param list<Deployment> $deployments list of deployments.
     */
    public function __construct(
        public int $total,
        public array $deployments
    ) {
    }
}
