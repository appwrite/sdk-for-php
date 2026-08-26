<?php

declare(strict_types=1);

namespace Appwrite;

abstract class Service
{
    public function __construct(protected Client $client)
    {
    }
}
