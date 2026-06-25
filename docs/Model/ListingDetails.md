# # ListingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **string** | The unique identifier of the eBay listing that is associated with the published offer. | [optional]
**listing_on_hold** | **bool** | Indicates if a listing is on hold due to an eBay policy violation.&lt;br&gt;&lt;br&gt;If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.&lt;br&gt;&lt;br&gt;If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as true.&lt;br&gt;&lt;br&gt;Once a listing is fixed, this boolean will no longer be returned. | [optional]
**listing_status** | [**\OpenAPI\EbayInventoryClient\Model\ListingStatusEnum**](ListingStatusEnum.md) |  | [optional]
**sold_quantity** | **int** | This integer value indicates the quantity of the product that has been sold for the published offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
