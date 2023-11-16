# OpenAPI\Client\CustomFieldsApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldContact()**](CustomFieldsApi.md#getCustomfieldContact) | **GET** /customfield/contact | Get a list of a custom contact fields |
| [**getCustomfieldGeneric()**](CustomFieldsApi.md#getCustomfieldGeneric) | **GET** /customfield/main | Get list of custom main fields |
| [**getCustomfieldProject()**](CustomFieldsApi.md#getCustomfieldProject) | **GET** /customfield/project | Get a list of custom project fields |
| [**getCustomfieldTask()**](CustomFieldsApi.md#getCustomfieldTask) | **GET** /customfield/task | Get list of custom task fields |
| [**getCustomfieldUser()**](CustomFieldsApi.md#getCustomfieldUser) | **GET** /customfield/user | Get list of custom employee fields |
| [**getCustomfieldsForContact()**](CustomFieldsApi.md#getCustomfieldsForContact) | **GET** /customfield/contact/{id} | Get a list of a custom fields for contact |
| [**getCustomfieldsForDatatag()**](CustomFieldsApi.md#getCustomfieldsForDatatag) | **GET** /customfield/datatag/{id} | Get list of custom fields for data tag |
| [**getCustomfieldsForDirectory()**](CustomFieldsApi.md#getCustomfieldsForDirectory) | **GET** /customfield/directory/{id} | Get list of custom fields for directory |
| [**getCustomfieldsForProject()**](CustomFieldsApi.md#getCustomfieldsForProject) | **GET** /customfield/project/{id} | Get list of custom fields for project |
| [**getCustomfieldsForTask()**](CustomFieldsApi.md#getCustomfieldsForTask) | **GET** /customfield/task/{id} | Get list of custom fields for task |
| [**getCustomfieldsForUser()**](CustomFieldsApi.md#getCustomfieldsForUser) | **GET** /customfield/user/{id} | Get list of custom fields for employee |


## `getCustomfieldContact()`

```php
getCustomfieldContact($fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get a list of a custom contact fields

This method lets you get a list of custom contact and company fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldContact($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldGeneric()`

```php
getCustomfieldGeneric($fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom main fields

This method lets you get a list of custom main fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,group,type,objectType; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldGeneric($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldGeneric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldProject()`

```php
getCustomfieldProject($fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get a list of custom project fields

This method lets you get a list of custom project fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = 'fields_example'; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldProject($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldTask()`

```php
getCustomfieldTask($fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom task fields

This method lets you get a list of custom task fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldTask($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldUser()`

```php
getCustomfieldUser($fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom employee fields

This method lets you get a list of custom employee fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldUser($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForContact()`

```php
getCustomfieldsForContact($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get a list of a custom fields for contact

This method lets you get a list of custom fields for contact or company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForContact($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForDatatag()`

```php
getCustomfieldsForDatatag($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom fields for data tag

This method lets you get a list of custom fields for data tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data tag identifier
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForDatatag($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDatatag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data tag identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForDirectory()`

```php
getCustomfieldsForDirectory($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom fields for directory

This method lets you get a list of custom fields for directory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Directory identifier
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForDirectory($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDirectory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForProject()`

```php
getCustomfieldsForProject($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom fields for project

This method lets you get a list of custom fields for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of project
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForProject($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of project | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForTask()`

```php
getCustomfieldsForTask($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom fields for task

This method lets you get a list of custom fields for task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForTask($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForUser()`

```php
getCustomfieldsForUser($id, $fields): \OpenAPI\Client\Model\GetCustomfieldContact200Response
```

Get list of custom fields for employee

This method lets you get a list of custom fields for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues

try {
    $result = $apiInstance->getCustomfieldsForUser($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, flags, directoryId, directoryFields, enumValues | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
