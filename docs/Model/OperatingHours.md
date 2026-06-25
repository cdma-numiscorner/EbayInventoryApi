# # OperatingHours

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day_of_week_enum** | [**\OpenAPI\EbayInventoryClient\Model\DayOfWeekEnum**](DayOfWeekEnum.md) |  | [optional]
**intervals** | [**\OpenAPI\EbayInventoryClient\Model\Interval[]**](Interval.md) | This container is used to define the opening and closing times of a store location&#39;s working day (defined in the &lt;strong&gt;dayOfWeekEnum&lt;/strong&gt; field). An &lt;strong&gt;intervals&lt;/strong&gt; container is needed for each day of the week that the store location is open. If a store location closes for lunch (or any other period during the day) and then reopens, multiple &lt;strong&gt;open&lt;/strong&gt; and &lt;strong&gt;close&lt;/strong&gt; pairs are needed &lt;br&gt;&lt;br&gt;This container is returned if operating hours are defined for the store location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
