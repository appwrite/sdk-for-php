<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Browser;
use Appwrite\Enums\CreditCard;
use Appwrite\Enums\Flag;

class Avatars extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get browser icon
     *
     * You can use this endpoint to show different browser icons to your users.
     * The code argument receives the browser code as it appears in your user [GET
     * /account/sessions](https://appwrite.io/docs/references/cloud/client-web/account#getSessions)
     * endpoint. Use width, height and quality arguments to change the output
     * settings.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     *
     * @param Browser $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws AppwriteException
     * @return string
     */
    public function getBrowser(Browser $code, ?int $width = null, ?int $height = null, ?int $quality = null): string
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/avatars/browsers/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get credit card icon
     *
     * The credit card endpoint will return you the icon of the credit card
     * provider you need. Use width, height and quality arguments to change the
     * output settings.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param CreditCard $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws AppwriteException
     * @return string
     */
    public function getCreditCard(CreditCard $code, ?int $width = null, ?int $height = null, ?int $quality = null): string
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/avatars/credit-cards/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get favicon
     *
     * Use this endpoint to fetch the favorite icon (AKA favicon) of any remote
     * website URL.
     * 
     * This endpoint does not follow HTTP redirects.
     *
     * @param string $url
     * @throws AppwriteException
     * @return string
     */
    public function getFavicon(string $url): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/avatars/favicon'
        );

        $apiParams = [];
        $apiParams['url'] = $url;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get country flag
     *
     * You can use this endpoint to show different country flags icons to your
     * users. The code argument receives the 2 letter country code. Use width,
     * height and quality arguments to change the output settings. Country codes
     * follow the [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1) standard.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param Flag $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws AppwriteException
     * @return string
     */
    public function getFlag(Flag $code, ?int $width = null, ?int $height = null, ?int $quality = null): string
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/avatars/flags/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get image from URL
     *
     * Use this endpoint to fetch a remote image URL and crop it to any image size
     * you want. This endpoint is very useful if you need to crop and display
     * remote images in your app or in case you want to make sure a 3rd party
     * image is properly served using a TLS protocol.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 400x400px.
     * 
     * This endpoint does not follow HTTP redirects.
     *
     * @param string $url
     * @param ?int $width
     * @param ?int $height
     * @throws AppwriteException
     * @return string
     */
    public function getImage(string $url, ?int $width = null, ?int $height = null): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/avatars/image'
        );

        $apiParams = [];
        $apiParams['url'] = $url;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get user initials
     *
     * Use this endpoint to show your user initials avatar icon on your website or
     * app. By default, this route will try to print your logged-in user name or
     * email initials. You can also overwrite the user name if you pass the 'name'
     * parameter. If no name is given and no user is logged, an empty avatar will
     * be returned.
     * 
     * You can use the color and background params to change the avatar colors. By
     * default, a random theme will be selected. The random theme will persist for
     * the user's initials when reloading the same theme will always return for
     * the same initials.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param ?string $name
     * @param ?int $width
     * @param ?int $height
     * @param ?string $background
     * @throws AppwriteException
     * @return string
     */
    public function getInitials(?string $name = null, ?int $width = null, ?int $height = null, ?string $background = null): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/avatars/initials'
        );

        $apiParams = [];

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($background)) {
            $apiParams['background'] = $background;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get QR code
     *
     * Converts a given plain text to a QR code image. You can use the query
     * parameters to change the size and style of the resulting image.
     * 
     *
     * @param string $text
     * @param ?int $size
     * @param ?int $margin
     * @param ?bool $download
     * @throws AppwriteException
     * @return string
     */
    public function getQR(string $text, ?int $size = null, ?int $margin = null, ?bool $download = null): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/avatars/qr'
        );

        $apiParams = [];
        $apiParams['text'] = $text;

        if (!is_null($size)) {
            $apiParams['size'] = $size;
        }

        if (!is_null($margin)) {
            $apiParams['margin'] = $margin;
        }

        if (!is_null($download)) {
            $apiParams['download'] = $download;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}