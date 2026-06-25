# # LocationAvailabilityDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_location_key** | **string** | The unique identifier of a seller’s fulfillment center location where inventory is available for the item or item variation.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When creating a location mapping using the &lt;b&gt;createOrReplaceSkuLocationMapping&lt;/b&gt; method, the value entered in this field &lt;b&gt;must&lt;/b&gt; be associated with a location with the &lt;code&gt;FULFILLMENT_CENTER&lt;/code&gt; location type, or an error will occur. Sellers can check the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations#response.locations.locationTypes\&quot; target&#x3D;\&quot;_blank\&quot;&gt;locationTypes&lt;/a&gt; array in the response of the &lt;a href&#x3D;\&quot;/develop/api/sell/inventory_api#sell-inventory_api-location-getinventorylocations\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getInventoryLocations&lt;/a&gt; method to see if their location has a value of &lt;code&gt;FULFILLMENT_CENTER&lt;/code&gt;.&lt;/span&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
