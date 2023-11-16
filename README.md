<img src="planfix-logo.svg" width="64" height="64">

# Planfix REST API (generated)
REST API клиент для сервиса https://planfix.ru/. Код клиента сгенерированн автоматически 
при помощи [OpenAPI Generator](https://openapi-generator.tech/) по [swagger документации](https://help.planfix.com/restapidocs/).


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: rest_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4251; // string | Number of comment

try {
    $apiInstance->deleteCommentId($id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://your-account.planfix.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommentsApi* | [**deleteCommentId**](docs/Api/CommentsApi.md#deletecommentid) | **DELETE** /comment/{id} | Delete comment
*CommentsApi* | [**getCommentId**](docs/Api/CommentsApi.md#getcommentid) | **GET** /comment/{id} | Get comment by number
*ContactApi* | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid) | **GET** /contact/{id} | Get contact by number
*ContactApi* | [**getContactComments**](docs/Api/ContactApi.md#getcontactcomments) | **POST** /contact/{id}/comments/list | Get list of comments added to contact
*ContactApi* | [**getContactFiles**](docs/Api/ContactApi.md#getcontactfiles) | **GET** /contact/{id}/files | Get contact files
*ContactApi* | [**getContactList**](docs/Api/ContactApi.md#getcontactlist) | **POST** /contact/list | Get list of contacts and companies
*ContactApi* | [**getContactListGroups**](docs/Api/ContactApi.md#getcontactlistgroups) | **GET** /contact/groups | Get list of contact groups
*ContactApi* | [**getContactListTemplates**](docs/Api/ContactApi.md#getcontactlisttemplates) | **GET** /contact/templates | Get list of contact or company templates
*ContactApi* | [**postContact**](docs/Api/ContactApi.md#postcontact) | **POST** /contact/ | Create contact or company
*ContactApi* | [**postContactAddComment**](docs/Api/ContactApi.md#postcontactaddcomment) | **POST** /contact/{id}/comments/ | Add comment
*ContactApi* | [**postContactAddDataTagEntryExistingComment**](docs/Api/ContactApi.md#postcontactadddatatagentryexistingcomment) | **POST** /contact/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
*ContactApi* | [**postContactAddDataTagEntryNewComment**](docs/Api/ContactApi.md#postcontactadddatatagentrynewcomment) | **POST** /contact/{id}/datatags/ | Add a data tag entry with a new comment
*ContactApi* | [**postContactById**](docs/Api/ContactApi.md#postcontactbyid) | **POST** /contact/{id} | Update contact by number
*ContactApi* | [**postContactFilters**](docs/Api/ContactApi.md#postcontactfilters) | **POST** /contact/filters | Get list contact filters
*ContactApi* | [**postContactImport**](docs/Api/ContactApi.md#postcontactimport) | **POST** /contact/import | Import contact list
*ContactApi* | [**postContactUpdateComment**](docs/Api/ContactApi.md#postcontactupdatecomment) | **POST** /contact/{id}/comments/{commentId} | Update comment
*CustomFieldsApi* | [**getCustomfieldContact**](docs/Api/CustomFieldsApi.md#getcustomfieldcontact) | **GET** /customfield/contact | Get a list of a custom contact fields
*CustomFieldsApi* | [**getCustomfieldGeneric**](docs/Api/CustomFieldsApi.md#getcustomfieldgeneric) | **GET** /customfield/main | Get list of custom main fields
*CustomFieldsApi* | [**getCustomfieldProject**](docs/Api/CustomFieldsApi.md#getcustomfieldproject) | **GET** /customfield/project | Get a list of custom project fields
*CustomFieldsApi* | [**getCustomfieldTask**](docs/Api/CustomFieldsApi.md#getcustomfieldtask) | **GET** /customfield/task | Get list of custom task fields
*CustomFieldsApi* | [**getCustomfieldUser**](docs/Api/CustomFieldsApi.md#getcustomfielduser) | **GET** /customfield/user | Get list of custom employee fields
*CustomFieldsApi* | [**getCustomfieldsForContact**](docs/Api/CustomFieldsApi.md#getcustomfieldsforcontact) | **GET** /customfield/contact/{id} | Get a list of a custom fields for contact
*CustomFieldsApi* | [**getCustomfieldsForDatatag**](docs/Api/CustomFieldsApi.md#getcustomfieldsfordatatag) | **GET** /customfield/datatag/{id} | Get list of custom fields for data tag
*CustomFieldsApi* | [**getCustomfieldsForDirectory**](docs/Api/CustomFieldsApi.md#getcustomfieldsfordirectory) | **GET** /customfield/directory/{id} | Get list of custom fields for directory
*CustomFieldsApi* | [**getCustomfieldsForProject**](docs/Api/CustomFieldsApi.md#getcustomfieldsforproject) | **GET** /customfield/project/{id} | Get list of custom fields for project
*CustomFieldsApi* | [**getCustomfieldsForTask**](docs/Api/CustomFieldsApi.md#getcustomfieldsfortask) | **GET** /customfield/task/{id} | Get list of custom fields for task
*CustomFieldsApi* | [**getCustomfieldsForUser**](docs/Api/CustomFieldsApi.md#getcustomfieldsforuser) | **GET** /customfield/user/{id} | Get list of custom fields for employee
*DataTagsApi* | [**deleteDatatagEntryKey**](docs/Api/DataTagsApi.md#deletedatatagentrykey) | **DELETE** /datatag/entry/{key} | Delete data tag entry
*DataTagsApi* | [**getDataTags**](docs/Api/DataTagsApi.md#getdatatags) | **POST** /datatag/list | Get data tags
*DataTagsApi* | [**getDatatagEntryKey**](docs/Api/DataTagsApi.md#getdatatagentrykey) | **GET** /datatag/entry/{key} | Get data tag entry
*DataTagsApi* | [**getDatatagId**](docs/Api/DataTagsApi.md#getdatatagid) | **GET** /datatag/{id} | Get data tag by identifier
*DataTagsApi* | [**postListDataTagEntrys**](docs/Api/DataTagsApi.md#postlistdatatagentrys) | **POST** /datatag/{id}/entry/list | Get list of data tag entries
*DataTagsApi* | [**postUpdateDataTagEntry**](docs/Api/DataTagsApi.md#postupdatedatatagentry) | **POST** /datatag/entry/{key} | Update data tag entry
*DirectoryApi* | [**deleteDirectoryEntryKey**](docs/Api/DirectoryApi.md#deletedirectoryentrykey) | **DELETE** /directory/{id}/entry/{key} | Delete directory entry
*DirectoryApi* | [**getDirectoriesGroups**](docs/Api/DirectoryApi.md#getdirectoriesgroups) | **GET** /directory/groups | Get list of directory groups
*DirectoryApi* | [**getDirectoryById**](docs/Api/DirectoryApi.md#getdirectorybyid) | **GET** /directory/{id} | Get directory by identifier
*DirectoryApi* | [**getDirectoryIdEntryKey**](docs/Api/DirectoryApi.md#getdirectoryidentrykey) | **GET** /directory/{id}/entry/{key} | Get directory entry
*DirectoryApi* | [**getListDirectories**](docs/Api/DirectoryApi.md#getlistdirectories) | **POST** /directory/list | Get list of directories
*DirectoryApi* | [**postAddDirectoryEntry**](docs/Api/DirectoryApi.md#postadddirectoryentry) | **POST** /directory/{id}/entry/ | Add directory entry
*DirectoryApi* | [**postListDirectoryEntries**](docs/Api/DirectoryApi.md#postlistdirectoryentries) | **POST** /directory/{id}/entry/list | Get list of directory entries
*DirectoryApi* | [**postUpdateDirectoryEntry**](docs/Api/DirectoryApi.md#postupdatedirectoryentry) | **POST** /directory/{id}/entry/{key} | Update directory entry
*EmployeeApi* | [**getUserGroups**](docs/Api/EmployeeApi.md#getusergroups) | **GET** /user/groups | Get list of employee groups
*EmployeeApi* | [**getUserId**](docs/Api/EmployeeApi.md#getuserid) | **GET** /user/{id} | Get employee by number
*EmployeeApi* | [**getUserList**](docs/Api/EmployeeApi.md#getuserlist) | **POST** /user/list | Get list of employees
*EmployeeApi* | [**getUserPosts**](docs/Api/EmployeeApi.md#getuserposts) | **GET** /user/posts | Get list of employee posts
*EmployeeApi* | [**postUser**](docs/Api/EmployeeApi.md#postuser) | **POST** /user/ | Create employee
*EmployeeApi* | [**postUserId**](docs/Api/EmployeeApi.md#postuserid) | **POST** /user/{id} | Update employee by number
*FileApi* | [**deleteFileId**](docs/Api/FileApi.md#deletefileid) | **DELETE** /file/{id} | Delete file
*FileApi* | [**getFileId**](docs/Api/FileApi.md#getfileid) | **GET** /file/{id} | Get file by identifier
*FileApi* | [**getFileIdDownload**](docs/Api/FileApi.md#getfileiddownload) | **GET** /file/{id}/download | Download file
*FileApi* | [**postFileUpload**](docs/Api/FileApi.md#postfileupload) | **POST** /file/ | Upload file
*FileApi* | [**postFileUploadByUrl**](docs/Api/FileApi.md#postfileuploadbyurl) | **POST** /file/from-url/ | Upload file by link
*ProcessApi* | [**getContactProcessList**](docs/Api/ProcessApi.md#getcontactprocesslist) | **GET** /process/contact | Get list of contact processes
*ProcessApi* | [**getTaskProcessList**](docs/Api/ProcessApi.md#gettaskprocesslist) | **GET** /process/task | Get list of task processes
*ProcessApi* | [**getTaskStatusList**](docs/Api/ProcessApi.md#gettaskstatuslist) | **GET** /process/task/{id}/statuses | Get list of task statuses for process
*ProjectApi* | [**getProjectById**](docs/Api/ProjectApi.md#getprojectbyid) | **GET** /project/{id} | Get project by number
*ProjectApi* | [**getProjectFiles**](docs/Api/ProjectApi.md#getprojectfiles) | **GET** /project/{id}/files | Get project files
*ProjectApi* | [**getProjectGroups**](docs/Api/ProjectApi.md#getprojectgroups) | **GET** /project/groups | Get list of project groups
*ProjectApi* | [**getProjectList**](docs/Api/ProjectApi.md#getprojectlist) | **POST** /project/list | Get list of projects
*ProjectApi* | [**getProjectListTemplates**](docs/Api/ProjectApi.md#getprojectlisttemplates) | **GET** /project/templates | Get list of project templates
*ProjectApi* | [**postProject**](docs/Api/ProjectApi.md#postproject) | **POST** /project/ | Create project
*ProjectApi* | [**postProjectById**](docs/Api/ProjectApi.md#postprojectbyid) | **POST** /project/{id} | Update project by number
*ReportApi* | [**getReportId**](docs/Api/ReportApi.md#getreportid) | **GET** /report/{id} | Get report by identifier
*ReportApi* | [**getReportList**](docs/Api/ReportApi.md#getreportlist) | **POST** /report/list | Get list of reports
*ReportApi* | [**getReportSaveData**](docs/Api/ReportApi.md#getreportsavedata) | **POST** /report/{id}/save/{saveId}/data | Get data from saved report
*ReportApi* | [**getReportSaveList**](docs/Api/ReportApi.md#getreportsavelist) | **POST** /report/{id}/save/list | Get list of saved reports
*TaskApi* | [**getTaskById**](docs/Api/TaskApi.md#gettaskbyid) | **GET** /task/{id} | Get task by number
*TaskApi* | [**getTaskComments**](docs/Api/TaskApi.md#gettaskcomments) | **POST** /task/{id}/comments/list | Get task comments
*TaskApi* | [**getTaskFiles**](docs/Api/TaskApi.md#gettaskfiles) | **GET** /task/{id}/files | Get task files
*TaskApi* | [**getTaskList**](docs/Api/TaskApi.md#gettasklist) | **POST** /task/list | Get list of tasks
*TaskApi* | [**getTaskListTemplates**](docs/Api/TaskApi.md#gettasklisttemplates) | **GET** /task/templates | Get list of task templates
*TaskApi* | [**postTask**](docs/Api/TaskApi.md#posttask) | **POST** /task/ | Create task
*TaskApi* | [**postTaskAddComment**](docs/Api/TaskApi.md#posttaskaddcomment) | **POST** /task/{id}/comments/ | Add comment
*TaskApi* | [**postTaskAddDataTagEntryExistingComment**](docs/Api/TaskApi.md#posttaskadddatatagentryexistingcomment) | **POST** /task/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
*TaskApi* | [**postTaskAddDataTagEntryNewComment**](docs/Api/TaskApi.md#posttaskadddatatagentrynewcomment) | **POST** /task/{id}/datatags/ | Add data tag entry as new comment
*TaskApi* | [**postTaskById**](docs/Api/TaskApi.md#posttaskbyid) | **POST** /task/{id} | Update task by number
*TaskApi* | [**postTaskFilters**](docs/Api/TaskApi.md#posttaskfilters) | **POST** /task/filters | Get list task filters
*TaskApi* | [**postTaskUpdateComment**](docs/Api/TaskApi.md#posttaskupdatecomment) | **POST** /task/{id}/comments/{commentId} | Updating comments

## Models

- [ApiResponseError](docs/Model/ApiResponseError.md)
- [BaseEntity](docs/Model/BaseEntity.md)
- [ChangeDate](docs/Model/ChangeDate.md)
- [CommentCreateRequest](docs/Model/CommentCreateRequest.md)
- [CommentResponse](docs/Model/CommentResponse.md)
- [CommentResponseChangeStatus](docs/Model/CommentResponseChangeStatus.md)
- [CommentResponseDataTagsInner](docs/Model/CommentResponseDataTagsInner.md)
- [CommentUpdateRequest](docs/Model/CommentUpdateRequest.md)
- [Company](docs/Model/Company.md)
- [ComplexContactFilter](docs/Model/ComplexContactFilter.md)
- [ComplexDataTagFilter](docs/Model/ComplexDataTagFilter.md)
- [ComplexDirectoryFilter](docs/Model/ComplexDirectoryFilter.md)
- [ComplexProjectFilter](docs/Model/ComplexProjectFilter.md)
- [ComplexTaskFilter](docs/Model/ComplexTaskFilter.md)
- [ComplexUserFilter](docs/Model/ComplexUserFilter.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRequestBirthDate](docs/Model/ContactRequestBirthDate.md)
- [ContactResponse](docs/Model/ContactResponse.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldValueRequest](docs/Model/CustomFieldValueRequest.md)
- [CustomFieldValueResponse](docs/Model/CustomFieldValueResponse.md)
- [DataTag](docs/Model/DataTag.md)
- [DataTagEntryCreateRequest](docs/Model/DataTagEntryCreateRequest.md)
- [DataTagEntryCreateRequestItemsInner](docs/Model/DataTagEntryCreateRequestItemsInner.md)
- [DataTagEntryResponse](docs/Model/DataTagEntryResponse.md)
- [DataTagEntryUpdateRequest](docs/Model/DataTagEntryUpdateRequest.md)
- [Directory](docs/Model/Directory.md)
- [DirectoryEntryRequest](docs/Model/DirectoryEntryRequest.md)
- [DirectoryEntryResponse](docs/Model/DirectoryEntryResponse.md)
- [FileRequest](docs/Model/FileRequest.md)
- [FileResponse](docs/Model/FileResponse.md)
- [FileUploadRequest](docs/Model/FileUploadRequest.md)
- [Filter](docs/Model/Filter.md)
- [GetCommentId200Response](docs/Model/GetCommentId200Response.md)
- [GetContactById200Response](docs/Model/GetContactById200Response.md)
- [GetContactComments200Response](docs/Model/GetContactComments200Response.md)
- [GetContactCommentsRequest](docs/Model/GetContactCommentsRequest.md)
- [GetContactFiles200Response](docs/Model/GetContactFiles200Response.md)
- [GetContactList200Response](docs/Model/GetContactList200Response.md)
- [GetContactListGroups200Response](docs/Model/GetContactListGroups200Response.md)
- [GetContactListRequest](docs/Model/GetContactListRequest.md)
- [GetContactListTemplates200Response](docs/Model/GetContactListTemplates200Response.md)
- [GetContactProcessList200Response](docs/Model/GetContactProcessList200Response.md)
- [GetCustomfieldContact200Response](docs/Model/GetCustomfieldContact200Response.md)
- [GetDataTags200Response](docs/Model/GetDataTags200Response.md)
- [GetDataTagsRequest](docs/Model/GetDataTagsRequest.md)
- [GetDatatagEntryKey200Response](docs/Model/GetDatatagEntryKey200Response.md)
- [GetDatatagId200Response](docs/Model/GetDatatagId200Response.md)
- [GetDirectoryById200Response](docs/Model/GetDirectoryById200Response.md)
- [GetDirectoryIdEntryKey200Response](docs/Model/GetDirectoryIdEntryKey200Response.md)
- [GetFileId200Response](docs/Model/GetFileId200Response.md)
- [GetListDirectories200Response](docs/Model/GetListDirectories200Response.md)
- [GetListDirectoriesRequest](docs/Model/GetListDirectoriesRequest.md)
- [GetProjectById200Response](docs/Model/GetProjectById200Response.md)
- [GetProjectList200Response](docs/Model/GetProjectList200Response.md)
- [GetProjectListRequest](docs/Model/GetProjectListRequest.md)
- [GetProjectListTemplates200Response](docs/Model/GetProjectListTemplates200Response.md)
- [GetReportId200Response](docs/Model/GetReportId200Response.md)
- [GetReportList200Response](docs/Model/GetReportList200Response.md)
- [GetReportListRequest](docs/Model/GetReportListRequest.md)
- [GetReportSaveList200Response](docs/Model/GetReportSaveList200Response.md)
- [GetReportSaveListRequest](docs/Model/GetReportSaveListRequest.md)
- [GetTaskById200Response](docs/Model/GetTaskById200Response.md)
- [GetTaskList200Response](docs/Model/GetTaskList200Response.md)
- [GetTaskListRequest](docs/Model/GetTaskListRequest.md)
- [GetTaskListTemplates200Response](docs/Model/GetTaskListTemplates200Response.md)
- [GetTaskProcessList200Response](docs/Model/GetTaskProcessList200Response.md)
- [GetTaskStatusList200Response](docs/Model/GetTaskStatusList200Response.md)
- [GetUserId200Response](docs/Model/GetUserId200Response.md)
- [GetUserList200Response](docs/Model/GetUserList200Response.md)
- [GetUserListRequest](docs/Model/GetUserListRequest.md)
- [GetUserPosts200Response](docs/Model/GetUserPosts200Response.md)
- [GetUserPosts200ResponsePostsInner](docs/Model/GetUserPosts200ResponsePostsInner.md)
- [GroupRequest](docs/Model/GroupRequest.md)
- [GroupResponse](docs/Model/GroupResponse.md)
- [NotifiedRequest](docs/Model/NotifiedRequest.md)
- [PeopleRequest](docs/Model/PeopleRequest.md)
- [PeopleResponse](docs/Model/PeopleResponse.md)
- [PersonRequest](docs/Model/PersonRequest.md)
- [PersonResponse](docs/Model/PersonResponse.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [PhoneResponse](docs/Model/PhoneResponse.md)
- [PostContact201Response](docs/Model/PostContact201Response.md)
- [PostContactAddDataTagEntryExistingComment201Response](docs/Model/PostContactAddDataTagEntryExistingComment201Response.md)
- [PostContactAddDataTagEntryNewComment201Response](docs/Model/PostContactAddDataTagEntryNewComment201Response.md)
- [PostContactFilters200Response](docs/Model/PostContactFilters200Response.md)
- [PostContactImportRequest](docs/Model/PostContactImportRequest.md)
- [PostFileUpload200Response](docs/Model/PostFileUpload200Response.md)
- [PostListDataTagEntrys200Response](docs/Model/PostListDataTagEntrys200Response.md)
- [PostListDataTagEntrysRequest](docs/Model/PostListDataTagEntrysRequest.md)
- [PostListDirectoryEntries200Response](docs/Model/PostListDirectoryEntries200Response.md)
- [PostListDirectoryEntriesRequest](docs/Model/PostListDirectoryEntriesRequest.md)
- [PostTaskAddDataTagEntryExistingComment201Response](docs/Model/PostTaskAddDataTagEntryExistingComment201Response.md)
- [PostTaskAddDataTagEntryNewComment201Response](docs/Model/PostTaskAddDataTagEntryNewComment201Response.md)
- [ProjectRequest](docs/Model/ProjectRequest.md)
- [ProjectResponse](docs/Model/ProjectResponse.md)
- [Recurrence](docs/Model/Recurrence.md)
- [RecurrenceDaily](docs/Model/RecurrenceDaily.md)
- [RecurrenceEndConditions](docs/Model/RecurrenceEndConditions.md)
- [RecurrenceEndConditionsNotify](docs/Model/RecurrenceEndConditionsNotify.md)
- [RecurrenceMonthly](docs/Model/RecurrenceMonthly.md)
- [RecurrenceWeekly](docs/Model/RecurrenceWeekly.md)
- [Reminder](docs/Model/Reminder.md)
- [Report](docs/Model/Report.md)
- [ReportField](docs/Model/ReportField.md)
- [ReportSave](docs/Model/ReportSave.md)
- [ReportSaveData](docs/Model/ReportSaveData.md)
- [ReportSaveDataItem](docs/Model/ReportSaveDataItem.md)
- [ReportSaveDataRow](docs/Model/ReportSaveDataRow.md)
- [TaskCreateRequest](docs/Model/TaskCreateRequest.md)
- [TaskResponse](docs/Model/TaskResponse.md)
- [TaskStatus](docs/Model/TaskStatus.md)
- [TaskStatusTextsInner](docs/Model/TaskStatusTextsInner.md)
- [TaskUpdateRequest](docs/Model/TaskUpdateRequest.md)
- [TimePoint](docs/Model/TimePoint.md)
- [UserRequest](docs/Model/UserRequest.md)
- [UserResponse](docs/Model/UserResponse.md)

## Authorization

Authentication schemes defined for the API:
### rest_auth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
