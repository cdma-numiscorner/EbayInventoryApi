# OpenAPI\EbayInventoryClient\LocationApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryLocation()**](LocationApi.md#createInventoryLocation) | **POST** /location/{merchantLocationKey} | 
[**deleteInventoryLocation()**](LocationApi.md#deleteInventoryLocation) | **DELETE** /location/{merchantLocationKey} | 
[**disableInventoryLocation()**](LocationApi.md#disableInventoryLocation) | **POST** /location/{merchantLocationKey}/disable | 
[**enableInventoryLocation()**](LocationApi.md#enableInventoryLocation) | **POST** /location/{merchantLocationKey}/enable | 
[**getInventoryLocation()**](LocationApi.md#getInventoryLocation) | **GET** /location/{merchantLocationKey} | 
[**getInventoryLocations()**](LocationApi.md#getInventoryLocations) | **GET** /location | 
[**updateInventoryLocation()**](LocationApi.md#updateInventoryLocation) | **POST** /location/{merchantLocationKey}/update_location_details | 


## `createInventoryLocation()`

```php
createInventoryLocation($merchant_location_key, $content_type, $inventory_location_full)
```



Use this call to create a new inventory location. In order to create and publish an offer (and create an eBay listing), a seller must have at least one location, as every offer must be associated with at least one location.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#location \" target=\"_blank\">Location fields</a> for a list of fields required to publish an offer.</p></span></div><br>Upon first creating an inventory location, only a seller-defined location identifier and a physical location is required, and once set, these values can not be changed. The unique identifier value (<a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations.inventorylocationresponse.merchantlocationkey\" target=\"_blank\">merchantLocationKey</a>) is passed in at the end of the call URI. This <strong>merchantLocationKey</strong> value will be used in other Inventory Location calls to identify the location to perform an action against.<br><br>When creating an inventory location, the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-createinventorylocation.inventorylocationfull.locationtypes\" target=\"_blank\">locationTypes</a> can be specified to define the function of a location. At this time, the following <strong>locationTypes</strong> are supported:<ul><li><b>Fulfillment center</b> locations are used by sellers selling products through the Multi-warehouse program to get improved estimated delivery dates on their listings. A full address is required when creating a fulfillment center location, as well as the <b>fulfillmentCenterSpecifications</b> of the location. For more information on using the fulfillment center location type to get improved delivery dates, see <a href=\"/api-docs/sell/static/inventory/multi-warehouse-program.html\" target=\"_blank \">Multi-warehouse program</a>.</li><li><b>Warehouse</b> locations are used for traditional shipping. A full street address is not needed, but the <b>postalCode</b> and <b>country</b> OR <b>city</b>, <b>stateOrProvince</b>, and <b>country</b> of the location must be provided.</li><li><b>Store</b> locations are generally used by merchants selling product through the In-Store Pickup program. A full address is required when creating a store location.</li></ul><br>Note that all inventory locations are \"enabled\" by default when they are created, and you must specifically disable them (by passing in a value of <code>DISABLED</code> in the <strong>merchantLocationStatus</strong> field) if you want them to be set to the disabled state. The seller's inventory cannot be loaded to inventory locations in the disabled state.<br><br>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <code>204 No Content</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies the unique merchant-defined key (ID) for the inventory location that is to be deleted.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Maximum length</b>: 36
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>.
$inventory_location_full = new \OpenAPI\EbayInventoryClient\Model\InventoryLocationFull(); // \OpenAPI\EbayInventoryClient\Model\InventoryLocationFull | Inventory Location details

try {
    $apiInstance->createInventoryLocation($merchant_location_key, $content_type, $inventory_location_full);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->createInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies the unique merchant-defined key (ID) for the inventory location that is to be deleted.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. |
 **inventory_location_full** | [**\OpenAPI\EbayInventoryClient\Model\InventoryLocationFull**](../Model/InventoryLocationFull.md)| Inventory Location details |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInventoryLocation()`

```php
deleteInventoryLocation($merchant_location_key)
```



This call deletes the inventory location that is specified in the <strong>merchantLocationKey</strong> path parameter. Note that deleting a location will not affect any active eBay listings associated with the deleted location, but the seller will not be able modify the offers associated with the location once it is deleted.</p><span class=\"tablenote\"><b>Note:</b> Deletion is not currently supported for fulfillment center locations, as location mappings will still be retained despite the location being deleted. Instead, fulfillment center locations should be disabled using the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-disableinventorylocation\" target=\"_blank\">disableInventoryLocation</a> method.</span><br>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <code>200 OK</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies the unique merchant-defined key (ID) for the inventory location that is to be deleted.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Maximum length</b>: 36

try {
    $apiInstance->deleteInventoryLocation($merchant_location_key);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->deleteInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies the unique merchant-defined key (ID) for the inventory location that is to be deleted.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableInventoryLocation()`

```php
disableInventoryLocation($merchant_location_key): object
```



This call disables the inventory location that is specified in the <strong>merchantLocationKey</strong> path parameter. Sellers can not load/modify inventory to disabled locations. Note that disabling a location will not affect any active eBay listings associated with the disabled location, but the seller will not be able modify the offers associated with a disabled location.</p><p>A successful call will return an HTTP status value of <code>200 OK</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be disabled. <br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Maximum length</b>: 36

try {
    $result = $apiInstance->disableInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->disableInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be disabled. &lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableInventoryLocation()`

```php
enableInventoryLocation($merchant_location_key): object
```



This call enables a disabled inventory location that is specified in the <strong>merchantLocationKey</strong> path parameter. Once a disabled location is enabled, sellers can start loading/modifying inventory to that location.<br><br>A successful call will return an HTTP status value of <code>200 OK</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies unique merchant-defined key (ID) for a <code>disabled</code> inventory location that is to be enabled.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Maximum length</b>: 36

try {
    $result = $apiInstance->enableInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->enableInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies unique merchant-defined key (ID) for a &lt;code&gt;disabled&lt;/code&gt; inventory location that is to be enabled.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryLocation()`

```php
getInventoryLocation($merchant_location_key): \OpenAPI\EbayInventoryClient\Model\InventoryLocationResponse
```



This call retrieves all defined details of the inventory location that is specified by the <b>merchantLocationKey</b> path parameter.<br><br>A successful call will return an HTTP status value of <code>200 OK</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is being retrieved. <br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys. <br><br><b>Maximum length</b>: 36

try {
    $result = $apiInstance->getInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is being retrieved. &lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys. &lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |

### Return type

[**\OpenAPI\EbayInventoryClient\Model\InventoryLocationResponse**](../Model/InventoryLocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryLocations()`

```php
getInventoryLocations($limit, $offset): \OpenAPI\EbayInventoryClient\Model\LocationResponse
```



This call retrieves all defined details for every inventory location associated with the seller's account. There are no required parameters for this call and no request payload. However, there are two optional query parameters, <strong>limit</strong> and <strong>offset</strong>. The <strong>limit</strong> query parameter sets the maximum number of locations returned on one page of data, and the <strong>offset</strong> query parameter specifies the page of data to return. These query parameters are discussed more in the <strong>URI parameters</strong> table below. <p>The <code>authorization</code> HTTP header is the only required request header for this call.<br><br>A successful call will return an HTTP status value of <code>200 OK</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. <br><br> <strong>Min</strong>: 1
$offset = 'offset_example'; // string | Specifies the number of locations to skip in the result set before returning the first location in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->getInventoryLocations($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getInventoryLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. &lt;br&gt;&lt;br&gt; &lt;strong&gt;Min&lt;/strong&gt;: 1 | [optional]
 **offset** | **string**| Specifies the number of locations to skip in the result set before returning the first location in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]

### Return type

[**\OpenAPI\EbayInventoryClient\Model\LocationResponse**](../Model/LocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInventoryLocation()`

```php
updateInventoryLocation($merchant_location_key, $content_type, $inventory_location)
```



Use this call to update location details for an existing inventory location. Specify the inventory location you want to update using the <b>merchantLocationKey</b> path parameter. <p>You can update the following text-based fields: <strong>name</strong>, <strong>phone</strong>, <strong>timeZoneId</strong>, <strong>geoCoordinates</strong>, <strong>fulfillmentCenterSpecifications</strong>, <strong>locationTypes</strong>, <strong>locationWebUrl</strong>, <strong>locationInstructions</strong> and <strong>locationAdditionalInformation</strong> any number of times for any location type.</p> <p>For warehouse and store inventory locations, address fields can be updated any number of times. Address fields <b>cannot</b> be updated for fulfillment center locations. However, if any address fields were omitted during the <b>createInventoryLocation</b> call, they can be added through this method.<br><span class=\"tablenote\"><b>Note:</b> When updating a warehouse location to a fulfillment center, sellers can update any of the address fields a single time during the same call used to make this update. After this, they can no longer be updated.</span><p>For store locations, the operating hours and/or the special hours can also be updated.</p><p>Whatever text is passed in for these fields in an <strong>updateInventoryLocation</strong> call will replace the current text strings defined for these fields.</p><p>Unless one or more errors and/or warnings occurs with the call, there is no response payload for this call. A successful call will return an HTTP status value of <code>204 No Content</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be updated. <br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\">getInventoryLocations</a> method to retrieve merchant location keys. <br><br><b>Maximum length</b>: 36
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>.
$inventory_location = new \OpenAPI\EbayInventoryClient\Model\InventoryLocation(); // \OpenAPI\EbayInventoryClient\Model\InventoryLocation | The inventory location details to be updated.

try {
    $apiInstance->updateInventoryLocation($merchant_location_key, $content_type, $inventory_location);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->updateInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be updated. &lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys. &lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length&lt;/b&gt;: 36 |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. |
 **inventory_location** | [**\OpenAPI\EbayInventoryClient\Model\InventoryLocation**](../Model/InventoryLocation.md)| The inventory location details to be updated. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
