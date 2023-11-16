# OpenAPI\Client\EmployeeApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGroups()**](EmployeeApi.md#getUserGroups) | **GET** /user/groups | Get list of employee groups |
| [**getUserId()**](EmployeeApi.md#getUserId) | **GET** /user/{id} | Get employee by number |
| [**getUserList()**](EmployeeApi.md#getUserList) | **POST** /user/list | Get list of employees |
| [**getUserPosts()**](EmployeeApi.md#getUserPosts) | **GET** /user/posts | Get list of employee posts |
| [**postUser()**](EmployeeApi.md#postUser) | **POST** /user/ | Create employee |
| [**postUserId()**](EmployeeApi.md#postUserId) | **POST** /user/{id} | Update employee by number |


## `getUserGroups()`

```php
getUserGroups($fields): \OpenAPI\Client\Model\GetContactListGroups200Response
```

Get list of employee groups

This method lets you get a list of employee groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetContactListGroups200Response**](../Model/GetContactListGroups200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserId()`

```php
getUserId($id, $fields, $source_id): \OpenAPI\Client\Model\GetUserId200Response
```

Get employee by number

This method lets you get an employee by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$fields = id,name,description,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, sourceObjectId, sourceDataVersion
$source_id = 'source_id_example'; // string | Unique identifier of external application

try {
    $result = $apiInstance->getUserId($id, $fields, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, sourceObjectId, sourceDataVersion | [optional] |
| **source_id** | **string**| Unique identifier of external application | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetUserId200Response**](../Model/GetUserId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserList()`

```php
getUserList($get_user_list_request): \OpenAPI\Client\Model\GetUserList200Response
```

Get list of employees

This method lets you get a list of employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_user_list_request = {"offset":0,"pageSize":100,"fields":"id,name,midname,lastname"}; // \OpenAPI\Client\Model\GetUserListRequest

try {
    $result = $apiInstance->getUserList($get_user_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_user_list_request** | [**\OpenAPI\Client\Model\GetUserListRequest**](../Model/GetUserListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetUserList200Response**](../Model/GetUserList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPosts()`

```php
getUserPosts($fields): \OpenAPI\Client\Model\GetUserPosts200Response
```

Get list of employee posts

This method lets you get a list of employee posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserPosts($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetUserPosts200Response**](../Model/GetUserPosts200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUser()`

```php
postUser($user_request): \OpenAPI\Client\Model\PostContact201Response
```

Create employee

This method lets you create a new employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request = {"name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","languageCode":"En","birthDate":{"date":"01-12-2000","time":"00:00","datetime":"2000-12-01T00:00Z"},"groups":[{"id":1}],"role":"User","login":"test","password":"testpass","email":"test@test.com","secondaryEmails":[],"status":"Active","phones":[{"number":"Test phone","maskedNumber":"+123456789","type":0}]}; // \OpenAPI\Client\Model\UserRequest

try {
    $result = $apiInstance->postUser($user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest**](../Model/UserRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostContact201Response**](../Model/PostContact201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserId()`

```php
postUserId($id, $silent, $user_request)
```

Update employee by number

This method lets you update an employee by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$silent = false; // bool | Silent mode
$user_request = {"name":"Ivan","groups":[{"id":2}],"role":"User","email":"new@example.com"}; // \OpenAPI\Client\Model\UserRequest

try {
    $apiInstance->postUserId($id, $silent, $user_request);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest**](../Model/UserRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
