# # GetTaskListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**page_size** | **int** | Size of requested list | [optional] [default to 100]
**filter_id** | **string** | Id for task filter, get list by method &#39;/task/filters&#39; | [optional]
**filters** | [**\OpenAPI\Client\Model\ComplexTaskFilter[]**](ComplexTaskFilter.md) |  | [optional]
**fields** | **string** | Fields returned - custom field identifiers, system field names, comma-delimited | [optional]
**source_id** | **string** | Unique identifier of external application | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
