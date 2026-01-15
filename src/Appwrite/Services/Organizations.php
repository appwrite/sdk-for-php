<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Organizations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Delete an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $organizationId): string
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get estimation for deleting an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function estimationDeleteOrganization(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/estimations/delete-organization'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}