<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\VideoOutput;
use Appwrite\Enums\ImageFormat;

class Videos extends Service
{
    /**
     * Get a list of videos in the current project. Sessions receive only videos
     * they can read according to each video's `$permissions`. API keys and admins
     * receive the full project catalog. Playback uses the same document read ACL
     * plus the `videos.play` (or `videos.read`) scope: a guest can stream a video
     * that grants `read("any")` or `read("guests")` even though guests lack
     * `videos.read` and will not see it in this list.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\VideoList
    {
        $apiPath = str_replace(
            [],
            [],
            '/videos'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoList::from($response);
    }

    /**
     * Create a video resource from an existing file in a storage bucket. The
     * source file must be a video or audio file, and the caller must be able to
     * read that file. Creating a video stores the document and queues timeline
     * generation. The worker downloads the source, probes metadata, extracts
     * embedded captions once, and deletes its working copy when finished. Sources
     * with a video track also get a thumbnail timeline. Call create-rendition to
     * package a streaming output.
     *
     * An optional `name` defaults to the source file name. An optional
     * `permissions` array sets the video document ACL (list, get, update, delete,
     * manage child resources, and playback). By default, only the current user is
     * granted all permissions; API keys and admins create with empty permissions
     * when omitted. Guests with `videos.play` can stream when the video grants
     * them read (`read("any")` or `read("guests")`).
     *
     * Uploaded caption files stay listed alongside auto-extracted tracks for the
     * same language; when the current default is an auto-extracted track with
     * that code, the upload takes the default flag.
     *
     * @throws AppwriteException
     */
    public function create(string $videoId, string $bucketId, string $fileId, ?string $name = null, ?array $permissions = null): \Appwrite\Models\Video
    {
        $apiPath = str_replace(
            [],
            [],
            '/videos'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['permissions'] = $permissions;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Video::from($response);
    }

    /**
     * Get a list of video encode codecs enabled on this instance. Each codec
     * includes the output formats it may be packaged into.
     *
     * @throws AppwriteException
     */
    public function listCodecs(): \Appwrite\Models\VideoCodecList
    {
        $apiPath = str_replace(
            [],
            [],
            '/videos/codecs'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoCodecList::from($response);
    }

    /**
     * Get a video by its unique ID. This endpoint response returns a JSON object
     * with the video metadata.
     *
     * @throws AppwriteException
     */
    public function get(string $videoId): \Appwrite\Models\Video
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Video::from($response);
    }

    /**
     * Update a video's name, permissions, or both. Only the fields you pass are
     * changed: omit `name` to keep the current name and `permissions` to keep the
     * current ACL. The caller must hold update permission on the video document.
     * The source file cannot be replaced; delete the video and create a new one
     * to point at a different file.
     *
     * @throws AppwriteException
     */
    public function update(string $videoId, ?string $name = null, ?array $permissions = null): \Appwrite\Models\Video
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['name'] = $name;
        $apiParams['permissions'] = $permissions;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Video::from($response);
    }

    /**
     * Delete a video by its unique ID. This also removes every rendition,
     * caption, preview and transcoded artifact derived from it. Fails with
     * `video_rendition_in_progress` while a rendition is started or ended, unless
     * that rendition has not been updated within the rendition retention window.
     * Fails with `video_timeline_in_progress` while the video's timeline is being
     * generated, unless the video has not been updated within the same window.
     *
     * @throws AppwriteException
     */
    public function delete(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all the caption tracks attached to a video. You can use the
     * query params to filter your results.
     *
     * @throws AppwriteException
     */
    public function listCaptions(string $videoId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\VideoCaptionList
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/captions'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoCaptionList::from($response);
    }

    /**
     * Add a caption track to a video from a WebVTT or SubRip file in a storage
     * bucket. The file is normalised to WebVTT and segmented in the background.
     * Subscribe to `videos.[videoId].captions.[captionId].update` for `started`,
     * `ready`, and `error` status changes instead of only polling the caption
     * document.
     *
     * Uploaded tracks are listed alongside auto-extracted embedded tracks
     * (`embedded: true`). When the current default is an auto-extracted track for
     * the same language code, the upload takes the default flag so players pick
     * the authored file first. Auto-extracted tracks are never removed
     * automatically — delete a track explicitly to remove it. Extraction runs
     * once per video, so a deleted extracted track is not re-created.
     *
     * @throws AppwriteException
     */
    public function createCaption(string $videoId, string $bucketId, string $fileId, string $name, string $language, ?bool $xdefault = null): \Appwrite\Models\VideoCaption
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/captions'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['name'] = $name;
        $apiParams['language'] = $language;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoCaption::from($response);
    }

    /**
     * Update a caption track by its unique ID. Pass only `name`, `language`,
     * and/or `default` to retag an extracted track (for example `und` → `heb`
     * for Hebrew) without replacing the file. Changing `bucketId`/`fileId`
     * re-packages the track in the background.
     *
     * @throws AppwriteException
     */
    public function updateCaption(string $videoId, string $captionId, ?string $bucketId = null, ?string $fileId = null, ?string $name = null, ?string $language = null, ?bool $xdefault = null): \Appwrite\Models\VideoCaption
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($captionId === '') {
            throw new AppwriteException('Missing required parameter: "captionId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{captionId}'],
            [self::encodePath($videoId), self::encodePath($captionId)],
            '/videos/{videoId}/captions/{captionId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['captionId'] = $captionId;

        if (!is_null($bucketId)) {
            $apiParams['bucketId'] = $bucketId;
        }

        if (!is_null($fileId)) {
            $apiParams['fileId'] = $fileId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($language)) {
            $apiParams['language'] = $language;
        }
        $apiParams['default'] = $xdefault;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoCaption::from($response);
    }

    /**
     * Delete a caption track by its unique ID, along with its packaged segments.
     *
     * @throws AppwriteException
     */
    public function deleteCaption(string $videoId, string $captionId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($captionId === '') {
            throw new AppwriteException('Missing required parameter: "captionId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{captionId}'],
            [self::encodePath($videoId), self::encodePath($captionId)],
            '/videos/{videoId}/captions/{captionId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['captionId'] = $captionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the top-level streaming manifest for a video output: an HLS master
     * playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a
     * player to begin adaptive playback.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read. A video with `read("any")` or
     * `read("guests")` is playable without a session.
     *
     * For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`.
     * Both masters point at the same fMP4 segment set.
     *
     * @throws AppwriteException
     */
    public function getCmafHlsManifest(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/outputs/cmaf/master.m3u8'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the top-level streaming manifest for a video output: an HLS master
     * playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a
     * player to begin adaptive playback.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read. A video with `read("any")` or
     * `read("guests")` is playable without a session.
     *
     * For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`.
     * Both masters point at the same fMP4 segment set.
     *
     * @throws AppwriteException
     */
    public function getCmafDashManifest(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/outputs/cmaf/master.mpd'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the top-level streaming manifest for a video output: an HLS master
     * playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a
     * player to begin adaptive playback.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read. A video with `read("any")` or
     * `read("guests")` is playable without a session.
     *
     * For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`.
     * Both masters point at the same fMP4 segment set.
     *
     * @throws AppwriteException
     */
    public function getDashManifest(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/outputs/dash/master.mpd'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the top-level streaming manifest for a video output: an HLS master
     * playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a
     * player to begin adaptive playback.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read. A video with `read("any")` or
     * `read("guests")` is playable without a session.
     *
     * For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`.
     * Both masters point at the same fMP4 segment set.
     *
     * @throws AppwriteException
     */
    public function getHlsManifest(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/outputs/hls/master.m3u8'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the playable caption resource for a video output: an HLS captions
     * playlist, or the WebVTT file itself for DASH.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read.
     *
     * @throws AppwriteException
     */
    public function getCaptionManifest(string $videoId, VideoOutput $output, string $captionId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($captionId === '') {
            throw new AppwriteException('Missing required parameter: "captionId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{output}', '{captionId}'],
            [self::encodePath($videoId), self::encodePath((string) $output), self::encodePath($captionId)],
            '/videos/{videoId}/outputs/{output}/captions/{captionId}/manifest'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['output'] = $output;
        $apiParams['captionId'] = $captionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all the renditions of a video. You can use the query params
     * to filter your results.
     *
     * @throws AppwriteException
     */
    public function listRenditions(string $videoId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\VideoRenditionList
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/renditions'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoRenditionList::from($response);
    }

    /**
     * Request a new rendition of a video, encoded against a video profile and
     * packaged for HLS, DASH, or CMAF. The rendition is created immediately with
     * a `pending` status and transcoded in the background; poll it or subscribe
     * to realtime events to follow its progress. The worker downloads the source
     * file for this job, probes metadata and extracts embedded captions when
     * needed, then deletes the working copy when the job ends.
     *
     * The profile codec must be enabled on this instance. A disabled codec fails
     * with `video_codec_disabled`.
     *
     * Each video may have only one rendition per profile and output combination.
     * Creating a duplicate fails with `video_rendition_already_exists`. After an
     * encode fails or is aborted, delete the rendition and create it again. The
     * same profile may still be encoded for different outputs (for example HLS
     * and DASH).
     *
     * A video accepts 10 rendition creates per hour. The next create returns
     * `general_rate_limit_exceeded`.
     *
     * CMAF packs shared fMP4 segments once and exposes both HLS
     * (`/outputs/cmaf/master.m3u8`) and DASH (`/outputs/cmaf/master.mpd`) masters
     * for the same encode.
     *
     * Renditions can only be created from the Console or a server SDK with an API
     * key that has the `videos.write` scope. Each encode spends the project's
     * compute, so client sessions receive `user_unauthorized`.
     *
     * @throws AppwriteException
     */
    public function createRendition(string $videoId, string $profileId, VideoOutput $output): \Appwrite\Models\VideoRendition
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/renditions'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['profileId'] = $profileId;
        $apiParams['output'] = $output;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoRendition::from($response);
    }

    /**
     * Get a rendition by its unique ID, including its current transcoding status
     * and progress.
     *
     * @throws AppwriteException
     */
    public function getRendition(string $videoId, string $renditionId): \Appwrite\Models\VideoRendition
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($renditionId === '') {
            throw new AppwriteException('Missing required parameter: "renditionId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{renditionId}'],
            [self::encodePath($videoId), self::encodePath($renditionId)],
            '/videos/{videoId}/renditions/{renditionId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['renditionId'] = $renditionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VideoRendition::from($response);
    }

    /**
     * Delete a rendition by its unique ID, along with its packaged segments and
     * transcoded output. Fails with `video_rendition_in_progress` while the
     * rendition is started or ended, unless it has not been updated within the
     * rendition retention window.
     *
     * @throws AppwriteException
     */
    public function deleteRendition(string $videoId, string $renditionId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($renditionId === '') {
            throw new AppwriteException('Missing required parameter: "renditionId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{renditionId}'],
            [self::encodePath($videoId), self::encodePath($renditionId)],
            '/videos/{videoId}/renditions/{renditionId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['renditionId'] = $renditionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a single thumbnail sheet from a video's timeline as an image. You can
     * resize the returned image and choose its output format.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read.
     *
     * @throws AppwriteException
     */
    public function getThumbnail(string $videoId, string $thumbnailId, ?int $width = null, ?int $height = null, ?ImageFormat $output = null): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        if ($thumbnailId === '') {
            throw new AppwriteException('Missing required parameter: "thumbnailId"');
        }

        $apiPath = str_replace(
            ['{videoId}', '{thumbnailId}'],
            [self::encodePath($videoId), self::encodePath($thumbnailId)],
            '/videos/{videoId}/thumbnails/{thumbnailId}'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;
        $apiParams['thumbnailId'] = $thumbnailId;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($output)) {
            $apiParams['output'] = $output;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'image/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the WebVTT thumbnail timeline for a video, used to render scrubbing
     * thumbnails in a player. Timeline generation is queued when the video is
     * created. Subscribe to `videos.[videoId].timelines.update` for probe and
     * terminal updates, or poll this endpoint until it returns a WebVTT document.
     * Audio-only sources produce no timeline and this endpoint returns
     * `video_timelines_not_found`.
     *
     * Guests can request this URL when they hold `videos.play` (or `videos.read`)
     * **and** the video document grants them read. A video with `read("any")` or
     * `read("guests")` is playable without a session.
     *
     * @throws AppwriteException
     */
    public function getTimeline(string $videoId): string
    {
        if ($videoId === '') {
            throw new AppwriteException('Missing required parameter: "videoId"');
        }

        $apiPath = str_replace(
            ['{videoId}'],
            [self::encodePath($videoId)],
            '/videos/{videoId}/timeline'
        );

        $apiParams = [];
        $apiParams['videoId'] = $videoId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
