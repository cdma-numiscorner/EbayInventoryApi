# # InventoryItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\OpenAPI\EbayInventoryClient\Model\ErrorDetailV3[]**](ErrorDetailV3.md) | This container will be returned if there were one or more errors associated with the creation or update to the inventory item record. | [optional]
**locale** | [**\OpenAPI\EbayInventoryClient\Model\LocaleEnum**](LocaleEnum.md) |  |
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell. |
**status_code** | **int** | The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the &lt;strong&gt;sku&lt;/strong&gt; field. See the &lt;strong&gt;HTTP status codes&lt;/strong&gt; table to see which each status code indicates. |
**warnings** | [**\OpenAPI\EbayInventoryClient\Model\ErrorDetailV3[]**](ErrorDetailV3.md) | This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
