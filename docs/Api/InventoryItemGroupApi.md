# OpenAPI\EbayInventoryClient\InventoryItemGroupApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceInventoryItemGroup()**](InventoryItemGroupApi.md#createOrReplaceInventoryItemGroup) | **PUT** /inventory_item_group/{inventoryItemGroupKey} | 
[**deleteInventoryItemGroup()**](InventoryItemGroupApi.md#deleteInventoryItemGroup) | **DELETE** /inventory_item_group/{inventoryItemGroupKey} | 
[**getInventoryItemGroup()**](InventoryItemGroupApi.md#getInventoryItemGroup) | **GET** /inventory_item_group/{inventoryItemGroupKey} | 


## `createOrReplaceInventoryItemGroup()`

```php
createOrReplaceInventoryItemGroup($content_language, $inventory_item_group_key, $content_type, $inventory_item_group): \OpenAPI\EbayInventoryClient\Model\BaseResponse
```



<span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call creates a new inventory item group or updates an existing inventory item group. It is up to sellers whether they want to create a complete inventory item group record right from the start, or sellers can provide only some information with the initial <strong>createOrReplaceInventoryItemGroup</strong> call, and then make one or more additional <strong>createOrReplaceInventoryItemGroup</strong> calls to complete the inventory item group record. Upon first creating an inventory item group record, the only required elements are  the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.subtitle\" target=\"_blank\">inventoryItemGroupKey</a> identifier in the call URI, and the members of the inventory item group specified through the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-createorreplaceinventoryitemgroup.inventoryitemgroup.variantskus\" target=\"_blank\">variantSKUs</a> array in the request payload.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#inventory_item_group\" target=\"_blank\">Inventory item group fields</a> for a list of fields required to publish an offer.</p></span></div><br><span class=\"tablenote\"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers.</span><br>In the case of updating/replacing an existing inventory item group, this call does a complete replacement of the existing inventory item group record, so all fields (including the member SKUs) that make up the inventory item group are required, regardless of whether their values changed. So, when replacing/updating an inventory item group record, it is advised that the seller run a <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-inventory_item_group-getinventoryitemgroup\" target=\"_blank\">getInventoryItemGroup</a> call for that inventory item group to see all of its current values/settings/members before attempting to update the record. And if changes are made to an inventory item group that is part of a live, multiple-variation eBay listing, these changes automatically update the eBay listing. For example, if a SKU value is removed from the inventory item group, the corresponding product variation will be removed from the eBay listing as well.<br><br>In addition to the required inventory item group identifier and member SKUs, other key information that is set with this call include: <ul> <li>Title and description of the inventory item group. The string values provided in these fields will actually become the listing title and listing description of the listing once the first SKU of the inventory item group is published successfully</li> <li>Common aspects that inventory items in the group share</li> <li>Product aspects that vary within each product variation</li> <li>Links to images demonstrating the variations of the product, and these images should correspond to the product aspect that is set with the <a href=\"/develop/api/sell/inventory_api#sell-inventory_api-listing-bulkmigratelisting\" target=\"_blank\">variesBy.aspectsImageVariesBy</a> field</li> </ul><br><span class=\"tablenote\"><b>Note:</b> For more information, see <a href=\"/api-docs/sell/static/inventory/inventory-item-groups.html\" target=\"_blank\">Creating and managing inventory item groups</a>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\InventoryItemGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_language = 'content_language_example'; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.
$inventory_item_group_key = 'inventory_item_group_key_example'; // string | This path parameter specifies the unique identifier of the inventory item group being created or updated. This identifier is defined by the seller.<br><br>This value cannot be changed once it is set.<br><br><b>Maximum length:</b> 50
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>.
$inventory_item_group = new \OpenAPI\EbayInventoryClient\Model\InventoryItemGroup(); // \OpenAPI\EbayInventoryClient\Model\InventoryItemGroup | Details of the inventory Item Group

try {
    $result = $apiInstance->createOrReplaceInventoryItemGroup($content_language, $inventory_item_group_key, $content_type, $inventory_item_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->createOrReplaceInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_language** | **string**| This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German. |
 **inventory_item_group_key** | **string**| This path parameter specifies the unique identifier of the inventory item group being created or updated. This identifier is defined by the seller.&lt;br&gt;&lt;br&gt;This value cannot be changed once it is set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum length:&lt;/b&gt; 50 |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. |
 **inventory_item_group** | [**\OpenAPI\EbayInventoryClient\Model\InventoryItemGroup**](../Model/InventoryItemGroup.md)| Details of the inventory Item Group |

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

## `deleteInventoryItemGroup()`

```php
deleteInventoryItemGroup($inventory_item_group_key)
```



This call deletes the inventory item group for a given <strong>inventoryItemGroupKey</strong> value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\InventoryItemGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_item_group_key = 'inventory_item_group_key_example'; // string | This path parameter specifies the unique identifier of the inventory item group being deleted. This value is assigned by the seller when an inventory item group is created.

try {
    $apiInstance->deleteInventoryItemGroup($inventory_item_group_key);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->deleteInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_item_group_key** | **string**| This path parameter specifies the unique identifier of the inventory item group being deleted. This value is assigned by the seller when an inventory item group is created. |

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

## `getInventoryItemGroup()`

```php
getInventoryItemGroup($inventory_item_group_key): \OpenAPI\EbayInventoryClient\Model\InventoryItemGroup
```



This call retrieves the inventory item group for a given <strong>inventoryItemGroupKey</strong> value. The <strong>inventoryItemGroupKey</strong> value is passed in at the end of the call URI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\EbayInventoryClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\EbayInventoryClient\Api\InventoryItemGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_item_group_key = 'inventory_item_group_key_example'; // string | This path parameter specifies the unique identifier of the inventory item group being retrieved. This value is assigned by the seller when an inventory item group is created.

try {
    $result = $apiInstance->getInventoryItemGroup($inventory_item_group_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->getInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_item_group_key** | **string**| This path parameter specifies the unique identifier of the inventory item group being retrieved. This value is assigned by the seller when an inventory item group is created. |

### Return type

[**\OpenAPI\EbayInventoryClient\Model\InventoryItemGroup**](../Model/InventoryItemGroup.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
