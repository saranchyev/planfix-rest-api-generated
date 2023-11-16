# OpenAPI\Client\FileApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFileId()**](FileApi.md#deleteFileId) | **DELETE** /file/{id} | Delete file |
| [**getFileId()**](FileApi.md#getFileId) | **GET** /file/{id} | Get file by identifier |
| [**getFileIdDownload()**](FileApi.md#getFileIdDownload) | **GET** /file/{id}/download | Download file |
| [**postFileUpload()**](FileApi.md#postFileUpload) | **POST** /file/ | Upload file |
| [**postFileUploadByUrl()**](FileApi.md#postFileUploadByUrl) | **POST** /file/from-url/ | Upload file by link |


## `deleteFileId()`

```php
deleteFileId($id)
```

Delete file

This method lets you delete a file by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier

try {
    $apiInstance->deleteFileId($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileId()`

```php
getFileId($id, $fields): \OpenAPI\Client\Model\GetFileId200Response
```

Get file by identifier

This method lets you get a file by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$fields = name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, size

try {
    $result = $apiInstance->getFileId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, size | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetFileId200Response**](../Model/GetFileId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileIdDownload()`

```php
getFileIdDownload($id)
```

Download file

This method lets you download file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier

try {
    $apiInstance->getFileIdDownload($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileIdDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFileUpload()`

```php
postFileUpload($file): \OpenAPI\Client\Model\PostFileUpload200Response
```

Upload file

This method lets you upload file to Planfix

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File for upload

try {
    $result = $apiInstance->postFileUpload($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File for upload | |

### Return type

[**\OpenAPI\Client\Model\PostFileUpload200Response**](../Model/PostFileUpload200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFileUploadByUrl()`

```php
postFileUploadByUrl($file_upload_request): \OpenAPI\Client\Model\PostFileUpload200Response
```

Upload file by link

This method lets you upload a file to Planfix using a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_upload_request = {"name":"My upload file","url":"https://cloud.my/69582925112467.jpg"}; // \OpenAPI\Client\Model\FileUploadRequest

try {
    $result = $apiInstance->postFileUploadByUrl($file_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUploadByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_upload_request** | [**\OpenAPI\Client\Model\FileUploadRequest**](../Model/FileUploadRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostFileUpload200Response**](../Model/PostFileUpload200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
