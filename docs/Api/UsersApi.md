# ProcessMaker\Client\UsersApi

All URIs are relative to *http://localhost/api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UsersApi.md#createUser) | **POST** /users | Save a new users
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete a user
[**getUserById**](UsersApi.md#getUserById) | **GET** /users/{user_id} | Get single user by ID
[**getUsers**](UsersApi.md#getUsers) | **GET** /users | Returns all users
[**updateUsers**](UsersApi.md#updateUsers) | **PUT** /users/{user_id} | Update a user


# **createUser**
> \ProcessMaker\Client\Model\Users createUser($users_editable)

Save a new users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$users_editable = new \ProcessMaker\Client\Model\UsersEditable(); // \ProcessMaker\Client\Model\UsersEditable | 

try {
    $result = $apiInstance->createUser($users_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_editable** | [**\ProcessMaker\Client\Model\UsersEditable**](../Model/UsersEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Users**](../Model/Users.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \ProcessMaker\Client\Model\Users deleteUser($user_id)

Delete a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | ID of user to return

try {
    $result = $apiInstance->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| ID of user to return |

### Return type

[**\ProcessMaker\Client\Model\Users**](../Model/Users.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserById**
> \ProcessMaker\Client\Model\Users getUserById($user_id)

Get single user by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | ID of user to return

try {
    $result = $apiInstance->getUserById($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| ID of user to return |

### Return type

[**\ProcessMaker\Client\Model\Users**](../Model/Users.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \ProcessMaker\Client\Model\InlineResponse20019 getUsers($filter, $order_by, $order_direction, $per_page, $include)

Returns all users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\UsersApi(
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
    $result = $apiInstance->getUsers($filter, $order_by, $order_direction, $per_page, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
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

[**\ProcessMaker\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsers**
> \ProcessMaker\Client\Model\Users updateUsers($user_id, $users_editable)

Update a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: pm_api_bearer
$config = ProcessMaker\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ProcessMaker\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | ID of user to return
$users_editable = new \ProcessMaker\Client\Model\UsersEditable(); // \ProcessMaker\Client\Model\UsersEditable | 

try {
    $result = $apiInstance->updateUsers($user_id, $users_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| ID of user to return |
 **users_editable** | [**\ProcessMaker\Client\Model\UsersEditable**](../Model/UsersEditable.md)|  |

### Return type

[**\ProcessMaker\Client\Model\Users**](../Model/Users.md)

### Authorization

[pm_api_bearer](../../README.md#pm_api_bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

