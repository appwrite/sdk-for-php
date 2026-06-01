<?php

namespace Appwrite\Models;

/**
 * Projects List
 */
readonly class ProjectList
{
    use ArraySerializable;

    /**
     * ProjectList constructor.
     *
     * @param int $total total number of projects that matched your query.
     * @param list<Project> $projects list of projects.
     */
    public function __construct(
        public int $total,
        public array $projects
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('projects', $data)) {
            throw new \InvalidArgumentException('Missing required field "projects" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            projects: is_array($data['projects'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Project::class, $item),
                    $data['projects']
                )
                : $data['projects']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'projects' => static::serializeValue($this->projects)
        ];

        return $result;
    }
}
