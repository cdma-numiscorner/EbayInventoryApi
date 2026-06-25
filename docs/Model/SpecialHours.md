# # SpecialHours

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | A &lt;strong&gt;date&lt;/strong&gt; value is required for each specific date that the store location has special operating hours or is closed for that date.  &lt;br&gt;&lt;br&gt;The timestamp is formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2025-08-04T00:00:00.000Z&lt;/code&gt; &lt;br&gt;&lt;br&gt;This field is returned if set for the store location. | [optional]
**intervals** | [**\OpenAPI\EbayInventoryClient\Model\Interval[]**](Interval.md) | This array is used to set the operating hours for the date specified in the corresponding &lt;strong&gt;date&lt;/strong&gt; field. These special operating hours on this specific date will override the normal operating hours for that day of the week that is specified through the &lt;strong&gt;operatingHours&lt;/strong&gt; array. &lt;br&gt;&lt;br&gt;To specify a location as closed on the corresponding &lt;strong&gt;date&lt;/strong&gt;, include the &lt;strong&gt;intervals&lt;/strong&gt; array as empty. &lt;br&gt;&lt;br&gt;If a location closes for lunch (or any other period during the day) and then reopens, multiple &lt;strong&gt;open&lt;/strong&gt; and &lt;strong&gt;close&lt;/strong&gt; pairs are needed to specify each interval where the location is open. &lt;br&gt;&lt;br&gt;This container is returned if set for the store location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
