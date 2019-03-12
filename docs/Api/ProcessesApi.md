# ProcessMaker\Client\ProcessesApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProcess**](ProcessesApi.md#createProcess) | **POST** /processes | Save a new process
[**deleteProcess**](ProcessesApi.md#deleteProcess) | **DELETE** /processes/{processId} | Delete a process
[**exportProcess**](ProcessesApi.md#exportProcess) | **GET** /processes/{processId}/export | Export a single process by ID
[**getProcessById**](ProcessesApi.md#getProcessById) | **GET** /processes/{processId} | Get single process by ID
[**getProcesses**](ProcessesApi.md#getProcesses) | **GET** /processes | Returns all processes that the user has access to
[**importProcess**](ProcessesApi.md#importProcess) | **POST** /processes/import | Import a new process
[**restoreProcess**](ProcessesApi.md#restoreProcess) | **PUT** /processes/{processId}/restore | Restore an inactive process
[**startProcesses**](ProcessesApi.md#startProcesses) | **GET** /start_processes | Returns the list of processes that the user can start
[**triggerStartEvent**](ProcessesApi.md#triggerStartEvent) | **POST** /process_events/{process_id} | Start a new process
[**updateProcess**](ProcessesApi.md#updateProcess) | **PUT** /processes/{processId} | Update a process


# **createProcess**
> \ProcessMaker\Client\Model\Process createProcess($process_editable)

Save a new process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_editable = new \ProcessMaker\Client\Model\ProcessEditable(); // \ProcessMaker\Client\Model\ProcessEditable | 

try {
    $result = $apiInstance->createProcess($process_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->createProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_editable** | [**\ProcessMaker\Client\Model\ProcessEditable**](../Model/ProcessEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcess**
> \ProcessMaker\Client\Model\Process deleteProcess($process_id)

Delete a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return

try {
    $result = $apiInstance->deleteProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->deleteProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportProcess**
> \ProcessMaker\Client\Model\Process exportProcess($process_id)

Export a single process by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return

try {
    $result = $apiInstance->exportProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->exportProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessById**
> \ProcessMaker\Client\Model\Process getProcessById($process_id)

Get single process by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return

try {
    $result = $apiInstance->getProcessById($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->getProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcesses**
> \ProcessMaker\Client\Model\InlineResponse20012 getProcesses($filter, $order_by, $order_direction, $per_page, $status, $include)

Returns all processes that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring.
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 
$per_page = 10; // int | 
$status = 'active'; // string | 
$include = 'include_example'; // string | Include data from related models in payload. Comma seperated list.

try {
    $result = $apiInstance->getProcesses($filter, $order_by, $order_direction, $per_page, $status, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->getProcesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring. | [optional]
 **order_by** | **string**| Field to order results by | [optional]
 **order_direction** | **string**|  | [optional] [default to &#39;asc&#39;]
 **per_page** | **int**|  | [optional] [default to 10]
 **status** | **string**|  | [optional] [default to &#39;active&#39;]
 **include** | **string**| Include data from related models in payload. Comma seperated list. | [optional]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importProcess**
> \ProcessMaker\Client\Model\Process importProcess($file)

Import a new process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | file to upload

try {
    $result = $apiInstance->importProcess($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->importProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| file to upload |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreProcess**
> \ProcessMaker\Client\Model\Process restoreProcess($process_id, $process_editable)

Restore an inactive process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return
$process_editable = new \ProcessMaker\Client\Model\ProcessEditable(); // \ProcessMaker\Client\Model\ProcessEditable | 

try {
    $result = $apiInstance->restoreProcess($process_id, $process_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->restoreProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |
 **process_editable** | [**\ProcessMaker\Client\Model\ProcessEditable**](../Model/ProcessEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startProcesses**
> \ProcessMaker\Client\Model\InlineResponse20013 startProcesses($order_by, $order_direction, $per_page, $include)

Returns the list of processes that the user can start

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 
$per_page = 10; // int | 
$include = 'include_example'; // string | Include data from related models in payload. Comma seperated list.

try {
    $result = $apiInstance->startProcesses($order_by, $order_direction, $per_page, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->startProcesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| Field to order results by | [optional]
 **order_direction** | **string**|  | [optional] [default to &#39;asc&#39;]
 **per_page** | **int**|  | [optional] [default to 10]
 **include** | **string**| Include data from related models in payload. Comma seperated list. | [optional]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerStartEvent**
> \ProcessMaker\Client\Model\ProcessRequest triggerStartEvent($process_id, $event, $body)

Start a new process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return
$event = 'event_example'; // string | Node ID of the start event
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->triggerStartEvent($process_id, $event, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->triggerStartEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |
 **event** | **string**| Node ID of the start event |
 **body** | **object**|  | [optional]

### Return type

[**\ProcessMaker\Client\Model\ProcessRequest**](../Model/ProcessRequest.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcess**
> \ProcessMaker\Client\Model\Process updateProcess($process_id, $process_editable)

Update a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 'process_id_example'; // string | ID of process to return
$process_editable = new \ProcessMaker\Client\Model\ProcessEditable(); // \ProcessMaker\Client\Model\ProcessEditable | 

try {
    $result = $apiInstance->updateProcess($process_id, $process_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->updateProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| ID of process to return |
 **process_editable** | [**\ProcessMaker\Client\Model\ProcessEditable**](../Model/ProcessEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Process**](../Model/Process.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

