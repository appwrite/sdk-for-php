# Videos Service


```http request
GET https://cloud.appwrite.io/v1/videos
```

** Get a list of videos in the current project. Sessions receive only videos they can read according to each video's `$permissions`. API keys and admins receive the full project catalog. Playback uses the same document read ACL plus the `videos.play` (or `videos.read`) scope: a guest can stream a video that grants `read("any")` or `read("guests")` even though guests lack `videos.read` and will not see it in this list.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: bucketId, fileId, name, size, format, duration, width, height, videoCodec, videoBitRate, audioCodec, audioBitRate, search | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/videos
```

** Create a video resource from an existing file in a storage bucket. The source file must be a video or audio file, and the caller must be able to read that file. Creating a video stores the document and queues timeline generation. The worker downloads the source, probes metadata, extracts embedded captions once, and deletes its working copy when finished. Sources with a video track also get a thumbnail timeline. Call create-rendition to package a streaming output.

An optional `name` defaults to the source file name. An optional `permissions` array sets the video document ACL (list, get, update, delete, manage child resources, and playback). By default, only the current user is granted all permissions; API keys and admins create with empty permissions when omitted. Guests with `videos.play` can stream when the video grants them read (`read("any")` or `read("guests")`).

Uploaded caption files stay listed alongside auto-extracted tracks for the same language; when the current default is an auto-extracted track with that code, the upload takes the default flag.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | Video ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| bucketId | string | Storage bucket unique ID holding the source file. |  |
| fileId | string | Source file unique ID. |  |
| name | string | Video name. Defaults to the source file name. Max length: 2048 chars. |  |
| permissions | array | An array of permission strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
GET https://cloud.appwrite.io/v1/videos/codecs
```

** Get a list of video encode codecs enabled on this instance. Each codec includes the output formats it may be packaged into.
 **


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}
```

** Get a video by its unique ID. This endpoint response returns a JSON object with the video metadata.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/videos/{videoId}
```

** Update a video's name, permissions, or both. Only the fields you pass are changed: omit `name` to keep the current name and `permissions` to keep the current ACL. The caller must hold update permission on the video document. The source file cannot be replaced; delete the video and create a new one to point at a different file.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| name | string | Video name. Max length: 2048 chars. |  |
| permissions | array | An array of permission strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |


```http request
DELETE https://cloud.appwrite.io/v1/videos/{videoId}
```

** Delete a video by its unique ID. This also removes every rendition, caption, preview and transcoded artifact derived from it. Fails with `video_rendition_in_progress` while a rendition is started or ended, unless that rendition has not been updated within the rendition retention window. Fails with `video_timeline_in_progress` while the video's timeline is being generated, unless the video has not been updated within the same window.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/captions
```

** Get a list of all the caption tracks attached to a video. You can use the query params to filter your results.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, language, default, status, size, bucketId, fileId | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/videos/{videoId}/captions
```

** Add a caption track to a video from a WebVTT or SubRip file in a storage bucket. The file is normalised to WebVTT and segmented in the background. Subscribe to `videos.[videoId].captions.[captionId].update` for `started`, `ready`, and `error` status changes instead of only polling the caption document.

Uploaded tracks are listed alongside auto-extracted embedded tracks (`embedded: true`). When the current default is an auto-extracted track for the same language code, the upload takes the default flag so players pick the authored file first. Auto-extracted tracks are never removed automatically — delete a track explicitly to remove it. Extraction runs once per video, so a deleted extracted track is not re-created.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| bucketId | string | Storage bucket unique ID holding the caption file. |  |
| fileId | string | Caption file unique ID. |  |
| name | string | Caption display name. Allowed characters: a-z, A-Z, 0-9, space, and - . , ( ) _ ' |  |
| language | string | Caption ISO 639-2 three-letter language code. |  |
| default | boolean | Make this the default caption track for the video. |  |


```http request
PATCH https://cloud.appwrite.io/v1/videos/{videoId}/captions/{captionId}
```

** Update a caption track by its unique ID. Pass only `name`, `language`, and/or `default` to retag an extracted track (for example `und` → `heb` for Hebrew) without replacing the file. Changing `bucketId`/`fileId` re-packages the track in the background.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| captionId | string | **Required** Caption unique ID. |  |
| bucketId | string | Storage bucket unique ID holding the caption file. Omit together with fileId to only update name, language, or default. |  |
| fileId | string | Caption file unique ID. Omit together with bucketId to only update name, language, or default. |  |
| name | string | Caption display name. Allowed characters: a-z, A-Z, 0-9, space, and - . , ( ) _ ' |  |
| language | string | Caption ISO 639-2 three-letter language code (for example `heb` for Hebrew). |  |
| default | boolean | Make this the default caption track for the video. Omit to leave unchanged. |  |


```http request
DELETE https://cloud.appwrite.io/v1/videos/{videoId}/captions/{captionId}
```

** Delete a caption track by its unique ID, along with its packaged segments.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| captionId | string | **Required** Caption unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/outputs/cmaf/master.m3u8
```

** Get the top-level streaming manifest for a video output: an HLS master playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a player to begin adaptive playback.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read. A video with `read("any")` or `read("guests")` is playable without a session.

For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`. Both masters point at the same fMP4 segment set.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/outputs/cmaf/master.mpd
```

** Get the top-level streaming manifest for a video output: an HLS master playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a player to begin adaptive playback.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read. A video with `read("any")` or `read("guests")` is playable without a session.

For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`. Both masters point at the same fMP4 segment set.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/outputs/dash/master.mpd
```

** Get the top-level streaming manifest for a video output: an HLS master playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a player to begin adaptive playback.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read. A video with `read("any")` or `read("guests")` is playable without a session.

For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`. Both masters point at the same fMP4 segment set.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/outputs/hls/master.m3u8
```

** Get the top-level streaming manifest for a video output: an HLS master playlist (`master.m3u8`) or a DASH MPD (`master.mpd`). Hand this URL to a player to begin adaptive playback.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read. A video with `read("any")` or `read("guests")` is playable without a session.

For CMAF renditions, use `getCmafHlsManifest` or `getCmafDashManifest`. Both masters point at the same fMP4 segment set.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/outputs/{output}/captions/{captionId}/manifest
```

** Get the playable caption resource for a video output: an HLS captions playlist, or the WebVTT file itself for DASH.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| output | string | **Required** Streaming output format. |  |
| captionId | string | **Required** Caption unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/renditions
```

** Get a list of all the renditions of a video. You can use the query params to filter your results.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: profileId, name, status, output, codec, width, height, videoBitRate, audioBitRate, size, startedAt, endedAt | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/videos/{videoId}/renditions
```

** Request a new rendition of a video, encoded against a video profile and packaged for HLS, DASH, or CMAF. The rendition is created immediately with a `pending` status and transcoded in the background; poll it or subscribe to realtime events to follow its progress. The worker downloads the source file for this job, probes metadata and extracts embedded captions when needed, then deletes the working copy when the job ends.

The profile codec must be enabled on this instance. A disabled codec fails with `video_codec_disabled`.

Each video may have only one rendition per profile and output combination. Creating a duplicate fails with `video_rendition_already_exists`. After an encode fails or is aborted, delete the rendition and create it again. The same profile may still be encoded for different outputs (for example HLS and DASH).

A video accepts 10 rendition creates per hour. The next create returns `general_rate_limit_exceeded`.

CMAF packs shared fMP4 segments once and exposes both HLS (`/outputs/cmaf/master.m3u8`) and DASH (`/outputs/cmaf/master.mpd`) masters for the same encode.

Renditions can only be created from the Console or a server SDK with an API key that has the `videos.write` scope. Each encode spends the project's compute, so client sessions receive `user_unauthorized`.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| profileId | string | Video profile unique ID to encode against. |  |
| output | string | Streaming output format to package as. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/renditions/{renditionId}
```

** Get a rendition by its unique ID, including its current transcoding status and progress.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| renditionId | string | **Required** Rendition unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/videos/{videoId}/renditions/{renditionId}
```

** Delete a rendition by its unique ID, along with its packaged segments and transcoded output. Fails with `video_rendition_in_progress` while the rendition is started or ended, unless it has not been updated within the rendition retention window.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| renditionId | string | **Required** Rendition unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/thumbnails/{thumbnailId}
```

** Get a single thumbnail sheet from a video's timeline as an image. You can resize the returned image and choose its output format.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |
| thumbnailId | string | **Required** Thumbnail unique ID. |  |
| width | integer | Resize thumbnail image width, in pixels. | 0 |
| height | integer | Resize thumbnail image height, in pixels. | 0 |
| output | string | Output format type (jpeg, jpg, png, gif and webp). |  |


```http request
GET https://cloud.appwrite.io/v1/videos/{videoId}/timeline
```

** Get the WebVTT thumbnail timeline for a video, used to render scrubbing thumbnails in a player. Timeline generation is queued when the video is created. Subscribe to `videos.[videoId].timelines.update` for probe and terminal updates, or poll this endpoint until it returns a WebVTT document. Audio-only sources produce no timeline and this endpoint returns `video_timelines_not_found`.

Guests can request this URL when they hold `videos.play` (or `videos.read`) **and** the video document grants them read. A video with `read("any")` or `read("guests")` is playable without a session.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| videoId | string | **Required** Video unique ID. |  |

