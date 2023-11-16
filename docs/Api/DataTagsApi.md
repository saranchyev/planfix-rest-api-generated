# OpenAPI\Client\DataTagsApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDatatagEntryKey()**](DataTagsApi.md#deleteDatatagEntryKey) | **DELETE** /datatag/entry/{key} | Delete data tag entry |
| [**getDataTags()**](DataTagsApi.md#getDataTags) | **POST** /datatag/list | Get data tags |
| [**getDatatagEntryKey()**](DataTagsApi.md#getDatatagEntryKey) | **GET** /datatag/entry/{key} | Get data tag entry |
| [**getDatatagId()**](DataTagsApi.md#getDatatagId) | **GET** /datatag/{id} | Get data tag by identifier |
| [**postListDataTagEntrys()**](DataTagsApi.md#postListDataTagEntrys) | **POST** /datatag/{id}/entry/list | Get list of data tag entries |
| [**postUpdateDataTagEntry()**](DataTagsApi.md#postUpdateDataTagEntry) | **POST** /datatag/entry/{key} | Update data tag entry |


## `deleteDatatagEntryKey()`

```php
deleteDatatagEntryKey($key)
```

Delete data tag entry

This method lets you delete a data tag entry by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry

try {
    $apiInstance->deleteDatatagEntryKey($key);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->deleteDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |

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

## `getDataTags()`

```php
getDataTags($get_data_tags_request): \OpenAPI\Client\Model\GetDataTags200Response
```

Get data tags

This method lets you get a list of data tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_data_tags_request = {"offset":0,"pageSize":100,"fields":"id,name,group,fields"}; // \OpenAPI\Client\Model\GetDataTagsRequest

try {
    $result = $apiInstance->getDataTags($get_data_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDataTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_data_tags_request** | [**\OpenAPI\Client\Model\GetDataTagsRequest**](../Model/GetDataTagsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetDataTags200Response**](../Model/GetDataTags200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatatagEntryKey()`

```php
getDatatagEntryKey($key, $fields): \OpenAPI\Client\Model\GetDatatagEntryKey200Response
```

Get data tag entry

This method lets you get a data tag entry by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry
$fields = key,dataTag,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* dataTag, key, task, contact, commentId

try {
    $result = $apiInstance->getDatatagEntryKey($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* dataTag, key, task, contact, commentId | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetDatatagEntryKey200Response**](../Model/GetDatatagEntryKey200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatatagId()`

```php
getDatatagId($id, $fields): \OpenAPI\Client\Model\GetDatatagId200Response
```

Get data tag by identifier

This method lets you get a data tag by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Data tag identifier
$fields = id,name,group,fields; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, group, fields

try {
    $result = $apiInstance->getDatatagId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Data tag identifier | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, group, fields | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetDatatagId200Response**](../Model/GetDatatagId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListDataTagEntrys()`

```php
postListDataTagEntrys($id, $post_list_data_tag_entrys_request): \OpenAPI\Client\Model\PostListDataTagEntrys200Response
```

Get list of data tag entries

This method lets you get a list of data tag entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of data tag
$post_list_data_tag_entrys_request = {"offset":0,"pageSize":100,"fields":"dataTag,key,commentId,task,contact,10"}; // \OpenAPI\Client\Model\PostListDataTagEntrysRequest

try {
    $result = $apiInstance->postListDataTagEntrys($id, $post_list_data_tag_entrys_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postListDataTagEntrys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier of data tag | |
| **post_list_data_tag_entrys_request** | [**\OpenAPI\Client\Model\PostListDataTagEntrysRequest**](../Model/PostListDataTagEntrysRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostListDataTagEntrys200Response**](../Model/PostListDataTagEntrys200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUpdateDataTagEntry()`

```php
postUpdateDataTagEntry($key, $silent, $data_tag_entry_update_request)
```

Update data tag entry

This method lets you update a data tag entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry
$silent = false; // bool | Silent mode
$data_tag_entry_update_request = {"customFieldData":[{"field":{"id":10},"value":"Test value"}]}; // \OpenAPI\Client\Model\DataTagEntryUpdateRequest

try {
    $apiInstance->postUpdateDataTagEntry($key, $silent, $data_tag_entry_update_request);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postUpdateDataTagEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **data_tag_entry_update_request** | [**\OpenAPI\Client\Model\DataTagEntryUpdateRequest**](../Model/DataTagEntryUpdateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
