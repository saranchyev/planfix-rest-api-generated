# # GetUserListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**page_size** | **int** | Size of requested list | [optional] [default to 100]
**only_active** | **bool** | Flag for retrieving only active employees | [optional] [default to false]
**prefixed_id** | **bool** | Flag for retrieving id with a prefix | [optional]
**fields** | **string** | Fields returned - custom field identifiers, system field names, comma-delimited | [optional]
**source_id** | **string** | Unique identifier of external application | [optional]
**filters** | [**\OpenAPI\Client\Model\ComplexUserFilter[]**](ComplexUserFilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
