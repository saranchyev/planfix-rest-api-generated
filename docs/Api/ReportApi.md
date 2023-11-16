# OpenAPI\Client\ReportApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportId()**](ReportApi.md#getReportId) | **GET** /report/{id} | Get report by identifier |
| [**getReportList()**](ReportApi.md#getReportList) | **POST** /report/list | Get list of reports |
| [**getReportSaveData()**](ReportApi.md#getReportSaveData) | **POST** /report/{id}/save/{saveId}/data | Get data from saved report |
| [**getReportSaveList()**](ReportApi.md#getReportSaveList) | **POST** /report/{id}/save/list | Get list of saved reports |


## `getReportId()`

```php
getReportId($id, $fields): \OpenAPI\Client\Model\GetReportId200Response
```

Get report by identifier

This method lets you get a report by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$fields = id,name,fields; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, fields

try {
    $result = $apiInstance->getReportId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, fields | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReportId200Response**](../Model/GetReportId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportList()`

```php
getReportList($get_report_list_request): \OpenAPI\Client\Model\GetReportList200Response
```

Get list of reports

This method lets you get a list of reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_report_list_request = {"offset":0,"pageSize":100,"fields":"id,name"}; // \OpenAPI\Client\Model\GetReportListRequest

try {
    $result = $apiInstance->getReportList($get_report_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_report_list_request** | [**\OpenAPI\Client\Model\GetReportListRequest**](../Model/GetReportListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReportList200Response**](../Model/GetReportList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSaveData()`

```php
getReportSaveData($id, $save_id, $chunk): \OpenAPI\Client\Model\ReportSaveData
```

Get data from saved report

This method lets you get data from a saved report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$save_id = 56; // int | Saved report identifier
$chunk = 0; // int | Index of chunks from saved report data

try {
    $result = $apiInstance->getReportSaveData($id, $save_id, $chunk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **save_id** | **int**| Saved report identifier | |
| **chunk** | **int**| Index of chunks from saved report data | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\ReportSaveData**](../Model/ReportSaveData.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSaveList()`

```php
getReportSaveList($id, $get_report_save_list_request): \OpenAPI\Client\Model\GetReportSaveList200Response
```

Get list of saved reports

This method lets you get a list of saved reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$get_report_save_list_request = {"fields":"id,reportId,dateTime,name"}; // \OpenAPI\Client\Model\GetReportSaveListRequest

try {
    $result = $apiInstance->getReportSaveList($id, $get_report_save_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **get_report_save_list_request** | [**\OpenAPI\Client\Model\GetReportSaveListRequest**](../Model/GetReportSaveListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReportSaveList200Response**](../Model/GetReportSaveList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
