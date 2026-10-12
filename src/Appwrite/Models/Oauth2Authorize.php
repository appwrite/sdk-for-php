<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Authorize
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Authorize
{
    use ArraySerializable;

    /**
     * Oauth2Authorize constructor.
     *
     * @param string $grantId oauth2 grant id. set when the user must give explicit consent; pass it to the approve or reject endpoint. empty when a redirect url is returned instead.
     * @param string $redirectUrl url the end user should be redirected to when the flow can complete without consent. empty when consent is still required.
     */
    public function __construct(
        public string $grantId,
        public string $redirectUrl
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'grantId' => "",
            'redirectUrl' => "",
        ];

        return new static(
            grantId: $data['grantId'],
            redirectUrl: $data['redirectUrl']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'grantId' => static::serializeValue($this->grantId),
            'redirectUrl' => static::serializeValue($this->redirectUrl)
        ];
    }
}
