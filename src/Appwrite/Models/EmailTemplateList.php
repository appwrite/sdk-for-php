<?php

namespace Appwrite\Models;

/**
 * Email Templates List
 */
readonly class EmailTemplateList
{
    use ArraySerializable;

    /**
     * EmailTemplateList constructor.
     *
     * @param int $total total number of templates that matched your query.
     * @param list<EmailTemplate> $templates list of templates.
     */
    public function __construct(
        public int $total,
        public array $templates
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
        if (!array_key_exists('templates', $data)) {
            throw new \InvalidArgumentException('Missing required field "templates" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            templates: is_array($data['templates'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(EmailTemplate::class, $item),
                    $data['templates']
                )
                : $data['templates']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'templates' => static::serializeValue($this->templates)
        ];

        return $result;
    }
}
