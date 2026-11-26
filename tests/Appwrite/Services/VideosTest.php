<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\VideoOutput;
use Appwrite\Enums\ImageFormat;

final class VideosTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Videos $videos;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->videos = new Videos($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "videos" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "bucketId" => "5e5ea5c16897e",
                    "fileId" => "d5fg5ehg1c168g7c",
                    "name" => "Product demo",
                    "size" => 23647142,
                    "format" => "MPEG-4",
                    "duration" => 92810,
                    "width" => 960,
                    "height" => 544,
                    "aspectRatio" => "16:9",
                    "videoCodec" => "h264",
                    "videoFormat" => "AVC",
                    "videoFormatProfile" => "Baseline@L3.1",
                    "videoBitRate" => 564790,
                    "videoFrameRate" => 29.97,
                    "videoFrameRateMode" => "CFR",
                    "audioCodec" => "aac",
                    "audioFormat" => "AAC",
                    "audioBitRate" => 127999,
                    "audioSampleRate" => 48000,
                    "timelineStatus" => "pending",
                    "timelineError" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "bucketId" => "5e5ea5c16897e",
            "fileId" => "d5fg5ehg1c168g7c",
            "name" => "Product demo",
            "size" => 23647142,
            "format" => "MPEG-4",
            "duration" => 92810,
            "width" => 960,
            "height" => 544,
            "aspectRatio" => "16:9",
            "videoCodec" => "h264",
            "videoFormat" => "AVC",
            "videoFormatProfile" => "Baseline@L3.1",
            "videoBitRate" => 564790,
            "videoFrameRate" => 29.97,
            "videoFrameRateMode" => "CFR",
            "audioCodec" => "aac",
            "audioFormat" => "AAC",
            "audioBitRate" => 127999,
            "audioSampleRate" => 48000,
            "timelineStatus" => "pending",
            "timelineError" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/videos',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'bucketId', 'fileId', 'name', 'permissions'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->create(
            "<VIDEO_ID>",
            "<BUCKET_ID>",
            "<FILE_ID>",
            name: "<NAME>",
            permissions: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Video::class, $response);
    }
    public function testMethodListCodecs(): void
    {
        $data = [
            "total" => 5,
            "codecs" => [
                [
                    "\$id" => "h264",
                    "name" => "H.264",
                    "outputs" => ["hls"]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos/codecs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->listCodecs();

        $this->assertInstanceOf(\Appwrite\Models\VideoCodecList::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "bucketId" => "5e5ea5c16897e",
            "fileId" => "d5fg5ehg1c168g7c",
            "name" => "Product demo",
            "size" => 23647142,
            "format" => "MPEG-4",
            "duration" => 92810,
            "width" => 960,
            "height" => 544,
            "aspectRatio" => "16:9",
            "videoCodec" => "h264",
            "videoFormat" => "AVC",
            "videoFormatProfile" => "Baseline@L3.1",
            "videoBitRate" => 564790,
            "videoFrameRate" => 29.97,
            "videoFrameRateMode" => "CFR",
            "audioCodec" => "aac",
            "audioFormat" => "AAC",
            "audioBitRate" => 127999,
            "audioSampleRate" => 48000,
            "timelineStatus" => "pending",
            "timelineError" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->get(
            "<VIDEO_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Video::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "bucketId" => "5e5ea5c16897e",
            "fileId" => "d5fg5ehg1c168g7c",
            "name" => "Product demo",
            "size" => 23647142,
            "format" => "MPEG-4",
            "duration" => 92810,
            "width" => 960,
            "height" => 544,
            "aspectRatio" => "16:9",
            "videoCodec" => "h264",
            "videoFormat" => "AVC",
            "videoFormatProfile" => "Baseline@L3.1",
            "videoBitRate" => 564790,
            "videoFrameRate" => 29.97,
            "videoFrameRateMode" => "CFR",
            "audioCodec" => "aac",
            "audioFormat" => "AAC",
            "audioBitRate" => 127999,
            "audioSampleRate" => 48000,
            "timelineStatus" => "pending",
            "timelineError" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/videos/%3CVIDEO_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'name', 'permissions'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->update(
            "<VIDEO_ID>",
            name: "<NAME>",
            permissions: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Video::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/videos/%3CVIDEO_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->delete(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListCaptions(): void
    {
        $data = [
            "total" => 5,
            "captions" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "videoId" => "5e5ea5c16897e",
                    "bucketId" => "d5fg5ehg1c168g7c",
                    "fileId" => "c5fg5emg1c168grr",
                    "name" => "English",
                    "language" => "eng",
                    "default" => true,
                    "embedded" => true,
                    "targetDuration" => 93,
                    "status" => "pending",
                    "error" => "Caption is not a proper .srt file (Invalid timestamp delimiter at line 2)",
                    "size" => 4096
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/captions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->listCaptions(
            "<VIDEO_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoCaptionList::class, $response);
    }
    public function testMethodCreateCaption(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "videoId" => "5e5ea5c16897e",
            "bucketId" => "d5fg5ehg1c168g7c",
            "fileId" => "c5fg5emg1c168grr",
            "name" => "English",
            "language" => "eng",
            "default" => true,
            "embedded" => true,
            "targetDuration" => 93,
            "status" => "pending",
            "error" => "Caption is not a proper .srt file (Invalid timestamp delimiter at line 2)",
            "size" => 4096
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/videos/%3CVIDEO_ID%3E/captions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'bucketId', 'fileId', 'name', 'language', 'default'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'name' => "<NAME>",
                        'language' => "aar",
                        'default' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->createCaption(
            "<VIDEO_ID>",
            "<BUCKET_ID>",
            "<FILE_ID>",
            "<NAME>",
            "aar",
            xdefault: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoCaption::class, $response);
    }
    public function testMethodUpdateCaption(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "videoId" => "5e5ea5c16897e",
            "bucketId" => "d5fg5ehg1c168g7c",
            "fileId" => "c5fg5emg1c168grr",
            "name" => "English",
            "language" => "eng",
            "default" => true,
            "embedded" => true,
            "targetDuration" => 93,
            "status" => "pending",
            "error" => "Caption is not a proper .srt file (Invalid timestamp delimiter at line 2)",
            "size" => 4096
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/videos/%3CVIDEO_ID%3E/captions/%3CCAPTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'captionId', 'bucketId', 'fileId', 'name', 'language', 'default'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'captionId' => "<CAPTION_ID>",
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'name' => "<NAME>",
                        'language' => "aar",
                        'default' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->updateCaption(
            "<VIDEO_ID>",
            "<CAPTION_ID>",
            bucketId: "<BUCKET_ID>",
            fileId: "<FILE_ID>",
            name: "<NAME>",
            language: "aar",
            xdefault: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoCaption::class, $response);
    }
    public function testMethodDeleteCaption(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/videos/%3CVIDEO_ID%3E/captions/%3CCAPTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'captionId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'captionId' => "<CAPTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->deleteCaption(
            "<VIDEO_ID>",
            "<CAPTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetCmafHlsManifest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/outputs/cmaf/master.m3u8',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getCmafHlsManifest(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetCmafDashManifest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/outputs/cmaf/master.mpd',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getCmafDashManifest(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetDashManifest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/outputs/dash/master.mpd',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getDashManifest(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetHlsManifest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/outputs/hls/master.m3u8',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getHlsManifest(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetCaptionManifest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/outputs/hls/captions/%3CCAPTION_ID%3E/manifest',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'output', 'captionId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'output' => VideoOutput::HLS(),
                        'captionId' => "<CAPTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getCaptionManifest(
            "<VIDEO_ID>",
            VideoOutput::HLS(),
            "<CAPTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListRenditions(): void
    {
        $data = [
            "total" => 5,
            "renditions" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "videoId" => "5e5ea5c16897e",
                    "profileId" => "d5fg5ehg1c168g7c",
                    "name" => "1280X720@3679",
                    "startedAt" => "2020-10-15T06:38:00.000+00:00",
                    "endedAt" => "2020-10-15T06:38:00.000+00:00",
                    "width" => 1280,
                    "height" => 720,
                    "videoBitRate" => 3551000,
                    "audioBitRate" => 128000,
                    "targetDuration" => 6.006,
                    "status" => "pending",
                    "error" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)",
                    "progress" => 88,
                    "output" => "hls",
                    "codec" => "h264",
                    "size" => 18350080
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/renditions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->listRenditions(
            "<VIDEO_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoRenditionList::class, $response);
    }
    public function testMethodCreateRendition(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "videoId" => "5e5ea5c16897e",
            "profileId" => "d5fg5ehg1c168g7c",
            "name" => "1280X720@3679",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "endedAt" => "2020-10-15T06:38:00.000+00:00",
            "width" => 1280,
            "height" => 720,
            "videoBitRate" => 3551000,
            "audioBitRate" => 128000,
            "targetDuration" => 6.006,
            "status" => "pending",
            "error" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)",
            "progress" => 88,
            "output" => "hls",
            "codec" => "h264",
            "size" => 18350080
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/videos/%3CVIDEO_ID%3E/renditions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'profileId', 'output'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'profileId' => "<PROFILE_ID>",
                        'output' => VideoOutput::HLS(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->createRendition(
            "<VIDEO_ID>",
            "<PROFILE_ID>",
            VideoOutput::HLS()
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoRendition::class, $response);
    }
    public function testMethodGetRendition(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "videoId" => "5e5ea5c16897e",
            "profileId" => "d5fg5ehg1c168g7c",
            "name" => "1280X720@3679",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "endedAt" => "2020-10-15T06:38:00.000+00:00",
            "width" => 1280,
            "height" => 720,
            "videoBitRate" => 3551000,
            "audioBitRate" => 128000,
            "targetDuration" => 6.006,
            "status" => "pending",
            "error" => "The requested file is not a valid video or audio file (ffprobe: Invalid data found when processing input)",
            "progress" => 88,
            "output" => "hls",
            "codec" => "h264",
            "size" => 18350080
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/renditions/%3CRENDITION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'renditionId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'renditionId' => "<RENDITION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getRendition(
            "<VIDEO_ID>",
            "<RENDITION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\VideoRendition::class, $response);
    }
    public function testMethodDeleteRendition(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/videos/%3CVIDEO_ID%3E/renditions/%3CRENDITION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'renditionId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'renditionId' => "<RENDITION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->deleteRendition(
            "<VIDEO_ID>",
            "<RENDITION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetThumbnail(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/thumbnails/%3CTHUMBNAIL_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId', 'thumbnailId', 'width', 'height', 'output'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                        'thumbnailId' => "<THUMBNAIL_ID>",
                        'width' => 1,
                        'height' => 1,
                        'output' => ImageFormat::JPG(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getThumbnail(
            "<VIDEO_ID>",
            "<THUMBNAIL_ID>",
            width: 1,
            height: 1,
            output: ImageFormat::JPG()
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetTimeline(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/videos/%3CVIDEO_ID%3E/timeline',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['videoId'], array_keys($params));
                    $expected = [
                        'videoId' => "<VIDEO_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->videos->getTimeline(
            "<VIDEO_ID>"
        );

        $this->assertSame($data, $response);
    }
}
