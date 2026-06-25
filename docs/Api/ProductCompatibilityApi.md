# OpenAPI\EbayInventoryClient\ProductCompatibilityApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceProductCompatibility()**](ProductCompatibilityApi.md#createOrReplaceProductCompatibility) | **PUT** /inventory_item/{sku}/product_compatibility | 
[**deleteProductCompatibility()**](ProductCompatibilityApi.md#deleteProductCompatibility) | **DELETE** /inventory_item/{sku}/product_compatibility | 
[**getProductCompatibility()**](ProductCompatibilityApi.md#getProductCompatibility) | **GET** /inventory_item/{sku}/product_compatibility | 


## `createOrReplaceProductCompatibility()`

```php
createOrReplaceProductCompatibility($content_language, $sku, $content_type, $compatibility): \OpenAPI\EbayInventoryClient\Model\BaseResponse
```



This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.<br><br><span class=\"tablenote\"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_language = 'content_language_example'; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.
$sku = 'sku_example'; // string | This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the compatibility list being created.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\" target=\"_blank \">getInventoryItems</a> method to retrieve SKU values.
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>.
$compatibility = new \OpenAPI\EbayInventoryClient\Model\Compatibility(); // \OpenAPI\EbayInventoryClient\Model\Compatibility | Details of the compatibility

try {
    $result = $apiInstance->createOrReplaceProductCompatibility($content_language, $sku, $content_type, $compatibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->createOrReplaceProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_language** | **string**| This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German. |
 **sku** | **string**| This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the compatibility list being created.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getInventoryItems&lt;/a&gt; method to retrieve SKU values. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. |
 **compatibility** | [**\OpenAPI\EbayInventoryClient\Model\Compatibility**](../Model/Compatibility.md)| Details of the compatibility |

### Return type

[**\OpenAPI\EbayInventoryClient\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductCompatibility()`

```php
deleteProductCompatibility($sku)
```



This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | This path parameter specifies the SKU (stock keeping unit) of the inventory item that is associated with the product compatibility list that is being deleted.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\" target=\"_blank \">getInventoryItems</a> method to retrieve SKU values.

try {
    $apiInstance->deleteProductCompatibility($sku);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->deleteProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| This path parameter specifies the SKU (stock keeping unit) of the inventory item that is associated with the product compatibility list that is being deleted.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getInventoryItems&lt;/a&gt; method to retrieve SKU values. |

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

## `getProductCompatibility()`

```php
getProductCompatibility($sku): \OpenAPI\EbayInventoryClient\Model\Compatibility
```



This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this inventory item. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the product compatibility list being retrieved.<br><br>Use the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\" target=\"_blank \">getInventoryItems</a> method to retrieve SKU values.

try {
    $result = $apiInstance->getProductCompatibility($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->getProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the product compatibility list being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-inventory_item-getinventoryitems\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getInventoryItems&lt;/a&gt; method to retrieve SKU values. |

### Return type

[**\OpenAPI\EbayInventoryClient\Model\Compatibility**](../Model/Compatibility.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
