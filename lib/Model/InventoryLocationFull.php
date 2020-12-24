<?php
/**
 * InventoryLocationFull
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
 * InventoryLocationFull Class Doc Comment
 *
 * @category Class
 * @description This type is used by the createInventoryLocation call to provide details on the inventory location, including the location&#39;s name, physical address, operating hours, special hours, phone number and other details of an inventory location.
 * @package  OpenAPI\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InventoryLocationFull implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryLocationFull';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\OpenAPI\EbayInventoryClient\Model\LocationDetails',
        'location_additional_information' => 'string',
        'location_instructions' => 'string',
        'location_types' => 'string[]',
        'location_web_url' => 'string',
        'merchant_location_status' => 'string',
        'name' => 'string',
        'operating_hours' => '\OpenAPI\EbayInventoryClient\Model\OperatingHours[]',
        'phone' => 'string',
        'special_hours' => '\OpenAPI\EbayInventoryClient\Model\SpecialHours[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'location_additional_information' => null,
        'location_instructions' => null,
        'location_types' => null,
        'location_web_url' => null,
        'merchant_location_status' => null,
        'name' => null,
        'operating_hours' => null,
        'phone' => null,
        'special_hours' => null
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
        'location' => 'location',
        'location_additional_information' => 'locationAdditionalInformation',
        'location_instructions' => 'locationInstructions',
        'location_types' => 'locationTypes',
        'location_web_url' => 'locationWebUrl',
        'merchant_location_status' => 'merchantLocationStatus',
        'name' => 'name',
        'operating_hours' => 'operatingHours',
        'phone' => 'phone',
        'special_hours' => 'specialHours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'location_additional_information' => 'setLocationAdditionalInformation',
        'location_instructions' => 'setLocationInstructions',
        'location_types' => 'setLocationTypes',
        'location_web_url' => 'setLocationWebUrl',
        'merchant_location_status' => 'setMerchantLocationStatus',
        'name' => 'setName',
        'operating_hours' => 'setOperatingHours',
        'phone' => 'setPhone',
        'special_hours' => 'setSpecialHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'location_additional_information' => 'getLocationAdditionalInformation',
        'location_instructions' => 'getLocationInstructions',
        'location_types' => 'getLocationTypes',
        'location_web_url' => 'getLocationWebUrl',
        'merchant_location_status' => 'getMerchantLocationStatus',
        'name' => 'getName',
        'operating_hours' => 'getOperatingHours',
        'phone' => 'getPhone',
        'special_hours' => 'getSpecialHours'
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
        $this->container['location'] = $data['location'] ?? null;
        $this->container['location_additional_information'] = $data['location_additional_information'] ?? null;
        $this->container['location_instructions'] = $data['location_instructions'] ?? null;
        $this->container['location_types'] = $data['location_types'] ?? null;
        $this->container['location_web_url'] = $data['location_web_url'] ?? null;
        $this->container['merchant_location_status'] = $data['merchant_location_status'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['operating_hours'] = $data['operating_hours'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['special_hours'] = $data['special_hours'] ?? null;
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
     * Gets location
     *
     * @return \OpenAPI\EbayInventoryClient\Model\LocationDetails|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\EbayInventoryClient\Model\LocationDetails|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets location_additional_information
     *
     * @return string|null
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['location_additional_information'];
    }

    /**
     * Sets location_additional_information
     *
     * @param string|null $location_additional_information This text field is used by the merchant to provide additional information about an inventory location. Max length: 256
     *
     * @return self
     */
    public function setLocationAdditionalInformation($location_additional_information)
    {
        $this->container['location_additional_information'] = $location_additional_information;

        return $this;
    }

    /**
     * Gets location_instructions
     *
     * @return string|null
     */
    public function getLocationInstructions()
    {
        return $this->container['location_instructions'];
    }

    /**
     * Sets location_instructions
     *
     * @param string|null $location_instructions This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available).
     *
     * @return self
     */
    public function setLocationInstructions($location_instructions)
    {
        $this->container['location_instructions'] = $location_instructions;

        return $this;
    }

    /**
     * Gets location_types
     *
     * @return string[]|null
     */
    public function getLocationTypes()
    {
        return $this->container['location_types'];
    }

    /**
     * Sets location_types
     *
     * @param string[]|null $location_types This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store or a warehouse, but in some cases, an inventory location may be both. If this container is omitted, the location type of the inventory location will default to WAREHOUSE. See StoreTypeEnum for the supported values. Default: WAREHOUSE
     *
     * @return self
     */
    public function setLocationTypes($location_types)
    {
        $this->container['location_types'] = $location_types;

        return $this;
    }

    /**
     * Gets location_web_url
     *
     * @return string|null
     */
    public function getLocationWebUrl()
    {
        return $this->container['location_web_url'];
    }

    /**
     * Sets location_web_url
     *
     * @param string|null $location_web_url This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. Max length: 512
     *
     * @return self
     */
    public function setLocationWebUrl($location_web_url)
    {
        $this->container['location_web_url'] = $location_web_url;

        return $this;
    }

    /**
     * Gets merchant_location_status
     *
     * @return string|null
     */
    public function getMerchantLocationStatus()
    {
        return $this->container['merchant_location_status'];
    }

    /**
     * Sets merchant_location_status
     *
     * @param string|null $merchant_location_status This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful createInventoryLocation call will automatically enable the inventory location. A merchant may want to create a new inventory location but leave it as disabled if the inventory location is not yet ready for active inventory. Once the inventory location is ready, the merchant can use the enableInventoryLocation call to enable an inventory location that is in a disabled state. See StatusEnum for the supported values. Default: ENABLED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMerchantLocationStatus($merchant_location_status)
    {
        $this->container['merchant_location_status'] = $merchant_location_status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse inventory locations. For store inventory locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omits this field in a createInventoryLocation call, it becomes required for an updateInventoryLocation call. Max length: 1000
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operating_hours
     *
     * @return \OpenAPI\EbayInventoryClient\Model\OperatingHours[]|null
     */
    public function getOperatingHours()
    {
        return $this->container['operating_hours'];
    }

    /**
     * Sets operating_hours
     *
     * @param \OpenAPI\EbayInventoryClient\Model\OperatingHours[]|null $operating_hours Although not technically required, this container is highly recommended to be used to specify operating hours for a store inventory location. This container is used to express the regular operating hours for a store location during each day of the week. A dayOfWeekEnum field and an intervals container will be needed for each day of the week that the store location is open.
     *
     * @return self
     */
    public function setOperatingHours($operating_hours)
    {
        $this->container['operating_hours'] = $operating_hours;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Although not technically required, this field is highly recommended to be used to specify the phone number for a store inventory location. Max length: 36
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets special_hours
     *
     * @return \OpenAPI\EbayInventoryClient\Model\SpecialHours[]|null
     */
    public function getSpecialHours()
    {
        return $this->container['special_hours'];
    }

    /**
     * Sets special_hours
     *
     * @param \OpenAPI\EbayInventoryClient\Model\SpecialHours[]|null $special_hours This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week.
     *
     * @return self
     */
    public function setSpecialHours($special_hours)
    {
        $this->container['special_hours'] = $special_hours;

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


