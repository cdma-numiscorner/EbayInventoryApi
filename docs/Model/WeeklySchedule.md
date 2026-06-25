# # WeeklySchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cut_off_time** | **string** | This field specifies the cut-off times (in 24-hour format) for the business day(s) specified in the &lt;b&gt;dayOfWeekEnum&lt;/b&gt; array.&lt;br&gt;&lt;br&gt;Cut-off times default to the time zone of the specified address if the &lt;b&gt;timeZoneId&lt;/b&gt; is not provided.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If cut-off hours are not specified for a particular day, the fulfillment center is considered to be on holiday for that day.&lt;/span&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;00:00&lt;/code&gt; | [optional]
**day_of_week_enum** | [**\OpenAPI\EbayInventoryClient\Model\DayOfWeekEnum[]**](DayOfWeekEnum.md) | This comma-separated array defines the days of week for which the specified &lt;b&gt;cutOffTime&lt;/b&gt; is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
