# # ProjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**source_object_id** | **string** |  | [optional]
**source_data_version** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\BaseEntity**](BaseEntity.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\PersonResponse**](PersonResponse.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\BaseEntity**](BaseEntity.md) |  | [optional]
**template** | [**\OpenAPI\Client\Model\BaseEntity**](BaseEntity.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\GroupResponse**](GroupResponse.md) |  | [optional]
**counterparty** | [**\OpenAPI\Client\Model\PersonResponse**](PersonResponse.md) |  | [optional]
**start_date** | [**\OpenAPI\Client\Model\TimePoint**](TimePoint.md) |  | [optional]
**end_date** | [**\OpenAPI\Client\Model\TimePoint**](TimePoint.md) |  | [optional]
**hidden_for_employees** | **bool** |  | [optional]
**hidden_for_clients** | **bool** |  | [optional]
**overdue** | **bool** |  | [optional]
**is_close_to_deadline** | **bool** |  | [optional]
**has_end_date** | **bool** |  | [optional]
**assignees** | [**\OpenAPI\Client\Model\PeopleResponse**](PeopleResponse.md) |  | [optional]
**participants** | [**\OpenAPI\Client\Model\PeopleResponse**](PeopleResponse.md) |  | [optional]
**auditors** | [**\OpenAPI\Client\Model\PeopleResponse**](PeopleResponse.md) |  | [optional]
**client_managers** | [**\OpenAPI\Client\Model\PeopleResponse**](PeopleResponse.md) |  | [optional]
**is_deleted** | **bool** |  | [optional]
**custom_field_data** | [**\OpenAPI\Client\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
