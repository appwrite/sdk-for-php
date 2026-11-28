<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AnalyticsAnnotation
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsAnnotation
{
    use ArraySerializable;

    /**
     * AnalyticsAnnotation constructor.
     *
     * @param string $id annotation id.
     * @param string $createdAt annotation creation date in iso 8601 format.
     * @param string $updatedAt annotation update date in iso 8601 format.
     * @param string $propertyId id of the analytics property the annotation belongs to.
     * @param string $date point in time the annotation marks, in iso 8601 format.
     * @param string $content annotation text.
     * @param string $userId id of the user who created the annotation. empty when it was created with an api key.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $propertyId,
        public string $date,
        public string $content,
        public string $userId
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
            'propertyId' => "",
            'date' => "",
            'content' => "",
            'userId' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            propertyId: $data['propertyId'],
            date: $data['date'],
            content: $data['content'],
            userId: $data['userId']
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
            'propertyId' => static::serializeValue($this->propertyId),
            'date' => static::serializeValue($this->date),
            'content' => static::serializeValue($this->content),
            'userId' => static::serializeValue($this->userId)
        ];
    }
}
