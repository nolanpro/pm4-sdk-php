# ProcessMaker\Client\TasksApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTasks**](TasksApi.md#getTasks) | **GET** /tasks | Returns all tasks that the user has access to
[**updateTask**](TasksApi.md#updateTask) | **PUT** /tasks/{task_id} | Update a task


# **getTasks**
> \ProcessMaker\Client\Model\InlineResponse20018 getTasks($process_request_id, $filter, $order_by, $order_direction)

Returns all tasks that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_request_id = 56; // int | Process request id
$filter = 'filter_example'; // string | Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring.
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 

try {
    $result = $apiInstance->getTasks($process_request_id, $filter, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_request_id** | **int**| Process request id | [optional]
 **filter** | **string**| Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring. | [optional]
 **order_by** | **string**| Field to order results by | [optional]
 **order_direction** | **string**|  | [optional] [default to &#39;asc&#39;]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \ProcessMaker\Client\Model\ProcessRequestToken updateTask($task_id, $process_request_token_editable)

Update a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | ID of task to update
$process_request_token_editable = new \ProcessMaker\Client\Model\ProcessRequestTokenEditable(); // \ProcessMaker\Client\Model\ProcessRequestTokenEditable | 

try {
    $result = $apiInstance->updateTask($task_id, $process_request_token_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| ID of task to update |
 **process_request_token_editable** | [**\ProcessMaker\Client\Model\ProcessRequestTokenEditable**](../Model/ProcessRequestTokenEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\ProcessRequestToken**](../Model/ProcessRequestToken.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

