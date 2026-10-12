<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Database Migration
 *
 * @phpstan-consistent-constructor
 */
readonly class DatabaseMigration
{
    use ArraySerializable;

    /**
     * DatabaseMigration constructor.
     *
     * @param string $id database migration id.
     * @param string $createdAt migration creation time in iso 8601 format.
     * @param string $updatedAt migration update time in iso 8601 format.
     * @param string $projectId project id that owns the migrating database.
     * @param string $databaseId logical database id being migrated.
     * @param string $specification dedicated compute specification provisioned for the migration target.
     * @param string $phase migration phase. possible values: pending, provisioned, capturing, backfilling, catching_up, verifying, ready_to_cutover, cutover, soaking, done, failed, rolled_back.
     * @param int $attempt number of times a migration step has failed and been recorded.
     * @param string $lastError reason the most recent migration step failed, empty while none has.
     * @param int $lagDocuments number of documents still pending replication to the target.
     * @param int $changelogWatermark highest source changelog sequence applied to the target so far.
     * @param string $verifiedAt time the migrated data was verified against the source in iso 8601 format.
     * @param string $cutoverAt time routing was flipped to the target in iso 8601 format.
     * @param string $soakUntil time the post-cutover soak window ends in iso 8601 format.
     * @param bool $autoCutover whether the migration cuts over automatically once ready. set when the migration is created and never changed afterwards, so it always reports what was asked for.
     * @param bool $cutoverRequested whether a cutover has been requested and not yet attempted. set by the cutover endpoint and cleared when the attempt is made, so a cutover that fails a check parks the migration again rather than retrying on its own.
     * @param bool $paused whether the migration is paused.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $projectId,
        public string $databaseId,
        public string $specification,
        public string $phase,
        public int $attempt,
        public string $lastError,
        public int $lagDocuments,
        public int $changelogWatermark,
        public string $verifiedAt,
        public string $cutoverAt,
        public string $soakUntil,
        public bool $autoCutover,
        public bool $cutoverRequested,
        public bool $paused
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
            'projectId' => "",
            'databaseId' => "",
            'specification' => "",
            'phase' => "pending",
            'attempt' => 0,
            'lastError' => "",
            'lagDocuments' => 0,
            'changelogWatermark' => 0,
            'verifiedAt' => "",
            'cutoverAt' => "",
            'soakUntil' => "",
            'autoCutover' => true,
            'cutoverRequested' => false,
            'paused' => false,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            projectId: $data['projectId'],
            databaseId: $data['databaseId'],
            specification: $data['specification'],
            phase: $data['phase'],
            attempt: $data['attempt'],
            lastError: $data['lastError'],
            lagDocuments: $data['lagDocuments'],
            changelogWatermark: $data['changelogWatermark'],
            verifiedAt: $data['verifiedAt'],
            cutoverAt: $data['cutoverAt'],
            soakUntil: $data['soakUntil'],
            autoCutover: $data['autoCutover'],
            cutoverRequested: $data['cutoverRequested'],
            paused: $data['paused']
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
            'projectId' => static::serializeValue($this->projectId),
            'databaseId' => static::serializeValue($this->databaseId),
            'specification' => static::serializeValue($this->specification),
            'phase' => static::serializeValue($this->phase),
            'attempt' => static::serializeValue($this->attempt),
            'lastError' => static::serializeValue($this->lastError),
            'lagDocuments' => static::serializeValue($this->lagDocuments),
            'changelogWatermark' => static::serializeValue($this->changelogWatermark),
            'verifiedAt' => static::serializeValue($this->verifiedAt),
            'cutoverAt' => static::serializeValue($this->cutoverAt),
            'soakUntil' => static::serializeValue($this->soakUntil),
            'autoCutover' => static::serializeValue($this->autoCutover),
            'cutoverRequested' => static::serializeValue($this->cutoverRequested),
            'paused' => static::serializeValue($this->paused)
        ];
    }
}
