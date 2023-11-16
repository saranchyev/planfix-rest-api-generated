# OpenAPI\Client\ContactApi

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactById()**](ContactApi.md#getContactById) | **GET** /contact/{id} | Get contact by number |
| [**getContactComments()**](ContactApi.md#getContactComments) | **POST** /contact/{id}/comments/list | Get list of comments added to contact |
| [**getContactFiles()**](ContactApi.md#getContactFiles) | **GET** /contact/{id}/files | Get contact files |
| [**getContactList()**](ContactApi.md#getContactList) | **POST** /contact/list | Get list of contacts and companies |
| [**getContactListGroups()**](ContactApi.md#getContactListGroups) | **GET** /contact/groups | Get list of contact groups |
| [**getContactListTemplates()**](ContactApi.md#getContactListTemplates) | **GET** /contact/templates | Get list of contact or company templates |
| [**postContact()**](ContactApi.md#postContact) | **POST** /contact/ | Create contact or company |
| [**postContactAddComment()**](ContactApi.md#postContactAddComment) | **POST** /contact/{id}/comments/ | Add comment |
| [**postContactAddDataTagEntryExistingComment()**](ContactApi.md#postContactAddDataTagEntryExistingComment) | **POST** /contact/{id}/datatags/{commentId} | Add a data tag entry to an existing comment |
| [**postContactAddDataTagEntryNewComment()**](ContactApi.md#postContactAddDataTagEntryNewComment) | **POST** /contact/{id}/datatags/ | Add a data tag entry with a new comment |
| [**postContactById()**](ContactApi.md#postContactById) | **POST** /contact/{id} | Update contact by number |
| [**postContactFilters()**](ContactApi.md#postContactFilters) | **POST** /contact/filters | Get list contact filters |
| [**postContactImport()**](ContactApi.md#postContactImport) | **POST** /contact/import | Import contact list |
| [**postContactUpdateComment()**](ContactApi.md#postContactUpdateComment) | **POST** /contact/{id}/comments/{commentId} | Update comment |


## `getContactById()`

```php
getContactById($id, $fields, $source_id): \OpenAPI\Client\Model\GetContactById200Response
```

Get contact by number

This method lets you get a contact or company by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$fields = id,name,midname,lastname,description,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, templateId, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, vk, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion
$source_id = 'source_id_example'; // string | Unique identifier of external application

try {
    $result = $apiInstance->getContactById($id, $fields, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, templateId, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, vk, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion | [optional] |
| **source_id** | **string**| Unique identifier of external application | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetContactById200Response**](../Model/GetContactById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactComments()`

```php
getContactComments($id, $get_contact_comments_request): \OpenAPI\Client\Model\GetContactComments200Response
```

Get list of comments added to contact

This method lets you get a list of comments added to a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$get_contact_comments_request = {"offset":0,"pageSize":100,"fields":"id,description,recipients","typeList":"Comments","resultOrder":"Asc"}; // \OpenAPI\Client\Model\GetContactCommentsRequest

try {
    $result = $apiInstance->getContactComments($id, $get_contact_comments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `getContactFiles()`

```php
getContactFiles($id, $only_from_description): \OpenAPI\Client\Model\GetContactFiles200Response
```

Get contact files

This method lets you get contatc files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$only_from_description = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getContactFiles($id, $only_from_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `getContactList()`

```php
getContactList($get_contact_list_request): \OpenAPI\Client\Model\GetContactList200Response
```

Get list of contacts and companies

This method lets you get a list of contacts and companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_contact_list_request = {"offset":0,"pageSize":100,"fields":"id,name,midname,lastname,description","sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2"}; // \OpenAPI\Client\Model\GetContactListRequest | 

try {
    $result = $apiInstance->getContactList($get_contact_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_contact_list_request** | [**\OpenAPI\Client\Model\GetContactListRequest**](../Model/GetContactListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetContactList200Response**](../Model/GetContactList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactListGroups()`

```php
getContactListGroups($fields): \OpenAPI\Client\Model\GetContactListGroups200Response
```

Get list of contact groups

This method lets you get a list of all company groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited description: <br>*Possible:* id, name

try {
    $result = $apiInstance->getContactListGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited description: &lt;br&gt;*Possible:* id, name | [optional] |

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

## `getContactListTemplates()`

```php
getContactListTemplates($offset, $page_size, $is_company, $source_id, $fields): \OpenAPI\Client\Model\GetContactListTemplates200Response
```

Get list of contact or company templates

This method lets you get a list of all contact or company templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$page_size = 100; // float | Size of requested list
$is_company = false; // bool | True for companies / false for contacts
$source_id = 'source_id_example'; // string | Unique identifier of external application
$fields = 'fields_example'; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, templateId, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, vk, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getContactListTemplates($offset, $page_size, $is_company, $source_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **page_size** | **float**| Size of requested list | [optional] [default to 100] |
| **is_company** | **bool**| True for companies / false for contacts | [optional] [default to false] |
| **source_id** | **string**| Unique identifier of external application | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, templateId, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, vk, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetContactListTemplates200Response**](../Model/GetContactListTemplates200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContact()`

```php
postContact($contact_request): \OpenAPI\Client\Model\PostContact201Response
```

Create contact or company

This method lets you create a new contact or company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = {"templateId":1,"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","description":"Descritption for contact","address":"Cosima 123 High Street, Apt. 16 City, ST 12345","site":"https://ivan.ivanow.com","email":"ivan@mail.com","skype":"ivan-ivanov","position":"sales manager","group":{"id":1},"isCompany":false,"isDeleted":false,"birthDate":{"date":"01-12-1990"},"phones":[{"number":"89643752416","type":1}],"companies":[],"contacts":[],"customFieldData":[]}; // \OpenAPI\Client\Model\ContactRequest

try {
    $result = $apiInstance->postContact($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)|  | [optional] |

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

## `postContactAddComment()`

```php
postContactAddComment($id, $comment_create_request): \OpenAPI\Client\Model\PostContact201Response
```

Add comment

This method lets you add a new comment to a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$comment_create_request = {"sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2","sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","dateTime":{"date":"12-06-2022","time":"12:15","datetime":"2022-06-12T12:15Z"},"fromType":"Planfix","description":"New comment text","owner":{"id":"user:1"},"isPinned":true,"isHidden":false,"recipients":{"users":[{"id":"contact:10"}]}}; // \OpenAPI\Client\Model\CommentCreateRequest

try {
    $result = $apiInstance->postContactAddComment($id, $comment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `postContactAddDataTagEntryExistingComment()`

```php
postContactAddDataTagEntryExistingComment($id, $comment_id, $data_tag_entry_create_request): \OpenAPI\Client\Model\PostContactAddDataTagEntryExistingComment201Response
```

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$comment_id = 56; // int | Number of comment
$data_tag_entry_create_request = {"dataTag":{"id":1},"items":[{"customFieldData":[{"field":{"id":20},"value":99}]}]}; // \OpenAPI\Client\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postContactAddDataTagEntryExistingComment($id, $comment_id, $data_tag_entry_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **comment_id** | **int**| Number of comment | |
| **data_tag_entry_create_request** | [**\OpenAPI\Client\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostContactAddDataTagEntryExistingComment201Response**](../Model/PostContactAddDataTagEntryExistingComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactAddDataTagEntryNewComment()`

```php
postContactAddDataTagEntryNewComment($id, $data_tag_entry_create_request): \OpenAPI\Client\Model\PostContactAddDataTagEntryNewComment201Response
```

Add a data tag entry with a new comment

This method lets you add a data tag entry with a new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$data_tag_entry_create_request = {"dataTag":{"id":4},"items":[{"customFieldData":[{"field":{"id":10},"value":"Test value"}]}]}; // \OpenAPI\Client\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postContactAddDataTagEntryNewComment($id, $data_tag_entry_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **data_tag_entry_create_request** | [**\OpenAPI\Client\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostContactAddDataTagEntryNewComment201Response**](../Model/PostContactAddDataTagEntryNewComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactById()`

```php
postContactById($id, $silent, $contact_request)
```

Update contact by number

This method lets you update a contact or company by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$silent = false; // bool | Silent mode
$contact_request = {"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"New Name","midname":"New Midname","lastname":"New Lastname"}; // \OpenAPI\Client\Model\ContactRequest | Successful operation

try {
    $apiInstance->postContactById($id, $silent, $contact_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)| Successful operation | [optional] |

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

## `postContactFilters()`

```php
postContactFilters(): \OpenAPI\Client\Model\PostContactFilters200Response
```

Get list contact filters

This method lets you get list contact filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postContactFilters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactFilters: ', $e->getMessage(), PHP_EOL;
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

## `postContactImport()`

```php
postContactImport($post_contact_import_request)
```

Import contact list

This method lets you import a list of companies or contacts into Planfix

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_contact_import_request = {"silent":"false,","contactTemplateId":1,"companyTemplateId":2,"optionImportDuplicate":"update","optionImportUniqueField":"custom:36","optionImportUniqueDefaultField":"name","contacts":[{"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","description":"Description for contact","address":"Cosima 123 High Street, Apt. 16 City, ST 12345","site":"https://ivan.ivanow.com","email":"ivan@mail.com","skype":"ivan-ivanov","group":{"id":1},"isCompany":false,"isDeleted":false,"birthDate":{"date":"01-12-1900"},"phones":[{"number":"89643752416","type":1}],"companies":[{"id":1,"name":"Ivan LTD"}],"contacts":[]}]}; // \OpenAPI\Client\Model\PostContactImportRequest

try {
    $apiInstance->postContactImport($post_contact_import_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_contact_import_request** | [**\OpenAPI\Client\Model\PostContactImportRequest**](../Model/PostContactImportRequest.md)|  | [optional] |

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

## `postContactUpdateComment()`

```php
postContactUpdateComment($id, $comment_id, $silent, $comment_update_request)
```

Update comment

This method lets you update a comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$comment_id = 56; // int | Number of comment
$silent = false; // bool | Silent mode
$comment_update_request = {"description":"New text","isPinned":true,"recipients":{"users":[{"id":"contact:10"}]},"files":[{"id":115234}]}; // \OpenAPI\Client\Model\CommentUpdateRequest

try {
    $apiInstance->postContactUpdateComment($id, $comment_id, $silent, $comment_update_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactUpdateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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
