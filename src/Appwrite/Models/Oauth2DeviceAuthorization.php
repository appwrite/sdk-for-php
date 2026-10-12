<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Device Authorization
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2DeviceAuthorization
{
    use ArraySerializable;

    /**
     * Oauth2DeviceAuthorization constructor.
     *
     * @param string $deviceCode device verification code used by the client to poll the token endpoint.
     * @param string $userCode short code the end user enters on the verification page.
     * @param string $verificationUri url where the end user enters the user code.
     * @param string $verificationUriComplete verification url with the user code prefilled as a query parameter.
     * @param int $expiresIn lifetime of the device code and user code in seconds.
     * @param int $interval minimum polling interval for the token endpoint in seconds.
     */
    public function __construct(
        public string $deviceCode,
        public string $userCode,
        public string $verificationUri,
        public string $verificationUriComplete,
        public int $expiresIn,
        public int $interval
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'device_code' => "",
            'user_code' => "",
            'verification_uri' => "",
            'verification_uri_complete' => "",
            'expires_in' => 0,
            'interval' => 0,
        ];

        return new static(
            deviceCode: $data['device_code'],
            userCode: $data['user_code'],
            verificationUri: $data['verification_uri'],
            verificationUriComplete: $data['verification_uri_complete'],
            expiresIn: $data['expires_in'],
            interval: $data['interval']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'device_code' => static::serializeValue($this->deviceCode),
            'user_code' => static::serializeValue($this->userCode),
            'verification_uri' => static::serializeValue($this->verificationUri),
            'verification_uri_complete' => static::serializeValue($this->verificationUriComplete),
            'expires_in' => static::serializeValue($this->expiresIn),
            'interval' => static::serializeValue($this->interval)
        ];
    }
}
