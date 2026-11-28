<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AnalyticsMetric
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsMetric
{
    use ArraySerializable;

    /**
     * AnalyticsMetric constructor.
     *
     * @param int $visitors unique visitors in the requested range.
     * @param int $sessions unique sessions in the requested range.
     * @param int $events total events in the requested range.
     * @param string|null $value dimension value this row covers. null when no dimension was requested, empty when the dimension could not be derived for those events.
     * @param string|null $date start of the time bucket this row covers, in iso 8601. null when no interval was requested.
     * @param int|null $pageviews total page and screen view events (events named "pageview" or "screen_view") in the requested range. the flat aggregate and the time series compute it; null on breakdown rows.
     * @param int|null $users unique identified users in the requested range. anonymous events are not counted. null on entry and exit page breakdown rows.
     * @param int|null $visits total sessions with activity in the requested range. only the flat aggregate computes it; null on breakdown and time-series rows.
     * @param float|null $bounceRate share of bounced visits, as a percentage; a visit is a bounce unless it records two or more page or screen views, at least one interaction, or ten seconds or more of activity. an interaction is any event that is neither a view nor automatic measurement such as "app_foregrounded", "engagement_time" or "scroll_depth". only the flat aggregate computes it; null on breakdown and time-series rows.
     * @param float|null $visitDuration average session length in seconds, measured first event to last event. single-event sessions count as 0. only the flat aggregate computes it; null on breakdown and time-series rows.
     * @param float|null $viewsPerVisit average pageviews per session (pageviews divided by visits). only the flat aggregate computes it; null on breakdown and time-series rows.
     * @param float|null $scrollDepth average scroll depth across events, as a percentage. only the flat aggregate computes it; null on breakdown and time-series rows.
     * @param float|null $engagementTime average engaged time per session in seconds, counting only foreground time. sessions that reported no engagement are excluded. only the flat aggregate computes it; null on breakdown and time-series rows.
     */
    public function __construct(
        public int $visitors,
        public int $sessions,
        public int $events,
        public ?string $value = null,
        public ?string $date = null,
        public ?int $pageviews = null,
        public ?int $users = null,
        public ?int $visits = null,
        public ?float $bounceRate = null,
        public ?float $visitDuration = null,
        public ?float $viewsPerVisit = null,
        public ?float $scrollDepth = null,
        public ?float $engagementTime = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'visitors' => 0,
            'sessions' => 0,
            'events' => 0,
        ];

        return new static(
            visitors: $data['visitors'],
            sessions: $data['sessions'],
            events: $data['events'],
            value: $data['value'] ?? null,
            date: $data['date'] ?? null,
            pageviews: $data['pageviews'] ?? null,
            users: $data['users'] ?? null,
            visits: $data['visits'] ?? null,
            bounceRate: $data['bounceRate'] ?? null,
            visitDuration: $data['visitDuration'] ?? null,
            viewsPerVisit: $data['viewsPerVisit'] ?? null,
            scrollDepth: $data['scrollDepth'] ?? null,
            engagementTime: $data['engagementTime'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'value' => static::serializeValue($this->value),
            'date' => static::serializeValue($this->date),
            'visitors' => static::serializeValue($this->visitors),
            'sessions' => static::serializeValue($this->sessions),
            'pageviews' => static::serializeValue($this->pageviews),
            'events' => static::serializeValue($this->events),
            'users' => static::serializeValue($this->users),
            'visits' => static::serializeValue($this->visits),
            'bounceRate' => static::serializeValue($this->bounceRate),
            'visitDuration' => static::serializeValue($this->visitDuration),
            'viewsPerVisit' => static::serializeValue($this->viewsPerVisit),
            'scrollDepth' => static::serializeValue($this->scrollDepth),
            'engagementTime' => static::serializeValue($this->engagementTime)
        ];
    }
}
