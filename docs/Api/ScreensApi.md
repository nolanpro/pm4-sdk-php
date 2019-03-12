# ProcessMaker\Client\ScreensApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScreens**](ScreensApi.md#createScreens) | **POST** /screens | Save a new screens
[**deleteScreen**](ScreensApi.md#deleteScreen) | **DELETE** /screens/screensId | Delete a screen
[**duplicateScript**](ScreensApi.md#duplicateScript) | **PUT** /screens/screensId/duplicate | duplicate a screen
[**getScreens**](ScreensApi.md#getScreens) | **GET** /screens | Returns all screens that the user has access to
[**getScreensById**](ScreensApi.md#getScreensById) | **GET** /screens/screensId | Get single screens by ID
[**updateScreen**](ScreensApi.md#updateScreen) | **PUT** /screens/screensId | Update a screen


# **createScreens**
> \ProcessMaker\Client\Model\Screens createScreens($screens_editable)

Save a new screens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screens_editable = new \ProcessMaker\Client\Model\ScreensEditable(); // \ProcessMaker\Client\Model\ScreensEditable | 

try {
    $result = $apiInstance->createScreens($screens_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->createScreens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screens_editable** | [**\ProcessMaker\Client\Model\ScreensEditable**](../Model/ScreensEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Screens**](../Model/Screens.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScreen**
> \ProcessMaker\Client\Model\Screens deleteScreen($screens_id)

Delete a screen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screens_id = 'screens_id_example'; // string | ID of screen to return

try {
    $result = $apiInstance->deleteScreen($screens_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->deleteScreen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screens_id** | **string**| ID of screen to return |

### Return type

[**\ProcessMaker\Client\Model\Screens**](../Model/Screens.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateScript**
> \ProcessMaker\Client\Model\Screens duplicateScript($screens_id, $screens_editable)

duplicate a screen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screens_id = 'screens_id_example'; // string | ID of screen to return
$screens_editable = new \ProcessMaker\Client\Model\ScreensEditable(); // \ProcessMaker\Client\Model\ScreensEditable | 

try {
    $result = $apiInstance->duplicateScript($screens_id, $screens_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->duplicateScript: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screens_id** | **string**| ID of screen to return |
 **screens_editable** | [**\ProcessMaker\Client\Model\ScreensEditable**](../Model/ScreensEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Screens**](../Model/Screens.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreens**
> \ProcessMaker\Client\Model\InlineResponse20016 getScreens($filter, $order_by, $order_direction, $per_page, $include)

Returns all screens that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring.
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 
$per_page = 10; // int | 
$include = 'include_example'; // string | Include data from related models in payload. Comma seperated list.

try {
    $result = $apiInstance->getScreens($filter, $order_by, $order_direction, $per_page, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->getScreens: ', $e->getMessage(), PHP_EOL;
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
 **include** | **string**| Include data from related models in payload. Comma seperated list. | [optional]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreensById**
> \ProcessMaker\Client\Model\Screens getScreensById($screens_id)

Get single screens by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screens_id = 'screens_id_example'; // string | ID of screens to return

try {
    $result = $apiInstance->getScreensById($screens_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->getScreensById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screens_id** | **string**| ID of screens to return |

### Return type

[**\ProcessMaker\Client\Model\Screens**](../Model/Screens.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScreen**
> \ProcessMaker\Client\Model\Screens updateScreen($screens_id, $screens_editable)

Update a screen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screens_id = 'screens_id_example'; // string | ID of screen to return
$screens_editable = new \ProcessMaker\Client\Model\ScreensEditable(); // \ProcessMaker\Client\Model\ScreensEditable | 

try {
    $result = $apiInstance->updateScreen($screens_id, $screens_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->updateScreen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screens_id** | **string**| ID of screen to return |
 **screens_editable** | [**\ProcessMaker\Client\Model\ScreensEditable**](../Model/ScreensEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Screens**](../Model/Screens.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

