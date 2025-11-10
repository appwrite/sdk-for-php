# Avatars Service


```http request
GET https://cloud.appwrite.io/v1/avatars/browsers/{code}
```

** You can use this endpoint to show different browser icons to your users. The code argument receives the browser code as it appears in your user [GET /account/sessions](https://appwrite.io/docs/references/cloud/client-web/account#getSessions) endpoint. Use width, height and quality arguments to change the output settings.

When one dimension is specified and the other is 0, the image is scaled with preserved aspect ratio. If both dimensions are 0, the API provides an image at source quality. If dimensions are not specified, the default size of image returned is 100x100px. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | **Required** Browser Code. |  |
| width | integer | Image width. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| height | integer | Image height. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| quality | integer | Image quality. Pass an integer between 0 to 100. Defaults to keep existing image quality. | -1 |


```http request
GET https://cloud.appwrite.io/v1/avatars/credit-cards/{code}
```

** The credit card endpoint will return you the icon of the credit card provider you need. Use width, height and quality arguments to change the output settings.

When one dimension is specified and the other is 0, the image is scaled with preserved aspect ratio. If both dimensions are 0, the API provides an image at source quality. If dimensions are not specified, the default size of image returned is 100x100px.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | **Required** Credit Card Code. Possible values: amex, argencard, cabal, cencosud, diners, discover, elo, hipercard, jcb, mastercard, naranja, targeta-shopping, unionpay, visa, mir, maestro, rupay. |  |
| width | integer | Image width. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| height | integer | Image height. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| quality | integer | Image quality. Pass an integer between 0 to 100. Defaults to keep existing image quality. | -1 |


```http request
GET https://cloud.appwrite.io/v1/avatars/favicon
```

** Use this endpoint to fetch the favorite icon (AKA favicon) of any remote website URL.

This endpoint does not follow HTTP redirects. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | **Required** Website URL which you want to fetch the favicon from. |  |


```http request
GET https://cloud.appwrite.io/v1/avatars/flags/{code}
```

** You can use this endpoint to show different country flags icons to your users. The code argument receives the 2 letter country code. Use width, height and quality arguments to change the output settings. Country codes follow the [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1) standard.

When one dimension is specified and the other is 0, the image is scaled with preserved aspect ratio. If both dimensions are 0, the API provides an image at source quality. If dimensions are not specified, the default size of image returned is 100x100px.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | **Required** Country Code. ISO Alpha-2 country code format. |  |
| width | integer | Image width. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| height | integer | Image height. Pass an integer between 0 to 2000. Defaults to 100. | 100 |
| quality | integer | Image quality. Pass an integer between 0 to 100. Defaults to keep existing image quality. | -1 |


```http request
GET https://cloud.appwrite.io/v1/avatars/image
```

** Use this endpoint to fetch a remote image URL and crop it to any image size you want. This endpoint is very useful if you need to crop and display remote images in your app or in case you want to make sure a 3rd party image is properly served using a TLS protocol.

When one dimension is specified and the other is 0, the image is scaled with preserved aspect ratio. If both dimensions are 0, the API provides an image at source quality. If dimensions are not specified, the default size of image returned is 400x400px.

This endpoint does not follow HTTP redirects. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | **Required** Image URL which you want to crop. |  |
| width | integer | Resize preview image width, Pass an integer between 0 to 2000. Defaults to 400. | 400 |
| height | integer | Resize preview image height, Pass an integer between 0 to 2000. Defaults to 400. | 400 |


```http request
GET https://cloud.appwrite.io/v1/avatars/initials
```

** Use this endpoint to show your user initials avatar icon on your website or app. By default, this route will try to print your logged-in user name or email initials. You can also overwrite the user name if you pass the &#039;name&#039; parameter. If no name is given and no user is logged, an empty avatar will be returned.

You can use the color and background params to change the avatar colors. By default, a random theme will be selected. The random theme will persist for the user&#039;s initials when reloading the same theme will always return for the same initials.

When one dimension is specified and the other is 0, the image is scaled with preserved aspect ratio. If both dimensions are 0, the API provides an image at source quality. If dimensions are not specified, the default size of image returned is 100x100px.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Full Name. When empty, current user name or email will be used. Max length: 128 chars. |  |
| width | integer | Image width. Pass an integer between 0 to 2000. Defaults to 100. | 500 |
| height | integer | Image height. Pass an integer between 0 to 2000. Defaults to 100. | 500 |
| background | string | Changes background color. By default a random color will be picked and stay will persistent to the given name. |  |


```http request
GET https://cloud.appwrite.io/v1/avatars/qr
```

** Converts a given plain text to a QR code image. You can use the query parameters to change the size and style of the resulting image.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| text | string | **Required** Plain text to be converted to QR code image. |  |
| size | integer | QR code size. Pass an integer between 1 to 1000. Defaults to 400. | 400 |
| margin | integer | Margin from edge. Pass an integer between 0 to 10. Defaults to 1. | 1 |
| download | boolean | Return resulting image with 'Content-Disposition: attachment ' headers for the browser to start downloading it. Pass 0 for no header, or 1 for otherwise. Default value is set to 0. |  |


```http request
GET https://cloud.appwrite.io/v1/avatars/screenshots
```

** Use this endpoint to capture a screenshot of any website URL. This endpoint uses a headless browser to render the webpage and capture it as an image.

You can configure the browser viewport size, theme, user agent, geolocation, permissions, and more. Capture either just the viewport or the full page scroll.

When width and height are specified, the image is resized accordingly. If both dimensions are 0, the API provides an image at original size. If dimensions are not specified, the default viewport size is 1280x720px. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | **Required** Website URL which you want to capture. |  |
| headers | object | HTTP headers to send with the browser request. Defaults to empty. | {} |
| viewportWidth | integer | Browser viewport width. Pass an integer between 1 to 1920. Defaults to 1280. | 1280 |
| viewportHeight | integer | Browser viewport height. Pass an integer between 1 to 1080. Defaults to 720. | 720 |
| scale | number | Browser scale factor. Pass a number between 0.1 to 3. Defaults to 1. | 1 |
| theme | string | Browser theme. Pass "light" or "dark". Defaults to "light". | light |
| userAgent | string | Custom user agent string. Defaults to browser default. |  |
| fullpage | boolean | Capture full page scroll. Pass 0 for viewport only, or 1 for full page. Defaults to 0. |  |
| locale | string | Browser locale (e.g., "en-US", "fr-FR"). Defaults to browser default. |  |
| timezone | string | IANA timezone identifier (e.g., "America/New_York", "Europe/London"). Defaults to browser default. |  |
| latitude | number | Geolocation latitude. Pass a number between -90 to 90. Defaults to 0. | 0 |
| longitude | number | Geolocation longitude. Pass a number between -180 to 180. Defaults to 0. | 0 |
| accuracy | number | Geolocation accuracy in meters. Pass a number between 0 to 100000. Defaults to 0. | 0 |
| touch | boolean | Enable touch support. Pass 0 for no touch, or 1 for touch enabled. Defaults to 0. |  |
| permissions | array | Browser permissions to grant. Pass an array of permission names like ["geolocation", "camera", "microphone"]. Defaults to empty. | [] |
| sleep | integer | Wait time in seconds before taking the screenshot. Pass an integer between 0 to 10. Defaults to 0. | 0 |
| width | integer | Output image width. Pass 0 to use original width, or an integer between 1 to 2000. Defaults to 0 (original width). | 0 |
| height | integer | Output image height. Pass 0 to use original height, or an integer between 1 to 2000. Defaults to 0 (original height). | 0 |
| quality | integer | Screenshot quality. Pass an integer between 0 to 100. Defaults to keep existing image quality. | -1 |
| output | string | Output format type (jpeg, jpg, png, gif and webp). |  |

