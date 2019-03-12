# ProcessMaker\Client\NotificationsApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNotification**](NotificationsApi.md#createNotification) | **POST** /notifications | Save a new notifications
[**deleteNotification**](NotificationsApi.md#deleteNotification) | **DELETE** /notifications/notificationId | Delete a notification
[**getNotificationById**](NotificationsApi.md#getNotificationById) | **GET** /notifications/notificationId | Get single notification by ID
[**getNotifications**](NotificationsApi.md#getNotifications) | **GET** /notifications | Returns all notifications that the user has access to
[**processMakerHttpControllersApiNotificationControllerUpdateAsRead**](NotificationsApi.md#processMakerHttpControllersApiNotificationControllerUpdateAsRead) | **PUT** /read_notifications | Mark notifications as read by the user
[**processMakerHttpControllersApiNotificationControllerUpdateAsReadAll**](NotificationsApi.md#processMakerHttpControllersApiNotificationControllerUpdateAsReadAll) | **PUT** /read_all_notifications | Mark notifications as read by id and type
[**updateNotification**](NotificationsApi.md#updateNotification) | **PUT** /notifications/notificationId | Update a notification


# **createNotification**
> \ProcessMaker\Client\Model\Notifications createNotification($notifications_editable)

Save a new notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notifications_editable = new \ProcessMaker\Client\Model\NotificationsEditable(); // \ProcessMaker\Client\Model\NotificationsEditable | 

try {
    $result = $apiInstance->createNotification($notifications_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notifications_editable** | [**\ProcessMaker\Client\Model\NotificationsEditable**](../Model/NotificationsEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Notifications**](../Model/Notifications.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNotification**
> \ProcessMaker\Client\Model\Notifications deleteNotification($notification_id)

Delete a notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = 'notification_id_example'; // string | ID of notification to return

try {
    $result = $apiInstance->deleteNotification($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| ID of notification to return |

### Return type

[**\ProcessMaker\Client\Model\Notifications**](../Model/Notifications.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationById**
> \ProcessMaker\Client\Model\Notifications getNotificationById($notification_id)

Get single notification by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = 'notification_id_example'; // string | ID of notification to return

try {
    $result = $apiInstance->getNotificationById($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| ID of notification to return |

### Return type

[**\ProcessMaker\Client\Model\Notifications**](../Model/Notifications.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotifications**
> \ProcessMaker\Client\Model\InlineResponse20010 getNotifications($status, $filter, $order_by, $order_direction, $per_page, $include)

Returns all notifications that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Only return notifications by status (unread, all, etc.)
$filter = 'filter_example'; // string | Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring.
$order_by = 'order_by_example'; // string | Field to order results by
$order_direction = 'asc'; // string | 
$per_page = 10; // int | 
$include = 'include_example'; // string | Include data from related models in payload. Comma seperated list.

try {
    $result = $apiInstance->getNotifications($status, $filter, $order_by, $order_direction, $per_page, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Only return notifications by status (unread, all, etc.) | [optional]
 **filter** | **string**| Filter results by string. Searches Name, Description, and Status. Status must match exactly. Others can be a substring. | [optional]
 **order_by** | **string**| Field to order results by | [optional]
 **order_direction** | **string**|  | [optional] [default to &#39;asc&#39;]
 **per_page** | **int**|  | [optional] [default to 10]
 **include** | **string**| Include data from related models in payload. Comma seperated list. | [optional]

### Return type

[**\ProcessMaker\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processMakerHttpControllersApiNotificationControllerUpdateAsRead**
> processMakerHttpControllersApiNotificationControllerUpdateAsRead($inline_object2)

Mark notifications as read by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object2 = new \ProcessMaker\Client\Model\InlineObject2(); // \ProcessMaker\Client\Model\InlineObject2 | 

try {
    $apiInstance->processMakerHttpControllersApiNotificationControllerUpdateAsRead($inline_object2);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->processMakerHttpControllersApiNotificationControllerUpdateAsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object2** | [**\ProcessMaker\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

void (empty response body)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processMakerHttpControllersApiNotificationControllerUpdateAsReadAll**
> processMakerHttpControllersApiNotificationControllerUpdateAsReadAll($inline_object3)

Mark notifications as read by id and type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object3 = new \ProcessMaker\Client\Model\InlineObject3(); // \ProcessMaker\Client\Model\InlineObject3 | 

try {
    $apiInstance->processMakerHttpControllersApiNotificationControllerUpdateAsReadAll($inline_object3);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->processMakerHttpControllersApiNotificationControllerUpdateAsReadAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\ProcessMaker\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

void (empty response body)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotification**
> \ProcessMaker\Client\Model\Notifications updateNotification($notification_id, $notifications_editable)

Update a notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = 'notification_id_example'; // string | ID of notification to return
$notifications_editable = new \ProcessMaker\Client\Model\NotificationsEditable(); // \ProcessMaker\Client\Model\NotificationsEditable | 

try {
    $result = $apiInstance->updateNotification($notification_id, $notifications_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| ID of notification to return |
 **notifications_editable** | [**\ProcessMaker\Client\Model\NotificationsEditable**](../Model/NotificationsEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Notifications**](../Model/Notifications.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

