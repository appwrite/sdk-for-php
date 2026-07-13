<?php

namespace Appwrite\Models;

/**
 * Program
 */
readonly class Program
{
    use ArraySerializable;

    /**
     * Program constructor.
     *
     * @param string $id program id
     * @param string $title program title
     * @param string $description program description
     * @param string $tag program tag for highlighting on console
     * @param string $icon program icon for highlighting on console
     * @param string $url url for more information on this program
     * @param bool $active whether this program is active
     * @param bool $external whether this program is external
     * @param string $billingPlanId billing plan id that this is program is associated with.
     */
    public function __construct(
        public string $id,
        public string $title,
        public string $description,
        public string $tag,
        public string $icon,
        public string $url,
        public bool $active,
        public bool $external,
        public string $billingPlanId
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
        if (!array_key_exists('title', $data)) {
            throw new \InvalidArgumentException('Missing required field "title" for ' . static::class . '.');
        }
        if (!array_key_exists('description', $data)) {
            throw new \InvalidArgumentException('Missing required field "description" for ' . static::class . '.');
        }
        if (!array_key_exists('tag', $data)) {
            throw new \InvalidArgumentException('Missing required field "tag" for ' . static::class . '.');
        }
        if (!array_key_exists('icon', $data)) {
            throw new \InvalidArgumentException('Missing required field "icon" for ' . static::class . '.');
        }
        if (!array_key_exists('url', $data)) {
            throw new \InvalidArgumentException('Missing required field "url" for ' . static::class . '.');
        }
        if (!array_key_exists('active', $data)) {
            throw new \InvalidArgumentException('Missing required field "active" for ' . static::class . '.');
        }
        if (!array_key_exists('external', $data)) {
            throw new \InvalidArgumentException('Missing required field "external" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlanId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlanId" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            title: $data['title'],
            description: $data['description'],
            tag: $data['tag'],
            icon: $data['icon'],
            url: $data['url'],
            active: $data['active'],
            external: $data['external'],
            billingPlanId: $data['billingPlanId']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'title' => static::serializeValue($this->title),
            'description' => static::serializeValue($this->description),
            'tag' => static::serializeValue($this->tag),
            'icon' => static::serializeValue($this->icon),
            'url' => static::serializeValue($this->url),
            'active' => static::serializeValue($this->active),
            'external' => static::serializeValue($this->external),
            'billingPlanId' => static::serializeValue($this->billingPlanId)
        ];

        return $result;
    }
}
