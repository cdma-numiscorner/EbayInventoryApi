<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @description This type is used to define the product details, such as a title, a product description, product aspects/item specifics, and links to images for the product. Optionally, in a createOrReplaceInventoryItem call, a seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be matched with a product in the eBay Catalog. The information in this type is also returned in the getInventoryItem, getInventoryItems, and bulkGetInventoryItem calls if defined.
 * @package  OpenAPI\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspects' => 'string[]',
        'brand' => 'string',
        'description' => 'string',
        'ean' => 'string[]',
        'epid' => 'string',
        'image_urls' => 'string[]',
        'isbn' => 'string[]',
        'mpn' => 'string',
        'subtitle' => 'string',
        'title' => 'string',
        'upc' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aspects' => null,
        'brand' => null,
        'description' => null,
        'ean' => null,
        'epid' => null,
        'image_urls' => null,
        'isbn' => null,
        'mpn' => null,
        'subtitle' => null,
        'title' => null,
        'upc' => null
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
        'aspects' => 'aspects',
        'brand' => 'brand',
        'description' => 'description',
        'ean' => 'ean',
        'epid' => 'epid',
        'image_urls' => 'imageUrls',
        'isbn' => 'isbn',
        'mpn' => 'mpn',
        'subtitle' => 'subtitle',
        'title' => 'title',
        'upc' => 'upc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspects' => 'setAspects',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'epid' => 'setEpid',
        'image_urls' => 'setImageUrls',
        'isbn' => 'setIsbn',
        'mpn' => 'setMpn',
        'subtitle' => 'setSubtitle',
        'title' => 'setTitle',
        'upc' => 'setUpc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspects' => 'getAspects',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'epid' => 'getEpid',
        'image_urls' => 'getImageUrls',
        'isbn' => 'getIsbn',
        'mpn' => 'getMpn',
        'subtitle' => 'getSubtitle',
        'title' => 'getTitle',
        'upc' => 'getUpc'
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
        $this->container['aspects'] = $data['aspects'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['epid'] = $data['epid'] ?? null;
        $this->container['image_urls'] = $data['image_urls'] ?? null;
        $this->container['isbn'] = $data['isbn'] ?? null;
        $this->container['mpn'] = $data['mpn'] ?? null;
        $this->container['subtitle'] = $data['subtitle'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['upc'] = $data['upc'] ?? null;
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
     * Gets aspects
     *
     * @return string[]|null
     */
    public function getAspects()
    {
        return $this->container['aspects'];
    }

    /**
     * Sets aspects
     *
     * @param string[]|null $aspects This is an array of item specific pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item specifics names (and corresponding values) for a specific eBay category, sellers can use the GetCategorySpecifics call of the Trading API. Alternatively, sellers can view similar items on eBay.com in the same category to get an idea of what other sellers are using for product aspects/item specifics. Sellers also have the option of specifying an eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the corresponding fields in the product container in an attempt to find a product match in the eBay Catalog. If a match is found based on the ePID or GTIN value, the product aspects that are defined for the eBay Catalog product will automatically get picked up by the newly created/updated inventory item. Below is an example of the proper JSON syntax to use when manually inputting item specifics: &quot;aspects&quot;: {  &quot;Brand&quot;: [&quot;GoPro&quot;],  &quot;Storage Type&quot;: [&quot;Removable&quot;]  } Note that inventory items that will become part of an inventory item group and multiple-variation listing should have the same attributes that are defined for the inventory item group. This container will be returned if one or more item specific pairs are defined for the inventory item. Max Length for Aspect Name: 40 Max Length for Aspect Value: 50
     *
     * @return self
     */
    public function setAspects($aspects)
    {
        $this->container['aspects'] = $aspects;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The brand of the product. This field is often paired with the mpn field to identify a specific product by Manufacture Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part Number (MPN) value. If eBay is able to find a product match in the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all product details of that eBay Catalog product is picked up by the inventory item record (including brand) if the createOrReplaceInventoryItem call is successful. This field is returned if defined for an inventory item. If a brand was passed in as an item specific name-value pair through the aspects array in a createOrReplaceInventoryItem call, this value is also picked up by the brand field. Max Length: 65
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the product. The description of an existing inventory item can be added or modified with a createOrReplaceInventoryItem call. The description of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. Note that this field is optional but recommended. If a listingDescription field is omitted when creating and publishing a single-variation offer, the text in this field will be used instead. If neither the product.description field for the inventory item nor the listingDescription field for the offer exist, the publishOffer call will fail. If the inventory item will be part of an inventory item group/multiple-variation listing, this field should definitely be used to specify how the corresponding product variation is different (e.g. This is the green, extra-large version of the shirt). However, in the case of an inventory item group, the text in the description field of the inventory item group will become the listing description of the actual eBay listing instead of the text in this field. Basic HTML tags are supported, including the following tags: &lt;b&gt; &lt;strong&gt; &lt;br&gt; &lt;ol&gt; &lt;ul&gt; &lt;li&gt; Table tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;, &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and &lt;col&gt;A seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions. This field is returned if defined for an inventory item. If one of the GTIN types (e.g. UPC) was passed in when the inventory item was created/modified and a product match was found in the eBay catalog, product description is one of the details that gets picked up from the catalog product. Max Length: 4000
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string[]|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string[]|null $ean The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified EAN value), and a link to any stock image that exists for the catalog product. This field is returned if defined for an inventory item. If an EAN was passed in as an item specific name-value pair through the aspects array in a createOrReplaceInventoryItem call, this value is also picked up by the ean field.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets epid
     *
     * @return string|null
     */
    public function getEpid()
    {
        return $this->container['epid'];
    }

    /**
     * Sets epid
     *
     * @param string|null $epid The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a match is found, the inventory item is automatically populated with available product details such as product title, product description, product aspects, and a link to any stock image that exists for the catalog product. In an attempt to find a eBay Catalog product match, an ePID value is always preferred over the other product identifiers, since it is possible that one GTIN value can be associated with multiple eBay Catalog products, and if multiple products are found, product details will not be picked up by the Inventory Item object. This field is returned if defined for an inventory item.
     *
     * @return self
     */
    public function setEpid($epid)
    {
        $this->container['epid'] = $epid;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return string[]|null
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param string[]|null $image_urls An array of one or more links to images for the product. URLs must use the &quot;HTTPS&quot; protocol. Images can be self-hosted by the seller, or sellers can use the UploadSiteHostedPictures call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the UploadSiteHostedPictures call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the imageUrls array. Before an offer can be published, at least one image must exist for the inventory item. Most eBay sites support up to 12 pictures free of charge, and eBay Motors listings can have up to 24 pictures. A link to a stock image for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. This container will always be returned for an inventory item that is part of a published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory items that are not a part of a published offer.
     *
     * @return self
     */
    public function setImageUrls($image_urls)
    {
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string[]|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string[]|null $isbn The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified ISBN value), and a link to any stock image that exists for the catalog product. This field is returned if defined for an inventory item. If an ISBN was passed in as an item specific name-value pair through the aspects array in a createOrReplaceInventoryItem call, this value is also picked up by the isbn field.
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn The Manufacturer Part Number (MPN) of a product. This field is paired with the brand field to identify a product. Some eBay categories require MPN values. The GetCategorySpecifics call of the Trading API can be used to see if a category requires an MPN. The MPN value for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. This field is returned if defined for an inventory item. If an MPN was passed in as an item specific name-value pair through the aspects array in a createOrReplaceInventoryItem call, this value is also picked up by the mpn field. Max Length: 65
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the Adding a subtitle to your listings help page. The subtitle of an existing inventory item can added, modified, or removed with a createOrReplaceInventoryItem call. Note that the same subtitle text should be used for each inventory item that will be part of an inventory item group, and ultimately become one product variation within a multiple-variation listing. This field will only be returned if set for an inventory item. Max Length: 55
     *
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of an inventory item can be added or modified with a createOrReplaceInventoryItem call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. If the inventory item will become part of a single-variation offer, and the listing is not a product-based listing, the text in this field will become the actual listing title for the published offer. However, if the inventory item will become part of a multiple-variation offer, the text in title field of the inventory item group entity will actually become the listing title for the published offer instead, although a title can still be provided for the inventory item, and it will actually become the title of the variation. This field will always be returned for an inventory item that is part of a published offer since a published offer will always have a listing title, but this field will only be returned if defined for inventory items that are not a part of a published offer. Max Length: 80
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string[]|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string[]|null $upc The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified UPC value), and a link to any stock image that exists for the catalog product. This field is returned if defined for an inventory item. If a UPC was passed in as an item specific name-value pair through the aspects array in a createOrReplaceInventoryItem call, this value is also picked up by the upc field.
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

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

