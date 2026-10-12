<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * EmailTemplate
 *
 * @phpstan-consistent-constructor
 */
readonly class EmailTemplate
{
    use ArraySerializable;

    /**
     * EmailTemplate constructor.
     *
     * @param string $templateId template type
     * @param string $locale template locale
     * @param string $message template message
     * @param string $senderName name of the sender
     * @param string $senderEmail email of the sender
     * @param string $replyToEmail reply to email address
     * @param string $replyToName reply to name
     * @param string $subject email subject
     */
    public function __construct(
        public string $templateId,
        public string $locale,
        public string $message,
        public string $senderName,
        public string $senderEmail,
        public string $replyToEmail,
        public string $replyToName,
        public string $subject
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'templateId' => "",
            'locale' => "",
            'message' => "",
            'senderName' => "",
            'senderEmail' => "",
            'replyToEmail' => "",
            'replyToName' => "",
            'subject' => "",
        ];

        return new static(
            templateId: $data['templateId'],
            locale: $data['locale'],
            message: $data['message'],
            senderName: $data['senderName'],
            senderEmail: $data['senderEmail'],
            replyToEmail: $data['replyToEmail'],
            replyToName: $data['replyToName'],
            subject: $data['subject']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'templateId' => static::serializeValue($this->templateId),
            'locale' => static::serializeValue($this->locale),
            'message' => static::serializeValue($this->message),
            'senderName' => static::serializeValue($this->senderName),
            'senderEmail' => static::serializeValue($this->senderEmail),
            'replyToEmail' => static::serializeValue($this->replyToEmail),
            'replyToName' => static::serializeValue($this->replyToName),
            'subject' => static::serializeValue($this->subject)
        ];
    }
}
