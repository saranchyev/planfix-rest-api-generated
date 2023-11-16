# OpenAPI\Client\CommentsApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommentId()**](CommentsApi.md#deleteCommentId) | **DELETE** /comment/{id} | Delete comment |
| [**getCommentId()**](CommentsApi.md#getCommentId) | **GET** /comment/{id} | Get comment by number |


## `deleteCommentId()`

```php
deleteCommentId($id)
```

Delete comment

This method lets you delete a comment by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4251; // string | Number of comment

try {
    $apiInstance->deleteCommentId($id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of comment | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentId()`

```php
getCommentId($id, $fields, $source_id): \OpenAPI\Client\Model\GetCommentId200Response
```

Get comment by number

This method lets you get a comment by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4251; // string | Number of comment
$fields = description,dateTime,10; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, dateTime, type, fromType, description, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion
$source_id = 'source_id_example'; // string | Unique identifier of external application

try {
    $result = $apiInstance->getCommentId($id, $fields, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of comment | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, dateTime, type, fromType, description, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion | [optional] |
| **source_id** | **string**| Unique identifier of external application | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCommentId200Response**](../Model/GetCommentId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
