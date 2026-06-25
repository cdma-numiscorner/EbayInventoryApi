# # NameValueList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | This string value identifies the motor vehicle aspect, such as &#39;make&#39;, &#39;model&#39;, &#39;year&#39;, &#39;trim&#39;, and &#39;engine&#39;. Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.&lt;br&gt;&lt;br&gt;The &lt;a href&#x3D;\&quot;/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCompatibilityProperties&lt;/a&gt; method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category. | [optional]
**value** | **string** | This string value identifies the motor vehicle aspect specified in the corresponding &lt;strong&gt;name&lt;/strong&gt; field. For example, if the &lt;strong&gt;name&lt;/strong&gt; field is &#39;make&#39;, this field may be &#39;Toyota&#39;, or if the &lt;strong&gt;name&lt;/strong&gt; field is &#39;model&#39;, this field may be &#39;Camry&#39;.&lt;br&gt;&lt;br&gt;The &lt;a href&#x3D;\&quot;/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilitypropertyvalues\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCompatibilityPropertyValues&lt;/a&gt; method of the Taxonomy API can be used to retrieve possible values for vehicle aspect names. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
