# # InventoryLocationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | [**\OpenAPI\EbayInventoryClient\Model\Location**](Location.md) |  |
**location_additional_information** | **string** | This text field provides additional information about an inventory location. This field is returned if it is set for the location. | [optional]
**location_instructions** | **string** | This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a &lt;strong&gt;createInventoryLocation&lt;/strong&gt; or a &lt;strong&gt;updateInventoryLocation&lt;/strong&gt; call, eBay will use the default pickup instructions contained in the merchant&#39;s profile. | [optional]
**location_types** | [**\OpenAPI\EbayInventoryClient\Model\StoreTypeEnum[]**](StoreTypeEnum.md) | This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type. | [optional]
**location_web_url** | **string** | This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the location. | [optional]
**merchant_location_key** | **string** | The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the &lt;strong&gt;createInventoryLocation&lt;/strong&gt; call. |
**merchant_location_status** | [**\OpenAPI\EbayInventoryClient\Model\StatusEnum**](StatusEnum.md) |  |
**name** | **string** | The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the &lt;strong&gt;createInventoryLocation&lt;/strong&gt; call, but a store inventory location must have a defined &lt;strong&gt;name&lt;/strong&gt; value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the &lt;strong&gt;createInventoryLocation&lt;/strong&gt; call, it will have to be added later through a &lt;strong&gt;updateInventoryLocation&lt;/strong&gt; call. | [optional]
**operating_hours** | [**\OpenAPI\EbayInventoryClient\Model\OperatingHours[]**](OperatingHours.md) | This container shows the regular operating hours for a store location during the days of the week. A &lt;strong&gt;dayOfWeekEnum&lt;/strong&gt; field and an &lt;strong&gt;intervals&lt;/strong&gt; container is shown for each day of the week that the location is open. | [optional]
**phone** | **string** | The phone number for an inventory location. This field will typically only be returned for store locations. |
**special_hours** | [**\OpenAPI\EbayInventoryClient\Model\SpecialHours[]**](SpecialHours.md) | This container shows the special operating hours for a store or fulfillment center location on a specific date or dates. | [optional]
**time_zone_id** | **string** | This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example &lt;code&gt;America/Vancouver&lt;/code&gt;). For supported values, see &lt;a href&#x3D;\&quot;https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Java Supported Zone Ids and Offsets&lt;/a&gt;. | [optional]
**fulfillment_center_specifications** | [**\OpenAPI\EbayInventoryClient\Model\FulfillmentCenterSpecifications**](FulfillmentCenterSpecifications.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
