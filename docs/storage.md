# Storage Service

## List buckets

```http request
GET https://HOSTNAME/v1/storage/buckets
```

** Get a list of all the storage buckets. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Results limit value. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Results offset. The default value is 0. Use this param to manage pagination. | 0 |
| cursor | string | ID of the bucket used as the starting point for the query, excluding the bucket itself. Should be used for efficient pagination when working with large sets of data. |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create bucket

```http request
POST https://HOSTNAME/v1/storage/buckets
```

** Create a new storage bucket. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | Unique Id. Choose your own unique ID or pass the string `unique()` to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| name | string | Bucket name |  |
| permission | string | Permissions type model to use for reading files in this bucket. You can use bucket-level permission set once on the bucket using the `read` and `write` params, or you can set file-level permission where each file read and write params will decide who has access to read and write to each file individually. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| read | array | An array of strings with read permissions. By default no user is granted with any read permissions. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default no user is granted with any write permissions. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| enabled | boolean | Is bucket enabled? | 1 |
| maximumFileSize | integer | Maximum file size allowed in bytes. Maximum allowed value is 30MB. For self-hosted setups you can change the max limit by changing the `_APP_STORAGE_LIMIT` environment variable. [Learn more about storage environment variables](docs/environment-variables#storage) | 30000000 |
| allowedFileExtensions | array | Allowed file extensions | [] |
| encryption | boolean | Is encryption enabled? For file size above 20MB encryption is skipped even if it&#039;s enabled | 1 |
| antivirus | boolean | Is virus scanning enabled? For file size above 20MB AntiVirus scanning is skipped even if it&#039;s enabled | 1 |

## Get Bucket

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Get a storage bucket by its unique ID. This endpoint response returns a JSON object with the storage bucket metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |

## Update Bucket

```http request
PUT https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Update a storage bucket by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |
| name | string | Bucket name |  |
| permission | string | Permissions type model to use for reading files in this bucket. You can use bucket-level permission set once on the bucket using the `read` and `write` params, or you can set file-level permission where each file read and write params will decide who has access to read and write to each file individually. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| read | array | An array of strings with read permissions. By default inherits the existing read permissions. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default inherits the existing write permissions. [learn more about permissions](/docs/permissions) and get a full list of available permissions. |  |
| enabled | boolean | Is bucket enabled? | 1 |
| maximumFileSize | integer | Maximum file size allowed in bytes. Maximum allowed value is 30MB. For self hosted version you can change the limit by changing _APP_STORAGE_LIMIT environment variable. [Learn more about storage environment variables](docs/environment-variables#storage) |  |
| allowedFileExtensions | array | Allowed file extensions | [] |
| encryption | boolean | Is encryption enabled? For file size above 20MB encryption is skipped even if it&#039;s enabled | 1 |
| antivirus | boolean | Is virus scanning enabled? For file size above 20MB AntiVirus scanning is skipped even if it&#039;s enabled | 1 |

## Delete Bucket

```http request
DELETE https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Delete a storage bucket by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |

## List Files

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files
```

** Get a list of all the user files. You can use the query params to filter your results. On admin mode, this endpoint will return a list of all of the project&#039;s files. [Learn more about different API modes](/docs/admin). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of files to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the file used as the starting point for the query, excluding the file itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create File

```http request
POST https://HOSTNAME/v1/storage/buckets/{bucketId}/files
```

** Create a new file. Before using this route, you should create a new bucket resource using either a [server integration](/docs/server/database#storageCreateBucket) API or directly from your Appwrite console.

Larger files should be uploaded using multiple requests with the [content-range](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Range) header to send a partial request with a maximum supported chunk of `5MB`. The `content-range` header values should always be in bytes.

When the first request is sent, the server will return the **File** object, and the subsequent part request must include the file&#039;s **id** in `x-appwrite-id` header to allow the server to know that the partial upload is for the existing file and not for a new one.

If you&#039;re creating a new file using one of the Appwrite SDKs, all the chunking logic will be managed by the SDK internally.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | File ID. Choose your own unique ID or pass the string &quot;unique()&quot; to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| file | file | Binary file. |  |
| read | array | An array of strings with read permissions. By default only the current user is granted with read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default only the current user is granted with write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |

## Get File

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Get a file by its unique ID. This endpoint response returns a JSON object with the file metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Update File

```http request
PUT https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Update a file by its unique ID. Only users with write permissions have access to update this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File unique ID. |  |
| read | array | An array of strings with read permissions. By default no user is granted with any read permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |
| write | array | An array of strings with write permissions. By default no user is granted with any write permissions. [learn more about permissions](https://appwrite.io/docs/permissions) and get a full list of available permissions. |  |

## Delete File

```http request
DELETE https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Delete a file by its unique ID. Only users with write permissions have access to delete this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Get File for Download

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/download
```

** Get a file content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Get File Preview

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/preview
```

** Get a file preview image. Currently, this method supports preview for image files (jpg, png, and gif), other supported formats, like pdf, docs, slides, and spreadsheets, will return the file icon image. You can also pass query string arguments for cutting and resizing your preview image. Preview is supported only for image files smaller than 10MB. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID |  |
| width | integer | Resize preview image width, Pass an integer between 0 to 4000. | 0 |
| height | integer | Resize preview image height, Pass an integer between 0 to 4000. | 0 |
| gravity | string | Image crop gravity. Can be one of center,top-left,top,top-right,left,right,bottom-left,bottom,bottom-right | center |
| quality | integer | Preview image quality. Pass an integer between 0 to 100. Defaults to 100. | 100 |
| borderWidth | integer | Preview image border in pixels. Pass an integer between 0 to 100. Defaults to 0. | 0 |
| borderColor | string | Preview image border color. Use a valid HEX color, no # is needed for prefix. |  |
| borderRadius | integer | Preview image border radius in pixels. Pass an integer between 0 to 4000. | 0 |
| opacity | number | Preview image opacity. Only works with images having an alpha channel (like png). Pass a number between 0 to 1. | 1 |
| rotation | integer | Preview image rotation in degrees. Pass an integer between -360 and 360. | 0 |
| background | string | Preview image background color. Only works with transparent images (png). Use a valid HEX color, no # is needed for prefix. |  |
| output | string | Output format type (jpeg, jpg, png, gif and webp). |  |

## Get File for View

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/view
```

** Get a file content by its unique ID. This endpoint is similar to the download method but returns with no  &#039;Content-Disposition: attachment&#039; header. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

