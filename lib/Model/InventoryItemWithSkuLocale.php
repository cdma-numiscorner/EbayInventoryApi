<?php
/**
 * InventoryItemWithSkuLocale
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.11.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayInventoryClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayInventoryClient\ObjectSerializer;

/**
 * InventoryItemWithSkuLocale Class Doc Comment
 *
 * @category Class
 * @description This type is used to define/modify each inventory item record that is being created and/or updated with the bulkCreateOrReplaceInventoryItem method. Up to 25 inventory item records can be created and/or updated with one call.
 * @package  OpenAPI\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InventoryItemWithSkuLocale implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryItemWithSkuLocale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability' => '\OpenAPI\EbayInventoryClient\Model\Availability',
        'condition' => 'string',
        'condition_description' => 'string',
        'locale' => 'string',
        'package_weight_and_size' => '\OpenAPI\EbayInventoryClient\Model\PackageWeightAndSize',
        'product' => '\OpenAPI\EbayInventoryClient\Model\Product',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'locale' => null,
        'package_weight_and_size' => null,
        'product' => null,
        'sku' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'locale' => 'locale',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'locale' => 'setLocale',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'locale' => 'getLocale',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct',
        'sku' => 'getSku'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['availability'] = $data['availability'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['condition_description'] = $data['condition_description'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['package_weight_and_size'] = $data['package_weight_and_size'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets availability
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Availability|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Availability|null $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the getItemConditionPolicies method of the Metadata API. This method returns condition ID values that map to the enumeration values defined in the ConditionEnum type. The Item condition ID and name values topic in the Selling Integration Guide has a table that maps condition ID values to ConditionEnum values. The getItemConditionPolicies call reference page has more information. A condition value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item. Note: In the US and Australian marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', but this item condition is only available for use for a select number of US and Australian sellers. Other sellers on these two marketplaces will be blocked if they try to create a new listing or revise an existing listing with this item condition. Any active listings on the US and Australian marketplaces that had 'Manufacturer Refurbished' as the item condition have been automatically updated by eBay to the 'Seller Refurbished' item condition (Condition ID 2500). For all other marketplaces besides the US and Australia, Condition ID 2000 still maps to 'Manufacturer Refurbished'. Any US or Australian seller who is interested in eligibility requirements to list with 'Certified Refurbished' should see the Certified refurbished program page in Seller Center. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description
     *
     * @return string|null
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description
     *
     * @param string|null $condition_description This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose condition value is not NEW, LIKE_NEW, NEW_OTHER, or NEW_WITH_DEFECTS. The conditionDescription field is available for all eBay categories. If the conditionDescription field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another. This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. This field is returned in the getInventoryItem, bulkGetInventoryItem, and getInventoryItems calls if a condition description was provided for a used inventory item. Max Length: 1000.
     *
     * @return self
     */
    public function setConditionDescription($condition_description)
    {
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale This field is for future use only. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets package_weight_and_size
     *
     * @return \OpenAPI\EbayInventoryClient\Model\PackageWeightAndSize|null
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size
     *
     * @param \OpenAPI\EbayInventoryClient\Model\PackageWeightAndSize|null $package_weight_and_size package_weight_and_size
     *
     * @return self
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku This is the seller-defined SKU value of the product that will be listed on the eBay site (specified in the marketplaceId field). Only one offer (in unpublished or published state) may exist for each sku/marketplaceId/format combination. This field is required. Max Length: 50
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


