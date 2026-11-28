<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\AnalyticsPropertyType;

/**
 * AnalyticsProperty
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsProperty
{
    use ArraySerializable;

    /**
     * AnalyticsProperty constructor.
     *
     * @param string $id analytics property id.
     * @param string $createdAt property creation date in iso 8601 format.
     * @param string $updatedAt property update date in iso 8601 format.
     * @param string $name human-readable name of the tracked website or application.
     * @param string $domain primary domain being tracked (e.g. example.com). may be empty for mobile and agent properties.
     * @param bool $enabled whether tracking is currently active.
     * @param array $allowedOrigins list of origins allowed to send tracking events. use ["*"] to allow all. managed by appwrite for a property linked to a site, following the site's production domains.
     * @param AnalyticsPropertyType $type kind of product this property tracks. decides which dashboard panels apply.
     * @param bool $identifyUsers whether events sent from a signed-in client session record that user's id.
     * @param string $accessedAt most recent event date in iso 8601 format. this attribute is only updated again after 24 hours.
     * @param string $firstAccessedAt first event date in iso 8601 format. empty until the property receives its first event.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $domain,
        public bool $enabled,
        public array $allowedOrigins,
        public AnalyticsPropertyType $type,
        public bool $identifyUsers,
        public string $accessedAt,
        public string $firstAccessedAt
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
            'name' => "",
            'domain' => "",
            'enabled' => true,
            'allowedOrigins' => ["*"],
            'type' => "web",
            'identifyUsers' => false,
            'accessedAt' => "",
            'firstAccessedAt' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            domain: $data['domain'],
            enabled: $data['enabled'],
            allowedOrigins: $data['allowedOrigins'],
            type: static::hydrateTypedValue(AnalyticsPropertyType::class, $data['type']),
            identifyUsers: $data['identifyUsers'],
            accessedAt: $data['accessedAt'],
            firstAccessedAt: $data['firstAccessedAt']
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
            'name' => static::serializeValue($this->name),
            'domain' => static::serializeValue($this->domain),
            'enabled' => static::serializeValue($this->enabled),
            'allowedOrigins' => static::serializeValue($this->allowedOrigins),
            'type' => static::serializeValue($this->type),
            'identifyUsers' => static::serializeValue($this->identifyUsers),
            'accessedAt' => static::serializeValue($this->accessedAt),
            'firstAccessedAt' => static::serializeValue($this->firstAccessedAt)
        ];
    }
}
