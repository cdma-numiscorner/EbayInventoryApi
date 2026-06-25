# # Weight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | [**\OpenAPI\EbayInventoryClient\Model\WeightUnitOfMeasureEnum**](WeightUnitOfMeasureEnum.md) |  | [optional]
**value** | **float** | The actual weight (in the measurement unit specified in the &lt;strong&gt;unit&lt;/strong&gt; field) of the shipping package. Both the &lt;strong&gt;unit&lt;/strong&gt; and &lt;strong&gt;value&lt;/strong&gt; fields are required if the &lt;strong&gt;weight&lt;/strong&gt; container is used. If a shipping package weighed 20.5 ounces, the container would look as follows: &lt;br&gt;&lt;pre&gt;\&quot;weight\&quot;: {&lt;br&gt; \&quot;value\&quot;: 20.5,&lt;br&gt; \&quot;unit\&quot;: \&quot;OUNCE\&quot;&lt;br&gt; }&lt;/pre&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
