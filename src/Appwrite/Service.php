<?php

namespace Appwrite;

abstract class Service
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}