# # SameDayShippingCutOffTimes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overrides** | [**\OpenAPI\EbayInventoryClient\Model\Overrides[]**](Overrides.md) | This container can be used to override the existing cut-off time(s), specified in the &lt;b&gt;weeklySchedule&lt;/b&gt; container, for a specific date or date range. | [optional]
**weekly_schedule** | [**\OpenAPI\EbayInventoryClient\Model\WeeklySchedule[]**](WeeklySchedule.md) | This container is used to specify the weekly schedule for shipping and handling cut-off times. A cut-off time is required for each business day that the fulfillment center operates. Any orders made after the specified &lt;b&gt;cutOffTime&lt;/b&gt; on the specified day(s) of the week will be handled on the next day. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
