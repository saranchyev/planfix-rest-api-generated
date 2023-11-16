# OpenAPI\Client\TaskApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaskById()**](TaskApi.md#getTaskById) | **GET** /task/{id} | Get task by number |
| [**getTaskComments()**](TaskApi.md#getTaskComments) | **POST** /task/{id}/comments/list | Get task comments |
| [**getTaskFiles()**](TaskApi.md#getTaskFiles) | **GET** /task/{id}/files | Get task files |
| [**getTaskList()**](TaskApi.md#getTaskList) | **POST** /task/list | Get list of tasks |
| [**getTaskListTemplates()**](TaskApi.md#getTaskListTemplates) | **GET** /task/templates | Get list of task templates |
| [**postTask()**](TaskApi.md#postTask) | **POST** /task/ | Create task |
| [**postTaskAddComment()**](TaskApi.md#postTaskAddComment) | **POST** /task/{id}/comments/ | Add comment |
| [**postTaskAddDataTagEntryExistingComment()**](TaskApi.md#postTaskAddDataTagEntryExistingComment) | **POST** /task/{id}/datatags/{commentId} | Add a data tag entry to an existing comment |
| [**postTaskAddDataTagEntryNewComment()**](TaskApi.md#postTaskAddDataTagEntryNewComment) | **POST** /task/{id}/datatags/ | Add data tag entry as new comment |
| [**postTaskById()**](TaskApi.md#postTaskById) | **POST** /task/{id} | Update task by number |
| [**postTaskFilters()**](TaskApi.md#postTaskFilters) | **POST** /task/filters | Get list task filters |
| [**postTaskUpdateComment()**](TaskApi.md#postTaskUpdateComment) | **POST** /task/{id}/comments/{commentId} | Updating comments |


## `getTaskById()`

```php
getTaskById($id, $fields, $source_id): \OpenAPI\Client\Model\GetTaskById200Response
```

Get task by number

This method lets you get a task by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$fields = id,name,description,101,115; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion
$source_id = 'source_id_example'; // string | Unique identifier of external application

try {
    $result = $apiInstance->getTaskById($id, $fields, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional] |
| **source_id** | **string**| Unique identifier of external application | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetTaskById200Response**](../Model/GetTaskById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskComments()`

```php
getTaskComments($id, $get_contact_comments_request): \OpenAPI\Client\Model\GetContactComments200Response
```

Get task comments

This method lets you get a list of comments on a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$get_contact_comments_request = {"offset":0,"pageSize":100,"fields":"id,description,recipients","typeList":"Comments","resultOrder":"Asc"}; // \OpenAPI\Client\Model\GetContactCommentsRequest

try {
    $result = $apiInstance->getTaskComments($id, $get_contact_comments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **get_contact_comments_request** | [**\OpenAPI\Client\Model\GetContactCommentsRequest**](../Model/GetContactCommentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetContactComments200Response**](../Model/GetContactComments200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskFiles()`

```php
getTaskFiles($id, $only_from_description): \OpenAPI\Client\Model\GetContactFiles200Response
```

Get task files

This method lets you get task files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Number of task
$only_from_description = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getTaskFiles($id, $only_from_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of task | |
| **only_from_description** | **bool**| Flag to get files from description only | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\GetContactFiles200Response**](../Model/GetContactFiles200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskList()`

```php
getTaskList($get_task_list_request): \OpenAPI\Client\Model\GetTaskList200Response
```

Get list of tasks

This method lets you get a list of tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_task_list_request = {"offset":0,"pageSize":100,"filterId":"out","filters":[{"type":13,"operator":"equal","value":{"dateType":"otherDate","dateValue":"22-03-2022"}}],"fields":"id,name,description,startDateTime","sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2"}; // \OpenAPI\Client\Model\GetTaskListRequest

try {
    $result = $apiInstance->getTaskList($get_task_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_task_list_request** | [**\OpenAPI\Client\Model\GetTaskListRequest**](../Model/GetTaskListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetTaskList200Response**](../Model/GetTaskList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskListTemplates()`

```php
getTaskListTemplates($offset, $page_size, $source_id, $fields): \OpenAPI\Client\Model\GetTaskListTemplates200Response
```

Get list of task templates

This method lets you get a list of all task templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$page_size = 100; // float | Size of requested list
$source_id = 'source_id_example'; // string | Unique identifier of external application
$fields = 'fields_example'; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getTaskListTemplates($offset, $page_size, $source_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskListTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **page_size** | **float**| Size of requested list | [optional] [default to 100] |
| **source_id** | **string**| Unique identifier of external application | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetTaskListTemplates200Response**](../Model/GetTaskListTemplates200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTask()`

```php
postTask($task_create_request): \OpenAPI\Client\Model\PostContact201Response
```

Create task

This method lets you create a new task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_create_request = {"name":"New task name","description":"Task description"}; // \OpenAPI\Client\Model\TaskCreateRequest

try {
    $result = $apiInstance->postTask($task_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_create_request** | [**\OpenAPI\Client\Model\TaskCreateRequest**](../Model/TaskCreateRequest.md)|  | [optional] |

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

## `postTaskAddComment()`

```php
postTaskAddComment($id, $comment_create_request): \OpenAPI\Client\Model\PostContact201Response
```

Add comment

This method lets you add a new comment to a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$comment_create_request = {"sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2","sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","dateTime":{"date":"12-06-2022","time":"12:15","datetime":"2022-06-12T12:15Z"},"type":"Comment","fromType":"Planfix","description":"New comment text","owner":{"id":"contact:10"},"isPinned":true,"isHidden":false,"recipients":{"users":[{"id":"user:5"}],"roles":["auditor"]}}; // \OpenAPI\Client\Model\CommentCreateRequest

try {
    $result = $apiInstance->postTaskAddComment($id, $comment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **comment_create_request** | [**\OpenAPI\Client\Model\CommentCreateRequest**](../Model/CommentCreateRequest.md)|  | [optional] |

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

## `postTaskAddDataTagEntryExistingComment()`

```php
postTaskAddDataTagEntryExistingComment($id, $comment_id, $data_tag_entry_create_request): \OpenAPI\Client\Model\PostTaskAddDataTagEntryExistingComment201Response
```

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$comment_id = 56; // int | Number of comment
$data_tag_entry_create_request = {"dataTag":{"id":1},"items":[{"customFieldData":[{"field":{"id":20},"value":99}]}]}; // \OpenAPI\Client\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postTaskAddDataTagEntryExistingComment($id, $comment_id, $data_tag_entry_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **comment_id** | **int**| Number of comment | |
| **data_tag_entry_create_request** | [**\OpenAPI\Client\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostTaskAddDataTagEntryExistingComment201Response**](../Model/PostTaskAddDataTagEntryExistingComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskAddDataTagEntryNewComment()`

```php
postTaskAddDataTagEntryNewComment($id, $data_tag_entry_create_request): \OpenAPI\Client\Model\PostTaskAddDataTagEntryNewComment201Response
```

Add data tag entry as new comment

This method lets you add data tag entry as new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$data_tag_entry_create_request = {"dataTag":{"id":4},"items":[{"customFieldData":[{"field":{"id":10},"value":"Test value"}]}]}; // \OpenAPI\Client\Model\DataTagEntryCreateRequest | 

try {
    $result = $apiInstance->postTaskAddDataTagEntryNewComment($id, $data_tag_entry_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **data_tag_entry_create_request** | [**\OpenAPI\Client\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostTaskAddDataTagEntryNewComment201Response**](../Model/PostTaskAddDataTagEntryNewComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskById()`

```php
postTaskById($id, $silent, $task_update_request)
```

Update task by number

This method lets you update a task by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$silent = false; // bool | Silent mode
$task_update_request = {"name":"New task name"}; // \OpenAPI\Client\Model\TaskUpdateRequest

try {
    $apiInstance->postTaskById($id, $silent, $task_update_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **task_update_request** | [**\OpenAPI\Client\Model\TaskUpdateRequest**](../Model/TaskUpdateRequest.md)|  | [optional] |

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

## `postTaskFilters()`

```php
postTaskFilters(): \OpenAPI\Client\Model\PostContactFilters200Response
```

Get list task filters

This method lets you get list task filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postTaskFilters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PostContactFilters200Response**](../Model/PostContactFilters200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskUpdateComment()`

```php
postTaskUpdateComment($id, $comment_id, $silent, $comment_update_request)
```

Updating comments

This method lets you update a comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$comment_id = 56; // int | Number of comment
$silent = false; // bool | Silent mode
$comment_update_request = {"description":"Text updated","isPinned":true,"recipients":{"users":[{"id":"user:5"}],"groups":[{"id":5}]},"files":[{"id":115234}]}; // \OpenAPI\Client\Model\CommentUpdateRequest

try {
    $apiInstance->postTaskUpdateComment($id, $comment_id, $silent, $comment_update_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskUpdateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **comment_id** | **int**| Number of comment | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **comment_update_request** | [**\OpenAPI\Client\Model\CommentUpdateRequest**](../Model/CommentUpdateRequest.md)|  | [optional] |

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
