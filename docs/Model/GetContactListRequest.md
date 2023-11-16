# # GetContactListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**page_size** | **int** | Size of requested list | [optional] [default to 100]
**filter_id** | **string** | Id for contact filter, get list by method &#39;/contact/filters&#39; | [optional]
**filters** | [**\OpenAPI\Client\Model\ComplexContactFilter[]**](ComplexContactFilter.md) |  | [optional]
**is_company** | **bool** | True for companies / false for contacts | [optional] [default to false]
**only_changed** | **bool** | Flag for retrieving only data modified since last sync with external application | [optional] [default to false]
**prefixed_id** | **bool** | Flag for retrieving id with a prefix | [optional]
**fields** | **string** | Fields returned - custom field identifiers, system field names, comma-delimited | [optional]
**source_id** | **string** | Unique identifier of external application | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
