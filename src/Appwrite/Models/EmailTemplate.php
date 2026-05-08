<?php

namespace Appwrite\Models;

/**
 * EmailTemplate
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
        if (!array_key_exists('templateId', $data)) {
            throw new \InvalidArgumentException('Missing required field "templateId" for ' . static::class . '.');
        }
        if (!array_key_exists('locale', $data)) {
            throw new \InvalidArgumentException('Missing required field "locale" for ' . static::class . '.');
        }
        if (!array_key_exists('message', $data)) {
            throw new \InvalidArgumentException('Missing required field "message" for ' . static::class . '.');
        }
        if (!array_key_exists('senderName', $data)) {
            throw new \InvalidArgumentException('Missing required field "senderName" for ' . static::class . '.');
        }
        if (!array_key_exists('senderEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "senderEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('replyToEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "replyToEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('replyToName', $data)) {
            throw new \InvalidArgumentException('Missing required field "replyToName" for ' . static::class . '.');
        }
        if (!array_key_exists('subject', $data)) {
            throw new \InvalidArgumentException('Missing required field "subject" for ' . static::class . '.');
        }

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
        $result = [
            'templateId' => static::serializeValue($this->templateId),
            'locale' => static::serializeValue($this->locale),
            'message' => static::serializeValue($this->message),
            'senderName' => static::serializeValue($this->senderName),
            'senderEmail' => static::serializeValue($this->senderEmail),
            'replyToEmail' => static::serializeValue($this->replyToEmail),
            'replyToName' => static::serializeValue($this->replyToName),
            'subject' => static::serializeValue($this->subject)
        ];

        return $result;
    }
}
