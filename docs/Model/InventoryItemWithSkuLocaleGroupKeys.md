# # InventoryItemWithSkuLocaleGroupKeys

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | [**\OpenAPI\EbayInventoryClient\Model\AvailabilityWithAll**](AvailabilityWithAll.md) |  | [optional]
**condition** | **string** | This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. &lt;br /&gt;&lt;br /&gt; Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the &#39;Get&#39; calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item.&lt;br/&gt;&lt;br/&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The &#39;Manufacturer Refurbished&#39; item condition is no longer a valid item condition on any eBay marketplace, and to reflect this change, the &lt;code&gt;MANUFACTURER_REFURBISHED&lt;/code&gt; value has essentially been replaced with the &lt;code&gt;CERTIFIED_REFURBISHED&lt;/code&gt; enumeration value with Version 1.13.0. For any existing inventory items that have &lt;code&gt;MANUFACTURER_REFURBISHED&lt;/code&gt; set as their &lt;strong&gt;condition&lt;/strong&gt; value, eBay will automatically convert the condition of these inventory items to &lt;code&gt;CERTIFIED_REFURBISHED&lt;/code&gt;, so it is not necessary for the developer to update these inventory items with a &#39;create or replace&#39; call. &lt;br/&gt;&lt;br/&gt; To list an item as &#39;Certified Refurbished&#39;, a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition. &lt;br&gt;&lt;br&gt; Any seller that is interested in eligibility requirements to list with &#39;Certified Refurbished&#39; should see the &lt;a href&#x3D;\&quot;https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Certified refurbished program&lt;/a&gt; page in Seller Center. &lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**condition_description** | **string** | This string field is used by the seller to more clearly describe the condition of used items, or items that are not &#39;Brand New&#39;, &#39;New with tags&#39;, or &#39;New in box&#39;. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item&#39;s pictures do not contradict one another.Max length: 1000. | [optional]
**inventory_item_group_keys** | **string[]** | This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item&#39;s variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups. | [optional]
**locale** | **string** | This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**package_weight_and_size** | [**\OpenAPI\EbayInventoryClient\Model\PackageWeightAndSize**](PackageWeightAndSize.md) |  | [optional]
**product** | [**\OpenAPI\EbayInventoryClient\Model\Product**](Product.md) |  | [optional]
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)