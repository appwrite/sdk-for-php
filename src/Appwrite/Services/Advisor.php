<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Advisor extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the project's analyzer reports. You can use the query
     * params to filter your results.
     * 
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ReportList
     */
    public function listReports(?array $queries = null, ?bool $total = null): \Appwrite\Models\ReportList
    {
        $apiPath = str_replace(
            [],
            [],
            '/reports'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ReportList::from($response);

    }

    /**
     * Get an analyzer report by its unique ID. The response includes the report's
     * metadata and the nested insights it produced.
     * 
     *
     * @param string $reportId
     * @throws AppwriteException
     * @return \Appwrite\Models\Report
     */
    public function getReport(string $reportId): \Appwrite\Models\Report
    {
        $apiPath = str_replace(
            ['{reportId}'],
            [$reportId],
            '/reports/{reportId}'
        );

        $apiParams = [];
        $apiParams['reportId'] = $reportId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Report::from($response);

    }

    /**
     * Delete an analyzer report by its unique ID. Nested insights and CTA
     * metadata are removed asynchronously by the deletes worker.
     * 
     *
     * @param string $reportId
     * @throws AppwriteException
     * @return string
     */
    public function deleteReport(string $reportId): string
    {
        $apiPath = str_replace(
            ['{reportId}'],
            [$reportId],
            '/reports/{reportId}'
        );

        $apiParams = [];
        $apiParams['reportId'] = $reportId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * List the insights produced under a single analyzer report. You can use the
     * query params to filter your results further.
     * 
     *
     * @param string $reportId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\InsightList
     */
    public function listInsights(string $reportId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\InsightList
    {
        $apiPath = str_replace(
            ['{reportId}'],
            [$reportId],
            '/reports/{reportId}/insights'
        );

        $apiParams = [];
        $apiParams['reportId'] = $reportId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\InsightList::from($response);

    }

    /**
     * Get an insight by its unique ID, scoped to its parent report.
     * 
     *
     * @param string $reportId
     * @param string $insightId
     * @throws AppwriteException
     * @return \Appwrite\Models\Insight
     */
    public function getInsight(string $reportId, string $insightId): \Appwrite\Models\Insight
    {
        $apiPath = str_replace(
            ['{reportId}', '{insightId}'],
            [$reportId, $insightId],
            '/reports/{reportId}/insights/{insightId}'
        );

        $apiParams = [];
        $apiParams['reportId'] = $reportId;
        $apiParams['insightId'] = $insightId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Insight::from($response);

    }
}
