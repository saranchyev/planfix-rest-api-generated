# # PostContactImportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**silent** | **bool** | Silent mode | [optional] [default to false]
**source_id** | **string** |  | [optional]
**contact_template_id** | **int** |  | [optional]
**company_template_id** | **int** |  | [optional]
**option_import_duplicate** | **string** | Enum: ignore, update, none | [optional]
**option_import_unique_field** | **string** | Enum: email-phone-name-ifnot, email-phone-name, email-phone, phone, name, email-and-phone-and-name, number, custom  OR custom:{fieldId} | [optional]
**option_import_unique_default_field** | **string** | Enum: name, email-phone-name | [optional]
**contacts** | [**\OpenAPI\Client\Model\ContactRequest[]**](ContactRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
