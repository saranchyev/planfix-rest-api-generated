# # CommentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**source_object_id** | **string** |  | [optional]
**source_data_version** | **string** |  | [optional]
**date_time** | [**\OpenAPI\Client\Model\TimePoint**](TimePoint.md) |  | [optional]
**type** | **string** |  | [optional]
**from_type** | **string** |  | [optional]
**description** | **string** |  | [optional]
**task** | [**\OpenAPI\Client\Model\BaseEntity**](BaseEntity.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\BaseEntity**](BaseEntity.md) |  | [optional]
**contact** | [**\OpenAPI\Client\Model\PersonResponse**](PersonResponse.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\PersonResponse**](PersonResponse.md) |  | [optional]
**is_deleted** | **bool** |  | [optional]
**is_pinned** | **bool** |  | [optional]
**is_hidden** | **bool** |  | [optional]
**is_not_read** | **bool** |  | [optional]
**recipients** | [**\OpenAPI\Client\Model\PeopleResponse**](PeopleResponse.md) |  | [optional]
**reminders** | [**\OpenAPI\Client\Model\Reminder[]**](Reminder.md) |  | [optional]
**data_tags** | [**\OpenAPI\Client\Model\CommentResponseDataTagsInner[]**](CommentResponseDataTagsInner.md) |  | [optional]
**files** | [**\OpenAPI\Client\Model\FileResponse[]**](FileResponse.md) |  | [optional]
**change_task_start_date** | [**\OpenAPI\Client\Model\ChangeDate**](ChangeDate.md) |  | [optional]
**change_task_expect_date** | [**\OpenAPI\Client\Model\ChangeDate**](ChangeDate.md) |  | [optional]
**change_status** | [**\OpenAPI\Client\Model\CommentResponseChangeStatus**](CommentResponseChangeStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
