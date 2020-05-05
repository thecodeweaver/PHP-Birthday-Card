<?php
/**
 * Gif
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
 * Gif Class Doc Comment
 *
 * @category    Class
 * @description An object containing data that describes GIFs returned by the query.
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Gif implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Gif';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'id' => 'string',
        'slug' => 'string',
        'url' => 'string',
        'bitly_gif_url' => 'string',
        'bitly_url' => 'string',
        'embed_url' => 'string',
        'username' => 'string',
        'source' => 'string',
        'rating' => 'string',
        'content_url' => 'string',
        'tags' => 'string[]',
        'featured_tags' => 'string[]',
        'user' => '\GPH\Model\User',
        'source_tld' => 'string',
        'source_post_url' => 'string',
        'is_hidden' => 'bool',
        'is_removed' => 'bool',
        'is_community' => 'bool',
        'is_anonymous' => 'bool',
        'is_featured' => 'bool',
        'is_realtime' => 'bool',
        'is_indexable' => 'bool',
        'is_sticker' => 'bool',
        'update_datetime' => 'string',
        'create_datetime' => 'string',
        'import_datetime' => 'string',
        'trending_datetime' => 'string',
        'images' => '\GPH\Model\GifImages'
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
        'type' => 'type',
        'id' => 'id',
        'slug' => 'slug',
        'url' => 'url',
        'bitly_gif_url' => 'bitly_gif_url',
        'bitly_url' => 'bitly_url',
        'embed_url' => 'embed_url',
        'username' => 'username',
        'source' => 'source',
        'rating' => 'rating',
        'content_url' => 'content_url',
        'tags' => 'tags',
        'featured_tags' => 'featured_tags',
        'user' => 'user',
        'source_tld' => 'source_tld',
        'source_post_url' => 'source_post_url',
        'is_hidden' => 'is_hidden',
        'is_removed' => 'is_removed',
        'is_community' => 'is_community',
        'is_anonymous' => 'is_anonymous',
        'is_featured' => 'is_featured',
        'is_realtime' => 'is_realtime',
        'is_indexable' => 'is_indexable',
        'is_sticker' => 'is_sticker',
        'update_datetime' => 'update_datetime',
        'create_datetime' => 'create_datetime',
        'import_datetime' => 'import_datetime',
        'trending_datetime' => 'trending_datetime',
        'images' => 'images'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'slug' => 'setSlug',
        'url' => 'setUrl',
        'bitly_gif_url' => 'setBitlyGifUrl',
        'bitly_url' => 'setBitlyUrl',
        'embed_url' => 'setEmbedUrl',
        'username' => 'setUsername',
        'source' => 'setSource',
        'rating' => 'setRating',
        'content_url' => 'setContentUrl',
        'tags' => 'setTags',
        'featured_tags' => 'setFeaturedTags',
        'user' => 'setUser',
        'source_tld' => 'setSourceTld',
        'source_post_url' => 'setSourcePostUrl',
        'is_hidden' => 'setIsHidden',
        'is_removed' => 'setIsRemoved',
        'is_community' => 'setIsCommunity',
        'is_anonymous' => 'setIsAnonymous',
        'is_featured' => 'setIsFeatured',
        'is_realtime' => 'setIsRealtime',
        'is_indexable' => 'setIsIndexable',
        'is_sticker' => 'setIsSticker',
        'update_datetime' => 'setUpdateDatetime',
        'create_datetime' => 'setCreateDatetime',
        'import_datetime' => 'setImportDatetime',
        'trending_datetime' => 'setTrendingDatetime',
        'images' => 'setImages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'slug' => 'getSlug',
        'url' => 'getUrl',
        'bitly_gif_url' => 'getBitlyGifUrl',
        'bitly_url' => 'getBitlyUrl',
        'embed_url' => 'getEmbedUrl',
        'username' => 'getUsername',
        'source' => 'getSource',
        'rating' => 'getRating',
        'content_url' => 'getContentUrl',
        'tags' => 'getTags',
        'featured_tags' => 'getFeaturedTags',
        'user' => 'getUser',
        'source_tld' => 'getSourceTld',
        'source_post_url' => 'getSourcePostUrl',
        'is_hidden' => 'getIsHidden',
        'is_removed' => 'getIsRemoved',
        'is_community' => 'getIsCommunity',
        'is_anonymous' => 'getIsAnonymous',
        'is_featured' => 'getIsFeatured',
        'is_realtime' => 'getIsRealtime',
        'is_indexable' => 'getIsIndexable',
        'is_sticker' => 'getIsSticker',
        'update_datetime' => 'getUpdateDatetime',
        'create_datetime' => 'getCreateDatetime',
        'import_datetime' => 'getImportDatetime',
        'trending_datetime' => 'getTrendingDatetime',
        'images' => 'getImages'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'gif';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['bitly_gif_url'] = isset($data['bitly_gif_url']) ? $data['bitly_gif_url'] : null;
        $this->container['bitly_url'] = isset($data['bitly_url']) ? $data['bitly_url'] : null;
        $this->container['embed_url'] = isset($data['embed_url']) ? $data['embed_url'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['content_url'] = isset($data['content_url']) ? $data['content_url'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['featured_tags'] = isset($data['featured_tags']) ? $data['featured_tags'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['source_tld'] = isset($data['source_tld']) ? $data['source_tld'] : null;
        $this->container['source_post_url'] = isset($data['source_post_url']) ? $data['source_post_url'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_removed'] = isset($data['is_removed']) ? $data['is_removed'] : null;
        $this->container['is_community'] = isset($data['is_community']) ? $data['is_community'] : null;
        $this->container['is_anonymous'] = isset($data['is_anonymous']) ? $data['is_anonymous'] : null;
        $this->container['is_featured'] = isset($data['is_featured']) ? $data['is_featured'] : null;
        $this->container['is_realtime'] = isset($data['is_realtime']) ? $data['is_realtime'] : null;
        $this->container['is_indexable'] = isset($data['is_indexable']) ? $data['is_indexable'] : null;
        $this->container['is_sticker'] = isset($data['is_sticker']) ? $data['is_sticker'] : null;
        $this->container['update_datetime'] = isset($data['update_datetime']) ? $data['update_datetime'] : null;
        $this->container['create_datetime'] = isset($data['create_datetime']) ? $data['create_datetime'] : null;
        $this->container['import_datetime'] = isset($data['import_datetime']) ? $data['import_datetime'] : null;
        $this->container['trending_datetime'] = isset($data['trending_datetime']) ? $data['trending_datetime'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type By default, this is almost always gif
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id This GIF's unique ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets slug
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     * @param string $slug The unique slug used in this GIF's URL
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The unique URL for this GIF
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets bitly_gif_url
     * @return string
     */
    public function getBitlyGifUrl()
    {
        return $this->container['bitly_gif_url'];
    }

    /**
     * Sets bitly_gif_url
     * @param string $bitly_gif_url The unique bit.ly URL for this GIF
     * @return $this
     */
    public function setBitlyGifUrl($bitly_gif_url)
    {
        $this->container['bitly_gif_url'] = $bitly_gif_url;

        return $this;
    }

    /**
     * Gets bitly_url
     * @return string
     */
    public function getBitlyUrl()
    {
        return $this->container['bitly_url'];
    }

    /**
     * Sets bitly_url
     * @param string $bitly_url The unique bit.ly URL for this GIF
     * @return $this
     */
    public function setBitlyUrl($bitly_url)
    {
        $this->container['bitly_url'] = $bitly_url;

        return $this;
    }

    /**
     * Gets embed_url
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->container['embed_url'];
    }

    /**
     * Sets embed_url
     * @param string $embed_url A URL used for embedding this GIF
     * @return $this
     */
    public function setEmbedUrl($embed_url)
    {
        $this->container['embed_url'] = $embed_url;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username The username this GIF is attached to, if applicable
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source The page on which this GIF was found
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets rating
     * @return string
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param string $rating The MPAA-style rating for this content. Examples include Y, G, PG, PG-13 and R
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets content_url
     * @return string
     */
    public function getContentUrl()
    {
        return $this->container['content_url'];
    }

    /**
     * Sets content_url
     * @param string $content_url Currently unused
     * @return $this
     */
    public function setContentUrl($content_url)
    {
        $this->container['content_url'] = $content_url;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags An array of tags for this GIF (Note\\: Not available when using the Public Beta Key)
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets featured_tags
     * @return string[]
     */
    public function getFeaturedTags()
    {
        return $this->container['featured_tags'];
    }

    /**
     * Sets featured_tags
     * @param string[] $featured_tags An array of featured tags for this GIF (Note\\: Not available when using the Public Beta Key)
     * @return $this
     */
    public function setFeaturedTags($featured_tags)
    {
        $this->container['featured_tags'] = $featured_tags;

        return $this;
    }

    /**
     * Gets user
     * @return \GPH\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \GPH\Model\User $user An object containing data about the user associated with this GIF, if applicable.
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets source_tld
     * @return string
     */
    public function getSourceTld()
    {
        return $this->container['source_tld'];
    }

    /**
     * Sets source_tld
     * @param string $source_tld The top level domain of the source URL.
     * @return $this
     */
    public function setSourceTld($source_tld)
    {
        $this->container['source_tld'] = $source_tld;

        return $this;
    }

    /**
     * Gets source_post_url
     * @return string
     */
    public function getSourcePostUrl()
    {
        return $this->container['source_post_url'];
    }

    /**
     * Sets source_post_url
     * @param string $source_post_url The URL of the webpage on which this GIF was found.
     * @return $this
     */
    public function setSourcePostUrl($source_post_url)
    {
        $this->container['source_post_url'] = $source_post_url;

        return $this;
    }

    /**
     * Gets is_hidden
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     * @param bool $is_hidden Denotes whether or not this GIF is private.
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_removed
     * @return bool
     */
    public function getIsRemoved()
    {
        return $this->container['is_removed'];
    }

    /**
     * Sets is_removed
     * @param bool $is_removed Denotes whether or not this GIF has been deleted.
     * @return $this
     */
    public function setIsRemoved($is_removed)
    {
        $this->container['is_removed'] = $is_removed;

        return $this;
    }

    /**
     * Gets is_community
     * @return bool
     */
    public function getIsCommunity()
    {
        return $this->container['is_community'];
    }

    /**
     * Sets is_community
     * @param bool $is_community Denotes whether or not this GIF has been uploaded by a GIPHY user.
     * @return $this
     */
    public function setIsCommunity($is_community)
    {
        $this->container['is_community'] = $is_community;

        return $this;
    }

    /**
     * Gets is_anonymous
     * @return bool
     */
    public function getIsAnonymous()
    {
        return $this->container['is_anonymous'];
    }

    /**
     * Sets is_anonymous
     * @param bool $is_anonymous Denotes whether or not this GIF has been uploaded to GIPHY by an anonymous user.
     * @return $this
     */
    public function setIsAnonymous($is_anonymous)
    {
        $this->container['is_anonymous'] = $is_anonymous;

        return $this;
    }

    /**
     * Gets is_featured
     * @return bool
     */
    public function getIsFeatured()
    {
        return $this->container['is_featured'];
    }

    /**
     * Sets is_featured
     * @param bool $is_featured Denotes whether or not this GIF is featured on giphy.com (deprecated).
     * @return $this
     */
    public function setIsFeatured($is_featured)
    {
        $this->container['is_featured'] = $is_featured;

        return $this;
    }

    /**
     * Gets is_realtime
     * @return bool
     */
    public function getIsRealtime()
    {
        return $this->container['is_realtime'];
    }

    /**
     * Sets is_realtime
     * @param bool $is_realtime Denotes whether or not this GIF has been sourced from a realtime crawl.
     * @return $this
     */
    public function setIsRealtime($is_realtime)
    {
        $this->container['is_realtime'] = $is_realtime;

        return $this;
    }

    /**
     * Gets is_indexable
     * @return bool
     */
    public function getIsIndexable()
    {
        return $this->container['is_indexable'];
    }

    /**
     * Sets is_indexable
     * @param bool $is_indexable Denotes whether or not this GIF is indexable.
     * @return $this
     */
    public function setIsIndexable($is_indexable)
    {
        $this->container['is_indexable'] = $is_indexable;

        return $this;
    }

    /**
     * Gets is_sticker
     * @return bool
     */
    public function getIsSticker()
    {
        return $this->container['is_sticker'];
    }

    /**
     * Sets is_sticker
     * @param bool $is_sticker Denotes whether this GIF is a sticker (has a transparent background).
     * @return $this
     */
    public function setIsSticker($is_sticker)
    {
        $this->container['is_sticker'] = $is_sticker;

        return $this;
    }

    /**
     * Gets update_datetime
     * @return string
     */
    public function getUpdateDatetime()
    {
        return $this->container['update_datetime'];
    }

    /**
     * Sets update_datetime
     * @param string $update_datetime The date on which this GIF was last updated.
     * @return $this
     */
    public function setUpdateDatetime($update_datetime)
    {
        $this->container['update_datetime'] = $update_datetime;

        return $this;
    }

    /**
     * Gets create_datetime
     * @return string
     */
    public function getCreateDatetime()
    {
        return $this->container['create_datetime'];
    }

    /**
     * Sets create_datetime
     * @param string $create_datetime The date this GIF was added to the GIPHY database.
     * @return $this
     */
    public function setCreateDatetime($create_datetime)
    {
        $this->container['create_datetime'] = $create_datetime;

        return $this;
    }

    /**
     * Gets import_datetime
     * @return string
     */
    public function getImportDatetime()
    {
        return $this->container['import_datetime'];
    }

    /**
     * Sets import_datetime
     * @param string $import_datetime The creation or upload date from this GIF's source.
     * @return $this
     */
    public function setImportDatetime($import_datetime)
    {
        $this->container['import_datetime'] = $import_datetime;

        return $this;
    }

    /**
     * Gets trending_datetime
     * @return string
     */
    public function getTrendingDatetime()
    {
        return $this->container['trending_datetime'];
    }

    /**
     * Sets trending_datetime
     * @param string $trending_datetime The date on which this gif was marked trending, if applicable.
     * @return $this
     */
    public function setTrendingDatetime($trending_datetime)
    {
        $this->container['trending_datetime'] = $trending_datetime;

        return $this;
    }

    /**
     * Gets images
     * @return \GPH\Model\GifImages
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \GPH\Model\GifImages $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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


