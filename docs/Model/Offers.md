# # Offers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | This is the URL to the current page of offers. |
**limit** | **int** | This integer value is the number of offers that will be displayed on each results page. |
**next** | **string** | This is the URL to the next page of offers. This field will only be returned if there are additional offers to view. | [optional]
**offers** | [**\OpenAPI\EbayInventoryClient\Model\EbayOfferDetailsWithAll[]**](EbayOfferDetailsWithAll.md) | This container is an array of one or more of the seller&#39;s offers for the SKU value that is passed in through the required &lt;strong&gt;sku&lt;/strong&gt; query parameter.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; Currently, the Inventory API does not support the same SKU across multiple eBay marketplaces.&lt;/span&gt;&lt;br&gt;&lt;strong&gt;Max Occurs:&lt;/strong&gt; 25 |
**prev** | **string** | This is the URL to the previous page of offers. This field will only be returned if there are previous offers to view. | [optional]
**size** | **int** | This integer value indicates the number of offers being displayed on the current page of results. This number will generally be the same as the &lt;strong&gt;limit&lt;/strong&gt; value if there are additional pages of results to view.  &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, &lt;b&gt;getOffers&lt;/b&gt; will return two offers and this value will be &lt;code&gt;2&lt;/code&gt;. Otherwise, only one offer will be returned and this value will be &lt;code&gt;1&lt;/code&gt;.&lt;/span&gt; |
**total** | **int** | This integer value is the total number of offers that exist for the specified SKU value. Based on this number and on the &lt;strong&gt;limit&lt;/strong&gt; value, the seller may have to toggle through multiple pages to view all offers. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, &lt;b&gt;getOffers&lt;/b&gt; will return two offers, so this value would be &lt;code&gt;2&lt;/code&gt;. Otherwise, only one offer will be returned and this value will be &lt;code&gt;1&lt;/code&gt;.&lt;/span&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
