# Storage Service

## List buckets

```http request
GET https://HOSTNAME/v1/storage/buckets
```

** Get a list of all the storage buckets. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: enabled, name, fileSecurity, maximumFileSize, encryption, antivirus | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create bucket

```http request
POST https://HOSTNAME/v1/storage/buckets
```

** Create a new storage bucket. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Bucket name |  |
| permissions | array | An array of permission strings. By default, no user is granted with any permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| fileSecurity | boolean | Enables configuring permissions for individual file. A user needs one of file or bucket level permissions to access a file. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is bucket enabled? When set to 'disabled', users cannot access the files in this bucket but Server SDKs with and API key can still access the bucket. No files are lost when this is toggled. | 1 |
| maximumFileSize | integer | Maximum file size allowed in bytes. Maximum allowed value is 30MB. | 30000000 |
| allowedFileExtensions | array | Allowed file extensions. Maximum of 100 extensions are allowed, each 64 characters long. | [] |
| compression | string | Compression algorithm choosen for compression. Can be one of none,  [gzip](https://en.wikipedia.org/wiki/Gzip), or [zstd](https://en.wikipedia.org/wiki/Zstd), For file size above 20MB compression is skipped even if it's enabled | none |
| encryption | boolean | Is encryption enabled? For file size above 20MB encryption is skipped even if it's enabled | 1 |
| antivirus | boolean | Is virus scanning enabled? For file size above 20MB AntiVirus scanning is skipped even if it's enabled | 1 |

## Get bucket

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Get a storage bucket by its unique ID. This endpoint response returns a JSON object with the storage bucket metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |

## Update bucket

```http request
PUT https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Update a storage bucket by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |
| name | string | Bucket name |  |
| permissions | array | An array of permission strings. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| fileSecurity | boolean | Enables configuring permissions for individual file. A user needs one of file or bucket level permissions to access a file. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| enabled | boolean | Is bucket enabled? When set to 'disabled', users cannot access the files in this bucket but Server SDKs with and API key can still access the bucket. No files are lost when this is toggled. | 1 |
| maximumFileSize | integer | Maximum file size allowed in bytes. Maximum allowed value is 30MB. |  |
| allowedFileExtensions | array | Allowed file extensions. Maximum of 100 extensions are allowed, each 64 characters long. | [] |
| compression | string | Compression algorithm choosen for compression. Can be one of none, [gzip](https://en.wikipedia.org/wiki/Gzip), or [zstd](https://en.wikipedia.org/wiki/Zstd), For file size above 20MB compression is skipped even if it's enabled | none |
| encryption | boolean | Is encryption enabled? For file size above 20MB encryption is skipped even if it's enabled | 1 |
| antivirus | boolean | Is virus scanning enabled? For file size above 20MB AntiVirus scanning is skipped even if it's enabled | 1 |

## Delete bucket

```http request
DELETE https://HOSTNAME/v1/storage/buckets/{bucketId}
```

** Delete a storage bucket by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Bucket unique ID. |  |

## List files

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files
```

** Get a list of all the user files. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, signature, mimeType, sizeOriginal, chunksTotal, chunksUploaded | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create file

```http request
POST https://HOSTNAME/v1/storage/buckets/{bucketId}/files
```

** Create a new file. Before using this route, you should create a new bucket resource using either a [server integration](https://appwrite.io/docs/server/storage#storageCreateBucket) API or directly from your Appwrite console.

Larger files should be uploaded using multiple requests with the [content-range](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Range) header to send a partial request with a maximum supported chunk of `5MB`. The `content-range` header values should always be in bytes.

When the first request is sent, the server will return the **File** object, and the subsequent part request must include the file&#039;s **id** in `x-appwrite-id` header to allow the server to know that the partial upload is for the existing file and not for a new one.

If you&#039;re creating a new file using one of the Appwrite SDKs, all the chunking logic will be managed by the SDK internally.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | File ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| file | file | Binary file. Appwrite SDKs provide helpers to handle file input. [Learn about file input](https://appwrite.io/docs/storage#file-input). |  |
| permissions | array | An array of permission strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |

## Get file

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Get a file by its unique ID. This endpoint response returns a JSON object with the file metadata. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Update file

```http request
PUT https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Update a file by its unique ID. Only users with write permissions have access to update this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File unique ID. |  |
| name | string | Name of the file |  |
| permissions | array | An array of permission string. By default, the current permissions are inherited. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |

## Delete File

```http request
DELETE https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}
```

** Delete a file by its unique ID. Only users with write permissions have access to delete this resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Get file for download

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/download
```

** Get a file content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

## Get file preview

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/preview
```

** Get a file preview image. Currently, this method supports preview for image files (jpg, png, and gif), other supported formats, like pdf, docs, slides, and spreadsheets, will return the file icon image. You can also pass query string arguments for cutting and resizing your preview image. Preview is supported only for image files smaller than 10MB. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
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

## Get file for view

```http request
GET https://HOSTNAME/v1/storage/buckets/{bucketId}/files/{fileId}/view
```

** Get a file content by its unique ID. This endpoint is similar to the download method but returns with no  &#039;Content-Disposition: attachment&#039; header. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bucketId | string | **Required** Storage bucket unique ID. You can create a new storage bucket using the Storage service [server integration](https://appwrite.io/docs/server/storage#createBucket). |  |
| fileId | string | **Required** File ID. |  |

