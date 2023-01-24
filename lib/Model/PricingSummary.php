<?php
/**
 * PricingSummary
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
 * The version of the OpenAPI document: 1.16.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
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
 * PricingSummary Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the listing price for the product and settings for the Minimum Advertised Price and Strikethrough Pricing features. The &lt;strong&gt;price&lt;/strong&gt; field must be supplied before an offer is published, but a seller may create an offer without supplying a price initially. The Minimum Advertised Price feature is only available on the US site. Strikethrough Pricing is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites.
 * @package  OpenAPI\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PricingSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricingSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auction_reserve_price' => '\OpenAPI\EbayInventoryClient\Model\Amount',
        'auction_start_price' => '\OpenAPI\EbayInventoryClient\Model\Amount',
        'minimum_advertised_price' => '\OpenAPI\EbayInventoryClient\Model\Amount',
        'originally_sold_for_retail_price_on' => 'string',
        'original_retail_price' => '\OpenAPI\EbayInventoryClient\Model\Amount',
        'price' => '\OpenAPI\EbayInventoryClient\Model\Amount',
        'pricing_visibility' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auction_reserve_price' => null,
        'auction_start_price' => null,
        'minimum_advertised_price' => null,
        'originally_sold_for_retail_price_on' => null,
        'original_retail_price' => null,
        'price' => null,
        'pricing_visibility' => null
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
        'auction_reserve_price' => 'auctionReservePrice',
        'auction_start_price' => 'auctionStartPrice',
        'minimum_advertised_price' => 'minimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'originallySoldForRetailPriceOn',
        'original_retail_price' => 'originalRetailPrice',
        'price' => 'price',
        'pricing_visibility' => 'pricingVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auction_reserve_price' => 'setAuctionReservePrice',
        'auction_start_price' => 'setAuctionStartPrice',
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'setOriginallySoldForRetailPriceOn',
        'original_retail_price' => 'setOriginalRetailPrice',
        'price' => 'setPrice',
        'pricing_visibility' => 'setPricingVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auction_reserve_price' => 'getAuctionReservePrice',
        'auction_start_price' => 'getAuctionStartPrice',
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'getOriginallySoldForRetailPriceOn',
        'original_retail_price' => 'getOriginalRetailPrice',
        'price' => 'getPrice',
        'pricing_visibility' => 'getPricingVisibility'
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
        $this->container['auction_reserve_price'] = $data['auction_reserve_price'] ?? null;
        $this->container['auction_start_price'] = $data['auction_start_price'] ?? null;
        $this->container['minimum_advertised_price'] = $data['minimum_advertised_price'] ?? null;
        $this->container['originally_sold_for_retail_price_on'] = $data['originally_sold_for_retail_price_on'] ?? null;
        $this->container['original_retail_price'] = $data['original_retail_price'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['pricing_visibility'] = $data['pricing_visibility'] ?? null;
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
     * Gets auction_reserve_price
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Amount|null
     */
    public function getAuctionReservePrice()
    {
        return $this->container['auction_reserve_price'];
    }

    /**
     * Sets auction_reserve_price
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Amount|null $auction_reserve_price auction_reserve_price
     *
     * @return self
     */
    public function setAuctionReservePrice($auction_reserve_price)
    {
        $this->container['auction_reserve_price'] = $auction_reserve_price;

        return $this;
    }

    /**
     * Gets auction_start_price
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Amount|null
     */
    public function getAuctionStartPrice()
    {
        return $this->container['auction_start_price'];
    }

    /**
     * Sets auction_start_price
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Amount|null $auction_start_price auction_start_price
     *
     * @return self
     */
    public function setAuctionStartPrice($auction_start_price)
    {
        $this->container['auction_start_price'] = $auction_start_price;

        return $this;
    }

    /**
     * Gets minimum_advertised_price
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Amount|null
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Amount|null $minimum_advertised_price minimum_advertised_price
     *
     * @return self
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets originally_sold_for_retail_price_on
     *
     * @return string|null
     */
    public function getOriginallySoldForRetailPriceOn()
    {
        return $this->container['originally_sold_for_retail_price_on'];
    }

    /**
     * Sets originally_sold_for_retail_price_on
     *
     * @param string|null $originally_sold_for_retail_price_on This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the <strong>originalRetailPrice</strong> field on an eBay site, or sold for that price by a third-party retailer. When using the <strong>createOffer</strong> or <strong>updateOffer</strong> calls, the seller will pass in a value of <code>ON_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> on an eBay site, or the seller will pass in a value of <code>OFF_EBAY</code> to indicate that the product was sold for the <strong>originalRetailPrice</strong> through a third-party retailer. This field and the <strong>originalRetailPrice</strong> field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites.<br/><br/>This field will be returned if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOriginallySoldForRetailPriceOn($originally_sold_for_retail_price_on)
    {
        $this->container['originally_sold_for_retail_price_on'] = $originally_sold_for_retail_price_on;

        return $this;
    }

    /**
     * Gets original_retail_price
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Amount|null
     */
    public function getOriginalRetailPrice()
    {
        return $this->container['original_retail_price'];
    }

    /**
     * Sets original_retail_price
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Amount|null $original_retail_price original_retail_price
     *
     * @return self
     */
    public function setOriginalRetailPrice($original_retail_price)
    {
        $this->container['original_retail_price'] = $original_retail_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \OpenAPI\EbayInventoryClient\Model\Amount|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \OpenAPI\EbayInventoryClient\Model\Amount|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets pricing_visibility
     *
     * @return string|null
     */
    public function getPricingVisibility()
    {
        return $this->container['pricing_visibility'];
    }

    /**
     * Sets pricing_visibility
     *
     * @param string|null $pricing_visibility This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a <strong>minimumAdvertisedPrice</strong> has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to <code>PRE_CHECKOUT</code>. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to <code>DURING_CHECKOUT</code>. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature.<br/><br/>This field will be returned if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPricingVisibility($pricing_visibility)
    {
        $this->container['pricing_visibility'] = $pricing_visibility;

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


