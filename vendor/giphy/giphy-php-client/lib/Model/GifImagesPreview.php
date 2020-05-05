<?php
/**
 * GifImagesPreview
 *
 * PHP version 5
 *
 * @category Class
 * @package  GPH
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * giphy-api
 *
 * Giphy's public api.
 *
 * OpenAPI spec version: 0.9.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GPH\Model;

use \ArrayAccess;

/**
 * GifImagesPreview Class Doc Comment
 *
 * @category    Class
 * @description Data surrounding a version of this GIF in .MP4 format limited to 50kb that displays the first 1-2 seconds of the GIF.
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GifImagesPreview implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Gif_images_preview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mp4' => 'string',
        'mp4_size' => 'string',
        'width' => 'string',
        'height' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'mp4' => 'mp4',
        'mp4_size' => 'mp4_size',
        'width' => 'width',
        'height' => 'height'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'mp4' => 'setMp4',
        'mp4_size' => 'setMp4Size',
        'width' => 'setWidth',
        'height' => 'setHeight'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'mp4' => 'getMp4',
        'mp4_size' => 'getMp4Size',
        'width' => 'getWidth',
        'height' => 'getHeight'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['mp4'] = isset($data['mp4']) ? $data['mp4'] : null;
        $this->container['mp4_size'] = isset($data['mp4_size']) ? $data['mp4_size'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets mp4
     * @return string
     */
    public function getMp4()
    {
        return $this->container['mp4'];
    }

    /**
     * Sets mp4
     * @param string $mp4 The URL for this GIF in .MP4 format.
     * @return $this
     */
    public function setMp4($mp4)
    {
        $this->container['mp4'] = $mp4;

        return $this;
    }

    /**
     * Gets mp4_size
     * @return string
     */
    public function getMp4Size()
    {
        return $this->container['mp4_size'];
    }

    /**
     * Sets mp4_size
     * @param string $mp4_size The size of this file in bytes.
     * @return $this
     */
    public function setMp4Size($mp4_size)
    {
        $this->container['mp4_size'] = $mp4_size;

        return $this;
    }

    /**
     * Gets width
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param string $width The width of this file in pixels.
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param string $height The height of this file in pixels.
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this));
    }
}

