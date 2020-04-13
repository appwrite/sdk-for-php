<?php
namespace Appwrite\Services;


interface ServiceInterface
{
    // Get Browser Icon
    public function getBrowser();

    // Get Credit Card Icon
    public function getCreditCard(string $code, int $width = 100, int $height = 100, int $quality = 100):array;

    // Get Favicon
    public function getFavicon(string $url):array;
}