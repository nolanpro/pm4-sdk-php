# ProcessMaker\Client\ProcessRequestsApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProcessRequest**](ProcessRequestsApi.md#deleteProcessRequest) | **DELETE** /requests/{process_request_id} | Delete a process request
[**getProcessRequestById**](ProcessRequestsApi.md#getProcessRequestById) | **GET** /requests/{process_request_id} | Get single process request by ID
[**getProcessesRequests**](ProcessRequestsApi.md#getProcessesRequests) | **GET** /requests | Returns all process Requests that the user has access to
[**updateProcessRequest**](ProcessRequestsApi.md#updateProcessRequest) | **PUT** /requests/{process_request_id} | Update a process request


# **deleteProcessRequest**
> \ProcessMaker\Client\Model\ProcessRequest deleteProcessRequest($process_request_id)

Delete a process request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_request_id = 'process_request_id_example'; // string | ID of process request to return

try {
    $result = $apiInstance->deleteProcessRequest($process_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessRequestsApi->deleteProcessRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_request_id** | **string**| ID of process request to return |

### Return type

[**\ProcessMaker\Client\Model\ProcessRequest**](../Model/ProcessRequest.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessRequestById**
> \ProcessMaker\Client\Model\ProcessRequest getProcessRequestById($process_request_id)

Get single process request by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_request_id = 'process_request_id_example'; // string | ID of process request to return

try {
    $result = $apiInstance->getProcessRequestById($process_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessRequestsApi->getProcessRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_request_id** | **string**| ID of process request to return |

### Return type

[**\ProcessMaker\Client\Model\ProcessRequest**](../Model/ProcessRequest.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessesRequests**
> \ProcessMaker\Client\Model\InlineResponse20014 getProcessesRequests($type, $filter, $order_by, $order_direction, $per_page, $include)

Returns all process Requests that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Only return requests by type
$filter = 'filter_example'; // string | Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring.
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 
$per_page = 10; // int | 
$include = 'include_example'; // string | Include data from related models in payload. Comma seperated list.

try {
    $result = $apiInstance->getProcessesRequests($type, $filter, $order_by, $order_direction, $per_page, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessRequestsApi->getProcessesRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Only return requests by type | [optional]
 **filter** | **string**| Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring. | [optional]
 **order_by** | **string**| Field to order results by | [optional]
 **order_direction** | **string**|  | [optional] [default to &#39;asc&#39;]
 **per_page** | **int**|  | [optional] [default to 10]
 **include** | **string**| Include data from related models in payload. Comma seperated list. | [optional]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcessRequest**
> \ProcessMaker\Client\Model\ProcessRequest updateProcessRequest($process_request_id, $process_request_editable)

Update a process request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_request_id = 'process_request_id_example'; // string | ID of process request to return
$process_request_editable = new \ProcessMaker\Client\Model\ProcessRequestEditable(); // \ProcessMaker\Client\Model\ProcessRequestEditable | 

try {
    $result = $apiInstance->updateProcessRequest($process_request_id, $process_request_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessRequestsApi->updateProcessRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_request_id** | **string**| ID of process request to return |
 **process_request_editable** | [**\ProcessMaker\Client\Model\ProcessRequestEditable**](../Model/ProcessRequestEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\ProcessRequest**](../Model/ProcessRequest.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

