# # ShippingCostOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_shipping_cost** | [**\OpenAPI\EbayInventoryClient\Model\Amount**](Amount.md) |  | [optional]
**priority** | **int** | The integer value input into this field, along with the &lt;strong&gt;shippingServiceType&lt;/strong&gt; value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the &lt;strong&gt;shippingCostOverrides.shippingServiceType&lt;/strong&gt; value in a &lt;strong&gt;createOffer&lt;/strong&gt; or &lt;strong&gt;updateOffer&lt;/strong&gt; call must match the &lt;strong&gt;shippingOptions.optionType&lt;/strong&gt; value in a fulfillment listing policy, and the &lt;strong&gt;shippingCostOverrides.priority&lt;/strong&gt; value in a &lt;strong&gt;createOffer&lt;/strong&gt; or &lt;strong&gt;updateOffer&lt;/strong&gt; call must match the &lt;strong&gt;shippingOptions.shippingServices.sortOrderId&lt;/strong&gt; value in a fulfillment listing policy.&lt;br&gt;&lt;br&gt;This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. | [optional]
**shipping_cost** | [**\OpenAPI\EbayInventoryClient\Model\Amount**](Amount.md) |  | [optional]
**shipping_service_type** | [**\OpenAPI\EbayInventoryClient\Model\ShippingServiceTypeEnum**](ShippingServiceTypeEnum.md) |  | [optional]
**surcharge** | [**\OpenAPI\EbayInventoryClient\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
